<?php

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('feedback_model');
        $this->load->model('blog_model');
    }
    public function index()
    {
        $this->load->library('pagination');
  
        $config['base_url'] = site_url('home');
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->blog_model->get_published_count();
        $config['per_page'] = 3;
    
        $config['full_tag_open'] = '<div class="pagination">';
        $config['full_tag_close'] = '</div>';

        $this->pagination->initialize($config);
        $limit = $config['per_page'];
        $offset = html_escape($this->input->get('per_page'));
    
        $data['blogs'] = $this->blog_model->get_published($limit, $offset);
        $data['meta'] = [
            'title' => 'Narademy',
        ];
        if(count($data['blogs']) > 0){
            $this->load->view('home', $data);
        } else {
        ///
        }
    }

    public function about()
    {
        $data['meta'] = [
			'title' => 'About Narademy',
		];
        $data['floc'] = [
			'title' => 'About Us',
		];
        $this->load->view('about', $data);
    }
    
    public function contact()
    {
    $data['meta'] = [
        'title' => 'Contact Us',
    ];
    $this->load->library('form_validation');

    if ($this->input->method() === 'post') {
        $this->load->model('feedback_model');

        $rules = $this->feedback_model->rules();
        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == FALSE) {
        return $this->load->view('contact', $data);
        }

        $feedback = [
        'id' => uniqid('', true),
        'name' => $this->input->post('name'),
        'email' => $this->input->post('email'),
        'message' => $this->input->post('message')
        ];

        $feedback_saved = $this->feedback_model->insert($feedback);

        if ($feedback_saved) {
        return $this->load->view('contact_thanks');
        }
    }
    $data['floc'] = [
        'title' => "Contact Us",
      ];
    $this->load->view('contact', $data);
    }

}