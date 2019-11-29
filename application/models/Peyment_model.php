<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peyment_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}
	public function checkout($user, $ref_id){
		//include_once 'C:\xampp\htdocs\suporte2\plugins\PagSeguroLibrary\PagSeguroLibrary.php';
		$paymentRequest = new PagSeguroPaymentRequest();
		$paymentRequest->addItem('0001', 'Serviços de Informática', 1, (float)$this->session->userdata('session_preco'));		
		$sedexCode = PagSeguroShippingType::getCodeByType('SEDEX');  
		$paymentRequest->setShippingType($sedexCode);  
		$paymentRequest->setShippingAddress(  
		  $user->adress_cep,  
		  $user->adress_road,  
		  $user->adress_number,  
		  $user->adress_complement,  
		  $user->adress_district,  
		  $user->adress_city,  
		  $user->adress_uf,  
		  'BRA'  
		);
		$paymentRequest->setSender(  
		  $user->first_name,  
		  $user->email,  
		  '55',  
		  $user->phone,  
		  'CPF',  
		  $user->cpf  
		);
		$paymentRequest->setCurrency("BRL");
		// Referenciando a transação do PagSeguro em seu sistema  
		$paymentRequest->setReference($ref_id);  
		  
		// URL para onde o comprador será redirecionado (GET) após o fluxo de pagamento  
		$paymentRequest->setRedirectUrl("http://oma.inf.br/obrigado");  
		  
		// URL para onde serão enviadas notificações (POST) indicando alterações no status da transação  
		$paymentRequest->addParameter('notificationURL', 'http://oma.inf.br/peyment/listener_notification');
		$paymentRequest->addPaymentMethodConfig('CREDIT_CARD', 30.00, 'DISCOUNT_PERCENT');  
		$paymentRequest->addPaymentMethodConfig('EFT', 30.00, 'DISCOUNT_PERCENT');  
		$paymentRequest->addPaymentMethodConfig('BOLETO', 35.00, 'DISCOUNT_PERCENT');  
		$paymentRequest->addPaymentMethodConfig('DEPOSIT', 30.00, 'DISCOUNT_PERCENT');  
		$paymentRequest->addPaymentMethodConfig('BALANCE', 0.01, 'DISCOUNT_PERCENT');
		$paymentRequest->addParameter('senderBornDate', '07/05/1981');
		try {  
		  
		  $credentials = PagSeguroConfig::getAccountCredentials(); // getApplicationCredentials()  
		  $checkoutUrl = $paymentRequest->register($credentials); 
		  return $checkoutUrl;
		 		  
		  
		} catch (PagSeguroServiceException $e) {  
		    die($e->getMessage());  
		}
	}
		

	public function transactionNotification($notificationCode)
	{
		$paymentRequest = new PagSeguroPaymentRequest();
	    $credentials = PagSeguroConfig::getAccountCredentials();

	    try {
	        $transaction = PagSeguroNotificationService::checkTransaction($credentials, $notificationCode);
	        $this->load->model('Pedidos_model','pedidos');
	        $this->pedidos->aprovar_pedido($transaction->getReference(),$transaction->getStatus()->getValue());
	        var_dump($transaction->getStatus()->getValue());

	    } catch (PagSeguroServiceException $e) {
	    	echo"erro";
	        die($e->getMessage());
	    }
	}

	private static function authorizationNotification($notificationCode)
	{

	    $credentials = PagSeguroConfig::getApplicationCredentials();

	    try {
	        $authorization = PagSeguroNotificationService::checkAuthorization($credentials, $notificationCode);
	        var_dump($authorization);
	        // Do something with $authorization
	    } catch (PagSeguroServiceException $e) {
	        die($e->getMessage());
	    }
	}

	private static function preApprovalNotification($preApprovalCode)
	{

	    $credentials = PagSeguroConfig::getAccountCredentials();

	    try {
	        $preApproval = PagSeguroNotificationService::checkPreApproval($credentials, $preApprovalCode);
	        // Do something with $preApproval
	        
	    } catch (PagSeguroServiceException $e) {
	        die($e->getMessage());
	    }
	}

	private static function printLog($strType = null)
	{
	    $count = 4;
	    echo "<h2>Receive notifications</h2>";
	    if ($strType) {
	        echo "<h4>notifcationType: $strType</h4>";
	    }
	    echo "<p>Last <strong>$count</strong> items in <strong>log file:</strong></p><hr>";
	    echo LogPagSeguro::getHtml($count);
	}
}

/* End of file Checkout_model.php */
/* Location: ./application/models/Checkout_model.php */