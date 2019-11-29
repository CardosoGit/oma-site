<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sintomas_model extends CI_Model {

	public function getAll(){
		$this->db->from('sintomas');
		return $this->db->get()->result_array();
		
	}

	public function delete($id){
		$this->db->where('ID', $id);
		$this->db->delete('sintomas');
	}

	public function salva($sintoma){
		return $this->db->insert("sintomas",$sintoma);
	}


}

/* End of file Sintomas_model.php */
/* Location: ./application/modules/painel/models/Sintomas_model.php */