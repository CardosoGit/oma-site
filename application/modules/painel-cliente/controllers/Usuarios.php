<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller{
	public function login(){
		$this->load->view("usuarios/login");
	}

	public function entrar(){
		
		$email = $this->input->post("email");
		$senha = $this->input->post("senha");
		$this->load->model("usuarios_model");
		$usuario = $this->usuarios_model->get($email, $senha);
		if ($usuario && $usuario['ID_tipo_usuario']) {
			$this->session->set_userdata("usuario_logado",$usuario);
			$this->load->template_panel("inicio");
		} else {
			var_dump("Login Inválido ou você não tem permissão para acessar essa área");
		}
		
		
	}

	public function sair(){
		$this->session->sess_destroy();
		$this->load->view("usuarios/login");
	}

	public function teste(){
		//date_default_timezone_set('America/Sao_Paulo');
		echo date("d-m-Y ");
	}
}