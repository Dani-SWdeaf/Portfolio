<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

	public function autenticar()
	{
		//echo "si funcion";
		
		$this->load->library;
		if ($this->input->post("Email") && $this->input->post("Password"))
		{
			//echo var_dump($this->input->post());
			//$valid_email = "user@user.com";
			//$valid_pass = "123";
			$this->load->DAO;

			if ($this->input->post('Email') && $this->input->post('Password'))
			{
				//echo "Bienvenido pedo";
				$existe_user = $this->DAO->login($this->input->post('Email'), $this->input->post('Password'));
				
				if ($existe_user['status'] == "success") {
					$this->session->set_userdata('sw15', $existe_user['data']);
					redirect('home');
				}
				else
				{
					$this->session->set_flashdata('error_login', $existe_user['message']);
					redirect('home');
				}
			}
			else
			{	
				//echo "usuario y/o contraseña incorrecto";
				$this->session->set_flashdata('error_login', 'Usuario y/o contraseña incorrectos');
				redirect('login');
			}
		}
		else
		{
			//echo "datos no envaidos";
			$this->session->set_flashdata('error_login', 'Datos no enviados');	
			redirect('login');
		}
	}
}
