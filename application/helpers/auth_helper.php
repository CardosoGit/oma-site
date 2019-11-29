<?php 
function autoriza(){
	$ci = get_instance();
	$usuario_logado = $ci->session->userdata("usuario_logado");
	if (!$usuario_logado) {
		redirect(base_url().'usuarios');
	}
	return $usuario_logado;
}