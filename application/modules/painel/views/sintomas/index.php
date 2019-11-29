<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Sintomas
    </h1>
   
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Lista de Sintomas</h3>
          </div><!-- /.box-header -->
          <div class="box-body">

            <table id="pedidos" class="table table-bordered table-striped">
              <thead>
                
                <tr>  
                  <th></th>  
                  <th>Descrição</th>            
                  <th>Equipamento</th>
                  <th>Preço</th>
                  <th>Tempo </th>
                  <th>Nivel</th>
                  <th></th>               
                </tr>
                
              </thead>
              <tbody>
                <?php foreach ($sintomas as $key => $value) :?>
                <tr>
                  <td>
                      <a href="" class="btn btn-social-icon btn-github"><i class="fa fa-pencil-square-o"></i></a>

                  </td>
                  <td><?= $value["descricao"] ?></td>
                  <td><?= $value["equipamento"] ?></td>
                  <td><?= $value["preco"] ?></td>
                  <td><?= $value["tempo_exec"] ?></td>
                  <td><?= $value["nivel_dificuldade"] ?></td>  
                  <td>
                      <a href="<?= base_url() ?>painel/sintomas/delete/<?= $value["ID"] ?>" class="btn btn-social-icon btn-google"><i class="fa fa-times-circle"></i></a>
                  </td>
                 
                  
                </tr>
                <?php endforeach; ?>
              </tbody>
              <tfoot>
                <tr>  
                  <th></th> 
                  <th>Descrição</th>            
                  <th>Equipamento</th>
                  <th>Preço</th>
                  <th>Tempo </th>
                  <th>Nivel</th> 
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
