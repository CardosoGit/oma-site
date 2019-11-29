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

	</header>


<div class="container">
    <div class="row">
      <div class="col-md-6">
        <div id="mapbox">
        
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14042.277170074776!2d-53.9378423!3d-28.3718685!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa036bef92c98158f!2soma+inform%C3%A1tica!5e0!3m2!1spt-BR!2sbr!4v1474430782557" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
      <!--col-md-6-->

      <div class="col-md-6">
        <div id="logbox">
          {alert}
          <form id="signup" method="post" action="{base_url}faleconosco/contato">
            <h1>Fale Conosco</h1>
            <input name="nome" type="text" placeholder="Deixe o seu nome" required="required" class="input"/>
            <input name="email" type="email" placeholder="seu email" class="input pass"/>
            <input name="telefone" type="text" placeholder="telefone" required="required" class="input"/>
            <textarea rows="10" name="message"  placeholder="e também a sua mensagem..." required="required" class="textarea"></textarea>
            <input type="submit" value="Enviar" class="inputButton"/>

          </form>
        </div>
      </div>
    </div>

  </div>
  <script type="text/javascript">
    var meus_campos = {
        'email': 'email',
        'nome': 'nome',
        'telefone': 'telefone'
     };
    options = { fieldMapping: meus_campos };
    RdIntegration.integrate('2ff3d230f9f82e5923bb8a9ad5a327f7', 'Contato pagina - Fale Conosco', options);  
</script>