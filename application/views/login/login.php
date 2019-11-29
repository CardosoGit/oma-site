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

      </div>
      <!--col-md-6-->

      <div class="col-md-6">
        <div id="logbox" class="login">

          {alert}
          <!-- <form id="signup" method="post" action="{base_url}login/entrar"> -->
         
            <!-- <h1>Entre na sua conta</h1> -->
            <div class="slide-box">
              <div class="slide-content">
                <div class="item-slide">

                  <input name="email" type="email" placeholder="Entre com seu email" class="input pass"/>
                  <button   class="inputButton proximo"/> Avançar</button>
                  <div id="login-error">
                      <p  class="message-error text-warning"></p>
                      <div>
                        <a href="{base_url}login/novo" id="">criar uma conta</a> - <a href="{base_url}login/esqueci_a_senha" id="">esqueci minha senha</a>
                      </div>
                  </div>
                  
                </div>
                <div class="item-slide">
                  <button class="voltar" >Voltar</button>
                  <input name="password" type="password" placeholder="Entre com sua senha"  class="input pass"/>
                  <button  class="inputButton entrar"/> Entrar</button>
                  <p id="pass-error" class="message-error text-danger"></p>
                </div>
              </div>
            </div>      
            
            
            <!-- <div class="text-center">
              <a href="{base_url}login/novo" id="">criar uma conta</a> - <a href="{base_url}login/esqueci_a_senha" id="">esqueci minha senha</a>
            </div> -->
          
        </div>
      </div>
    </div>

  </div>