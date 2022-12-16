<?php

class Blog extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('blog_model');
  }

  public function index()
  {
    $this->load->library('pagination');
  
    $config['base_url'] = site_url('/blog');
    $config['page_query_string'] = TRUE;
    $config['total_rows'] = $this->blog_model->get_published_count();
    $config['per_page'] = 6;
  
    $config['full_tag_open'] = '<div class="pagination justify-content-center">';
    $config['full_tag_close'] = '</div>';

    $this->pagination->initialize($config);
    $limit = $config['per_page'];
    $offset = html_escape($this->input->get('per_page'));
  
    $data['blogs'] = $this->blog_model->get_published($limit, $offset);
    $data['floc'] = [
      'title' => "Read Our Blogs",
    ];
    if(count($data['blogs']) > 0){
      $this->load->view('blogs/list_blogs.php', $data);
    } else {
      $this->load->view('blogs/empty_blogs.php');
    }
  }

  public function show($slug = null)
  {
    // jika gak ada slug di URL tampilkan 404
    if (!$slug) {
      show_404();
    }

    // ambil artikel dengan slug yang diberikan
    $data['blog'] = $this->blog_model->find_by_slug($slug);

    // jika artikel tidak ditemuakn di database tampilkan 404
    if (!$data['blog']) {
      show_404();
    }

    // tampilkan artikel
    $data['floc'] = [
      'title' => "blogs / $slug",
    ];
    $this->load->view('blogs/show_blogs.php', $data);
  }
}