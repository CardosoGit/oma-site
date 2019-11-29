
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
						<li class="current" ><a href="<?= base_url('equipamentos') ?>">Equipamento</a></li>
						<li ><a href="<?= base_url('Equipamentos/sintomas/computador') ?>">Sintomas</a></li>
						<li  ><a href="">Finalizar</a></li>
					</ol>
				</nav>
			</div>
			
		</div>
		<!-- FIM TOPO -->

	</header>
	<div style="background: rgba(54, 95, 156, 0.34)">
		<div class="container">
			<div class="row">
				<div style="margin-top:50px; margin-bottom:40px" class="col-md-12">
					<h1 style="color:#395F9E;font-size: 2em">Para qual dispositivo você precisa de suporte técnico?</h1>
				</div>

			</div>
			<div id="equip" class="row">
				<div class="col-md-3">
					<div>
						<h2>COMPUTADOR</h2>
						<div>
							<img alt="oma informatica resolve problema com computador" title="oma informatica resolve problema com computador" class="img-responsive" src="<?= base_url('imagens/equipa/computador.png') ?>">
						</div>
						<a class="btn btn-lg btn-success btn-block" href="<?= base_url() ?>Equipamentos/sintomas/computador"> Quero Suporte</a>
					</div>
				</div>
				<div class="col-md-3">
					<div>
						<h2>SMARTPHONE/TABLET</h2>
						<div>
							<img alt="oma informatica resolve problema com smartphone ou tablet" title="oma informatica resolve problema com smartphone ou tablet" class="img-responsive" src="<?= base_url('imagens/equipa/smart.png') ?>">
						</div>
						<a href="<?= base_url() ?>Equipamentos/sintomas/smart" class="btn btn-lg btn-success btn-block" >Quero Suporte</a>
					</div>
				</div>
				<div class="col-md-3">
					<div>
						<h2>DISPOSITIVOS DE REDE</h2>
						<div>
							<img alt="oma informatica resolve problema com equipamentos de rede e internet" title="oma informatica resolve problema com equipamentos de rede e internet" class="img-responsive" src="<?= base_url('imagens/equipa/router.png') ?>">
						</div>
						<a href="<?= base_url() ?>Equipamentos/sintomas/rede" class="btn btn-lg btn-success btn-block" >Quero Suporte</a>
					</div>
				</div>
				<div class="col-md-3">
					<div>
						<h2>PERIFÉRICOS</h2>
						<div>
							<img alt="oma informatica resolve problema com perifericos, impressoras etc.." title="oma informatica resolve problema com perifericos, impressoras etc..." class="img-responsive" src="<?= base_url('imagens/equipa/print.png') ?>">
						</div>
						<a href="<?= base_url() ?>Equipamentos/sintomas/periferico" class="btn btn-lg btn-success btn-block" >Quero Suporte</a>
					</div>
				</div>

			</div>
		</div>
	</div>
