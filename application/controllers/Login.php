	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {
	private $form_errors = null;
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model','login');
	}

	public function index()
	{

		if($this->input->get('restrict') !== null){
			$this->alertas->alert('error','Atenção','Acesso Restrito para Administradores');
		}
		$this->load->template('login/login',$this->dados);
	}

	// public function novo(){
	// 	$this->load->template('login/register');
	// }

	public function get_mail(){
		$post = (object)$this->input->post();
		$identity = $post->email;
		echo $this->ion_auth->email_check($identity);
	}

	public function entrar(){
		$post = (object)$this->input->post();
		$identity = $post->email;
		$password = $post->password;
		$remember = TRUE; // remember the user
		
		//var_dump($this->ion_auth->login($identity, $password, $remember));
		if(!$this->ion_auth->login($identity, $password, $remember)){

			if (!$this->ion_auth->email_check($identity)) {
				//$this->alertas->alert('error','Atenção','Usuario não cadastrado ');
				echo json_encode(array( 'login' => false));
			} else {
				//$this->alertas->alert('error','Atenção:','Senha Inválida. ');
				echo json_encode(array( 'login' => false));
			}
			
			//$this->load->template('login/login',$this->dados);
		}else{
			if($this->session->has_userdata('page_to_go')){
				$page_to_go = $this->session->userdata('page_to_go');;
				$this->session->unset_userdata('page_to_go');

				echo json_encode(array('page_to_go' => $page_to_go, 'login' => true));
			}
			else{
				echo json_encode(array('page_to_go' => base_url().'inicio', 'login' => true));
			}
			
		}
		
	}

	public function sair(){
		$this->ion_auth->logout();
		redirect('login','refresh');
	}

	public function cadastrar(){
		$post = $this->input->post();
		if (!$this->form_validate($post)) {
			$this->alertas->alert('error', 'Atenção', $this->get_form_errors());
			$this->dados += $post;
			$this->load->template('login/register',$this->dados);
		} else {
			$email = $post['email'];
			if (!$this->ion_auth->email_check($email)) {
				if ($post['password'] == $post['password-check'] ) {
						if($this->login->register($post)){
							$this->load->template('login/complete_register');
						}else{
							$this->alertas->alert('error','Atenção','Erro ao Cadastrar ');
							$this->load->template('login/register',$this->dados);
						}
					} else {
						$this->alertas->alert('error','Atenção','Senhas não conferem');
						$this->dados += $post;
						$this->load->template('login/register',$this->dados);
					}
										
				
			} else {
				$this->alertas->alert('error','Atenção','Email já cadastrado.');	
				$this->dados += $post;
				$this->load->template('login/register',$this->dados);
			}
		}
		
		
		
	}

	
	function activate($id, $code=false)
	{
		if ($code !== false)
		{
			$activation = $this->ion_auth->activate($id, $code);
		}
		else if ($this->ion_auth->is_admin())
		{
			$activation = $this->ion_auth->activate($id);
		}
		if ($activation)
		{
			
			$this->alertas->alert('info','Falta pouco!','Basta fazer login para finalizar o pedido');
			$this->load->template('login/login',$this->dados);
		}
		else
		{
			// redirect them to the forgot password page
			$this->session->set_flashdata('message', $this->ion_auth->errors());
			redirect("login/forgot_password", 'refresh');
		}
	}

	function trocar_senha(){
		$post =  $this->input->post();
		if(!count($post)){
			$this->load->template('auth/change_password',$this->dados);
		}else{

			$user = $this->ion_auth->user()->row();
			$identity = $user->email;
			$this->ion_auth->change_password($identity, $post['old_password'], $post['new_password']);

			echo 'pronto';


		}
	}

	function esqueci_a_senha(){
		$alert_message = '';
		$email =  $this->input->post('email');
		if(!isset($email)){
			$this->load->template('auth/forgot_password',$this->dados);
		}else{

			if($this->ion_auth->email_check($email)){
				if(!$this->ion_auth->forgotten_password($email)){
					$this->alertas->alert('error','Atenção','Erro ao precessar o reset. Por favor, tente novamente.');
					$this->load->template('auth/forgot_password',$this->dados);
				}
				else 
					echo 'pronto';
			}
			else
			{
				$this->alertas->alert('error','Atenção','Email não cadastrado. ');
				$this->load->template('auth/forgot_password',$this->dados);
			}			


		}
	}
	function reset_password($code){
		$reset = $this->ion_auth->forgotten_password_complete($code);
		if($reset){
			$this->alertas->alert('error','Atenção','Você receberá a senha temporária por email em instantes.');
			$this->load->template('login',$this->dados);
		}
		else{
			echo"erro";
		}
	}

	// Valida os dados do formulário
	private function form_validate($data)
	{
		$validate = new Data_Validator();
		$validate->set('Telefone', $data['phone'])->is_phone();
		$validate->set('Data de Nascimento', $data['birthday'])->is_required();
		//$validate->set('CPF', $data['cpf'])->is_required()->is_cpf();
		$validate->set('CEP', $data['adress_cep'])->is_zipCode();
		$validate->set('Numero', $data['adress_number'])->is_num();
		
		if(!$validate->validate()) {
			$this->form_errors = $validate->get_errors();
			return false;
		} 
		else {
			return true;
		}
	}
	// Retorna os erros de formulário
	private function get_form_errors()
	{
		$msg = '<ul>';
		foreach($this->form_errors as $erros) {
			foreach($erros as $erro) {
				$msg .= '<li>' . $erro . '</li>';
			} 
		} 
		$this->form_errors = null;
		return $msg;
	}

	public function save_email(){
		$email = $this->input->post("email");
		$this->load->library('email');
		$this->email->subject("Tentativa de Login"); //assunto
		$this->email->from("joao@oma.inf.br","João Cardoso"); //quem mandou
		$this->email->to("joao@oma.inf.br"); //quem recebe
		$this->email->message("O email e ".$email); //corpo da mensagem
		 
		
		if($this->email->send()) {

			echo json_encode(array( 'status' => true));

		}
		else echo json_encode(array('status' => false));
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */