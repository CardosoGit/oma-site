<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pedidos extends CI_Controller {

	 	
	public function __construct()
	{
		parent::__construct();
		//Load Dependencies

	}

	// List all your items
	public function index()
	{
		$this->load->model('Pedidos_model');
		$dados = array('pedidos' => $this->Pedidos_model->getAll());
		$this->Pedidos_model->read_all();
		$this->load->admin('pedidos/index', $dados);
	}

	// Add a new item
	public function add()
	{

	}

	//Update one item
	public function update( $id = NULL )
	{

	}

	//Delete one item
	public function delete($id){
 		$this->load->model("Pedidos_model");
 		//$this->session->set_userdata("ID_ordem", $this->input->post("numeroOS"));
 		$this->Pedidos_model->delete($id);
 		redirect(base_url()."painel/pedidos");
 	}
 
 	

}

/* End of file Pedidos.php */
/* Location: ./application/modules/painel/controllers/Pedidos.php */