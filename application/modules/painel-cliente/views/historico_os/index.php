++-

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Histórico
      <small>Todos os comentários sobre o atendimento</small>
    </h1>
     <a id="escrever-historico" style="float:right;margin-right:30px; height:20px; width:20px; background-color:black" href="#"> <i style="font-size: 60px; " class="fa fa-pencil"></i></a>
  </section>

  <!-- Main content -->
  <section class="content">
      <div class="tab-pane active" id="timeline">


                        <!-- The timeline -->
                   <ul class="timeline timeline-inverse">

                            <?php foreach ($historico as $key => $value) : ?>

                            <?php if($value['data']) :?>
                            <!-- timeline time label -->
                            <li class="time-label">
                              <span class="bg-red">
                                <?= $value['data'] ?>
                              </span>
                            </li>
                            <?php endif; ?>
                            <!-- /.timeline-label -->


                           
                            <!-- timeline item -->
                            <li>
                              <i class="fa fa-thumbs-o-up bg-blue"></i>
                              <div class="timeline-item">
                                <span class="time"><i class="fa fa-clock-o"></i> <?= $value['hora'] ?></span>
                                <h3 class="timeline-header"><a href="#">Técnico de Suporte</a> <?= $value['tecnico'] ?></h3>
                                <div class="timeline-body">
                                  <?= $value['descricao'] ?>
                                </div>
                                <div class="timeline-footer">
                                  <form style="display:inline" action="<?= base_url('Historico_os/editar') ?>" method="post">
                                    <button class="btn btn-primary btn-xs">Editar</button>
                                  </form>
                                  <form style="display:inline" action="<?= base_url('Historico_os/excluir') ?>" method="post">
                                    <input type="hidden" name="ID" value="<?= $value['ID'] ?>">
                                    <input type="hidden" name="numeroOS" value="<?= $ID_ordem ?>">
                                    <button class="btn btn-danger btn-xs">Excluir</button>
                                  </form>
                                  
                                  
                                </div>
                              </div>
                            </li>
                            <!-- END timeline item -->

                             <?php endforeach; ?>
                          

                            <li>
                              <i class="fa fa-clock-o bg-gray"></i>
                            </li>
                 </ul>
             </div>

  </section><!-- /.content -->
</div>
<div style="position:relative">
  <form action="<?= base_url('Historico_os/salvar') ?>" method="post">
      <div id="balon-escreve-historico" class="input-group margin" style="display:none; position: fixed; width: 70%; padding: 50px 20px; background-color: #222D32;bottom: 30px; right: 20px;  border-radius: 10px;">
        
        <a href="#"> <i style=" font-size: 30px; position: absolute;right: 10px; top: 10px;" class="fa fa-minus-circle"></i></a>
        <input type="text" name="historico" value="" class="form-control">
        <input type="hidden" name="numeroOS" value="<?= $ID_ordem ?>">
        <span class="input-group-btn">
          <button class="btn btn-info btn-flat" type="submit">Salvar Histórico</button>
        </span>
        <div class="form-group" style="margin-bottom: 15px;position: absolute; left: 40px;
    bottom: 1px;">
          <div class="checkbox">
            <label style="color:white">
              <input type="checkbox">
              Orçamento
            </label>
          </div>
        </div>
      </div>
      
  </form>
</div>