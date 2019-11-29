

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Clientes
    </h1>
   
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Lista de Clientes</h3>
          </div><!-- /.box-header -->
          <div class="box-body">

            <table id="example1" class="table table-bordered table-striped">
              <thead>
                
                <tr>                
                  <th>Nome</th>
                  <th>CPF/CNPJ</th>
                  <th>Logradouro</th>
                  <th>Numero</th>
                  <th>Cidade</th>
                  <th>Email</th>
                  <th>Telefone</th> 
                  <th></th>  
                  <th></th>               
                </tr>
                
              </thead>
              <tbody>
                <?php foreach ($os as $key => $value) :?>
                <tr>
                  <td><?= $value["nome"] ?></td>
                  <td><?= $value["cpf_cnpj"] ?></td>
                  <td><?= $value["logradouro"] ?></td>
                  <td><?= $value["numero"] ?></td>
                  <td><?= $value["cidade"] ?></td>
                  <td><?= $value["email"] ?></td>
                  <td><?= $value["telefone1"] ?></td> 
                  <td>
                      <form action="<?= base_url() ?>Clientes/excluir" method="post">
                        <input type="hidden" name="ID_cliente"  value="<?= $value["ID"] ?>">
                        <button class="btn btn-social-icon btn-google"><i class="fa fa-times-circle"></i></button>
                      </form>
                  </td>
                  <td>
                      <form action="<?= base_url() ?>Clientes/editar" method="post">
                        <input type="hidden" name="ID_cliente"  value="<?= $value["ID"] ?>">
                        <button class="btn btn-social-icon btn-bitbucket"><i class="fa fa-pencil"></i></button>
                      </form>
                  </td>
                  
                </tr>
                <?php endforeach; ?>
              </tbody>
              <tfoot>
                <tr>                
                  <th>Nome</th>
                  <th>CPF/CNPJ</th>
                  <th>Logradouro</th>
                  <th>Numero</th>
                  <th>Cidade</th>
                  <th>Email</th>
                  <th>Telefone</th>  
                  <th></th>     
                  <th></th>             
                </tr>
              </tfoot>
            </table>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div><!-- /.col -->
    </div><!-- /.row -->
  </section><!-- /.content -->
</div><!-- /.content-wrapper -->
