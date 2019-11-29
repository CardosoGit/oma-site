<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Consulta Ordem de Serviço</h4>
      </div>
      <div class="modal-body">
          <p>O equipamento <?= $OS["ID_tipo_objeto"] ?> <?= $OS["marca_objeto"] ?> <?= $OS["modelo"] ?> foi diagnosticado com <?= $OS["laudo_tecnico"] ?>. O orçamento para <?= $OS["solucao_adotada"] ?> é de R$80,00 e foi aprovado dia 10/12/2015.
          
          </p>
          <p>
            A ordem de serviço encontra-se  <?= $OS["ID_situacao"] ?> o técnico fez a última atualização as 14:30 do dia 13/12/2015 quando executou o procedimento de instalação dos programas básicos.
          </p>
          <p>
            Veja abaixo o histórico do seu equipamento desde a entrada para manutenção:
          </p>
          <ul>
            <?php foreach ($historico as $key => $value): ?>
            <li>  → <?= $value["hora"] ?> dia <?= $value["data"] ?> : <?= $value["descricao"] ?>.</li>
            <?php endforeach; ?>
          </ul>
         

          <p>
            Por favor faça uma avaliação da nossa empresa.
          </p>       
          <div class="well well-sm">  
              <div class="row" id="post-review-box" >
                  <div class="col-md-12">
                      <form accept-charset="UTF-8" action="" method="post">
                          <input id="ratings-hidden" name="rating" type="hidden"> 
                          <textarea class="form-control animated" cols="50" id="new-review" name="comment" placeholder="Faça sua avaliação aqui..." rows="5"></textarea>
          
                          <div class="text-right">
                              <div class="stars starrr" data-rating="0"></div>
                              <a class="btn btn-danger btn-sm" href="#" id="close-review-box" style="display:none; margin-right: 10px;">
                              <span class="glyphicon glyphicon-remove"></span>Cancelar</a>
                              <button class="btn btn-success btn-lg" type="submit">Salvar</button>
                          </div>
                      </form>
                  </div>
              </div>
          </div> 
                        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
    <button type="button" id="balon-chat" style="position:fixed; transform: rotate(-90deg); left:-39px; bottom:100px; padding:10px 20px; transform-origin: left top 0;background: #326599;color:white;font-weight: bold;">QUERO CONVERSAR COM O MEU TÉCNICO!</button>
    <div id="chat" style="display:none; position: fixed;width: 251px;left: -150px;bottom: 90px; padding: 9px 8px; color: white; font-weight: bold;background: rgb(245, 245, 245);">
       <div style="
          background-color: #337ab7;
          text-align: center;
          padding: 10px;
          ">Fale com um técnico</div>
       <div style=" color:black;height: 300px; overflow-y: auto;/* background: white; */">
          <div style=" padding:5px; width:80%; float:left; margin-bottom:10px">
             <b>Você:</b> 
             <div style="padding:5px; border-radius:10px; background-color:#ccc;border: 1px solid #aaa;">asdf wre wr  ewrwerwer wrer wererw </div>
          </div>
          <div style=" padding:5px; width:80%; float:right;">
             <b>Técnico:</b>  
             <div style=" border-radius:10px;  padding:5px;background-color: white;border: 1px solid #aaa;">sadfer w rwe wrerwe ewrw rwer r wer </div>
          </div>
       </div>
       <textarea style="width:100%; color:black;margin-top: 10px;border: 1px solid #ccc;"></textarea>
       <button class="btn btn-success btn-block"> Enviar</button>
    </div>
    <script >
      $("#balon-chat").on("click",function(){
        $("#balon-chat").fadeOut('slow');
        $("#chat").fadeIn('slow');
        $("#modal > div > div.modal-content").animate({
            left: "100px"
        },"slow");
      });     

    </script>
  </div>
</div>
