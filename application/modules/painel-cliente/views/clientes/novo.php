<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Clientes
      <small>Novo Cadastro</small>
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <form action="<?= base_url()?>clientes/salvar" method="post" class="form-inline">
          
          <fieldset>
              <legend>Dados Básicos</legend>
              <div class="form-group">
                <label for="nome">Nome</label>
                <input class="form-control" name="nome" type="text" value="">
              </div>

              <div class="form-group">
                <label for="sobrenome">Sobrenome</label>
                <input class="form-control" name="sobrenome" type="text" value="">
              </div>

              <div class="form-group">
                <label for="contato">Contato</label>
                <input class="form-control" name="contato" type="text" value="">
              </div>

              <div class="form-group">
                <label for="cpj_cnpj">CPF/CNPJ</label>
                <input class="form-control" name="cpf_cnpj" type="text" value="">
              </div>

              <div class="form-group">
                <label for="data_cadastro">Data Cadastro</label>
                <input class="form-control" name="data_cadastro" type="text" value="">
              </div>          
           </fieldset>


           <fieldset>
              <legend>Endereço</legend>
              <div class="form-group">
                <label for="logradouro">Logradouro</label>
                <input class="form-control" name="logradouro" type="text" value="">
              </div>

              <div class="form-group">
                <label for="numero">Numero</label>
                <input class="form-control" name="numero" type="text" value="">
              </div>

              <div class="form-group">
                <label for="complemento">Complemento</label>
                <input class="form-control" name="complemento" type="text" value="">
              </div>

              <div class="form-group">
                <label for="bairro">Bairro</label>
                <input class="form-control" name="bairro" type="text" value="">
              </div>

              <div class="form-group">
                <label for="cidade">Cidade</label>
                <input class="form-control" name="cidade" type="text" value="">
              </div>

              <div class="form-group">
                <label for="estado">Estado</label>
                <input class="form-control" name="estado" type="text" value="">
              </div> 
            </fieldset>


            <fieldset>
              <legend>Informações de contato</legend>
              <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" name="email" type="text" value="">
              </div>

              <div class="form-group">
                <label for="telefone1">Telefone 1</label>
                <input class="form-control" name="telefone1" type="text" value="">
              </div>

              <div class="form-group">
                <label for="telefone2">Telefone 2</label>
                <input class="form-control" name="telefone2" type="text" value="">
              </div>                  
            </fieldset>

            <fieldset>
              <legend>Outras informações</legend>
              <div class="form-group">
                <label for="observacao">Observações</label>
                <textarea class="form-control" name="observacao" type="text" ></textarea>
              </div>                
            </fieldset>
       

          <div >
            <button type="submit" style="float:right" class="btn btn-primary btn-lg">Cadastrar</button>
          </div>
          
        </form>
      </div>
    </div>

  </section><!-- /.content -->
</div>