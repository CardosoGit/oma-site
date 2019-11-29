<?php 
/**
* 
*/
class Os_model extends CI_Model
{
	
	public function getOS($_idOs){
		
		$this->db->where(array("ID_ordem_servico" => $_idOs ));		
		$this->db->join('usuarios', 'usuarios.ID = ordem_servico.ID_cliente');
		$this->db->from('ordem_servico');
		return $this->db->get()->row_array();
	}

	public function updateOS($id, $dados){
		$this->db->where('ID_ordem_servico', $id);
		$this->db->update('ordem_servico', $dados);
	}

	public function getAll(){
		$this->db->from('ordem_servico');
		$this->db->join('usuarios', 'usuarios.ID = ordem_servico.ID_cliente');
		return $this->db->get()->result_array();
		
	}

	public function verificaOS($cpf_cnpj, $os){
		$this->db->select("cpf_cnpj");
		$this->db->where( array(
			"cpf_cnpj" => $cpf_cnpj,
			"ID_ordem_servico" => $os
		));
		$this->db->from("usuarios");
		$this->db->join("ordem_servico", "ordem_servico.ID_cliente =  usuarios.ID");
		$dados = $this->db->get()->result_array();
		return $dados;
	}

	public function salva($dadosOs){
		return $this->db->insert("ordem_servico",$dadosOs);
	}

	public function excluir($id){
		$this->db->where('ID_ordem_servico', $id);
		$this->db->delete('ordem_servico');
	}
	
}