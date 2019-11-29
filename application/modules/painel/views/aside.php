<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MENU PRINCIPAL</li>
      
      <li class=" treeview">
        <a href="#">
          <i class="fa fa-user"></i> <span>Usuarios</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href="<?= base_url() ?>painel/clientes/novo"><i class="fa fa-circle-o"></i> Novo</a></li>
          <li class=""><a href="<?= base_url() ?>painel/clientes/lista"><i class="fa fa-th-list"></i> LIsta</a></li>
        </ul>
      </li>

      <li class=" treeview">
        <a href="#">
          <i class="fa fa-wrench"></i> <span>Ordem de Serviço</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href="<?= base_url() ?>painel/Ordemservico/novo"><i class="fa fa-circle-o"></i> Novo</a></li>
          <li class=""><a href="<?= base_url() ?>painel/Ordemservico/lista"><i class="fa fa-th-list"></i> Lista</a></li>
         
        </ul>
      </li>

      <li class="">
        <a href=" <?= base_url('painel/pedidos') ?> ">
          <i class="fa fa-th"></i> <span>Pedidos</span> <small class="label pull-right bg-green">new</small>
        </a>
      </li>


      <li class=" treeview">
        <a href="#">
          <i class="fa fa-wrench"></i> <span>Configurações</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href="<?= base_url() ?>painel/Ordemservico/novo"><i class="fa fa-circle-o"></i> Serviços</a></li>
          <li class=""><a href="<?= base_url() ?>painel/sintomas"><i class="fa fa-th-list"></i> Sintomas</a></li>
          <li class=""><a href="<?= base_url() ?>painel/sintomas/novo"><i class="fa fa-th-list"></i> Novo Sintoma</a></li>
         
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-wrench"></i> <span>Indicações</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href="<?= base_url() ?>painel/Ordemservico/novo"><i class="fa fa-circle-o"></i> Novo</a></li>
          <li class=""><a href="<?= base_url() ?>painel/Ordemservico/lista"><i class="fa fa-th-list"></i> Lista</a></li>
         
        </ul>
      </li>

            
      
     
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>