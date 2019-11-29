<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notifications_model extends CI_Model {

	private $data;
	public function have_data($time_last_search){
		
		if ($this->search_data($time_last_search)) {
			return true;
		}
		else{
			return false;
		}
		

	}

	private function search_data($time_last_search = null){
		//Retorna da tabela todas as linhas que foram inseridas depois do timestamp recebido\
		//Se não existe last_time_search 
		
		if(isset($time_last_search)){
			$this->data = null;
			$this->db->where('date >', $time_last_search);
			$this->db->where('is_read', false);
			$this->db->where('is_pay', '3');
			$this->data =  $this->db->get('pedidos')->result();
			if (count($this->data)) {
				return true;
			}
			else{
				return false;
			}			

		}

	}

	public function get_data(){
		return $this->data;
	}

	public function return_last_search(){

	}
}

/* End of file notifications_model.php */
/* Location: ./application/modules/painel/models/notifications_model.php */