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
      </div>
      
    </div>
    <!-- FIM TOPO -->

  </header>
  <div class="container">
    <div class="row">
      <div class="col-md-6">

      </div>
      <!--col-md-6-->

      <div class="col-md-6">
        <div id="logbox">
          {alert}
          <form id="signup" method="post" action="{base_url}planos/contato">
            <h1>Tem dúvidas sobre os nossos planos?</h1>
            <input name="nome" type="text" placeholder="Deixe o seu nome" required="required" class="input"/>
            <input name="email" type="email" placeholder="seu email" class="input pass"/>
            <input name="telefone" type="text" placeholder="e o telefone" required="required" class="input"/>
            <input type="submit" value="Quero saber mais" class="inputButton"/>

          </form>
        </div>
      </div>
    </div>

  </div>