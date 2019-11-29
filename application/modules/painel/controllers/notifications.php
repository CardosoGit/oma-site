<?php
header("Access-Control-Allow-Origin: *");
defined('BASEPATH') OR exit('No direct script access allowed');

class Notifications extends CI_Controller {
	
	public function index(){
		$this->load->template_panel('notificacoes');
	}

	public function get_notification(){
		$last_search =  $this->input->get('last');  
		$this->load->model('notifications_model', 'notification');
		if($this->notification->have_data($last_search)){
			//tem dados para retornar
			echo( json_encode($this->notification->get_data()));
		}
		else{
			//nao tem dados para retornar
			//retorna o valor do timestamp
			echo('necas');
		}
	}



}

/* End of file notifications.php *
/* Location: ./application/modules/painel/controllers/notifications.php */