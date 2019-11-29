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
        <div style="float:right" class="telefone">
            Tele-vendas
            <span>(55) 3333- 5953</span>
        </div>
        </div>
        
    </div>
    <!-- FIM TOPO -->
 </header>

 <div class="container">
    <div class="row"> 
        <div class="col-md-6" style="padding-top:50px">
            <h1 style="color:#5657a3; font-weight:bold"> Parabéns! Você ganhou {presente}!</h1>

            <p style="line-height:18px; margin-top:30px;"> 
                Agora precisamos entregar o seu presente, e para isso necessitamos de algumas informacões.

            </p>
            <p> É rápido! Vamos lá!</p>
    


        </div>
        <div class="col-md-6">
             <div id="logbox">
                <form id="form-contato-resgate" action="{base_url}finaliza_resgate" method="post" >
                    <input class="input" name="nome" type="text" placeholder="Nome" >
                    <input class="input" name="email" type="text" placeholder="Email">
                    <input class="input" name="telefone" type="text" placeholder="Telefone">
                    <textarea rows="10" name="endereco" type="text" placeholder="Endereço"class="textarea"></textarea>
                    <!--<input type="text" placeholder="">-->
                    <button  type="button" class="inputButton" > Enviar </button>
                </form>
            </div>
        </div>
    </div>

</div>