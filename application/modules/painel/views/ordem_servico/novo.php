 <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Ordem de Serviço
        <small>Novo Cadastro</small>
      </h1>
      
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
             
           <form action="<?= base_url()?>Ordemservico/cadastrar" method="post" class="form-inline">
            
            <fieldset>
              <legend>Dados Básicos</legend>
              <div class="form-group">
                <label for="nome_cliente">Nome Cliente</label>
                <input class="form-control" id="nome_cliente" type="text" value="">
                <input type="hidden"  name="ID_cliente" value="">
              </div>

              <div class="form-group">
                <label for="ID_atendente">Atendente</label>
                <input class="form-control" name="ID_atendente" type="text" value="">
              </div>
                

              <div class="form-group">
                <label for="data_limite">Previsão de entrega</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control" name="data_limite"  data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                </div><!-- /.input group -->
              </div><!-- /.form group -->        

              
            </fieldset>


            <fieldset>
              <legend>Objeto</legend>
              <div class="form-group">
                <label for="ID_tipo_objeto" >Tipo Objeto</label>
                <input class="form-control" name="ID_tipo_objeto" type="text" value="">
              </div>

              <div class="form-group">
                <label for="descricao" >Descrição</label>
                <input class="form-control" name="descricao" type="text" value="">
              </div>

              <div class="form-group">
                <label for="modelo" >Modelo</label>
                <input class="form-control" name="modelo" type="text" value="">
              </div>

              <div class="form-group">
                <label for="marca_objeto" >Marca</label>
                <input class="form-control" name="marca_objeto" type="text" value="">
              </div>

              <div class="form-group">
                <label for="numero_serie" >Numero Série</label>
                <input class="form-control" type="text" name="numero_serie" value="">
              </div>

              <div class="form-group">
                <label for="acessorios" >Acessórios</label>
                <input class="form-control" name="acessorios" type="text" value="">
              </div>
            </fieldset>

            

            <fieldset>
              <legend></legend>
              <div class="form-group">
                <label for="ID_situacao" >Situação</label>
                <input class="form-control" name="ID_situacao" type="text" value="">
              </div>

              <div class="form-group">
                <label for="defeito" >Defeito Relatado</label>
                <input class="form-control" name="defeito" type="text" value="">
              </div>

              <div class="form-group">
                <label for="laudo_tecnico" >Laudo Técnico</label>
                <input class="form-control" name="laudo_tecnico" type="text" value="">
              </div>

              <div class="form-group">
                <label for="solucao_adotada" >Solução Adotada</label>
                <input class="form-control" name="solucao_adotada" type="text" value="">
              </div>

              <div class="form-group">
                <label for="total_servico" >Total Serviço</label>
                <input class="form-control" name="total_servico" type="text" value="">
              </div>

              <div class="form-group">
                <label for="ID_prioridade" >Prioridade</label>
                <input class="form-control" name="ID_prioridade" type="text" value="">
              </div>

              <div class="form-group">
                <label for="ID_tipo_atendimento" >Tipo de Atendimento</label>
                <input class="form-control" name="ID_tipo_atendimento" type="text" value="">
              </div>
            </fieldset>

            
            <fieldset>
              <legend></legend>
              <div class="form-group">
                <label for="observacao" >Observação</label>
                <textarea name="observacao" class="form-control " > </textarea>
              </div>
            </fieldset>
            

            <div >
              <input  name="data_abertura" type="hidden" value="<?= date("d-m-Y ") ?>">
              <button type="submit" style="float:right" class="btn btn-primary btn-lg">Cadastrar</button>
            </div>
            
          </form>
            
        </div>
      </div>
  </section>  
</div>