<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DAO extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function login($email, $password)
    {
        //Where email_user = ?
        $this->db->where('email_user', $email);
        
        //SELECT* FROM tb_ubsers WHERE email:user = ?
        $query = $this->db->get('users'); //tb_users

        $existe_users = $query->row();
        if ($existe_users)
        {
           if ($existe_users->password_user == $password)
           {
                return array(
                    "status" => "success",
                    "data" => $existe_users
                );
           }
           else
           {
                return array(
                    "status" => "error",
                    "data" => "La contraseña ingresada es incorrecta"
                );
            }
        }
        else
        {
            return array(
                "status" => "error",
                "data" => "El usuario ingresado no existe"
            );
        }
    }

    function guardarDepartment($data)
    {
        //insert into tb_departments() values ();
        $this->db->insert('departments', $data);
    }

    function getDepartments()
    {
        //Select * from tb_departments;
        $query = $this->db->get('departments');
        
        return $query->result();
    }
}
