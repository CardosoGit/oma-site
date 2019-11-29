<?php 

class Usuarios_model extends CI_Model{
	public function salva($usuario){
		if ($this->db->insert("usuarios",$usuario)) {
			return true;
		} else {
			return false;
		}	

	}

	public function getAll(){
		$this->db->from('usuarios');
		return $this->db->get()->result_array();
		
	}

	
	public function updateUsuario($id, $dados){
		$this->db->where('ID', $id);
		$this->db->update('usuarios', $dados);
	}


	public function get($email, $senha){
		$this->db->where("email", $email);
		$this->db->where("senha", $senha);
		$usuario = $this->db->get("usuarios")->row_array();
		return $usuario;
	}

	public function getUser($id){
		$this->db->where("ID", $id);
		$usuario = $this->db->get("usuarios")->row_array();
		return $usuario;
	}

	public function search($termo){
		$this->db->like("nome", $termo);
		$usuario = $this->db->get("usuarios")->result_array();
		foreach ($usuario as $key => $value) {
			$listUsuarios[] =  array(
				'nome' => $value["nome"], 
				'ID' => $value["ID"], 
			);
		}
		return $listUsuarios;
	}

	public function excluir($id){
		$this->db->where('ID', $id);
		$this->db->delete('usuarios');
	}
}