<div class="footer">
    <p>&copy;copy right by Imran Rahman <a href="">This website develop by Imran     
    rahman</a>
    </p>
   </div>  
 
</div><!--end main page-->     
</div><!--end main--> 
</div><!--end container-->

<script src="js/classie.js"></script>
    <script src="js/svgLoader.js"></script>
    <script>
      (function() {
        var pageWrap = document.getElementById( 'pagewrap' ),
          pages = [].slice.call( pageWrap.querySelectorAll( 'div.container' ) ),
          currentPage = 0,
          triggerLoading = [].slice.call( pageWrap.querySelectorAll( 'a.pageload-link' ) ),
          loader = new SVGLoader( document.getElementById( 'loader' ), { speedIn : 300, easingIn : mina.easeinout } );

        function init() {
          triggerLoading.forEach( function( trigger ) {
            trigger.addEventListener( 'click', function( ev ) {
              ev.preventDefault();
              loader.show();
              // after some time hide loader
              setTimeout( function() {
                loader.hide();

                classie.removeClass( pages[ currentPage ], 'show' );
                // update..
                currentPage = currentPage ? 0 : 1;
                classie.addClass( pages[ currentPage ], 'show' );

              }, 2000 );
            } );
          } );  
        }

        init();
      })();
    </script>
<!-- main jquery -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js">
   </script>
<script src="js/jquery-1.11.3.min.js"></script>
<!-- this id modal -->
  <script>
 $(document).ready(function(){
    $( "#myModal" ).hover(function() {
           $('.modal').modal({
        show: true
    });
  });  
});
</script>
<!-- this is modal -->

   <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"></script>')
    </script>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  <script type="text/javascript">
     $(window).on( 'resize', function () {
  console.log( 'Resize', $(window).width(), $(window).height() );
} );
   </script>



<script src="js/main.js"></script>
 <!-- data table -->
      <script src="js/jquery-1.11.3.min.js"></script>
    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/tabletools/2.2.4/js/dataTables.tableTools.min.js">
    </script>
    <link rel="stylesheet" type="text/css"
        href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" type="text/css"
        href="//cdn.datatables.net/tabletools/2.2.4/css/dataTables.tableTools.css" />


 <script type="text/javascript">
        $(document).ready(function () {
            var table = $('#myTable').dataTable();
            var tableTools = new $.fn.dataTable.TableTools(table, {
                'aButtons': [
                    {
                        'sExtends': 'xls',
                        'sButtonText': 'Save to Excel',
                        'sFileName': 'Data.xls'
                    },
                    {
                        'sExtends': 'print',
                        'bShowAll': true,
                    },
                    {
                        'sExtends': 'pdf',
                        'bFooter': false
                    },
                    'copy',
                    'csv'
                ],
                'sSwfPath': '//cdn.datatables.net/tabletools/2.2.4/swf/copy_csv_xls_pdf.swf'
            });
            $(tableTools.fnContainer()).insertBefore('#myTable_wrapper');
        });
    </script>
    <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>



</body>
</html>