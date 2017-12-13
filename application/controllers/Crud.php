<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_database');
		$this->load->model('m_login');
	}

	function index()
	{
		$user_akun = $this->m_login->ambil_user($this->session->userdata('username'));
		$data['haruhs'] = $this->m_database->select();
		$session = $this->session->userdata('login_in');
		$data['user'] = $user_akun;

		if ($session == TRUE) {
		$this->load->view('header');
		$this->load->view('tampil-mahasiswa', $data);
		$this->load->view('modal');
		$this->load->view('footer');

		} else {
			redirect('session','refresh');
		}
	}


	function insert_data()
	{
		$data = array(
			'userid' => $this->input->post('userid'),
			'noinduk' => $this->input->post('noinduk'),
			'nama' => $this->input->post('nama'),
			'namaw' => $this->input->post('namaw'),
			'notlp' => $this->input->post('notlp'),
			'alamat' => $this->input->post('alamat'));

		$this->m_database->insert($data);
		redirect('crud', 'refresh');
	}

	function edit_data()
	{
		$userid = $this->input->post('userid');
		if ($this->input->post('userid') == null) {
				$data = array(
			'mapel1' => $this->input->post('mapel1'),
			'nilai1' => $this->input->post('nilai1'),
			'mapel2' => $this->input->post('mapel2'),
			'nilai2' => $this->input->post('nilai2'),
			'mapel3' => $this->input->post('mapel3'),
			'nilai3' => $this->input->post('nilai3'),
			'mapel4' => $this->input->post('mapel4'),
			'nilai4' => $this->input->post('nilai4'),
			'mapel5' => $this->input->post('mapel5'),
			'nilai5' => $this->input->post('nilai5'));
		} else {
				$data = array(
			'mapel1' => $this->input->post('mapel1'),
			'nilai1' => $this->input->post('nilai1'),
			'mapel2' => $this->input->post('mapel2'),
			'nilai2' => $this->input->post('nilai2'),
			'mapel3' => $this->input->post('mapel3'),
			'nilai3' => $this->input->post('nilai3'),
			'mapel4' => $this->input->post('mapel4'),
			'nilai4' => $this->input->post('nilai4'),
			'mapel5' => $this->input->post('mapel5'),
			'nilai5' => $this->input->post('nilai5'));
		}

		$where = array('userid' => $userid);
		$this->m_database->update($data, $where);
		redirect('crud', 'refresh');
	}

	function delete_data()
	{
		$userid = $this->input->post('userid');
		$where = array('userid' => $userid);
		$this->m_database->delete($where);
		redirect('crud', 'refresh');
	}
	function logout() 
	{
		$this->session->sess_destroy();
		redirect('session','refresh');
	}
}
