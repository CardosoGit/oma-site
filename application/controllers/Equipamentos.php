<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Equipamentos extends MY_Controller{
	
	public $dados = array(
			'title'       => 'Selecione um dispositivo para assistência técnica',
			'description' => 'Suporte técnico para Computadores, Smartphones e Tablets, Dispositivos de Rede e Periféricos(Impressora, webcam etcc.)'
	);
	public function index(){

		$this->load->template('equipamentos',$this->dados);
	}

	public function sintomas($equipamento){
		$this->dados['title'] = 'Qual o problema com o seu ' . $this->parseEquipamentoToName($equipamento) . ' ?';
		$this->dados['description'] = 'Seu ' . $this->parseEquipamentoToName($equipamento) . ' está lento, travando? Deixe nossos técnicos em Informática resolverem para você ' ;
		$this->load->model("Sintomas_model");
		$sintomas = $this->Sintomas_model->get_sintomas($equipamento);
		switch($equipamento){
			case 'computador':
				$this->dados['name_img_equip'] = 'computer-thumb.png';
				break;
			case 'smart':
				$this->dados['name_img_equip'] = 'smart-thumb.png';
				break;
			default: $this->dados['name_img_equip'] = 'computer-thumb.png';
			
		}
		$this->dados['sintomas'] = $sintomas;
		$this->dados['equipamento'] = $this->parseEquipamentoToName($equipamento);
		$this->load->template("servicos/index",$this->dados);
	}

	public function search_sintoma(){
		$sintoma = $this->input->get("sintoma");
		$this->load->model("Sintomas_model");
		$sintomas = $this->Sintomas_model->search_sintomas($sintoma);
		$dados = array('sintomas' =>  $sintomas );
		$this->load->template("search",$dados);
		//var_dump($dados);

	}
	public function finaliza(){
		$this->dados['title'] = 'Finalizando o pedido de suporte técnico ' ;
		$this->dados['description'] = 'Finalizando o Pedido de suporte técnico' ;
		$sintomas =  $this->input->post();
		$this->load->model("Sintomas_model");		
		
		$ID = array();
		foreach ($sintomas as $key => $value) {
			array_push($ID, $key);
		}
		$this->dados['sintomas'] = $this->Sintomas_model->get_by_ID($ID);
		$preco = 0;
		foreach ($this->dados["sintomas"] as $key => $value) {
			$preco = (int)$value["preco"] + $preco;
		}
		if ($preco < 22) {
			$preco = 22;
		}
				
		$this->session->set_userdata('session_sintomas' , $this->dados['sintomas'] );
		$this->session->set_userdata('session_preco' , $preco );
		$this->dados["preco"] = $preco;
		$this->load->template("finalizaCompra",$this->dados);
	}

	public function aplicaDesconto($preco, $desc){
		$desconto = (100 - $desc) / 100;
		$preco_final = number_format($preco * $desconto, 2, ',', '.');		
		return $preco_final;
	}
	public function solicitaSuporte(){
		$this->load->model('Sintomas_model');
		$this->load->model('Pedidos_model');
		$this->load->library('email');		
		$contatos_cliente =  $this->input->post();		
		$table_sintomas =$this->session->userdata('session_sintomas');
		foreach ($table_sintomas as $key => $value) {
			$sintomas [] = $value['descricao'];
		}
		$pedido = array(
			'nome' => $contatos_cliente['nome'] ,
			'email' => $contatos_cliente['email'] ,
			'telefone' => $contatos_cliente['telefone'] , 
			'sintomas' => implode(',', $sintomas),
			'valor' => $this->session->userdata('session_preco')
		);
		$this->Pedidos_model->salva_pedido($pedido);
		$this->email->subject("URGENTE: Solicitacao de suporte via site"); //assunto
		$this->email->from("joao@oma.inf.br","João Cardoso"); //quem mandou
		$this->email->to("joao@oma.inf.br"); //quem recebe
		$str_mensagem = "<html>
						<body>
						<p style='color:#333; font:12px Verdana,Arial,Helvetica,sans-serif; line-height:150%; text-align:left;'>
						<strong>Nome..............:{$contatos_cliente['nome']}</strong><br/>
						<strong>Telefone..........:{$contatos_cliente['telefone']}</strong><br/>
						<strong>Email..........:{$contatos_cliente['email']}</strong> <br/>
						</body></html>";
		$this->email->message($str_mensagem); //corpo da mensagem	
		if($this->email->send()) {
			$this->load->template("servicos/obrigado");
		}
		else echo "Desculpe, ocorreu um erro ao cadastrar";
	}

	private function parseEquipamentoToName($equipamento){
		switch ($equipamento) {
			case 'computador':
				return 'Computador';
			case 'smart':
				return 'Dispositivo Mobile';
			case 'rede':
				return 'Dispositivo de Rede';
			case 'periferico':
				return 'Periférico';
		}
	}


}