 
  <footer class="main-footer">
    <strong>Copyright &copy; <?php echo date('Y') ?> </strong> All rights
    reserved.
  </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
 <script src="dist/js/select2.min.js"></script>
<script>
   $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- DataTables -->
<script src="dist/js/jquery.dataTables.min.js"></script>
<script src="dist/js/dataTables.rowReorder.min.js"></script>
<script src="dist/js/dataTables.responsive.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- Ip validation -->
<script src="dist/js/jquery.mask.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>


<script>


    // check uncheck
    $( document ).ready( function() {
        $( '#check-uncheck' ).on( 'click', function() {
            if( $( this ).text() == 'Select All' ){
                $( 'input:checkbox' ).each( function() {
                    this.checked = true;
                } );
                $( this ).text( 'Reject All' )
            }else{
                 $('input:checkbox').each( function() {
                    this.checked = false;
                } );
                $( this ).text( 'Select All' )
            }
        } );
    });


  // data table
    $(document).ready(function() {
        var table = $('#example').DataTable( {
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true
        } );
        $('.sl').select2();
    } );

  // get data by router id
   function runScript( dom ) {
      var $id =  $( dom ).data( 'id' );
      var checked = []
        $("input[name='router_id[]']:checked").each(function ()
        {
            checked.push(parseInt($(this).val()));
        });

//     checked.forEach(function(element) {
//   console.log(element);
// });
      
      $.ajax( {
          url: 'include_file/test.php',
          type: 'post',
          data: { id: $id, router_id: checked },
          success: function( response )
          {
              console.log( response );
          }
      } );
  }


     // IP VALIDATION START


    // BEGIN AUTO DOT AFTER INPUT 3 CHARACTER
    $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', { translation: { 'Z': { pattern: /[0-9]/, optional: true } } });
    // END AUTO DOT AFTER INPUT 3 CHARACTER

    $( '#save' ).click( function() {
      var ip_address_field = $( '#ip_address' ).val();

      var ip_validate = ValidateIPaddress( ip_address_field );

      // ValidateIPaddress( ip_address_field ) --- this is calling the IP validator function
      if( ValidateIPaddress( ip_address_field ) == true ) {
        // $( '.success-message-box' ).show();
        $( '.error-message-box' ).hide();
      }else{
        $( '.error-message-box' ).show();
        // $( '.success-message-box' ).hide();
      }
    } );


    // BEGIN IP VALIDATOR FUNCTION
    function ValidateIPaddress( ipaddress ) {
      if ( /^(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/.test( ipaddress) ) {
        return ( true )
      }
      return ( false )
    }
    // END IP VALIDATOR FUNCTION


    // IP VALIDATION END

  
</script>


</body>
</html>
