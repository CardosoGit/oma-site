<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peyment extends MY_Controller {

	public function __construct()
	{
		parent::__construct();		
		header("access-control-allow-origin: https://sandbox.pagseguro.uol.com.br");
		$this->load->model('Peyment_model','peyment');
	}
	public function checkout()
	{
		if ($this->ion_auth->logged_in()) {
			$this->load->model('Pedidos_model','pedidos');
			$checkoutUrl = $this->peyment->checkout($this->ion_auth->user()->row(), $this->pedidos->gerar_pedido());
			
			$this->session->unset_userdata('session_sintomas');
			redirect($checkoutUrl,'refresh') ;
		} else {			
			$this->session->set_userdata('page_to_go', current_url());
			$this->alertas->alert('info','Quase lá!<br>','Precisamos de seus contatos.');
			$this->load->template('login/login',$this->dados);
		}
		
	}

	public function obrigado(){
		$this->load->model('Peyment_model','peyment');
		
		$data_transaction =  $this->peyment->get_data_transaction($this->input->get('transaction_id'));

		 
	}


	public function listener_notification(){
		$code = (isset($_POST['notificationCode']) && trim($_POST['notificationCode']) !== "" ?
		    trim($_POST['notificationCode']) : null);
		$type = (isset($_POST['notificationType']) && trim($_POST['notificationType']) !== "" ?
		    trim($_POST['notificationType']) : null);

		if ($code && $type) {

		    $notificationType = new PagSeguroNotificationType($type);
		    $strType = $notificationType->getTypeFromValue();

		    switch ($strType) {

		        case 'TRANSACTION':
		            $this->peyment->transactionNotification($code);
		            break;

		        case 'APPLICATION_AUTHORIZATION':
		            //self::authorizationNotification($code);
		            break;

		        case 'PRE_APPROVAL':
		           // self::preApprovalNotification($code);
		            break;

		        default:
		            //LogPagSeguro::error("Unknown notification type [" . $notificationType->getValue() . "]");

		    }

		    

		} else {

		   

		}
	}

}

/* End of file Checkout.php */
/* Location: ./application/controllers/Checkout.php */