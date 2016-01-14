<!-- jQuery 2.1.4 -->
<script src="{{ asset ("/bower_components/admin-lte/plugins/jQuery/jQuery-2.1.4.min.js") }}"></script>
<script src="{{ asset ("/bower_components/admin-lte/plugins/jQueryUI/jquery-ui.min.js") }}"></script>
<!-- Bootstrap 3.3.5 -->
<script src="{{ asset ("/bower_components/admin-lte/bootstrap/js/bootstrap.min.js") }}"></script>
<!-- DataTables -->
<script src="{{ asset ("/bower_components/admin-lte/plugins/datatables/jquery.dataTables.min.js") }}"></script>
<script src="{{ asset ("/bower_components/admin-lte/plugins/datatables/dataTables.bootstrap.min.js") }}"></script>
<!-- Select2 style -->
<script src="{{ asset ("/bower_components/admin-lte/plugins/select2/select2.min.js") }}"></script>
<!-- Slimscroll -->
<script src="{{ asset ("/bower_components/admin-lte/plugins/slimScroll/jquery.slimscroll.min.js") }}"></script>
<!-- FastClick -->
<script src="{{ asset ("/bower_components/admin-lte/plugins/fastclick/fastclick.min.js") }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset ("/bower_components/admin-lte/dist/js/app.min.js") }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset ("/bower_components/admin-lte/dist/js/demo.js") }}"></script>

<script src="https://blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>

<script src="{{ asset("js/jquery.iframe-transport.js")}}"></script>
<!-- The basic File Upload plugin -->
<script src="{{ asset("js/jquery.fileupload.js")}}"></script>
<!-- The File Upload processing plugin -->
<script src="{{ asset("js/jquery.fileupload-process.js")}}"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="{{ asset("js/jquery.fileupload-image.js")}}"></script>
<!-- The File Upload audio preview plugin -->
<script src="{{ asset("js/jquery.fileupload-audio.js")}}"></script>
<!-- The File Upload video preview plugin -->
<script src="{{ asset("js/jquery.fileupload-video.js")}}"></script>
<!-- The File Upload validation plugin -->
<script src="{{ asset("js/jquery.fileupload-validate.js")}}"></script>

<script>
  $(function () {
    $(".select2").select2();

    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
  });

  
  // fungsi delete untuk modal pada data desa
  $(".hapus").click(function(){
    var id = $(this).data('seq');
    $('.id_delete').val(id);
  });

  
</script>