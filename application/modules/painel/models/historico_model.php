<?php 

class Historico_model extends CI_Model{
	public function salva($historico){
		if ($this->db->insert("status_servico",$historico)) {
			return true;
		} else {
			return false;
		}	

	}

	public function getAll($id){
		$this->db->where(array(
			"ID_ordem_servico" => $id
		));
		$this->db->from('status_servico');
		return $this->db->get()->result_array();
		
	}

	public function excluir($id){
		$this->db->where('ID', $id);
		$this->db->delete('status_servico');
	}
	
	

	// public function get($email, $senha){
	// 	$this->db->where("email", $email);
	// 	$this->db->where("senha", $senha);
	// 	$usuario = $this->db->get("usuarios")->row_array();
	// 	return $usuario;
	// }

	

	// public function search($termo){
	// 	$this->db->like("nome", $termo);
	// 	$usuario = $this->db->get("usuarios")->result_array();
	// 	foreach ($usuario as $key => $value) {
	// 		$listUsuarios[] =  array(
	// 			'nome' => $value["nome"], 
	// 			'ID' => $value["ID"], 
	// 		);
	// 	}
	// 	return $listUsuarios;
	// }

	
}