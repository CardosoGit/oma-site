

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
 <div class="container" style="margin:30px 0"> 
        <div class="explain_box">
            <strong> Que bom que você está aqui!</strong> <br>
            Temos muitas coisas boas 
            que queremos compartilhar 
            com você hoje.
        </div>

        <div class="explain_box">
                O que você deseja hoje?
                <ul>       
                    <li>  Aumentar a velocidade do seu Computador</li>
                    <li>  Um <strong>SUPER DESCONTO</strong> em nossos serviços?</li>
                    <li>Ou quer Chocolates? </li>
                </ul>
            
        </div>

        
 </div>

 <div style="background: rgba(0, 0, 0, 0.1);"> 
    <form class="form-promo" id="form-promocional" method="post" action="{base_url}resgate_sucesso"> 
    <label>CÓDIGO PROMOCIONAL</label>
    <input name="cod"  type="text"/ placeholder="XXXXXXX">
    <button class="inputButton" style="width:100%" type="button"> Resgatar</button>

    </form>

</div>

  <!--
    salva 50 numeros - cada numero um premios.
    busca no banco apenas os numeros nao sorteados
    conta a quantidade de registros

    sorteia um desses numeros
    salva esse numero como sorteado

    Sorteia um deles
    Ao sortear elim
  -->