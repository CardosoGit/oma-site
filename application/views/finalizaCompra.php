<header id="template-header">
	<!-- TOPO -->
	<div class="container">
		<div class="row">
			<div id="topo-section" class="col-md-6">
				<div class="brand">
					<a href="<?= base_url() ?>"><img height="35px" src="<?= base_url('imagens/logo.png') ?>"></a>
				</div>
				
			</div >
			<div class="col-md-6">
				<nav>
					<ol class="cd-multi-steps text-bottom count">
						<li class="visited" ><a href="<?= base_url('equipamentos') ?>">Equipamento</a></li>
						<li class="visited"><a href="<?= base_url('Equipamentos/sintomas/computador') ?>">Sintomas</a></li>
						<li class="current" ><a href="#">Finalizar</a></li>
					</ol>
				</nav>
			</div>
			
		</div>
		<!-- FIM TOPO -->

	</header>
	<div style="background: #f5f5f5;">
		
		<div class="container">
			<div class="row" style="padding-bottom: 20px">

				<div id="sintomas-selecionados" class="col-md-8" style="padding:30px">
					<h3>Confira abaixo os sintomas selecionados:</h3>
					<div style="border: 1px solid rgba(57, 95, 158, 0.25); padding: 20px; background: white">
						<ul>									
							<?php foreach ($sintomas as $key => $value) : ?>
								<li style="padding: 5px;color: #395F9E;font-size: 15px;margin-bottom: 10px;">
									<?= $value["descricao"] ?>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>			

				<!-- <p style="  line-height: 20px; color: #395F9E; margin-top: 10px;">
					Ou, se quiser já pode efetuar o pagamento e aguardar apenas alguns instantes, que um técnico entrará em contato para realização do serviço.
				</p> -->
			</div>
			<div id="show-price" class="col-md-4 ">
				<div style="background: #F5821B;
				height: 100%;
				padding: 40px;
				border-radius: 0px 0px 40px 40px;">
				<div id="topo-show-price">
					<h1>O valor total para resolução dos seus problemas é:</h1>
					<div><b>R$<?= $preco ?>,00 </b> </div>
				</div>
			</div>
			<a href="{base_url}peyment/checkout" style="margin-top: 50px;font-size: 1.5em;width: 100%;" class="inputButton "> FINALIZAR PEDIDO <i style='margin-left: 10px; 'class="fa fa-shopping-cart "></i></a>
		</div>

	</div>
</div>
</div>