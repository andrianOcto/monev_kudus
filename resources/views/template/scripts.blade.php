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
</script>

<script>
    var FormStuff = {

      init: function() {
        this.applyConditionalRequired();
        this.bindUIActions();
      },

      bindUIActions: function() {
        $("input[type='radio']").on("change", this.applyConditionalRequired);
      },

      applyConditionalRequired: function() {

        $(".require-if-active").each(function() {
          var el = $(this);
          if ($(el.data("require-pair")).is(":checked")) {
            el.prop("required", true);
          } else {
            el.prop("required", false);
          }
        });

      }

    };

    FormStuff.init();
</script>

<script>
    // fungsi delete untuk modal pada data desa
    $(".hapus").click(function(){
        var id = $(this).data('seq');
        $('.id_delete').val(id);
    });
</script>

<script type="text/javascript">
        $('#kecamatan').change(function(){
            var id_kecamatan = $(this).val();
            console.log(id_kecamatan);
            desa(id_kecamatan);

        });

        function desa(id){
           $.ajax({
          type: 'GET',
          url:'http://localhost:8000/desa/'+id,
          success: function(data) {
            //called when successful
            var nama = '<option value="all">-Pilih Desa/Kelurahan-</option>';
              for(var i in data){
                  nama += '<option value="'+data[i].id+'">'+ data[i].desa+'</option>';                        
              }
              $('#desa').html(nama);    
           console.log(data);
          },
          error: function(e) {
            //called when there is an error
            //console.log(e.message);
          }
        });
       }
    </script>