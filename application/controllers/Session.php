<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Session extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_database');
		$this->load->model('m_login');
	}

	public function index()
	{
		$data['haruhs'] = $this->m_database->select();
		$session = $this->session->userdata('login_in');

		if($session == FALSE) {
			$this->load->view('header');
			$this->load->view('form-login',$data);
			$this->load->view('modal2');
			$this->load->view('modal');
			$this->load->view('footer');
		} else {
			redirect ('Crud','refresh');
		}
	}

	function do_login()
	{
		$user = $this->input->post('username');
		$pass = $this->input->post('password');

		$cek = $this->m_login->count_user($user, $pass);

		if ($cek == 1) {

			$user_login = array (
				'login_in' => TRUE,
				'username' => $user);

			$this->session->set_userdata($user_login);

			redirect('Crud', 'refresh');
		} else {
			redirect('session','refresh');
		}
	}

}