

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Ordens de Serviço
    </h1>
   
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Lista de Ordens de Serviços</h3>
          </div><!-- /.box-header -->
          <div class="box-body">

            <table id="example1" class="table table-bordered table-striped">
              <thead>
                
                <tr>  
                  <th></th>  
                  <th>Numero</th>            
                  <th>Cliente</th>
                  <th>Descrição</th>
                  <th>Marca</th>
                  <th>Modelo</th>
                  <th>Defeito</th>
                  <th>Situação</th>
                  <th>Solução</th> 
                  <th>Prev. Entrega</th>
                  <th></th>
                  <th></th>                 
                </tr>
                
              </thead>
              <tbody>
                <?php foreach ($os as $key => $value) :?>
                <tr>
                  <td>
                      <form action="<?= base_url() ?>Historico_os" method="post">
                        <input type="hidden" name="ID_ordem_servico"  value="<?= $value["ID_ordem_servico"] ?>">
                        <button class="btn btn-social-icon btn-github"><i class="fa fa-pencil-square-o"></i></button>
                      </form>
                  </td>
                  <td><?= $value["ID_ordem_servico"] ?></td>
                  <td><?= $value["nome"] ?></td>
                  <td><?= $value["descricao"] ?></td>
                  <td><?= $value["marca_objeto"] ?></td>
                  <td><?= $value["modelo"] ?></td>
                  <td><?= $value["defeito"] ?></td>
                  <td><?= $value["ID_situacao"] ?></td>
                  <td><?= $value["solucao_adotada"] ?></td> 
                  <td><?= $value["data_limite"] ?></td> 
                  <td>
                      <form action="<?= base_url() ?>Ordemservico/excluir" method="post">
                        <input type="hidden" name="ID_ordem_servico"  value="<?= $value["ID_ordem_servico"] ?>">
                        <button class="btn btn-social-icon btn-google"><i class="fa fa-times-circle"></i></button>
                      </form>
                  </td>
                  <td>
                      <form action="<?= base_url() ?>Ordemservico/editar" method="post">
                        <input type="hidden" name="ID_ordem_servico"  value="<?= $value["ID_ordem_servico"] ?>">
                        <button class="btn btn-social-icon btn-bitbucket"><i class="fa fa-pencil"></i></button>
                      </form>
                  </td>
                  
                </tr>
                <?php endforeach; ?>
              </tbody>
              <tfoot>
                <tr>  
                  <th></th> 
                  <th>Numero</th>               
                  <th>Cliente</th>
                  <th>Descrição</th>
                  <th>Marca</th>
                  <th>Modelo</th>
                  <th>Defeito</th>
                  <th>Situação</th>
                  <th>Solução</th> 
                  <th>Prev. Entrega</th> 
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
