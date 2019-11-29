<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Pedidos
    </h1>
   
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Lista de Pedidos</h3>
          </div><!-- /.box-header -->
          <div class="box-body">

            <table id="pedidos" class="table table-bordered table-striped">
              <thead>
                
                <tr>  
                  <th></th>  
                  <th>Numero</th>            
                  <th>Cliente</th>
                  <th>Email</th>
                  <th>Telefone </th>
                  <th>Valor</th>
                  <th>Data</th>
                  <th>Status</th>
                  <th></th>               
                </tr>
                
              </thead>
              <tbody>
                <?php foreach ($pedidos as $key => $value) :?>
                <tr>
                  <td>
                      <form action="<?= base_url() ?>Historico_os" method="post">
                        <input type="hidden" name="ID_ordem_servico"  value="<?= $value["ID"] ?>">
                        <button class="btn btn-social-icon btn-github"><i class="fa fa-pencil-square-o"></i></button>
                      </form>
                  </td>
                  <td><?= $value["ID"] ?></td>
                  <td><?= $value["nome"] ?></td>
                  <td><?= $value["email"] ?></td>
                  <td><?= $value["telefone"] ?></td>
                  <td><?= $value["valor"] ?></td>
                  <td><?= $value["date"] ?></td>
                  <td><?= $value["is_read"] ?></td>  
                  <td>
                      <a href="<?= base_url() ?>painel/pedidos/delete/<?= $value["ID"] ?>" class="btn btn-social-icon btn-google"><i class="fa fa-times-circle"></i></a>
                  </td>
                 
                  
                </tr>
                <?php endforeach; ?>
              </tbody>
              <tfoot>
                <tr>  
                  <th></th> 
                  <th>Numero</th>            
                  <th>Cliente</th>
                  <th>Email</th>
                  <th>Telefone </th>
                  <th>Valor</th>
                  <th>Data</th>
                  <th>Status</th> 
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
