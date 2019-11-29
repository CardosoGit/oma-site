<?php 

	/**
	* 
	*/
	class Alerts 
	{
		public $view_data = '0';

		
		public function alert($type_alert, $title = '', $text = ''){
			$ci    = get_instance();
			$dados = array(
				'alert-title' => $title,
				'alert-text'  => $text
				); 

			switch ($type_alert) {
				case 'error':
				$this->view_data['alert'] = $ci->parser->parse('alertas/erro.html',$dados,true);	
				return ;		
				
				case 'warning':
				$this->view_data['alert'] = $ci->parser->parse('alertas/warning.html',$dados,true);	
				return ;
				case 'success':
				$this->view_data['alert'] = $ci->parser->parse('alertas/success.html',$dados,true);	
				return ;
				
				case 'info':
				$this->view_data['alert'] = $ci->parser->parse('alertas/info.html',$dados,true);	
				return ;
			}
		}
	}
	

	

