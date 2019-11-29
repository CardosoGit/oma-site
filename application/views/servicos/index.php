<header id="template-header">
	<!-- TOPO -->
	<div class="container">
		<div class="row">
			<div id="topo-section" class="col-md-6">
				<div class="brand">
					<a href="<?= base_url() ?>"><img height="35px" src="<?= base_url('dist/imagens/logo.png') ?>"></a>
				</div>
				
			</div >
			<div class="col-md-6">
				<nav>
					<ol class="cd-multi-steps text-bottom count">
						<li class="visited" ><a href="<?= base_url('equipamentos') ?>">Equipamento</a></li>
						<li class="current"><a href="<?= base_url('Equipamentos/sintomas/computador') ?>">Sintomas</a></li>
						<li ><a href="">Finalizar</a></li>
					</ol>
				</nav>
			</div>
			
		</div>
		<!-- FIM TOPO -->

	</header>
	<div >
		<div style="background:#f5f5f5">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 style="color:#365F9C;font-size: 28px;line-height: 30px;">Quais os sintomas o seu {equipamento} apresenta?</h1>
						<span style="color:#365F9C;font-size: 0.8em;display:block;text-align:center">*Você pode selecionar mais de um sintoma e acompanhar o orçamento em tempo real na parte inferior da tela</span>
					</div>
				</div>
			</div>
			<hr>
			<div id="sintomas" class="container">
				<div class="row">
					<div class="col-md-12" style="margin-top:30px">
						<?php foreach ($sintomas as $key => $value) : ?>
							<div id="sintoma<?= $value["ID"] ?>" class="sintoma">
								<div><img style="width:100px"  src="<?= base_url('assets/imagens/equipa/'. $name_img_equip) ?>"></div>
								<div style="width:100%;padding:0 20px;  width: 100%; display: flex;justify-content: space-between;	align-items: center">
									<h2><?= $value["descricao"] ?></h2>
									<!-- <a style="float:right" href="">Selecionar</a> -->
									<div class="funkyradio">
										<div class="funkyradio-success">
											<input form="agenda-servico" type="checkbox" name="<?= $value["ID"] ?>" id="checkbox<?= $value["ID"] ?>" value="<?= $value["preco"] ?>" />
											<label for="checkbox<?= $value["ID"] ?>">Selecionar</label>
										</div>
									</div>
									
									
								</div>
							</div>			
						<?php endforeach;  ?>
					</div>

					
				</div>
			</div>
		</div>
		<div id="bar-show-price">
			<p>O total para os sintomas selecionados é:</p>
			 <strong >R$<b id="preco-total">0</b></strong>
			<form  action="<?= base_url('Equipamentos/finaliza') ?>" method="post" id="agenda-servico">
				<button disabled class="desable">Avançar</button> 	
			</form>
			
		</div>
	</div>
