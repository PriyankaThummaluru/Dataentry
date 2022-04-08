
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Other-publication-entry-screen</title>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo site_url ?>assets/css/fontawesome-free/css/all.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo site_url ?>assets/layout page assests/main dashboard Pannel.min.css">
        <!-- Dashboard style -->
        <link rel="stylesheet" href="<?php echo site_url ?>assets/css/my pages/transactions.css">
        <link rel="stylesheet" href="<?php echo site_url ?>assets/css/my pages/myTableresponsive.css">
        <!-- Animations -->
        <link rel="stylesheet" href="<?php echo site_url ?>assets/css/my pages/animations.css">
        <!-- Date Picker -->
        <link rel="stylesheet" href="<?php echo site_url ?>assets/plugins/datepicker ui/jquery-ui.css">
        <!-- Single-Select with Search -->
        <link rel="stylesheet" href="<?php echo site_url ?>assets/plugins/selectSearch/select2.min.css">
        <link rel="stylesheet" href="<?php echo site_url ?>assets/plugins/selectSearch/select2-bootstrap4.min.css">
        <!-- datatable -->
        <link rel="stylesheet" href="<?php echo site_url ?>assets/plugins/Ndatatables/dataTables.bootstrap4.min.css">
        <!-- <link rel="stylesheet" href="<?php echo site_url ?>assets/plugins/Ndatatables/responsive.bootstrap4.min.css"> -->
        <link rel="stylesheet" href="<?php echo site_url ?>assets/plugins/Ndatatables/buttons.bootstrap4.min.css">
        <style>
            
            input[type=text]{
                width: 130%;
            }
        </style>
    </head>
