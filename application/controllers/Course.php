<?php

class Course extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('course_model');
  }

  public function index()
  {
    $this->load->library('pagination');
  
    $config['base_url'] = site_url('/course');
    $config['page_query_string'] = TRUE;
    $config['total_rows'] = $this->course_model->get_published_count();
    $config['per_page'] = 6;
  
    $config['full_tag_open'] = '<div class="pagination justify-content-center">';
    $config['full_tag_close'] = '</div>';

    $this->pagination->initialize($config);
    $limit = $config['per_page'];
    $offset = html_escape($this->input->get('per_page'));
  
    $data['courses'] = $this->course_model->get_published($limit, $offset);
    $data['floc'] = [
      'title' => "Browse All Courses",
    ];
    if(count($data['courses']) > 0){
      $this->load->view('courses/list_courses.php', $data);
    } else {
      $this->load->view('courses/empty_courses.php');
    }
  }

  public function show($slug = null)
  {
    // jika gak ada slug di URL tampilkan 404
    if (!$slug) {
      show_404();
    }

    // ambil artikel dengan slug yang diberikan
    $data['course'] = $this->course_model->find_by_slug($slug);

    // jika artikel tidak ditemuakn di database tampilkan 404
    if (!$data['course']) {
      show_404();
    }

    // tampilkan artikel
    $data['floc'] = [
      'title' => "Courses / $slug",
    ];
    $this->load->view('courses/show_courses.php', $data);
  }
}