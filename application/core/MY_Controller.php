<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public $dados = array(
			'title'       => 'Seja Bem Vindo ao MeuTecnico',
			'description' => 'A Dinâmica é uma empresa que...',
			'alert'       => null
	);
	public $alertas ;

	public function __construct()
	{
		parent::__construct();
		$this->alertas = new Alerts();
		$this->alertas->view_data = &$this->dados;

	}
	

}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */