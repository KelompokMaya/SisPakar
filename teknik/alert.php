<link rel="stylesheet" type="text/css" href="../proses/sweetalert-master/dist/sweetalert.css">
      <script type="text/javascript" src="../proses/sweetalert-master/dist/sweetalert.min.js"></script>

<!---script alret logout-->
        <script>
        jQuery(document).ready(function($){
            $('#logout').on('click',function(){
               var getLink = $(this).attr('href');
              

                swal({
                        title: "Apakah Anda Yakin Ingin Keluar?",
                        
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Ya",
                        closeOnConfirm: false
                        },function(){
                           window.location="../logout.php";
                    });
                return false;
            });
        });
    </script>

 