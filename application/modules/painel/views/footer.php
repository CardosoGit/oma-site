      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://WWW.oma.inf.br">OMA Informática</a>.</strong> Todos os direitos reservados.
      </footer>

     
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="<?= base_url()?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->

    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>

    <!-- Bootstrap 3.3.5 -->
    <script src="<?= base_url()?>js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="<?= base_url()?>plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="<?= base_url()?>plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="<?= base_url()?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?= base_url()?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?= base_url()?>plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="<?= base_url()?>plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="<?= base_url()?>plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?= base_url()?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="<?= base_url()?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- DataTables -->
    <script src="<?= base_url()?>plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url()?>plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?= base_url()?>plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
     <script src="<?= base_url()?>plugins/input-mask/jquery.inputmask.js"></script>
     <script src="<?= base_url()?>plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <script src="<?= base_url()?>plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    
   
    

    <script src="<?= base_url()?>dist/js/app.min.js"></script>
    <script src="<?= base_url()?>js/painel/script.js"></script>

    <script>
      $(function () {
        $("#pedidos").DataTable();
      });
    </script>

    
  </body>
</html>
