<div >

	<div style="background: white;border-bottom: 1px solid rgba(128, 128, 128, 0.5);">
		<div class="container" >
			<div class="row">
				<nav>
					<ol class="cd-multi-steps text-bottom count">
						<li class="visited" ><a href="<?= base_url('Equipamentos') ?>">Equipamento</a></li>
						<li class="current"><em>Sintomas</em></li>
						<li ><em>Fim</em></li>
					</ol>
				</nav>
			</div>
			
		</div>
	</div>
	<div style="background:#f5f5f5">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 style="color:#365F9C;font-size: 20px">Quais os sintomas o seu computador apresenta?</h1>
					<span style="color:#365F9C">*Você pode selecionar mais de um sintoma e acompanhar o orçamento em tempo real na parte inferior da tela</span>
				</div>
			</div>
		</div>
		<hr>
		<div id="sintomas" class="container">
		<div class="row">
			<div class="col-md-12" style="margin-top:30px">
				<?php foreach ($sintomas as $key => $value) : ?>
				<div id="sintoma<?= $value["ID"] ?>" class="sintoma">
					<div><img height="100px" src="http://www.siteparaimobiliaria.imb.br/imagens/icone-suporte.png"></div>
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
		O total para os sintomas selecionados é: <strong >R$<b id="preco-total">0</b></strong>
		<form  action="<?= base_url('Equipamentos/finaliza') ?>" method="post" id="agenda-servico">
			<button disabled class="desable">Avançar</button> 	
		</form>
		
	</div>
</div>
