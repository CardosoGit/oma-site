<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller{
	public function index(){

	}

	public function novo(){
		$this->load->admin('clientes/novo');
	}

	public function editar(){
		$this->load->model("usuarios_model");
		$cliente = $this->usuarios_model->getUser($this->input->post("ID_cliente"));
		$this->load->admin('clientes/editar', $cliente);
	}

	public function updateCliente(){
		$dadosUsuario = $this->input->post();
		$idUsuario   = $this->input->post("ID");
		$this->load->model("usuarios_model");
		$this->usuarios_model->updateUsuario($idUsuario, $dadosUsuario);
		redirect(base_url("Clientes/lista"));
	}

	public function  salvar(){
		$dados = $this->input->post();
		$this->load->model('usuarios_model');
		if($this->usuarios_model->salva($dados)){
			$this->load->admin('clientes/finaliza', array("success"=> "Cliente Cadastrado com sucesso")  );
		}else{
			$this->load->admin('clientes/finaliza', array("error"=> "Erro ao Cadastrar Cliente")  );
		}
	}

	public function lista(){
 		$this->load->model('usuarios_model');
 		$dados = array('os' => $this->usuarios_model->getAll() );
 		//var_dump($dados);
 		$this->load->admin('clientes/lista', $dados);
 	}

 	public function excluir(){
		$this->load->model("usuarios_model");
		$this->usuarios_model->excluir($this->input->post("ID_cliente"));
		redirect(base_url().'Clientes/lista');
	}
}