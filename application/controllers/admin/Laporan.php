<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('session');


    if (empty($this->session->userdata('username'))) {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><strong>Upss </strong>Anda tidak memiliki Akses, silahkan login!</div>');
      redirect('login');
    }
    $this->load->model('pesanan_model');
  }

  public function index()
  {

    $data = array(
      'title' => 'JeWePe Wedding Organizer',
      'page' => 'admin/laporan',
      'getAllLaporan' => $this->pesanan_model->get_all_laporan()->result(),
    );
    $this->load->view('admin/template/main', $data);
  }
}
