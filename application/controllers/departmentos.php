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
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name_department', 'Nombre', 'required|min_length[3]|max_length[80]');
		$this->form_validation->set_rules('responsable_department', 'Responsable', 'required');
		$this->form_validation->set_rules('ext_department', 'Ext', 'required');

		if ($this->form_validation->run())
		{
			$this->DAO->guardarDepartment($this->input->post());
			redirect('departmentos');
		}
		else
		{
			$this->session->set_flashdata('error_form', $this->form_validation->error_array());
			$this->session->set_flashdata('current_data', $this->input->post());
			redirect('departmentos');
		}

	}

	function ver_detalle()
	{
		if ($this->input->get('clave') && $this->input->get('accion'))
		{
			$department_exists = $this->DAO->getDepartmentById($this->input->get('clave'));
			if ($department_exists)
			{
				//echo var_dump($department_exists);
				$data['department_list'] = (array) $department_exists;

				$data['departments_list'] = $this->DAO->getDepartments();
				$this->load->view('departmentos/departmentos_page', $data);

				$data_js['show_modal'] = true;
				
				//$this->session->set_flashdata('error_form', array());
				//$this->session->set_flashdata('current_data', $department_exists);
			}
			else
			{
				redirect('departmentos');
			}
		}
		else
		{
			redirect('home');
		}
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
