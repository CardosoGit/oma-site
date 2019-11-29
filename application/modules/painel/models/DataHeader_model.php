<?php 

class DataHeader_model extends CI_Model{
	public function get($id){
		$this->db->where('ID', $id);
		return $this->db->get('dataheader')->row_array();
	}
	public function setAll($data){
		
	}
}