<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Planos extends MY_Controller {
	public $dados = array(
			'title'       => 'Planos para assistência técnica de Informática Ilimitada',
			'description' => 'Com os nossos planos de suporte técnico, você terá um técnico sempre a sua disposição para resolver os problemas com o seu computador.'
	);
	public function index()
	{
		
		$this->load->template('planos', $this->dados);
	}

	public function mais_informacoes(){
		$this->load->template('mais-info', $this->dados);
	}

	public function contato(){
		$contatos_cliente = $this->input->post();
		$this->email->subject("URGENTE: Solicitacao de Informaçoes"); //assunto
		$this->email->from("joao@oma.inf.br","João Cardoso"); //quem mandou
		$this->email->to("joao@oma.inf.br"); //quem recebe
		$str_mensagem = "<html>
						<body>
						<h2>Usuario quer saber mais sobre os nossos planos.</h2>
						<p style='color:#333; font:12px Verdana,Arial,Helvetica,sans-serif; line-height:150%; text-align:left;'>
						<strong>Nome..............:{$contatos_cliente['nome']}</strong><br/>
						<strong>Telefone..........:{$contatos_cliente['telefone']}</strong><br/>
						<strong>Email..........:{$contatos_cliente['email']}</strong> <br/>
						</p>
						</body></html>";
		$this->email->message($str_mensagem); //corpo da mensagem	
		if($this->email->send()) {
			$this->alertas->alert('info','Obrigado!','Em pouco tempo entraremos em contato.');
			$this->load->template('mais-info',$this->dados);
		}
		else {
			$this->alertas->alert('error','Atenção','Não foi possível completar a solicitaçao. Por favor, tente mais tarde.');	
			$this->load->template('mais-info',$this->dados);
		}
	}

}

/* End of file Planos.php */
/* Location: ./application/controllers/Planos.php */