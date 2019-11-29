<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Historico_os extends CI_Controller{
 	public function index(){
 		$this->load->model("historico_model");
 		if (isset($_SESSION["ID_ordem"])) {
 			$ID_ordem = $_SESSION["ID_ordem"];
 			unset($_SESSION["ID_ordem"]);
 		} else {
 			$ID_ordem = $this->input->post("ID_ordem_servico");
 		}
 		$_dados = $this->historico_model->getAll($ID_ordem);
 		$data = $_dados;
 		foreach ($_dados as $key => $value) {
 			if($key == 0){
 				$temp = $value["data"];
 			}else{
 				if ($value["data"] == $temp ) {
 					$data[$key]["data"] = null;
 				}
 				else{
 					$data[$key]["data"] = $value["data"];
 					$temp = $value["data"];
 				}
 				
 			}
 			 
 		}
 		$dados = array(
 			'historico' => $data,
 			'ID_ordem' => $ID_ordem

 		);
 		$this->load->template_panel("historico_os/index", $dados);


 		// $dados = array(
 		// 	'historico' => $_dados,
 		// 	'ID_ordem' => $ID_ordem

 		// );
 		// $this->load->template_panel("historico_os/index", $dados);
 		
 	}

 	public function salvar(){
 		$historico = $this->input->post("historico");
 		$dados = array(

 			'descricao' => $historico , 
 			'data' => date("d-m-Y ") , 
 			'hora' => date("h:i:sa") , 
 			'tecnico' => $_SESSION['usuario_logado']["nome"] , 
 			'ID_ordem_servico' => $this->input->post("numeroOS") 

 		);
 		$this->load->model("historico_model");
 		$this->historico_model->salva($dados);
 		$this->session->set_userdata("ID_ordem", $this->input->post("numeroOS"));
 		redirect(base_url()."Historico_os");
 	}

 	public function editar(){

 	}

 	public function excluir(){
 		$this->load->model("historico_model");
 		$this->session->set_userdata("ID_ordem", $this->input->post("numeroOS"));
 		$this->historico_model->excluir($this->input->post("ID"));
 		redirect(base_url()."Historico_os");
 	}
 }


