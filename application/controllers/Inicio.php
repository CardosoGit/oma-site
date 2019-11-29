<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends MY_Controller{

	public $dados = array(
			'title'       => 'Informática | Assistência Técnica Online',
			'description' => 'Assistência técnica online para o seu computador, notebook, impressoras, ou rede de internet.'
	);

	public function index($cod = null){
		if (isset($cod)){
			$this->input->set_cookie('indicacao', $cod, 2592000, 'www.oma.inf.br');
		}

		$this->load->single_view('inicio',$this->dados);
		

	}

	public function resgatar_presente(){
		$this->load->template("resgate");
	}

	public function resgate_sucesso(){
		$cod_promo = $this->input->post("cod");
		if($cod_promo == null) {
			$this->load->template("resgatar/erro_null_code");
			return;
		}
		
		if($this->session->userdata('presente') == null){
			$this->load->model("Resgate_model");
			$presentes = $this->Resgate_model->getPresentes();
			$valorSorteado = rand(0,count($presentes)- 1);
			$this->dados["presente"] = $presentes[$valorSorteado]["descricao"]; 
			$this->session->set_userdata('presente', $presentes[$valorSorteado]);
		}else{
			$this->dados["presente"] = $this->session->userdata('presente')["descricao"]; 
		}
		
		$this->load->template("sucessoResgate", $this->dados);
	}

	public function finaliza_resgate(){
		$form_data = $this->input->post();	
		$this->load->model("Resgate_model");
		$form_data["presente"] = $this->session->userdata('presente')["descricao"]; 
		$this->Resgate_model->addSorteado($form_data);
		$this->dados["vantagem"] = $this->session->userdata('presente')["vantagem"];
		$this->session->unset_userdata('presente');
		$this->load->template("resgatar/finalizaResgate", $this->dados);
	}

	public function obrigado(){
		$this->dados["title"] = "Obrigada pela Confiança";
		$this->dados["description"] = "Obrigada pela Confiança";
		$this->load->template("servicos/obrigado",$this->dados);
	}

	public function setCall(){
		$telefone = $this->input->get("telefone");
		$this->load->library('email');

		$this->email->subject("Solicitacao de retorno de ligacao"); //assunto
		$this->email->from("joao@oma.inf.br","João Cardoso"); //quem mandou
		$this->email->to("joao@oma.inf.br"); //quem recebe
		$this->email->message("O telefone e ".$telefone); //corpo da mensagem
		 
		
		if($this->email->send()) {

			$this->load->template('servicos/obrigado');

		}
		else echo "Desculpe, ocorreu um erro ao cadastrar";
	}

	private function envia_email(){
		//$this->load->library("SmtpApi");
		$aEmail = array(
			'html' => '<p>HTML text of email message</p>',
			'text' => 'Email message text',
			'encoding' => 'UTF-8',
			'subject' => 'Email message subject',
			'from' => array(
				'name' => 'Sender Name',
				'email' => 'sender@example.com',
			),
			'to' => array(
				array(
					'name' => 'Recipient Name',
					'email' => 'joao@Oma.inf.br'
				),
			),
		);
		$res =  $this->SmtpApi->send_email($aEmail);
		if ($res['error']){ // check if operation succeeds
			die('Error: ' . $res['text']);
		} else {
			var_dump("OK");
		}
	}

	
	
}
