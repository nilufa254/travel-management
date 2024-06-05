<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 0.0.1   </div>
    <strong>Copyright &copy; <?php echo date( 'Y' ); ?> <a href="<?php echo SITE_URL; ?>"><?php echo SITE_TITLE; ?></a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo SITE_URL; ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo SITE_URL; ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo SITE_URL; ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo SITE_URL; ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo SITE_URL; ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo SITE_URL; ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo SITE_URL; ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo SITE_URL; ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo SITE_URL; ?>plugins/jszip/jszip.min.js"></script>
<script src="<?php echo SITE_URL; ?>plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo SITE_URL; ?>plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo SITE_URL; ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo SITE_URL; ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo SITE_URL; ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo SITE_URL; ?>dist/js/adminlte.min.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>