<form method="post" name="myFrom">
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light sticky-top">
                <!-- Left navbar links -->
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="zmdi zmdi-menu"></i></a>
                    </li>
                    <a class="navbar-brand text-green font-weight-bolder display-6 justify-content-center" href="#">ADVT
                        MIS</a>
                </ul>

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">

                    <!-- Navbar Search -->
                    <li class="nav-item dropdown">

                    </li>
                    <!-- Notifications Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="far fa-bell"></i>
                            <span class="badge badge-warning navbar-badge">15</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <span class="dropdown-item dropdown-header">15 Notifications</span>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-envelope mr-2"></i> 4 new messages
                                <span class="float-right text-muted text-sm">3 mins</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-users mr-2"></i> 8 friend requests
                                <span class="float-right text-muted text-sm">12 hours</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-file mr-2"></i> 3 new reports
                                <span class="float-right text-muted text-sm">2 days</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class='fas fa-user-circle' style='font-size:25px;color:rgb(117, 116, 116)'></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu1-lg dropdown-menu-right">

                            <a href="#" class="dropdown-item">
                                <i class="fas fa-file mr-2"></i> Account
                            </a>
                            <div class="text-center pt-1">
                                <!--<a href="loginPage.html" class="btn btn-sm-danger bg-dark btn-sm">Log Out</a>-->
                                 <input type="button" placeholder="Log Out" value="Log Out" id="logoutb" class="btn btn-sm-danger bg-dark btn-sm">
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="#" class="brand-link">
                    <span class="brand-text font-weight-light"><img src="<?php echo site_url ?>assets/images/ADVT-LOGO.png" alt=" CLASSIFIELDS"
                                                                    width="180" height="55" class="pl-4"></span>
                </a>


                <div class="sidebar">
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <li class="nav-header">Menu</li>
                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>Entrydata/display/<?php echo get_cookie('usernamepwd');?>" class="nav-link">
                                    <i class="zmdi zmdi-view-dashboard nav-icon text-primary"></i>
                                    <p>Dashboard</p>
                                </a>
                            </li>

                            <!-- dropdown -->
                            <li class="nav-item">
                                <a href="#" class="nav-link ">
                                    <i class="zmdi zmdi-format-indent-decrease text-success nav-icon"></i>
                                    <p>
                                        Other Publication Entry Screen
                                        <i class="right zmdi zmdi-chevron-down  ml-3"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview ml-2">

                                    <li class="nav-item">
                                        <a href="<?php echo base_url(); ?>Entrydata/displayEntry/bhargavi" class="nav-link">
                                            <i class="zmdi zmdi-layers nav-icon"></i>
                                            <p>Entry</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo base_url(); ?>Entrydata/displayViewEdit" class="nav-link">
                                            <i class="zmdi zmdi-layers nav-icon"></i>
                                            <p>View/Edit</p>
                                        </a>
                                    </li>
                                      <li class="nav-item">
                                    <a href="<?php echo base_url(); ?>Entrydata/displayMultiEdit" class="nav-link">
                                        <i class="zmdi zmdi-layers nav-icon"></i>
                                        <p>Multi pub Edit</p>
                                    </a>
                                </li>
                                </ul>
                            </li>





                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper ">
                <!-- Content Header (Page header) -->
                <div class="content-header ">
                    <div class="container-fluid ">
                        <div class="row mb-2">
                            <div class="col-sm-6 animatable bounceInLeft">
                                <!--breadcrumb starts -->
                                <ol class="breadcrumb float-sm-left">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Other Publication Details</li>
                                    <li class="breadcrumb-item ">View-Edit</li>
                                </ol>
                            </div>

                            <!--breadcrumb Ends -->
                        </div>
                    </div>
                    <div class="col-sm-12 bg-white pt-3 shadow ">
                        <div class="row ">
                            <div class="col-sm-2  ">
                                <div class="form-group row">
                                    <label for="newName" class="col-sm-5 col-form-label cusLabel">From Date:</label>
                                    <div class="col-md-7 ">
                                        <div class="date-container">
                                            <input type="text" class="form-control datepicker" name="fromdate" id="fromdate" autocomplete="off">
                                            <i class="date-icon fa fa-calendar " aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group row">
                                    <label for="newName" class="col-sm-5 col-form-label cusLabel">To Date:</label>
                                    <div class="col-md-7 ">
                                        <div class="date-container">
                                            <input type="text" class="form-control datepicker" name="todate" id="todate" autocomplete="off">
                                            <i class="date-icon fa fa-calendar " aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group row">
                                    <label for="newName" class="col-md-5 col-form-label cusLabel">Publication:</label>
                                    <div class="col-md-7">
                                        <!--<select class="form-control  col-md-12 col-xs-12 select2" type="text" name="middle-name" >-->
                                        <select class="form-control  col-md-12 col-xs-12 select2" type="text" name="publicationmodi" id="publicationmodi">
                                            <option value="">Select</option>
                                            <?php
                                            foreach ($publication as $key => $var) {
//                                $arr = $publication[$key]['advtmis_pub_maineditions'] . '~' . $publication[$key]['advtmis_pub_code'] . '~' . $publication[$key]['advtmis_pub_name'];
//                         $arr[1]=
                                                ?>
                                                 <option value="<?php echo $publication[$key]['advtmis_pub_name']; ?>"><?php echo $publication[$key]['advtmis_pub_name']; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>



                            <div class="col-sm-3">
                                <div class="form-group row">
                                    <label for="newName" class="col-md-5 col-form-label cusLabel">Editions:</label>
                                    <div class="col-md-7">
                                        <select class="form-control  col-md-12 col-xs-12" id="mainminimodi" name="mainminimodi" type="text" >
                                            <option value="">Select</option>
                                            <option value="MAIN">Main</option>
                                            <option value="MINI">Mini</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-1  text-center">
                                <a href="#" id="showw" name="showw" class="btn btn-info">Show</a>
                            </div>



                        </div>
                    </div>


                    <!-- part-1 ends -->

                </div>



                <div class="col-sm-12 p-3 bg-white shadow mt-1 mb-5">
                    <div class="row">
                        <!-- heading starts -->
                        <div class="col-sm-12  ">
                            <div class="row hborder ">
                                <h3 class="heading pl-3"><i class='far fa-edit'> Details</i></h3>
                                <div class="col-sm-11  d-flex justify-content-end " style="margin-top: -3px;">

                                </div>
                            </div>
                            <!-- table starts -->
                            <div class="col-sm-12 mt-1 mb-5">
                                <div class="table-responsive tfix">
                                    <div class="card-body">
                                        <div id="modificationscreen"> </div>   
                                    </div>
                                </div>
                            </div>
                        </div>





                    </div>
                </div>

            </div>

        </div>
        <!--part-1 Ends -->


    </div>
</div>
</div>



</div>
<!-- Content Header (Page header) ends -->
</div>
<!-- Content Wrapper. Contains page content ends-->
<!--  Add Matter Ends -->
</form>
<footer class="bg-white py-2 fixed-bottom">

    <div class="text-center">
        <strong class="text-info">© 2021 All Rights Reserved & Powered By Margadarsi Computers.</strong>
    </div>

</footer>
</div>
<!-- container-fluid Ends -->
<!-- jquery -->
<script src="<?php echo site_url ?>assets/jquery/jquery.min.js"></script>
<!-- ajax -->
<!-- <script src="<?php echo site_url ?>assets/jquery/jquery_ajax.min.js"></script> -->
<!-- Bootstrap 4 -->
<script src="<?php echo site_url ?>assets/css/bootstrap/bootstrap.min.js"></script>
<script src="<?php echo site_url ?>assets/css/bootstrap/bootstrap.bundle.min.js"></script>
<!-- Dashboard Pannel js -->
<script src="<?php echo site_url ?>assets/layout page assests/main dashboard pannel.js"></script>
<!-- Date picker -->
<script src="<?php echo site_url ?>assets/plugins/datepicker ui/jquery-ui.js"></script>
<script src="<?php echo site_url ?>assets/plugins/datepicker ui/datepickeractive.js"></script>
<!-- animations -->
<script src="<?php echo site_url ?>assets/jquery/animationOnScroll.js"></script>
<!-- Single select -->
<script src="<?php echo site_url ?>assets/plugins/selectSearch/select2.full.min.js"></script>
<!--<script src="<?php echo site_url ?>assets/plugins/selectSearch/select2.full.min.js"></script>-->
<!-- datatable -->
<script src="<?php echo site_url ?>assets/plugins/Ndatatables/jquery.dataTables.min.js"></script>
<script src="<?php echo site_url ?>assets/plugins/Ndatatables/dataTables.bootstrap4.min.js"></script>
<!-- <script src="<?php echo site_url ?>assets/plugins/Ndatatables/dataTables.responsive.min.js"></script> -->
<script src="<?php echo site_url ?>assets/plugins/Ndatatables/responsive.bootstrap4.min.js"></script>
<script src="<?php echo site_url ?>assets/plugins/Ndatatables/dataTables.buttons.min.js"></script>
<script src="<?php echo site_url ?>assets/plugins/Ndatatables/buttons.bootstrap4.min.js"></script>
<script src="<?php echo site_url ?>assets/plugins/Ndatatables/jszip.min.js"></script>
<script src="<?php echo site_url ?>assets/plugins/Ndatatables/pdfmake.min.js"></script>
<script src="<?php echo site_url ?>assets/plugins/Ndatatables/vfs_fonts.js"></script>
<script src="<?php echo site_url ?>assets/plugins/Ndatatables/buttons.html5.min.js"></script>
<script src="<?php echo site_url ?>assets/plugins/Ndatatables/buttons.print.min.js"></script>
<script src="<?php echo site_url ?>assets/plugins/Ndatatables/buttons.colVis.min.js"></script>

<script>
    
//     $('#publicationmodi').on('click', function () {
////    function removeFocus(){
//      document.myFrom.publicationmodi.blur();
////    }
//     });

$(document).on("select2:open", () => {
  document.querySelector(".select2-container--open .select2-search__field").focus()
})
    
    
    $(function () {
//        class="date-icon fa fa-calendar "
//        document.getElementsByClassName('date-icon')[0].style.visibility = 'hidden';
//        document.getElementsByClassName('date-icon')[1].style.visibility = 'hidden';
      
        
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
        
        
          $('#logoutb').on('click', function ( event ) {
  event.preventDefault();
               location.href = "http://172.17.12.129/Dataentry/index.php/Entrydata/login";
        });
        
    });
</script>

<script>
    $(function () {
        $('.select2').select2()


        $('#showw').on('click', function () {
            screendata();
        });
        $('#publicationmodi').on('click', function () {
            $("span.select2-container--focus").remove();
//            $("tagname").addclass("unlistened");
//           document.getElementsByTagName("H1")[0].removeAttribute("class");
        });


        function screendata() {
            var fromdate = $("#fromdate").val();
            var todate = $("#todate").val();
            var pubtype = $("#publicationmodi").val();
            var mainmini = $("#mainminimodi").val();
//            alert(fromdate);
//            alert(todate);
            if(fromdate > todate){
                alert('Select Proper Range Of Dates')
                return false;
            }
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url(); ?>/Entrydata/ajaxdateformodification/',

                data: {'fromdate': fromdate, 'todate': todate, 'pubtype': pubtype, 'mainmini': mainmini},
                success: function (data) {
                    $("#modificationscreen").html(data);
                    let srlno = 0;
                    $('.serialno').click(function () {
////            var serialno = document.getElementById('srlno').getElementsByTagName('a')
                        srlno = $(this).text();
                        $(this).html(`<span style="background :red; width:200px;">${srlno}</span>`).css("fontSize", "14px");
                    });
                }
            });
        }
        
//          $('#fromdate').on('change', function () {
//    datecheck();
//  });
//  
//    $('#todate').on('change', function () {
//    datecheck();
//  });
//        
//        function datecheck(){
//         var fromdate = $('#fromdate').val();
//         var todate = $('#todate').val();
////         alert(fromdate);
////         alert(todate);
//         var today = new Date();
////         alert(today);
//
//var newdate = String(today.getDate()).padStart(2, '0')+'-'+String(today.getMonth()+1).padStart(2, '0')+'-'+today.getFullYear();
//alert(newdate+" is");
////alert(today);
//if(( fromdate > newdate ) || ( todate > newdate )){
////if(todate  > today){
//alert("priyanka");
//    alert("please select valid date");
//      $('#fromdate').val(newdate);
//     $('#todate').val(newdate);
//// }
////    return false;
//}
//
//}



    })

</script>



</body>

</html>