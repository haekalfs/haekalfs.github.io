<?php

class Setting_user extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
		if (!$this->auth_model->current_user()) {
			redirect('auth/login');
		}
	}

	public function index()
	{
		$data['current_user'] = $this->auth_model->current_user();
		$this->load->view('home', $data);
	}

	public function edit_profile()
	{
		$this->load->library('form_validation');
		$this->load->model('profile_model');
		$data['current_user'] = $this->auth_model->current_user();

		if ($this->input->method() === 'post') {
			$rules = $this->profile_model->profile_rules();
			$this->form_validation->set_rules($rules);
            

			if($this->form_validation->run() === FALSE){
				return $this->load->view('home', $data );
			}
			$new_data = [
				'id' => $data['current_user']->id,
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'password_updated_at' => date("Y-m-d H:i:s"),
			];

			if($this->profile_model->update($new_data)){
				$this->session->set_flashdata('message', 'Profile was updated');
				redirect(site_url('home'));
			}
		}
		
		$this->load->view('home', $data);
	}
}