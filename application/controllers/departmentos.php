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
		$this->load->view('departmentos/departmentos_page');
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
