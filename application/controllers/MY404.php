<?php defined('BASEPATH') OR exit("Arquino não permitido");

class MY404 extends CI_Controller{
	public function index(){
		$this->load->template('MY404');
	}
}