 <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Ordem de Serviço
        <small>Alterando Ordem de Serviço</small>
      </h1>
      
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
             
           <form action="<?= base_url()?>Cados/updateOS" method="post" class="form-inline">
            
            <fieldset>
              <legend>Dados Básicos</legend>
              <div class="form-group">
                <label for="nome_cliente">Nome Cliente</label>
                <input class="form-control" id="nome_cliente" type="text" value="<?= $nome ?>">
                <input type="hidden"  name="ID_cliente" value="<?= $ID_cliente ?>">
              </div>

              <div class="form-group">
                <label for="data_abertura">Data Abertura</label>
                <input class="form-control" name="data_abertura" type="text" value="<?= $data_abertura ?>">
              </div>

              <div class="form-group">
                <label for="data_limite">Previsão de entrega</label>
                <input class="form-control" name="data_limite" type="text" value="<?= $data_limite ?>">
              </div>

              <div class="form-group">
                <label for="ID_atendente">Atendente</label>
                <input class="form-control" name="ID_atendente" type="text" value="<?= $ID_atendente ?>">
              </div>
            </fieldset>


            <fieldset>
              <legend>Objeto</legend>
              <div class="form-group">
                <label for="ID_tipo_objeto" >Tipo Objeto</label>
                <input class="form-control" name="ID_tipo_objeto" type="text" value="<?= $ID_tipo_objeto ?>">
              </div>

              <div class="form-group">
                <label for="descricao" >Descrição</label>
                <input class="form-control" name="descricao" type="text" value="<?= $descricao ?>">
              </div>

              <div class="form-group">
                <label for="modelo" >Modelo</label>
                <input class="form-control" name="modelo" type="text" value="<?= $modelo ?>">
              </div>

              <div class="form-group">
                <label for="marca_objeto" >Marca</label>
                <input class="form-control" name="marca_objeto" type="text" value="<?= $marca_objeto?>">
              </div>

              <div class="form-group">
                <label for="numero_serie" >Numero Série</label>
                <input class="form-control" type="text" name="numero_serie" value="<?= $numero_serie ?>">
              </div>

              <div class="form-group">
                <label for="acessorios" >Acessórios</label>
                <input class="form-control" name="acessorios" type="text" value="<?= $acessorios?>">
              </div>
            </fieldset>

            

            <fieldset>
              <legend></legend>
              <div class="form-group">
                <label for="ID_situacao" >Situação</label>
                <input class="form-control" name="ID_situacao" type="text" value="<?= $ID_situacao ?>">
              </div>

              <div class="form-group">
                <label for="defeito" >Defeito Relatado</label>
                <input class="form-control" name="defeito" type="text" value="<?= $defeito ?>">
              </div>

              <div class="form-group">
                <label for="laudo_tecnico" >Laudo Técnico</label>
                <input class="form-control" name="laudo_tecnico" type="text" value="<?= $laudo_tecnico ?>">
              </div>

              <div class="form-group">
                <label for="solucao_adotada" >Solução Adotada</label>
                <input class="form-control" name="solucao_adotada" type="text" value="<?= $solucao_adotada ?>">
              </div>

              <div class="form-group">
                <label for="total_servico" >Total Serviço</label>
                <input class="form-control" name="total_servico" type="text" value="<?= $total_servico ?>">
              </div>

              <div class="form-group">
                <label for="ID_prioridade" >Prioridade</label>
                <input class="form-control" name="ID_prioridade" type="text" value="<?= $ID_prioridade ?>">
              </div>

              <div class="form-group">
                <label for="ID_tipo_atendimento" >Tipo de Atendimento</label>
                <input class="form-control" name="ID_tipo_atendimento" type="text" value="<?= $ID_tipo_atendimento ?>">
              </div>
            </fieldset>

            
            <fieldset>
              <legend></legend>
              <div class="form-group">
                <label for="observacao" >Observação</label>
                <textarea  name="observacao" class="form-control " ><?= $observacao ?></textarea>
              </div>
            </fieldset>
            

            <div >
              <input type="hidden" name="ID_ordem_servico" value="<?= $ID_ordem_servico ?>" >
              <button type="submit" style="float:right" class="btn btn-primary btn-lg">Atualizar</button>
            </div>
            
          </form>
            
        </div>
      </div>
  </section>  
</div>