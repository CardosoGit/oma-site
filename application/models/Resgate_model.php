<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resgate_model extends CI_Model {
    public function getPresentes(){
        return $this->db->get_where("presentes", array(
			'status' => 1
		))->result_array();
    }

    public function addSorteado($cliente){
        $this->db->insert('sorteados', $cliente);
		return $this->db->insert_id();
    }

}