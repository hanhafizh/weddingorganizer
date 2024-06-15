<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if(empty($this->session->userdata('username'))) {
            $this->session->set_flashdata('message','<div class="alert alert-danger" role"alert"><strong>Upss</strong>Anda tidak memiliki Akses, silahkan login!</div>');
            redirect('login');
        }
    }

	public function index()
	{

        $data = array(
            'title' => 'Jewepe Wedding Organizer',
            'page' => 'admin/dashboard'
        );
        
		$this->load->view('admin/template/main',$data);
	}
}
