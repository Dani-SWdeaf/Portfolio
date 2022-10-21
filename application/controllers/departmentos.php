<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class departmentos extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->_check_session();
	}

	public function index()
	{
		$data['departments_list'] = $this->DAO->getDepartments();
		$this->load->view('departmentos/departmentos_page', $data);
	}

	function guardarDepartment()
	{
		$this->DAO->guardarDepartment($this->input->post());
		redirect('departmentos');
	}

	private function _check_session()
	{
		$session = $this->session->userdata('sw15');

		if(!@$session->email_user)
		{
			redirect('login');
		} 
	}
}
