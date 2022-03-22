<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function do_login()
	{
		$user = $this->input->post("user");
		$password = $this->input->post("password");
		$this->load->model("LoginModel");
		$user = $this->LoginModel->check_login($user, $password);
		if(count($user) < 1){
			
			die(json_encode( array( "status"=>"error", "message" => "Usuario o contraseña inválidos"  ) ));
		}
		die(json_encode( array( "status"=>"ok" ) ));
	}
	
}