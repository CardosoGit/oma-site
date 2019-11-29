<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Ordemservico extends CI_Controller{
 	
 	public function novo(){
 		$this->load->template_panel('ordem_servico/novo');
 	}

 	public function lista(){
 		$this->load->model('os_model');
 		$dados = array('os' => $this->os_model->getAll() );
 		$this->load->template_panel('ordem_servico/lista', $dados);
 	}


 	public function cadastrar(){
 		$this->load->model('os_model');
 		if($this->os_model->salva($this->input->post())){
 			$this->load->template_panel('ordem_servico/sucess');
 		}
 	}

 	public function updateOS(){
 		$dadosOS = $this->input->post();
 		$idOS    = $this->input->post("ID_ordem_servico");
 		$this->load->model("os_model");
 		$this->os_model->updateOS($idOS, $dadosOS);
 		redirect(base_url("Ordemservico/lista"));
 	}

 	public function editar(){
 		$this->load->model("os_model");
 		$os = $this->os_model->getOS($this->input->post("ID_ordem_servico"));
 		$this->load->template_panel('ordem_servico/editar',$os);
 	}

 	public function getNome(){
 		$this->load->model('usuarios_model');
 		$usuarios = $this->usuarios_model->search($this->input->get("term"));
 		if($usuarios){
 			$json = "[";
 			foreach ($usuarios as $key => $value) {
 				$json .= '{"value":"'.$value["nome"].'" , "ID":"'.$value["ID"].'"}';
 				if( !(sizeof($usuarios) - 1) == ($key ) ){
 					$json .= ',';
 				}
 			}
 			$json .= ']';
 			echo($json);
 		}else{
 			var_dump("erro");
 		}

 	}

 	public function excluir(){
 		$this->load->model("os_model");
 		$this->os_model->excluir($this->input->post("ID_ordem_servico"));
 		redirect(base_url().'Ordemservico/lista');
 	} 	
 }