<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function register($new_user){
		$post = (object)$this->input->post();
		$password = $post->password;
		$email = $post->email;
		$additional_data = array(
			'first_name'    => $post->first_name,
			'last_name'     => $post->last_name,
			'phone'         => $post->phone,
			'company'       => (isset($post->company)) ? $post->company : '' ,
			'adress_road'   => (isset($post->adress_road)) ? $post->adress_road : '' ,
			'adress_uf'     =>(isset($post->adress_uf)) ? $post->adress_uf : '' ,
			'adress_city'	=>(isset($post->adress_city)) ? $post->adress_city : '' ,
			'adress_number' =>(isset($post->adress_number)) ? $post->adress_number : '',
			'adress_cep' =>(isset($post->adress_cep)) ? $post->adress_cep : '',
			'status_newsletter' =>(isset($post->adress_newsletter)) ? $post->adress_newsletter : '',
			'adress_district' =>(isset($post->adress_district)) ? $post->adress_district : '',
			'adress_type' =>(isset($post->adress_type)) ? $post->adress_type : '',
			'cpf' =>(isset($post->cpf)) ? $post->cpf : '',
			'gende' =>(isset($post->gende)) ? $post->gende : '',
			'adress_complement' =>(isset($post->adress_complement)) ? $post->adress_complement : '',
			'birthday' =>(isset($post->birthday)) ? $post->birthday : ''
			);
		$group = array('2');
		if($this->ion_auth->register(null, $password, $email, $additional_data, $group)){
			return true;
		}else{
			return false;
		}
		
	}

}

/* End of file Login_model.php */
/* Location: ./application/models/Login_model.php */