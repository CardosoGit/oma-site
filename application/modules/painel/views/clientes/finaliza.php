 <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Cadastro de Cliente
      </h1>
      
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
        	<div class="alert alert-success alert-dismissable">
        	    <a href="<?= base_url('Clientes/novo') ?> " class="btn pull-right btn-primary">Adicionar outro</a>
               <a href="<?= base_url('Clientes/lista') ?> " style="margin-right:10px" class="btn pull-right btn-primary">Ver listagem</a>
        	  <h4>	<i class="icon fa fa-check"></i> Concluído!</h4>  
        	  <?php 
                if(isset($success)) echo $success;
                else echo $error;
            ?>
        	</div>
        </div>
      </div>
    </section>
</div>