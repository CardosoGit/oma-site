
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
			</div>
			
		</div>
		<!-- FIM TOPO -->

	</header><div >

	<div style="background: white;border-bottom: 1px solid rgba(128, 128, 128, 0.5);">
		<div class="container" >
			<div class="row">
				<form style="display:flex; justify-content: center;margin: 30px 0; " 
				action="<?= base_url('Equipamentos/search_sintoma') ?> " method="get">
				<input name="sintoma" placeholder="Encontre um serviço"/ style=" padding: 20px;width: 50%; font-size: 25px; border: 1px solid #ddd;">
				<button style="font-size: 25px;border: none;color: white;background: #385E9D;padding: 0 20px;">Buscar</button>                
			</form>
		</div>
		
	</div>
</div>
<div style="background:#f5f5f5">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 style="color:#365F9C;font-size: 20px">Resultados da busca</h1>
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
						<?php if ($value["equipamento"] == "smart") : ?>
							<div><img style="width:100px"  src="<?= base_url('assets/imagens/equipa/smart-thumb.png') ?>"></div>
						<?php else: ?>
							<div><img style="width:100px"  src="<?= base_url('assets/imagens/equipa/computer-thumb.png') ?>"></div>
						<?php endif; ?>

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
