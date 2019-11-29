
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="panel-title">
						<div class="row">
							<div class="col-xs-6">
								<h5><span class="glyphicon glyphicon-shopping-cart"></span> Minhas Compras</h5>
							</div>
							<div style="display:none" class="col-xs-6">
								<button type="button" class="btn btn-primary btn-sm btn-block">
									<span class="glyphicon glyphicon-share-alt"></span> Continuar Comprando
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-body">
				<?php $i = 1; ?>
				<?php foreach ($this->cart->contents() as $itens): ?>
					<div class="row">
						<div class="col-xs-2"><img class="img-responsive" src="http://placehold.it/100x70">
						</div>
						<div class="col-xs-4">
							<h4 class="product-name"><strong style="color: #326599;"> <?= $itens['name']  ?></strong></h4><h4><small></small></h4>
						</div>
						<div class="col-xs-6">
							<div class="col-xs-6 text-right">
								<h6><strong> <?= numeroEmReais($itens['price']) ?> <span class="text-muted"> x</span></strong></h6>
							</div>
							<div class="col-xs-4">
								<input name="<?=$i?>[qtd]" form="excluir" type="text" class="form-control input-sm" value="<?= $itens['qty'] ?>">
							</div>
							<div class="col-xs-2">
								<form method="post" id="excluir<?=$i?>" action="<?= base_url('lojacarrinho/atualiza')?>">
								<input type="hidden" form="excluir" name="<?=$i?>[rowid]" value="<?= $itens['rowid'] ?>">
								<input type="hidden" form="excluir<?=$i?>" name="rowid" value="<?= $itens['rowid'] ?>">
								<button type="submit" form="excluir<?=$i?>" name="acao" value="remove" class="btn btn-link btn-xs">
									<span class="glyphicon glyphicon-trash"> </span>
								</button>
								</form>
							</div>
						</div>
					</div>
					<hr>
				<?php $i++; endforeach;  ?>






					
					<hr>
					<div class="row">
						<div class="text-center">
							<div class="col-xs-9">
								<h6 class="text-right">Adicionar mais itens?</h6>
							</div>
							<div class="col-xs-3">
								<form method="post" id="excluir" action="<?= base_url('lojacarrinho/atualiza')?>" ></form>
								<button type="submit" name="acao" value="atualiza" form="excluir" class="btn btn-default btn-sm btn-block">
									Atualizar carrinho
								</button>
								
							</div>
						</div>
					</div>
				</div>
				<div class="panel-footer">
					<div class="row text-center">
						<div class="col-xs-9">
							<h4 class="text-right">Total <strong><?= numeroEmReais($this->cart->total()) ?></strong></h4>
						</div>
						<div class="col-xs-3">
							<!-- <form action="https://www.moip.com.br/PagamentoMoIP.do"  method="post" id="finaliza-compra">
								<input type="hidden" form="finaliza-compra" name="id_carteira" value="oma informatica">
								<input type="hidden" form="finaliza-compra" name="valor" value="<?= $this->cart->total()*100 ?>">
								<input type="hidden" form="finaliza-compra" name="nome" value="Formatação de Computador">
								<input type="hidden" form="finaliza-compra" name="descricao" value="Formatação de Computador">
								<input type="hidden" form="finaliza-compra" name="id_transacao" value="25214">
								<input type="hidden" form="finaliza-compra" name="pagador_nome" value="<?= $this->session->usuario_logado['nome'] ?>">
								<input type="hidden" form="finaliza-compra" name="pagador_email" value="joao@oma.inf.br">
								<input type="hidden" form="finaliza-compra" name="pagador_telefone" value="<?= $this->session->usuario_logado['telefone1'] ?>">
								<input type="hidden" form="finaliza-compra" name="pagador_logradouro" value="<?= $this->session->usuario_logado['logradouro'] ?>">
								<button type="submit" form="finaliza-compra" class="btn btn-success btn-block">
									Finalizar Compra
								</button>
							</form> -->
							<a  class="btn btn-success btn-block" href="<?= base_url('lojacarrinho/auth_checkout')?>">
								Finalizar Compra
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>