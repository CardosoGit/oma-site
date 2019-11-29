<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Afiliados extends CI_Controller {

	public function index()
	{
		$this->load->template('afiliados');
	}

	public function geraLink(){
		//recebe o cadastro do indicador via post
		//gera numero unico
		//salva o novo usuario no banco com respectivo ID de indicacao
		//monta link de indicacao: www.oma.inf.br + ID unico
		//configurar opcoes de envio de email
		//enviar email para o usuario com o link de indicacao
		//redireciona para pagina de agradecimento
	}

	

}

/* End of file Afiliados.php */
/* Location: ./application/controllers/Afiliados.php */