 <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Sintomas
        <small>Novo Cadastro</small>
      </h1>
      
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
             
           <form action="<?= base_url()?>painel/sintomas/add" method="post" class="form">
            
            <fieldset>
              <legend>Dados Básicos</legend>
              <div class="form-group">
                <label for="descricao">Descrição</label>
                <input class="form-control" name="descricao" type="text" value="">
              </div>

              <div class="form-group">
                <label for="equipamento">Equipamento</label>
                <input class="form-control" name="equipamento" type="text" value="">
              </div>

              <div class="form-group">
                <label for="equipamento">Preço</label>
                <input class="form-control" name="preco" type="text" value="">
              </div>  

              <div class="form-group">
                <label for="tempo_exec">Tempo de Execução</label>
                <input class="form-control" name="tempo_exec" type="text" value="">
              </div> 

              <div class="form-group">
                <label for="nivel_dificuldade">Nivel de Dificuldade</label>
                <input class="form-control" name="nivel_dificuldade" type="text" value="">
              </div> 
            </fieldset>
            

            <div >
              <button type="submit" style="float:right" class="btn btn-primary btn-lg">Cadastrar</button>
            </div>
            
          </form>
            
        </div>
      </div>
  </section>  
</div>