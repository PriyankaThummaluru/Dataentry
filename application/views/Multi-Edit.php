
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



    </head>
    <form method="post" name="multipunlic" action="<?php echo base_url(); ?>Entrydata/displayEntry/priymulti">
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
                                    <a href="<?php echo base_url(); ?>Dashboard" class="nav-link">
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
                                            <a href="<?php echo base_url(); ?>view" class="nav-link">
                                                <i class="zmdi zmdi-layers nav-icon"></i>
                                                <p>View/Edit</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php echo base_url(); ?>multipleupdate" class="nav-link">
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
                                <div class="col-sm-3  ">
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
                                <div class="col-sm-3">
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
                                        <label for="newName" class="col-md-5 col-form-label cusLabel">Editions:</label>
                                        <div class="col-md-7">
                                            <select class="form-control  col-md-12 col-xs-12" id="mainminimodi" name="mainminimodi" type="text" >
                                                <option value="">Select</option>
                                                <option value="MAIN">Main</option>
                                                <option value="MINI">Mini</option>
                                                <option value="MAIN/MINI">Main/Mini</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            <div class="row">


                                <div class="col-sm-3">
                                    <div class="form-group row">
                                        <label for="newName" class="col-md-5 col-form-label cusLabel">Select:</label>
                                        <div class="col-md-7">
                                            <select class="form-control  col-md-12 col-xs-12 " id="filtertype" name="filtertype" type="text" >
                                                <option value=""></option>
                                                <option value="client">Client</option>
                                                <option value="product">Product</option>
                                                <option value="brand">Brand</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group row">
                                        <label for="newName" class="col-md-5 col-form-label cusLabel ">like:</label>
                                        <div class="col-md-7">
                                            <select class="form-control  col-md-12 col-xs-12 select2" id="likedata" name="likedata" type="text" >
                                                <option value=""></option>

                                            </select>
                                        </div>
                                    </div>
                                </div>


                               
                                
                                <!--                             <div class="col-sm-3">
                                                                <div class="form-group row">
                                                                    <label for="newName" class="col-md-5 col-form-label cusLabel">Publication:</label>
                                                                    <div class="col-md-7">
                                                                        <select class="form-control  col-md-12 col-xs-12 select2" type="text" name="middle-name" >
                                                                        <select class="form-control  col-md-12 col-xs-12" type="text" name="publicationmodi[]" id="publicationmodi"  multiple multiselect-search="true" multiselect-max-items="3" multiselect-select-all="true" >
                                                                            <option value="">Select</option>
                                <?php
                                foreach ($publication as $key => $var) {
//                                $arr = $publication[$key]['advtmis_pub_maineditions'] . '~' . $publication[$key]['advtmis_pub_code'] . '~' . $publication[$key]['advtmis_pub_name'];
//                         $arr[1]=
                                    ?>
                                    
                                                                                     <option type="checkbox" value="<?php echo $publication[$key]['advtmis_pub_code']; ?>"><?php echo $publication[$key]['advtmis_pub_name']; ?></option>
                                    <?php
                                }
                                ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>-->






                            </div>
                        </div>


                        <!-- part-1 ends -->

                    </div>
                    <!--<div class="content-wrapper ">-->
                    <!-- Content Header (Page header) -->
                    <!--<div class="content-header ">-->

                    <!--</div>-->



                    <div class="col-sm-12 p-3 bg-white shadow mt-1 mb-5">
                        <div class="row">
                            <!-- heading starts -->
                            <div class="col-sm-12  ">
                                <div class="row hborder ">
                                    <h3 class="heading pl-3"><i class='far fa-edit'> Details</i></h3>
                                    <div class="col-sm-11  d-flex justify-content-end " style="margin-top: -3px;">

                                    </div>
                                </div>
                                <!--<div class="row">-->
                                <!-- table starts -->
                                <!--                            <div class="col-sm-12 mt-1 mb-5">
                                                                <div class="table-responsive tfix">
                                                                    <div class="card-body">
                                                                        <div id="modificationscreen"> </div>   
                                                                    </div>
                                                                </div>
                                                            </div>-->
                                <div class="content-header ">
                                    <div class="col-sm-12 bg-white pt-3 shadow ">
                                        <div class="row ">

                                            <div class="col-sm-4">
                                                <div class="form-group row">
                                                    <label for="newName" class="col-md-5 col-form-label cusLabel">Publication:</label>
                                                    <div class="col-md-7">
                                                        <!--<select class="form-control  col-md-12 col-xs-12 select2" type="text" name="middle-name" >-->
                                                        <select class="form-control  col-md-12 col-xs-12" type="text" name="publicationmodi[]" id="publicationmodi"  multiple multiselect-search="true" multiselect-max-items="3" multiselect-select-all="true" >
                                                            <!--<option value="">Select</option>-->
                                                            <?php
                                                            foreach ($publication as $key => $var) {
//                                $arr = $publication[$key]['advtmis_pub_maineditions'] . '~' . $publication[$key]['advtmis_pub_code'] . '~' . $publication[$key]['advtmis_pub_name'];
//                         $arr[1]=
                                                                ?>

                                                                <option type="checkbox" value="<?php echo $publication[$key]['advtmis_pub_code']; ?>"><?php echo $publication[$key]['advtmis_pub_name']; ?></option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <div class="form-group row">
                                                    <label for="newName" class="col-md-5 col-form-label cusLabel">Category:</label>
                                                    <div class="col-md-7">
                                                        <!--<select class="form-control  col-md-12 col-xs-12 select2" type="text" name="middle-name" >-->
                                                        <select class="form-control  col-md-12 col-xs-12" type="text" name="maincategory[]" id="maincategory"  multiple multiselect-search="true" multiselect-max-items="3" multiselect-select-all="true" >
                                                            <!--<option value="">Select</option>-->
<?php
foreach ($maincategory as $keyy => $vary) {
//                                $arr = $publication[$key]['advtmis_pub_maineditions'] . '~' . $publication[$key]['advtmis_pub_code'] . '~' . $publication[$key]['advtmis_pub_name'];
//                         $arr[1]=
    ?>

                                                                <option type="checkbox" value="<?php echo $maincategory[$keyy]['advtmis_catg_mainname']; ?>"><?php echo $maincategory[$keyy]['advtmis_catg_mainname']; ?></option>
    <?php
}
?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

 </div>
<div class="row">

                                            <div class="col-sm-4">
                                                <div class="form-group row">
                                                    <label for="newName" class="col-md-5 col-form-label cusLabel">Modification fields:</label>
                                                    <div class="col-md-7">
                                                        <select class="form-control  col-md-12 col-xs-12" id="updatefields" name="updatefields[]" multiple multiselect-search="true" multiselect-max-items="3" multiselect-select-all="true" >

                                                            <option type="checkbox"  value="client">Client</option>
                                                            <option type="checkbox"  value="product">Product</option>
                                                            <option type="checkbox"  value="brand">Brand</option>
                                                            <option type="checkbox"  value="maincat">Main Category</option>
                                                            <option type="checkbox"  value="subcat">Sub Category</option>
                                                            <option type="checkbox"  value="place">Place</option>
                                                            <option type="checkbox"  value="agency">Agency</option>
                                                            <option type="checkbox"  value="promoted">Promoted By</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>

                                        <div class="col-sm-1  text-center">
                                            <a href="#" id="multiupdate" name="multiupdate" class="btn btn-info">Show</a>
                                                                      <!--<a href="<?php echo base_url(); ?>Entrydata/displayEntry/priyankamulti" id="showw" name="showw" class="btn btn-info">Show</a>-->
                                            <!--<input type="submit" name="multiupdate" id="multiupdate" value="Show Details" placeholder="Update">-->
                                                                      <!--<a href="<?php echo base_url(); ?>Entrydata/displayEntry/priyankamulti" id="showw" name="showw" class="btn btn-info">Show</a>-->
                                        </div>

                                    </div>
                                </div>
                                <!--<div class="content-header ">
                                <div class="col-sm-3">
                                                                <div class="form-group row">
                                                                    <label for="newName" class="col-md-5 col-form-label cusLabel">Select:</label>
                                                                    <div class="col-md-7">
                                                                        <select class="form-control  col-md-12 col-xs-12 " id="filtertype" name="filtertype" type="text" >
                                                                            <option value=""></option>
                                                                            <option value="client">Client</option>
                                                                            <option value="product">Product</option>
                                                                            <option value="brand">Brand</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                   <div class="col-sm-3">
                                                                <div class="form-group row">
                                                                    <label for="newName" class="col-md-5 col-form-label cusLabel ">like:</label>
                                                                    <div class="col-md-7">
                                                                        <select class="form-control  col-md-12 col-xs-12 select2" id="likedata" name="likedata" type="text" >
                                                                            <option value=""></option>
                                                                           
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </div>-->
                                <!--<div class="content-header ">
                                                             <div class="col-sm-3">
                                                                <div class="form-group row">
                                                                    <label for="newName" class="col-md-5 col-form-label cusLabel">select:</label>
                                                                    <div class="col-md-7">
                                                                        <select class="form-control  col-md-12 col-xs-12 select2" type="text" name="middle-name" >
                                                                        <select class="form-control  col-md-12 col-xs-12 " type="text" name="clients" id="clients"  multiple multiselect-search="true" multiselect-max-items="3">
                                                                            <option value="">Select</option>
<?php
foreach ($client as $ckey => $cvar) {
//                                $arr = $publication[$key]['advtmis_pub_maineditions'] . '~' . $publication[$key]['advtmis_pub_code'] . '~' . $publication[$key]['advtmis_pub_name'];
//                         $arr[1]=
    ?>
                                    
                                                                                     <option type="checkbox" value="<?php echo $client[$ckey]['mst014_clname']; ?>"><?php echo $client[$ckey]['mst014_clname']; ?></option>
                                    <?php
                                }
                                ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>-->
                            </div>
                        </div>





                        <!--</div>-->
                    </div>

                    <div class="col-sm-12 p-3 bg-white shadow mt-1 mb-5">
                        <div class="row">
                            <!-- heading starts -->
                            <div class="col-sm-12  ">
                                <div class="row hborder ">
                                    <h3 class="heading pl-3"><i class='far fa-edit'> Records </i></h3>
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
<script src="<?php echo site_url ?>assets/plugins/multiselect-dropdown-main/multiselect-dropdown.js"></script>

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


        $('#logoutb').on('click', function (event) {
            event.preventDefault();
            location.href = "http://172.17.12.129/Dataentry/index.php/Entrydata/login";
        });

    });
