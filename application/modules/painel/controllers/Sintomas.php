<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sintomas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies

	}

	// List all your items
	public function index( $offset = 0 )
	{	
		$this->load->model('Sintomas_model');
		$dados = array('sintomas' => $this->Sintomas_model->getAll() );
		$this->load->admin('sintomas/index', $dados);
	}

	//Formulário para novo Sintoma
	public function novo(){
		$this->load->admin('sintomas/novo');
	}

	// Add a new item
	public function add()
	{	

		$this->load->model('Sintomas_model');
		if($this->Sintomas_model->salva($this->input->post())){
			$this->load->admin('sintomas/sucesso');
		}
	}

	//Update one item
	public function update( $id = NULL )
	{

	}

	//Delete one item
	public function delete($id){
 		$this->load->model("Sintomas_model");
 		//$this->session->set_userdata("ID_ordem", $this->input->post("numeroOS"));
 		$this->Sintomas_model->delete($id);
 		redirect(base_url()."painel/sintomas");
 	}
}

/* End of file Sintomas.php */
/* Location: ./application/modules/painel/controllers/Sintomas.php */
