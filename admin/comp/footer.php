<?php include("proses/alert.php")  ?>
 <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="../template/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../template/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    
  });
</script>
<!-- Bootstrap 3.3.6 -->
<script src="../template/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="../template/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="../template/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../template/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../template/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../template/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="../template/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../template/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../template/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- DataTables -->
<script src="../template/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../template/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- Slimscroll -->
<script src="../template/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../template/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../template/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../template/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../template/dist/js/demo.js"></script>
</body>
</html>
 