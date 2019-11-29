<?php 

class Sintomas_model extends Ci_model{
	public function get_sintomas($equipamento){
		return $this->db->get_where("sintomas", array(
			'equipamento' => $equipamento 
		))->result_array();
	}
	public function get_by_ID($ID){
		$this->db->where_in("ID",$ID);
		return $this->db->get("sintomas")->result_array();
		
	}

	public function search_sintomas($query){
	    $this->db->like('descricao', $query);
	    return $this->db->get('sintomas')->result_array();
	}

	
}