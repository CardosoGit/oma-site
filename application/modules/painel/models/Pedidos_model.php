<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pedidos_model extends CI_Model {

	public function getAll(){
		$this->db->from('pedidos');
		return $this->db->get()->result_array();
		
	}

	public function delete($id){
		$this->db->where('ID', $id);
		$this->db->delete('pedidos');
	}

	public function read_all(){
		$this->db->where('is_read', false);
		$this->db->update('pedidos', array('is_read' => true));
	}

}

/* End of file Pedidos_model.php */
/* Location: ./application/modules/painel/models/Pedidos_model.php */