.
<form action="https://www.moip.com.br/PagamentoMoIP.do"  method="post" id="finaliza-compra">
	<input type="hidden" form="finaliza-compra" name="id_carteira" value="<?= $id_carteira ?>">
	<input type="hidden" form="finaliza-compra" name="valor" value="<?= $valor ?>">
	<input type="hidden" form="finaliza-compra" name="nome" value="<?= $nome ?>">
	<input type="hidden" form="finaliza-compra" name="descricao" value="<?= $descricao ?>">
	<input type="hidden" form="finaliza-compra" name="id_transacao" value="<?= $id_transacao ?>">
	<input type="hidden" form="finaliza-compra" name="pagador_nome" value="<?= $pagador_nome ?>">
	<input type="hidden" form="finaliza-compra" name="pagador_email" value="<?= $pagador_email ?>">
	<input type="hidden" form="finaliza-compra" name="pagador_telefone" value="<?= $pagador_telefone ?>">
	<input type="hidden" form="finaliza-compra" name="pagador_logradouro" value="<?= $pagador_logradouro ?>">

	<input type="hidden" form="finaliza-compra" name="pagador_cep" value="<?= $pagador_cep ?>">
	<input type="hidden" form="finaliza-compra" name="pagador_numero" value="<?= $pagador_numero ?>">
	<input type="hidden" form="finaliza-compra" name="pagador_bairro" value="<?= $pagador_bairro ?>">
	<input type="hidden" form="finaliza-compra" name="pagador_cidade" value="<?= $pagador_cidade ?>">
	<input type="hidden" form="finaliza-compra" name="pagador_estado" value="<?= $pagador_estado ?>">						
	
</form>
<div class="container">
	<div class="row">
		<div class="col-md-12">
		<h1>Você está sendo redirecionado para o pagamento.</h1>
		</div>
	</div>
</div>
<script >
   document.getElementById("finaliza-compra").submit();
</script>