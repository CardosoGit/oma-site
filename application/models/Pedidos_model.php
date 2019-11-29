<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pedidos_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}

	public function salva_pedido($pedido){
		$this->db->insert('pedidos', $pedido);
		return $this->db->insert_id();
	}

	public function gerar_pedido(){
		$this->load->model('Sintomas_model');
		$this->load->model('Pedidos_model');
		$this->load->library('email');		
		$user =  $this->ion_auth->user()->row();		
		$table_sintomas =$this->session->userdata('session_sintomas');
		foreach ($table_sintomas as $key => $value) {
			$sintomas [] = $value['descricao'];
		}
		$pedido = array(
			'nome' => $user->first_name ,
			'email' => $user->email ,
			'telefone' => $user->phone , 
			'sintomas' => implode(',', $sintomas),
			'valor' => $this->session->userdata('session_preco')
		);
		
		return($this->Pedidos_model->salva_pedido($pedido));
	}

	public function aprovar_pedido($id_pedido, $status_pay){
		$data = array(
			'is_pay' => $status_pay
		 );
		$this->db->where('ID',$id_pedido);
		$this->db->update('pedidos',$data);
	}

}

/* End of file pedidos_model.php */
/* Location: ./application/models/pedidos_model.php */