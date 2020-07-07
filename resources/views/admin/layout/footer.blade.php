<!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2019 sBlog </strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{URL::asset('/admin/plugins/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap 4 -->
<script src="{{URL::asset('/admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- AdminLTE App -->
<script src="{{URL::asset('/admin/dist/js/adminlte.min.js')}}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{URL::asset('/admin/dist/js/demo.js')}}"></script>

<!-- Summernote -->
<script src="{{URL::asset('/admin/plugins/summernote/summernote-bs4.min.js')}}"></script>

<!-- jQuery UI 1.11.4 -->
<script src="{{URL::asset('/admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

<!-- ChartJS -->
<script src="{{URL::asset('/admin/plugins/chart.js/Chart.min.js')}}"></script>

<!-- Sparkline -->
<script src="{{URL::asset('/admin/plugins/sparklines/sparkline.js')}}"></script>

<!-- JQVMap -->
<script src="{{URL::asset('/admin/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{URL::asset('/admin/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>

<!-- jQuery Knob Chart -->
<script src="{{URL::asset('/admin/plugins/jquery-knob/jquery.knob.min.js')}}"></script>

<!-- daterangepicker -->
<script src="{{URL::asset('/admin/plugins/moment/moment.min.js')}}"></script>
<script src="{{URL::asset('/admin/plugins/daterangepicker/daterangepicker.js')}}"></script>

<!-- Tempusdominus Bootstrap 4 -->
<script src="{{URL::asset('/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>

<!-- overlayScrollbars -->
<script src="{{URL::asset('/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{URL::asset('/admin/dist/js/pages/dashboard.js')}}"></script>