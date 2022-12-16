<?php

class Blog extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('blog_model');
		$this->load->model('auth_model');
		if(!$this->auth_model->current_user()){
			redirect('auth/login');
		}
	}

    public function index()
    {
		$data['current_user'] = $this->auth_model->current_user();
            
        $data['blogs'] = $this->blog_model->get();
		$this->load->view('admin/blog_list.php', $data);
    }

	public function new()
	{
		$data['current_user'] = $this->auth_model->current_user();
		$this->load->library('form_validation');
		if ($this->input->method() === 'post') {
			// Lakukan validasi sebelum menyimpan ke model
			$rules = $this->blog_model->rules();
			$this->form_validation->set_rules($rules);

			if($this->form_validation->run() === FALSE){
				return $this->load->view('admin/blog_new_form.php', $data);
			}

			// generate unique id and slug
			$id = uniqid('', true);
			$slug = url_title($this->input->post('title'), 'dash', TRUE) . '-' . $id;

			$blog = [
				'id' => $id,
				'title' => $this->input->post('title'),
				'slug' => $slug,
				'content' => $this->input->post('content'),
				'draft' => $this->input->post('draft')
			];

			$saved = $this->blog_model->insert($blog);

			if ($saved) {
				$this->session->set_flashdata('message', 'Blog was created');
				return redirect('admin/blog');
			}
		}

		$this->load->view('admin/blog_new_form.php', $data);
	}

	public function edit($id = null)
	{
		$data['current_user'] = $this->auth_model->current_user();
		$data['blog'] = $this->blog_model->find($id);
		$this->load->library('form_validation');

		if (!$data['blog'] || !$id) {
			show_404();
		}
		
		if ($this->input->method() === 'post') {
			// lakukan validasi data seblum simpan ke model
			$rules = $this->blog_model->rules();
			$this->form_validation->set_rules($rules);

			if($this->form_validation->run() === FALSE){
				return $this->load->view('admin/blog_edit_form.php', $data );
			}

			$blog = [
				'id' => $id,
				'title' => $this->input->post('title'),
				'content' => $this->input->post('content'),
				'draft' => $this->input->post('draft')
			];
			$updated = $this->blog_model->update($blog);
			if ($updated) {
				$this->session->set_flashdata('message', 'Blog was updated');
				redirect('admin/blog');
			}
		}

		$this->load->view('admin/blog_edit_form.php', $data);
	}


	public function delete($id = null)
	{
		if (!$id) {
			show_404();
		}

		$deleted = $this->blog_model->delete($id);
		if ($deleted) {
			$this->session->set_flashdata('message', 'Blog was deleted');
			redirect('admin/blog');
		}
	}
}