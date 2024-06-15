<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('user_model');
		$this->load->library('session');
	}

	public function index()
	{

		// $passDefault = password_hash('admin123', PASSWORD_DEFAULT);
		// var_dump($passDefault);
		// die;

		$this->form_validation->set_rules('email','Email','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required');

		if($this->form_validation->run() == FALSE) {
			$data = array(
				'title' => 'JeWePe Wedding Organizer',
			);
			
			$this->load->view('admin/login',$data);
		} else {
			//Validasi Succes
			
			if($this->input->post()){

				$post = $this->input->post();


				//Cari User berdasarkan email
				$where1 = $post["email"];
				// $where2 = array('username' => $post['email'], 'user_id' => 1);

					$user = $this->user_model->getUserByUsername1($where1)->row();

				// var_dump($user);
				// die;

				//Jika user terdaftar
				if ($user) {

					//Periksa Password
					$isPasswordTrue = password_verify($post["password"], $user->password);
				
					//Generate Session
					$array = array(
						'user_id' => $user->user_id,
						'username' => $user->username
					);
				
					$this->session->set_userdata($array);
				
					if ($isPasswordTrue) {
						redirect('admin/Dashboard');
						return true;
					} else {
						$this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert"><strong>Upss </strong>Password anda Tidak sesuai!</div>');
						redirect('login');
					}
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><strong>Upss </strong>Username Tidak ter-Registrasi</div>');
					redirect('login');
				}
			}
		}
	}

	public function logout()
	{
    $this->session->unset_userdata('user_id');
    $this->session->unset_userdata('username');

    $this->session->sess_destroy();
    redirect('login');
	}
}