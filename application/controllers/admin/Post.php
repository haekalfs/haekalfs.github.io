<?php

class Post extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('course_model');
		$this->load->model('auth_model');
		if(!$this->auth_model->current_user()){
			redirect('auth/login');
		}
	}

    public function index()
    {
        $data['current_user'] = $this->auth_model->current_user();
            
        $data['courses'] = $this->course_model->get();
		$this->load->view('admin/post_list.php', $data);
    }

	public function new()
	{
		$data['current_user'] = $this->auth_model->current_user();
		$this->load->library('form_validation');
		if ($this->input->method() === 'post') {
			// Lakukan validasi sebelum menyimpan ke model
			$rules = $this->course_model->rules();
			$this->form_validation->set_rules($rules);

			if($this->form_validation->run() === FALSE){
				return $this->load->view('admin/post_new_form.php', $data);
			}

			// generate unique id and slug
			$id = uniqid('', true);
			$slug = url_title($this->input->post('title'), 'dash', TRUE) . '-' . $id;

			$course = [
				'id' => $id,
				'title' => $this->input->post('title'),
				'slug' => $slug,
				'content' => $this->input->post('content'),
				'link' => $this->input->post('link'),
				'draft' => $this->input->post('draft')
			];

			$saved = $this->course_model->insert($course);

			if ($saved) {
				$this->session->set_flashdata('message', 'Course has been created');
				return redirect('admin/post');
			}
		}

		$this->load->view('admin/post_new_form.php', $data);
	}

	public function edit($id = null)
	{
		$data['current_user'] = $this->auth_model->current_user();
		$data['course'] = $this->course_model->find($id);
		$this->load->library('form_validation');

		if (!$data['course'] || !$id) {
			show_404();
		}
		
		if ($this->input->method() === 'post') {
			// lakukan validasi data seblum simpan ke model
			$rules = $this->course_model->rules();
			$this->form_validation->set_rules($rules);

			if($this->form_validation->run() === FALSE){
				return $this->load->view('admin/post_edit_form.php', $data );
			}

			$course = [
				'id' => $id,
				'title' => $this->input->post('title'),
				'content' => $this->input->post('content'),
				'link' => $this->input->post('link'),
				'draft' => $this->input->post('draft')
			];
			$updated = $this->course_model->update($course);
			if ($updated) {
				$this->session->set_flashdata('message', 'Course was updated');
				redirect('admin/post');
			}
		}

		$this->load->view('admin/post_edit_form.php', $data);
	}


	public function delete($id = null)
	{
		if (!$id) {
			show_404();
		}

		$deleted = $this->course_model->delete($id);
		if ($deleted) {
			$this->session->set_flashdata('message', 'Course was deleted');
			redirect('admin/post');
		}
	}
}