</script>


<script>
    $(function () {

//         $('.multiselect-dropdown-search').multiselect({
//            includeSelectAllOption: true
//        });
        $('.select2').select2()
        $('#publicationmodi').on('change', function () {
            var publicationsofmulti = $('#publicationmodi').val();
//alert(publicationsofmulti);
        });
//        $('#multiupdate').on('click', function () {
//            screendata();
//        });
        $('#multiupdate').on('click', function () {
            screendata();
        });


        function screendata() {
            var fromdate = $('#fromdate').val();
            var todate = $('#todate').val();
            var typefilter = $('#filtertype').val();
            var liketype = $('#likedata').val();
            var pubtype = $('#publicationmodi').val();
            var mainmini = $("#mainminimodi").val();
            var maincate = $("#maincategory").val();


            $.ajax({
                type: 'POST',
                url: '<?php echo base_url(); ?>/Entrydata/ajaxmultishow/',

                data: {'fromdate': fromdate, 'todate': todate, 'pubtype': pubtype, 'mainmini': mainmini, 'typefilter': typefilter, 'liketype': liketype, 'maincate': maincate},
                success: function (data) {
                    $("#modificationscreen").html(data);
//                    alert(data);
                    let srlno = 0;
                    $('.serialno').click(function () {
////            var serialno = document.getElementById('srlno').getElementsByTagName('a')
                        srlno = $(this).text();
                        $(this).html(`<span style="background :red; width:200px;">${srlno}</span>`).css("fontSize", "14px");
                    });
                }
            });
        }




        $('#filtertype').on('change', function () {
//            alert("changed");
            clientmulti();
        });





        function clientmulti() {

            var typeoffilter = $('#filtertype').val();
            if (typeoffilter == 'client')
            {
                alert("client");
                $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url(); ?>Entrydata/ajaxmulticlient/',
                    success: function (data) {
                        var client = jQuery.parseJSON(data);
                        if (client) {
                            $('#likedata').html('');
                            var option = $('<option value="0">Select</option>');
                            $('#likedata').append(option);
                            $(client).each(function () {
                                var option = $('<option />');
                                var x = this.mst014_clname;
                                option.attr('value', x).text(this.mst014_clname);
                                $('#likedata').append(option);
                            });
                        }
//                            console.log(data);
                    }
                });
            } else if (typeoffilter == 'product') {
                alert("product");
                $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url(); ?>Entrydata/ajaxmultiproduct/',
                    success: function (data) {
                        var client = jQuery.parseJSON(data);
                        if (client) {
                            $('#likedata').html('');
                            var option = $('<option value="0">Select</option>');
                            $('#likedata').append(option);
                            $(client).each(function () {
                                var option = $('<option />');
                                var x = this.mst011_prodname;
                                option.attr('value', x).text(this.mst011_prodname);
                                $('#likedata').append(option);
                            });
                        }
//                            console.log(data);
                    }
                });

            } else if (typeoffilter == 'brand') {
                alert("brand");
                $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url(); ?>Entrydata/ajaxmultibrand/',
                    success: function (data) {
                        var client = jQuery.parseJSON(data);
                        if (client) {
                            $('#likedata').html('');
                            var option = $('<option value="0">Select</option>');
                            $('#likedata').append(option);
                            $(client).each(function () {
                                var option = $('<option />');
                                var x = this.mst012_brname;
                                option.attr('value', x).text(this.mst012_brname);
                                $('#likedata').append(option);
                            });
                        }
//                            console.log(data);
                    }
                });
            }
        }


        function total_spaces() {
            var date = $('#date').val();
            var mainmini = $('#mainmini').val();
            var public = $('#publication').val();
            var pubcode = public.split('~');
            $.ajax({

                type: 'POST',
                url: '<?php echo base_url(); ?>Entrydata/ajaxtotalsizespace/',
                data: {'date': date, 'public': pubcode[1], 'mainmini': mainmini},

                success: function (data) {
                    var client = jQuery.parseJSON(data);
                    if (client) {
                        $('#likedata').html('');
                        var option = $('<option value="0">Select</option>');
                        $('#likedata').append(option);
                        $(client).each(function () {
                            var option = $('<option />');
                            var x = this.mst014_clname;
                            option.attr('value', x).text(this.mst014_clname);
                            $('#likedata').append(option);
                        });
                    }
//                            console.log(data);
                }
            });
        }





    })

</script>



</body>

</html>