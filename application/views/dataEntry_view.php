
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
        <!-- multiselect -->
        <link rel="stylesheet" href="<?php echo site_url ?>assets/plugins/Drop-Down-Combo-Tree/style.css">


        <style>
            /*@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');*/
            * {
                font-family: 'Poppins';
            }

            .checkbox-lg {
                top: -3px;
                width: 18px;
                height: 20px;
            }

            .btn {
                padding-left: 2.5rem;
                padding-right: 2.5rem;
            }

            .login-form {
                margin-top: 10%;
            }

            body {
                background-color: rgb(143 202 240);
            }

            .mylabel {
                font-weight: 500;
                color: rgb(19, 99, 226);
            }

            label:not(.form-check-label):not(.custom-file-label) {
                font-weight: 500;
            }

            .field-icon {
                float: right;
                margin-left: -25px;
                margin-top: -25px;
                position: relative;
                z-index: 2;
                cursor: pointer;
                right: 6px;
            }
        </style>

    </head>

    <body class="hold-transition sidebar-mini layout-fixed">
         <form action="<?php echo base_url(); ?>Entrydata/display" name="myForm" method="post">
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
                                <a href="loginPage.html" class="btn btn-sm-danger bg-dark btn-sm">Log Out</a>
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
                                <a href="#" class="nav-link">
                                    <i class="zmdi zmdi-view-dashboard nav-icon text-primary"></i>
                                    <p>Dashboard</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="Other-publication-entry-screen.html" class="nav-link">
                                    <i class="zmdi zmdi-developer-board text-yellow nav-icon"></i>
                                    <p>Other Publication Entry Screen</p>
                                </a>
                            </li>
                            <!-- dropdown -->
                            <li class="nav-item">
                                <a href="#" class="nav-link ">
                                    <i class="zmdi zmdi-format-indent-decrease text-success nav-icon"></i>
                                    <p>
                                        Dropdown
                                        <i class="right zmdi zmdi-chevron-down  ml-3"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview ml-2">

                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="zmdi zmdi-layers nav-icon"></i>
                                            <p>Test-2</p>
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
                                </ol>
                            </div>

                            <!--breadcrumb Ends -->
                        </div>
                    </div>
                    <div class="col-sm-12 bg-white pt-3 shadow ">
                        <div class="row ">
                            <div class="col-sm-3  ">
                                <div class="form-group row">
                                    <label for="newName" class="col-sm-5 col-form-label cusLabel">Date:</label>
                                    <div class="col-md-7 ">
                                        <div class="date-container">
                                            <input type="text" class="form-control datepicker" name="date" id="date" autocomplete="off">
                                            <!--<i class="date-icon fa fa-calendar " aria-hidden="true"></i>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group row">
                                    <label for="newName" class="col-md-5 col-form-label cusLabel">Publication:</label>
                                    <div class="col-md-7">
                                        <select class="form-control  col-md-12 col-xs-12" id="publication" name="publication" type="text" name="middle-name">
                                            <?php
                                            foreach ($publication as $key => $var) {
                                                $arr = $publication[$key]['advtmis_pub_maineditions'] . '~' . $publication[$key]['advtmis_pub_code'] . '~' . $publication[$key]['advtmis_pub_name'];
//                         $arr[1]=
                                                ?>

                                                <option value="<?php echo $arr; ?>"><?php echo $publication[$key]['advtmis_pub_name']; ?></option>
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
                                        <select class="form-control  col-md-12 col-xs-12" id="mainmini" name="mainmini" type="text" name="middle-name">
                                            <option value="">Select</option>
                                            <option value="MAIN">Main</option>
                                            <option value="MINI">Mini</option>
                                            </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group row">
                                    <label for="newName" class="col-md-5 col-form-label cusLabel">Published Editions:</label>
                                    <div class="col-md-7">
                                        <input type="text" id="editions" name="editions[]" class="form-control input-sm example" placeholder="Select" autocomplete="off">
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <!-- part-1 ends -->
                    <div class="col-sm-12 bg-white pt-2 shadow mt-3 ">
                        <h3 class=" headinggs "><i class='far fa-edit'>Heading</i></h3>
                        <div class="row">
                            <!-- sub1 -->
                            <div class="col-sm-3 border-right">
                                <div class="col-sm-12">
                                    <div class="form-group row">
                                        <label for="newName" class="col-md-5 col-form-label cusLabel">Main Category:</label>
                                        <div class="col-md-7">
                                            <select class="form-control  col-md-12 col-xs-12"  name="maincat" id="maincat"  type="text" name="middle-name">
                                               
                            <?php
                            foreach ($maincategory as $key => $var) {
                                $catinfor = $maincategory[$key]['advtmis_catg_mainname'] . '~' . $maincategory[$key]['advtmis_catg_code'] . '~' . $maincategory[$key]['advtmis_catg_srlno'] . '~' . $maincategory[$key]['advtmis_catg_subname'] . '~' . $maincategory[$key]['advtmis_catg_adcode'];
                                ?>
                                <option value="<?php echo $catinfor; ?>"><?php echo $maincategory[$key]['advtmis_catg_mainname']; ?></option>
                                <?php
                            }
                            ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group row">
                                        <label for="newName" class="col-md-5 col-form-label cusLabel">Sub Category:</label>
                                        <div class="col-md-7">
                                            <select class="form-control  col-md-12 col-xs-12" name="subcat" id="subcat" type="text" name="middle-name">
                                               

                            <option value=""> </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- sub2 -->
                            <div class="col-sm-6 border-right">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group row">
                                            <label for="newName" class="col-md-5 col-form-label cusLabel">Client
                                                Name:</label>
                                            <div class="col-md-7">
                                                <select class="form-control  col-md-12 col-xs-12" name="client" id="client" type="text" name="middle-name">
                                                     
                            <?php
                            foreach ($client as $key => $var) {
                                $clientinf = $client[$key]['mst014_clcode'] . '~' . $clientinf = $client[$key]['mst014_clname'];
                                ?>

                                <option  value="<?php echo $clientinf; ?>"><?php echo $client[$key]['mst014_clname']; ?></option>
                                <?php
                            }
                            ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group row">
                                            <label for="newName" class="col-md-5 col-form-label cusLabel">Product:</label>
                                            <div class="col-md-7">
                                                <select class="form-control  col-md-12 col-xs-12" name="product" id="product"  type="text" name="middle-name">
                                                    <option value=""></option>
                                                   
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group row">
                                            <label for="newName" class="col-md-5 col-form-label cusLabel">Brand:</label>
                                            <div class="col-md-7">
                                                <select class="form-control  col-md-12 col-xs-12" name="brand" id="brand"  type="text" name="middle-name">
                                                    <option value=""></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group row">
                                            <label for="newName" class="col-md-5 col-form-label cusLabel">Place:</label>
                                            <div class="col-md-7">
                                                <select class="form-control  col-md-12 col-xs-12" name="place" id="place"  type="text" name="middle-name">
                                                    
                            <?php
                            foreach ($place as $key => $var) {
                                $regioninfor = $place[$key]['advtmis_rgn_code'] . '~' . $place[$key]['advtmis_rgn_place'] . '~' . $place[$key]['advtmis_rgn_rgcd'] . '~' . $place[$key]['advtmis_rgn_regionname'];
                                ?>
                                <option  value="<?php echo $regioninfor; ?>"><?php echo $place[$key]['advtmis_rgn_place']; ?></option>
                                <?php
                            }
                            ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <!-- sub3 -->
                            <div class="col-sm-3">
                                <div class="form-group row">
                                    <label for="newName" class="col-md-5 col-form-label cusLabel">Agency Name:</label>
                                    <div class="col-md-7">
                                        <select class="form-control  col-md-12 col-xs-12" name="agency" id="agency"  type="text" name="middle-name">
                                         
                            <?php
                            foreach ($agency as $key => $var) {
                                $agencyinfo = $agency[$key]['mst013_agcode'] . '~' . $agency[$key]['mst013_agname'];
                                ?>
                                <option  value="<?php echo $agencyinfo; ?>"><?php echo $agency[$key]['mst013_agname']; ?></option>
                                <?php
                            }
                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>




                        </div>
                    </div>
                    <!-- part-2 ends -->
                    <div class="col-sm-12 bg-white pt-3 mt-3 shadow ">
                        <h3 class=" headinggs "><i class='far fa-edit'> Heading</i></h3>
                        <div class="row">

                            <div class="col-sm-3">
                                <div class="form-group row">
                                    <label for="newName" class="col-md-5 col-form-label cusLabel">Size(cm*cm):</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control input-sm" id="size" name="size"  value=""  autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group row">
                                    <label for="newName" class="col-md-5 col-form-label cusLabel">Sqr-Cms:</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control input-sm" name="pagesize" id="pagesize"  value=""  autocomplete="off">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group row">
                                    <label for="newName" class="col-md-5 col-form-label cusLabel">Page:</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control input-sm"  name="page" id="page"  value=""  autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group row">
                                    <label for="newName" class="col-md-5 col-form-label cusLabel">Color:</label>
                                    <div class="col-md-7">
                                        <select class="form-control  col-md-12 col-xs-12" type="text" name="color" id="color"  autocomplete="off">
                                           
                            <option value="">Select Color </option>
                            <option value="">Black & White </option>
                            <option value="C">Color</option>
                            <option value="">Single Color </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group row">
                                    <label for="newName" class="col-md-5 col-form-label cusLabel">Promoted By:</label>
                                    <div class="col-md-7">
                                        <select class="form-control  col-md-12 col-xs-12" type="text" name="promoted" id="promoted">
                                            <option value="">Select </option>
                            <option value="Direct">Direct</option>
                            <option value="Agency">Agency</option>
                            <option value="MMPL">MMPL</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group row">
                                    <label for="newName" class="col-md-5 col-form-label cusLabel">Special Pages:</label>
                                    <div class="col-md-7">
                                        <select class="form-control  col-md-12 col-xs-12" type="text" name="splpage" id="splpage">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group row">
                                    <label for="newName" class="col-md-5 col-form-label cusLabel">Ad-Type:</label>
                                    <div class="col-md-7">
                                        <select class="form-control  col-md-12 col-xs-12" type="text" name="addtype" id="addtype">
                                            <option value="">Select</option>
                            <?php
                            foreach ($addtype as $key => $var) {
                                $addtypeinfo = $addtype[$key]['advtmis_adtype_code'] . '~' . $addtype[$key]['advtmis_adtype_name'];
                                ?>
                                <option value="<?php echo $addtypeinfo; ?>"><?php echo $addtype[$key]['advtmis_adtype_name']; ?></option>
                                <?php
                            }
                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-12 bg-white  mt-3 shadow-lg">
                        <div class="row pt-3">
                            <div class="col-sm-3">
                                <div class="form-group row">
                                    <label for="newName" class="col-md-5 col-form-label cusLabel">Total Ads:</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control input-sm " name="totads" id="totads" value="" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group row">
                                    <label for="newName" class="col-md-5 col-form-label cusLabel">Total Spaces:</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control input-sm " name="totspace" id="totspace" value="" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 d-flex justify-content-center">
                                <div class="pr-3">
                                     <button  class="btn btn-primary " type="submit">Save</button>
                                    <!--<a href="#" class="btn btn-primary ">Save</a>-->
                                </div>
                                <div class="pl-3">
                                    <a href="#" class="btn btn-danger ">Reset</a>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
</form>
                <!-- modal pop-up starts -->
                <div class="modal fade" id="myModal" role="dialog" data-backdrop="static">
                    <!-- data-backdrop="static" for not closing when clicked on out side -->
                    <div class="modal-dialog modal-xl">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header py-2" style="background-color: rgb(109, 200, 240);">
                                <h4 class="modal-title text-white">Entry Screen</h4>
                                <button type="button" class="close " data-dismiss="modal" style="color: rgb(15, 15, 15);font-weight: bolder; margin-top: -9px;">&times;</button>

                            </div>
                            <div class="modal-body">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-12  ">
                                            <div class="row ">
                                                <div class="col-sm-3  ">
                                                    <div class="form-group row">
                                                        <label for="newName" class="col-sm-5 col-form-label cusLabel">Date:</label>
                                                        <div class="col-md-7 ">
                                                            <div class="date-container">
                                                                <input type="text" id="date1" name="date1" class="form-control datepicker" name="event_date" autocomplete="off">
                                                                <i class="date-icon fa fa-calendar " aria-hidden="true"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group row">
                                                        <label for="newName" class="col-md-5 col-form-label cusLabel">Publication:</label>
                                                        <div class="col-md-7">
                                                            <select class="form-control  col-md-12 col-xs-12" name="publication1" id="publication1" type="text" name="middle-name">
                                                                  <!--<select name="publication1" id="publication1">-->
                <?php
                foreach ($publication as $key => $var) {
                    $arr = $publication[$key]['advtmis_pub_maineditions'] . '~' . $publication[$key]['advtmis_pub_code'] . '~' . $publication[$key]['advtmis_pub_name'];
//                         $arr[1]=
                    ?>
                    
                                                    <option value="<?php echo $arr; ?>"><?php echo $publication[$key]['advtmis_pub_name']; ?></option>
                    <?php
                }
                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
<!--                                                <div class="col-sm-3">
                                                    <div class="form-group row">
                                                        <label for="newName" class="col-md-5 col-form-label cusLabel">Published Editions:</label>
                                                        <div class="col-md-7">
                                                            <input type="text" class="form-control input-sm example" placeholder="Select">
                                                        </div>
                                                    </div>
                                                </div>-->
                                                <div class="col-sm-3">
                                                    <div class="form-group row">
                                                        <label for="newName" class="col-md-5 col-form-label cusLabel">Editions:</label>
                                                       <div class="col-md-7">
                                        <select class="form-control  col-md-12 col-xs-12" id="mainmini1" name="mainmini1" type="text" name="middle-name">
                                            <option value="">Select</option>
                                            <option value="MAIN">Main</option>
                                            <option value="MINI">Mini</option>
                                            </select>
                                    </div>
                                                    </div>
                                                </div>

   <div class="col-sm-3">
                                                    <div class="form-group row">
                                                        <label for="newName" class="col-md-5 col-form-label cusLabel">Published Editions:</label>
                                                        <div class="col-md-7">
                                                            <input type="text" id="editions1" name="editions1[]" class="form-control input-sm example1" placeholder="Select">
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <h3 class=" headinggs "><i class='far fa-edit'> Table</i></h3>
                                            <div class="row">
                                                <!-- sub1 -->
                                                <div class="col-sm-3 border-right">
                                                    <div class="col-sm-12">
                                                        <div class="form-group row">
                                                            <label for="newName" class="col-md-5 col-form-label cusLabel">Main
                                                                Category:</label>
                                                            <div class="col-md-7">
                                                                <select class="form-control  col-md-12 col-xs-12" name="maincat1" id="maincat1" type="text" name="middle-name">
                                                                  <!--<select class="form-control  col-md-12 col-xs-12"  name="maincat" id="maincat"  type="text" name="middle-name">-->
                                               
                            <?php
                            foreach ($maincategory as $key => $var) {
                                $catinfor = $maincategory[$key]['advtmis_catg_mainname'] . '~' . $maincategory[$key]['advtmis_catg_code'] . '~' . $maincategory[$key]['advtmis_catg_srlno'] . '~' . $maincategory[$key]['advtmis_catg_subname'] . '~' . $maincategory[$key]['advtmis_catg_adcode'];
                                ?>
                                <option value="<?php echo $catinfor; ?>"><?php echo $maincategory[$key]['advtmis_catg_mainname']; ?></option>
                                <?php
                            }
                            ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group row">
                                                            <label for="newName" class="col-md-5 col-form-label cusLabel">Sub
                                                                Category:</label>
                                                            <div class="col-md-7">
                                                                <select class="form-control  col-md-12 col-xs-12" name="subcat1" id="subcat1" type="text" name="middle-name">
                                                                    <option value=""></option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- sub2 -->
                                                <div class="col-sm-6 border-right">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group row">
                                                                <label for="newName" class="col-md-5 col-form-label cusLabel">Client
                                                                    Name:</label>
                                                                <div class="col-md-7">
                                                                    <select class="form-control  col-md-12 col-xs-12" name="client1" id="client1" type="text" name="middle-name">
                                                                         <!--<select name="client1" id="client1">-->
                <?php
                foreach ($client as $key => $var) {
                    $clientinf = $client[$key]['mst014_clcode'] . '~' . $clientinf = $client[$key]['mst014_clname'];
                    ?>
                    
                                            <option  value="<?php echo $clientinf; ?>"><?php echo $client[$key]['mst014_clname']; ?></option>
                    <?php
                }
                ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group row">
                                                                <label for="newName" class="col-md-5 col-form-label cusLabel">Product:</label>
                                                                <div class="col-md-7">
                                                                    <select class="form-control  col-md-12 col-xs-12"  name="product1" id="product1" type="text" name="middle-name">
                                                                        <!--<select name="product1" id="product1">-->
                                    <option value=""></option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group row">
                                                                <label for="newName" class="col-md-5 col-form-label cusLabel">Brand:</label>
                                                                <div class="col-md-7">
                                                                    <select class="form-control  col-md-12 col-xs-12"  name="brand1" id="brand1" type="text" name="middle-name">
                                                                         <option value=""></option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group row">
                                                                <label for="newName" class="col-md-5 col-form-label cusLabel">Place:</label>
                                                                <div class="col-md-7">
                                                                    <select class="form-control  col-md-12 col-xs-12" name="place1" id="place1" type="text" name="middle-name">
                                                                          <!--<select name="place1" id="place1">-->
                <?php
                foreach ($place as $key => $var) {
                    $regioninfor = $place[$key]['advtmis_rgn_code'] . '~' . $place[$key]['advtmis_rgn_place'] . '~' . $place[$key]['advtmis_rgn_rgcd'] . '~' . $place[$key]['advtmis_rgn_regionname'];
                    ?>
                                            <option  value="<?php echo $regioninfor; ?>"><?php echo $place[$key]['advtmis_rgn_place']; ?></option>
                    <?php
                }
                ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                                <!-- sub3 -->
                                                <div class="col-sm-3">
                                                    <div class="form-group row">
                                                        <label for="newName" class="col-md-5 col-form-label cusLabel">Agency
                                                            Name:</label>
                                                        <div class="col-md-7">
                                                            <select class="form-control  col-md-12 col-xs-12" name="agency1" id="agency1" type="text" name="middle-name">
                                                                 <!--<select name="agency1" id="agency1">-->
                <?php
                foreach ($agency as $key => $var) {
                    $agencyinfo = $agency[$key]['mst013_agcode'] . '~' . $agency[$key]['mst013_agname'];
                    ?>
                                            <option  value="<?php echo $agencyinfo; ?>"><?php echo $agency[$key]['mst013_agname']; ?></option>
                    <?php
                }
                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>






                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <h3 class=" headinggs "><i class='far fa-edit'> Heading</i></h3>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <div class="form-group row">
                                                        <label for="newName" class="col-md-5 col-form-label cusLabel">Size(cm*cm):</label>
                                                        <div class="col-md-7">
                                                            <input type="text" class="form-control input-sm" id="size1" name="size1" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group row">
                                                        <label for="newName" class="col-md-5 col-form-label cusLabel">Sqr-Cms:</label>
                                                        <div class="col-md-7">
                                                            <input type="text" class="form-control input-sm"  name="pagesize1" id="pagesize1" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group row">
                                                        <label for="newName" class="col-md-5 col-form-label cusLabel">Page:</label>
                                                        <div class="col-md-7">
                                                            <input type="text" class="form-control input-sm" name="page1" id="page1" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group row">
                                                        <label for="newName" class="col-md-5 col-form-label cusLabel">Color:</label>
                                                        <div class="col-md-7">
                                                            <select class="form-control  col-md-12 col-xs-12" name="color1" id="color1" type="text" name="middle-name">
                                                               <!--<select name="color1" id="color1">-->
                                    <option value="">Select </option>
                                    <option value="">Black & White </option>
                                    <option value="C">Color</option>
                                    <option value="">Single Color </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group row">
                                                        <label for="newName" class="col-md-5 col-form-label cusLabel">Promoted By:</label>
                                                        <div class="col-md-7">
                                                            <select class="form-control  col-md-12 col-xs-12"  name="promoted1" id="promoted1" type="text" name="middle-name">
                                                               <option value="">Select </option>
                            <option value="Direct">Direct</option>
                            <option value="Agency">Agency</option>
                            <option value="MMPL">MMPL</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group row">
                                                        <label for="newName" class="col-md-5 col-form-label cusLabel">Special Pages:</label>
                                                        <div class="col-md-7">
                                                            <select class="form-control  col-md-12 col-xs-12" name="splpage1" id="splpage1" type="text" name="middle-name">
                                                                <!--<select name="splpage1" id="splpage1">-->
                
                                    <option value=""></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group row">
                                                        <label for="newName" class="col-md-5 col-form-label cusLabel">Ad-Type:</label>
                                                        <div class="col-md-7">
                                                            <select class="form-control  col-md-12 col-xs-12" name="addtype1" id="addtype1" type="text" name="middle-name">
                                                               <!--<select name="addtype1" id="addtype1">-->
                                    <option value="">Select</option>
                <?php
                foreach ($addtype as $key => $var) {
                    $addtypeinfo = $addtype[$key]['advtmis_adtype_code'] . '~' . $addtype[$key]['advtmis_adtype_name'];
                    ?>
                                            <option value="<?php echo $addtypeinfo; ?>"><?php echo $addtype[$key]['advtmis_adtype_name']; ?></option>
                    <?php
                }
                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group row">
                                                        <label for="newName" class="col-md-5 col-form-label cusLabel">Total
                                                            Ads:</label>
                                                        <div class="col-md-7">
                                                            <input type="text" class="form-control input-sm" id="" name="" value="" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group row">
                                                        <label for="newName" class="col-md-5 col-form-label cusLabel">Total
                                                            Spaces:</label>
                                                        <div class="col-md-7">
                                                            <input type="text" class="form-control input-sm " id="" name="" value="" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
<!--                            <div id="modificationscreen"></div>
                                   
                                   
                                </div>-->
                            <div class="modal-footer m-auto" style="margin-top: -100px;">
                                <!--<button type="button" class="btn btn-success" data-dismiss="modal">Save</button>-->
                                <button type="button" class="btn btn-success" id="save1" value="save1">Save</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                            </div>
                        </div>

                    </div>
                </div>
                <!-- modal pop-up Ends -->

                <div class="col-sm-12 p-3 bg-white shadow mt-1 mb-5">
                    <div class="row">
                        <!-- heading starts -->
                        <div class="col-sm-12  ">
                            <div class="row hborder ">
                                <h3 class="heading pl-3"><i class='far fa-edit'> Table</i></h3>
                                <div class="col-sm-11  d-flex justify-content-end " style="margin-top: -3px;">
                                    <div class="col-sm-2">
                                        <div class="form-group row">
                                            <label for="newName" class="col-sm-5 col-form-label cusLabel">Date:</label>
                                            <div class="col-md-7 ">
                                                <div class="date-container">
                                                    <input type="text" class="form-control datepicker" id="dateformod" name="dateformod" autocomplete="off">
                                                    <i class="date-icon fa fa-calendar " aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-1  text-center">
                                        <a href="#" class="btn btn-info btn-sm">Show</a>
                                    </div>
                                </div>
                            </div>
                            <!-- table starts -->
                            <div class="col-sm-12 mt-1 mb-5">
                                <div class="table-responsive tfix">
                                    <div id="modificationscreen"> </div>
                                   
                                   
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
<script src="<?php echo site_url ?>assets/jquery/jquery_ajax.min.js"></script>
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
<!-- multiselect -->
<script src="<?php echo site_url ?>assets/plugins/Drop-Down-Combo-Tree/comboTreePlugin.js"></script>
<!-- multiselect dropdown data -->
<script src="<?php echo site_url ?>assets/plugins/Drop-Down-Combo-Tree/icontains.js"></script>




<!-- normal tree select -->
<script>
    $(function () {
         $('#date').datepicker({
                    dateFormat: "yy-mm-dd",
                });
        $('#mainmini').on('change', function () {
            edition_change();
                    specialpages();
        });
                $('#maincat').on('change', function () {
                    subcat_change();
                });
                $('#maincat1').on('change', function () {
                    modsubcat_change();
                });
        $('#publication').on('change', function () {
                            alert("editions open");
                    total_ads();
                    total_spaces();
            edition_change();
                    specialpages();
//                                    var x="405~ANANTHAPUR~1";
//                                     $("#editions option[value='" + x + "']").prop("selected", true);
        });
        $('#date').on('change', function () {
//                          alert('chck');
                    total_ads();
                    total_spaces();
                });
         $('#client').on('change', function () {
                    product_change();
                });
                $('#product').on('change', function () {
                    brand_change();
                });
                 $('#size').on('change', function () {
                    pagesize();
                });
                 $('#mainmini1').on('change', function () {
//            edition_change();
                    modifysplpage();
        });
                 $('#publication1').on('change', function () {
//            edition_change();
                    modifysplpage();
        });
        
//                 $('#editions').on('change', function () {
//            edition_change();
//                    var selectedTitles = comboTree1.getSelectedItemsTitle();
//var selectedIds = comboTree1.getSelectedItemsId();
//alert(selectedTitles);
//alert(selectedIds);
//        });
        
        
                
                
                
                $('#client1').change(function ()
                    {
                       modificationproduct();
                        modificationbrand();
                    });
                     $('#product1').change(function ()
                    {
                       modificationbrand();
                    });
                     $('#size1').change(function () {
                        modificationpagesize();
                    });
                     $('#dateformod').change(function () {
//                       var moddate=$("#dateformod").val();
//                       alert(moddate);
//                        $('#date1').change(function () {
                        screendata();
//                         $('.serialno').click(function () {
////            var serialno = document.getElementById('srlno').getElementsByTagName('a')
//                       let serialno = $(this).text();
////                       var serialno = $('#srlno').val();
////                        var serialno = $('a').text();
//                      
//                       alert(serialno);
//                    });
                        
//                    });
                       
                    });
                    
//                     $('#save1').click(function ()
//                    {
////                         $('.serialno').click(function () {
////            var serialno = document.getElementById('srlno').getElementsByTagName('a')
////                       var srlno = serialno;
////                       var srlno = $(this).text();
////                       var serialno = $('#srlno').val();
////                        var serialno = $('a').text();
//                      var srlno=srlno;
////                       alert(srlno);
////                    });
////                        var srlno = $("#srlno").val();
////                        alert(srlno);
//                        var client = $("#client1").val();
//                        var clientinf = client.split('~');
//                        var clientcode=clientinf[0];
//                        var clientname=clientinf[1];
//                        
//                        var product = $("#product1").val();
//                        var productinf = product.split('~');
//                        var productcode=productinf[0];
//                        var productname=productinf[1];
//                        
//                        var brand = $("#brand1").val();
//                        var brandinf = brand.split('~');
//                        var brandcode=brandinf[0];
//                        var brandname=brandinf[1];
//                        
//                        var agency = $("#agency1").val();
//                        var agencyinf=agency.split('~');
//                        var agencycode=agencyinf[0];
//                        var agencyname=agencyinf[1];
//                        
//                        var page = $("#page1").val();
//                        var size = $("#size1").val();
//                        var pagesize = $("#pagesize1").val();
//                        var color = $("#color1").val();
//                        
//                        var place1 = $("#place1").val();
//                        var placeinf=place1.split('~');
//                        var entryrgncode=placeinf[0];
//                        var place=placeinf[1];
//                        var rgcd=placeinf[2];
//                        var rgcdname=placeinf[3];
//                        
//                        var mainmini = $("#mainmini").val();
//                        var addtype = $("#addtype1").val();
//                        var splpage = $("#splpage1").val();
//                        var publication = $("#publication1").val();
//                         var publicationinf = publication.split('~');
//                         var publicationcode=publicationinf[1];
//                         var publicationname=publicationinf[2];
//                         
//                        var date = $("#date1").val();
//                        
////                        alert(insdate);
////                        alert(brand);
////                        alert(agencyinf[0]);
////                        alert(publicationinf[1]);
//                          $.ajax({
//                        type: 'POST',
//                        url: '<?php echo base_url(); ?>/Entrydata/ajaxinsertingData/',
//
//                        data: {'srlno':srlno, 'clientcode':clientcode,'clientname':clientname,'productcode':productcode,'productname':productname,'brandcode':brandcode,
//                    'brandname':brandname,'agencycode':agencycode,'agencyname':agencyname,'page':page,'size':size,'pagesize':pagesize,'color':color,
//                    'place':place,'mainmini':mainmini, 'addtype':addtype, 'splpage':splpage, 'publicationcode':publicationcode,'publicationname':publicationname, 'date':date},
//                        success: function (data) {
//                          
//                        }
//                    });
//                      
//                    });
                                     
                    
                    function screendata() {
//                    var date = $("#date1").val();
                    var date=$("#dateformod").val();
                    $.ajax({
                        type: 'POST',
                        url: '<?php echo base_url(); ?>/Entrydata/ajaxdateformodifi/',

                        data: {'Date': date},
                        success: function (data) {
//                            alert(data);
//                           var dataforscreen=[];
//                            var dataforscreen = jQuery.parseJSON(data);
                            
//                             var len = data.length;
//            for(var i=0; i<len; i++){
//                var id = data[i].id;
//                var username = data[i].username;
//                var name = data[i].name;
//                var email = data[i].email;
//
//                var tr_str = "<tr>" +
//                    "<td align='center'>" + (i+1) + "</td>" +
//                    "<td align='center'>" + username + "</td>" +
//                    "<td align='center'>" + name + "</td>" +
//                    "<td align='center'>" + email + "</td>" +
//                    "</tr>";
//
//                $("#userTable tbody").append(tr_str);
//            }
let srlno= 0;
let edioptions= 0;
                             $("#modificationscreen").html(data);
//                             $(".modificationscreen").append("<div>" + data + "</div>");
                            $('.serialno').click(function () {
////            var serialno = document.getElementById('srlno').getElementsByTagName('a')
                        srlno = $(this).text();
                         edioptions = $('#edioptions').val();
                         var editioninfor= edioptions.split('~');
                         
                         
//                         var modeditions=[];
                          var modeditions = [{ id: 00,
                 title: 'SELECT ALL', subs:[{id: 200,
                       title:'CENTRAL ANDHRA REGION', subs: [{
                 id: 200,
                 title:'CENTRAL ANDHRA REGION'},{
                 id: 202,
                 title:'VIJAYAWADA'},{
                 id: 209,
                 title:'GUNTUR'},{
                 id: 210,
                 title:'NELLORE'},{
                 id: 213,
                 title:'TADEPALLY GUDEM'},{
                 id: 218,
                 title:'ONGOLE'},]
                    },
                   {id: 300,
                       title:'NORTH ANDHRA REGION', subs: [{
                 id: 300,
                 title:'NORTH ANDHRA REGION'},{
                 id: 303,
                 title:'VISAKHAPATNAM'},{
                 id: 307,
                 title:'RAJAHMUNDRY'},{
                 id: 311,
                 title:'SRIKAKULAM'},]},{id: 400,
                       title:'RAYALASEEMA REGION', subs: [{
                 id: 400,
                 title:'RAYALASEEMA REGION'},{
                 id: 404,
                 title:'TIRUPATHI'},{
                 id: 405,
                 title:'ANANTHAPUR'},{
                 id: 412,
                 title:'KURNOOL'},{
                 id: 415,
                 title:'CUDDAPAH'},]},{id: 100,
                       title:'GRT HYDERABAD REGION', subs: [{
                 id: 100,
                 title:'GRT HYDERABAD REGION'},{
                 id: 101,
                 title:'HYDERABAD'},]},{id: 600,
                       title:'TELANGANA REGION', subs: [{
                 id: 600,
                 title:'TELANGANA REGION'},{
                 id: 606,
                 title:'KARIMNAGAR'},{
                 id: 608,
                 title:'SURYAPET'},{
                 id: 614,
                 title:'WARANGAL'},{
                 id: 616,
                 title:'NIZAMABAD'},{
                 id: 617,
                 title:'KHAMMAM'},{
                 id: 619,
                 title:'MAHABUBNAGAR'},]}]}];
                 
                 alert("editions options type");
                
                 alert(modeditions);
                 
 $('.example1').comboTree({
                                    
     
            source: modeditions,
            isMultiple: true, //for checkbox//
            cascadeSelect: true,
            collapse: true,

        });
        
        
//                         alert(editioninfor);
//                         alert(editioninfor[0]);
//                         alert(editioninfor[1]);
                        });
                       
                       $('#save1').click(function ()
                    {
//                         $('.serialno').click(function () {
//            var serialno = document.getElementById('srlno').getElementsByTagName('a')
//                       var srlno = serialno;
//                       var srlno = $(this).text();
//                       var serialno = $('#srlno').val();
//                        var serialno = $('a').text();
//                      var srlno=srlno;
//                       alert(srlno);
//                    });
//                        var srlno = $("#srlno").val();
//                        alert(edioptions[0]);
var editions=$("#editions1").val();
var editionsinfor = editions.split(',');
//alert(editionsinfor);
//alert(editionsinfor[0]);
//alert(editionsinfor[1]);
                        var client = $("#client1").val();
                        var clientinf = client.split('~');
                        var clientcode=clientinf[0];
                        var clientname=clientinf[1];
                        
                        var product = $("#product1").val();
                        var productinf = product.split('~');
                        var productcode=productinf[0];
                        var productname=productinf[1];
                        
                        var brand = $("#brand1").val();
                        var brandinf = brand.split('~');
                        var brandcode=brandinf[0];
                        var brandname=brandinf[1];
                        
                        var agency = $("#agency1").val();
                        var agencyinf=agency.split('~');
                        var agencycode=agencyinf[0];
                        var agencyname=agencyinf[1];
                        
                        var page = $("#page1").val();
                        var size = $("#size1").val();
                        var pagesize = $("#pagesize1").val();
                        var color = $("#color1").val();
                        
                        var place1 = $("#place1").val();
                        var placeinf=place1.split('~');
                        var entryrgncode=placeinf[0];
                        var place=placeinf[1];
                        var rgcd=placeinf[2];
                        var rgcdname=placeinf[3];
                        
                        var mainmini = $("#mainmini1").val();
                        
                        var addtype = $("#addtype1").val();
                        var splpage = $("#splpage1").val();
                        
                        var publication = $("#publication1").val();
                         var publicationinf = publication.split('~');
                         var publicationcode=publicationinf[1];
                         var publicationname=publicationinf[2];
                         
                        var date = $("#date1").val();
                        
//                        alert(entryrgncode);
//                        alert(rgcd);
//                        alert(rgcdname);
//                        alert(publicationinf[1]);
                          $.ajax({
                        type: 'POST',
                        url: '<?php echo base_url(); ?>/Entrydata/ajaxinsertingData/',

                        data: {'editionsinfor':editionsinfor,'rgcdname':rgcdname,'rgcd':rgcd,'entryrgncode':entryrgncode,'srlno':srlno, 'clientcode':clientcode,'clientname':clientname,'productcode':productcode,'productname':productname,'brandcode':brandcode,
                    'brandname':brandname,'agencycode':agencycode,'agencyname':agencyname,'page':page,'size':size,'pagesize':pagesize,'color':color,
                    'place':place,'mainmini':mainmini, 'addtype':addtype, 'splpage':splpage, 'publicationcode':publicationcode,'publicationname':publicationname, 'date':date},
                        success: function (data) {
                          
                        }
                    });
                      
                    });
////                       var serialno = $('#srlno').val();
////                        var serialno = $('a').text();
//                      
//                       alert(srlno);
                   
                    
                    
                   
                            
                         

//                            console.log(data);
//                            if (dataforscreen) {
//                                return dataforscreen;
//                                $('#splpage1').html('');
//                                var option = $('<option value="0">Select</option>');
//                                $('#splpage1').append(option);
//                                $(specialp).each(function () {
//                                    var option = $('<option />');
////                                    var x = this.mst011_prodname;
//                                    var y = this.advtmis_splpg_name;
//                                    option.attr('value', y).text(this.advtmis_splpg_name);
//                                    $('#splpage1').append(option);
//                                });
//                            }
                        }
                    });
                }
                    
                function pagesize() {
                    var size = $('#size').val();
                    $.ajax({

                        type: 'POST',
                        url: '<?php echo base_url(); ?>Entrydata/ajaxsize/',
                        data: {'size': size},
                        success: function (data) {
                            var valuee = jQuery.parseJSON(data);
                            $("#pagesize").val(valuee);
                            console.log(data);
                        }
                    });
                }
        
            function specialpages() {
                    var public = $('#publication').val();
                    var pubcode = public.split('~');
                    var radiotype = $("#mainmini").val();
//                    alert(radiotype);
                    $.ajax({

                        type: 'POST',
                        url: '<?php echo base_url(); ?>Entrydata/ajaxsplpages/',
                        data: {'publiccode': pubcode[1], 'radiotype': radiotype},
                        success: function (data) {
                            var specialp = jQuery.parseJSON(data);
                            console.log(data);
                            if (specialp) {
                                $('#splpage').html('');
                                var option = $('<option value="0">Select</option>');
                                $('#splpage').append(option);
                                $(specialp).each(function () {
                                    var option = $('<option />');
//                                    var x = this.mst011_prodname;
                                    var y = this.advtmis_splpg_name;
                                    option.attr('value', y).text(this.advtmis_splpg_name);
                                    $('#splpage').append(option);
                                });
                            }
                        }
                    });
                }
 function total_ads() {
                    var date = $('#date').val();
                    var public = $('#publication').val();
                    var pubcode = public.split('~');
                    $.ajax({

                        type: 'POST',
                        url: '<?php echo base_url(); ?>Entrydata/ajaxtotalads/',
                        data: {'date': date, 'public': pubcode[1]},
                        success: function (data) {
                            var adstot = jQuery.parseJSON(data);
//                            alert(adstot);
                            $("#totads").val(adstot);
                            console.log(data);
                        }
                    });
                }
                function total_spaces() {
                    var date = $('#date').val();
                    var public = $('#publication').val();
                    var pubcode = public.split('~');
                    $.ajax({

                        type: 'POST',
                        url: '<?php echo base_url(); ?>Entrydata/ajaxtotalsizespace/',
                        data: {'date': date, 'public': pubcode[1]},
                        success: function (data) {
                            var spaces = jQuery.parseJSON(data);
                            $("#totspace").val(spaces);
                            console.log(data);
                        }
                    });
                }

        function subcat_change() {
                    var main = $('#maincat').val();
                    var maincat = main.split('~');

                    $.ajax({

                        type: 'POST',
                        url: '<?php echo base_url(); ?>Entrydata/ajaxdisplay/',
                        data: {'maincat': maincat[0]},
                        success: function (data) {
                            var subcat = jQuery.parseJSON(data);
                            console.log(data);
                            if (subcat) {
                                $('#subcat').html('');
                                var option = $('<option value="0">Select</option>');
                                $('#subcat').append(option);
                                $(subcat).each(function () {
                                    var option = $('<option />');
                                    var x = this.advtmis_catg_subname;
                                    option.attr('value', x).text(this.advtmis_catg_subname);
                                    $('#subcat').append(option);
                                });
                            }
                        }
                    });
                }
        function modsubcat_change() {
                    var main = $('#maincat1').val();
                    var maincat = main.split('~');

                    $.ajax({

                        type: 'POST',
                        url: '<?php echo base_url(); ?>Entrydata/ajaxdisplay/',
                        data: {'maincat': maincat[0]},
                        success: function (data) {
                            var subcat = jQuery.parseJSON(data);
                            console.log(data);
                            if (subcat) {
                                $('#subcat1').html('');
                                var option = $('<option value="0">Select</option>');
                                $('#subcat1').append(option);
                                $(subcat).each(function () {
                                    var option = $('<option />');
                                    var x = this.advtmis_catg_subname;
                                    option.attr('value', x).text(this.advtmis_catg_subname);
                                    $('#subcat1').append(option);
                                });
                            }
                        }
                    });
                }
                
                 function product_change() {
                    var main = $('#client').val();
                    var clientcode = main.split('~');
//                    alert(main);
                    $.ajax({

                        type: 'POST',
                        url: '<?php echo base_url(); ?>Entrydata/ajaxproduct/',
                        data: {'client': clientcode[0]},
                        success: function (data) {
                            var product = jQuery.parseJSON(data);
                            console.log(data);
                            if (product) {
                                $('#product').html('');
                                var option = $('<option value="0">Select</option>');
                                $('#product').append(option);
                                $(product).each(function () {
                                    var option = $('<option />');
//                                    var x = this.mst011_prodname;
                                    var y = this.mst011_prodcode + '~' + this.mst011_prodname;
                                    option.attr('value', y).text(this.mst011_prodname);
                                    $('#product').append(option);
                                });
                            }
                        }
                    });
                }
                function brand_change() {
                    var prod = $('#product').val();
                    var productcode = prod.split('~');
                    var client = $('#client').val();
                    var clientcode = client.split('~');
//                            alert(prod);
                    $.ajax({

                        type: 'POST',
                        url: '<?php echo base_url(); ?>Entrydata/ajaxbrand/',
                        data: {'product': productcode[0], 'client': clientcode[0]},
                        success: function (data) {
                            var brand = jQuery.parseJSON(data);
                            console.log(data);
                            if (brand) {
                                $('#brand').html('');
                                var option = $('<option value="0">Select</option>');
                                $('#brand').append(option);
                                $(brand).each(function () {
                                    var option = $('<option />');
                                    var x = this.mst012_brcode + '~' + this.mst012_brname;
                                    option.attr('value', x).text(this.mst012_brname);
                                    $('#brand').append(option);
                                });
                            }
                        }
                    });
                }

        function edition_change() {
            var public = $('#publication').val();
            var radiotype = $("#mainmini").val();
            var pubcode = public.split('~');
//                                     $("#editions ").attr('multiple','multiple');
//                                     $(".editions").fSelect();
            alert(pubcode[0]);
//                            if(radiotype=="Main"){
//                                alert(radiotype);
            $('#editions').html('');
//                                  $('.fs-option g0').html('');
            $.ajax({

                type: 'POST',
                url: '<?php echo base_url(); ?>Entrydata/ajaxeditions/',

                //                 dataType: 'json', 
                data: {'publication': pubcode[0], 'radiotype': radiotype},
                success: function (data) {
                    var edition = jQuery.parseJSON(data);
//                                            alert(data);
                    console.log(data);
                    if (edition) {

                        var option = $('<option value="0">Select</option>');
                        $('#editions').append(option);
                        $(edition).each(function () {

                            var option = $('<option />');
//                                             if (radiotype == "MAIN") {
//                                                 $('#container')
//       .append('<input type="checkbox" id='+this.advtmis_edn_name+' name="interest" value='+this.advtmis_edn_name+'>')
//        .append('<label for='+this.advtmis_edn_name+'>'+this.advtmis_edn_name+'</label></div>')
//        .append(`<br>`);
////                                                  $('#editions').html(this.advtmis_edn_name);
////                                                  var x = this.advtmis_edn_code+'~'+this.advtmis_edn_name;
//                                              }
                            if (radiotype == "MAIN") {
//                                                 $('#editions').html(this.advtmis_edn_name);
                                var x = this.advtmis_edn_code + '~' + this.advtmis_edn_name + '~' + this.advtmis_edn_statecode + '~' + this.advtmis_edn_eenaduregion;

                                if (this.advtmis_edn_statecode == 1) {

                                    if (this.advtmis_edn_eenaduregion == 4) {
//                                                                alert(x);
                                        option.attr('class', "central apcombined editionVal")
                                        option.attr('value', x).text(this.advtmis_edn_name);
                                        $('#editions').append(option);
//                                                            alert(option);
                                    } else if (this.advtmis_edn_eenaduregion == 5) {
//                                                                alert(x);
                                        option.attr('class', "north apcombined editionVal")
                                        option.attr('value', x).text(this.advtmis_edn_name);
                                        $('#editions').append(option);
//                                                            alert(option);
                                    } else if (this.advtmis_edn_eenaduregion == 6) {
//                                                                alert(x);
                                        option.attr('class', "rayalaseema apcombined editionVal")
                                        option.attr('value', x).text(this.advtmis_edn_name);
                                        $('#editions').append(option);
//                                                            alert(option);
                                    } else {
                                        option.attr('class', "apcombined editionVal")
//                                                            $('#editions').append(option);
                                        option.attr('value', x).text(this.advtmis_edn_name);
                                        $('#editions').append(option);
                                    }
                                } else if (this.advtmis_edn_statecode == 17) {
                                    if (this.advtmis_edn_eenaduregion == 3) {
//                                                                alert(this.advtmis_edn_name);
                                        option.attr('class', "telanganaregion tgcombined editionVal")
                                        option.attr('value', x).text(this.advtmis_edn_name);
                                        $('#editions').append(option);
                                    } else if (this.advtmis_edn_eenaduregion == 2) {
                                        option.attr('class', "greaterhyd tgcombined editionVal")
                                        option.attr('value', x).text(this.advtmis_edn_name);
                                        $('#editions').append(option);
                                    } else {
                                        option.attr('class', "tgcombined editionVal")
//                                                            $('#editions').append(option);
                                        option.attr('value', x).text(this.advtmis_edn_name);
                                        $('#editions').append(option);
                                    }
                                }
                            } else if (radiotype == "MINI") {
                                var x = this.advtmis_distedn_edncode + '~' + this.advtmis_distedn_name + '~' + this.advtmis_distedn_code + '~' + this.advtmis_distedn_shortname + '~' + this.advtmis_edn_statecode + '~' + this.advtmis_distedn_eenaduregion;
//                                            

                                if (this.advtmis_edn_statecode == 1) {
                                    if (this.advtmis_distedn_eenaduregion == 4) {
                                        option.attr('class', "central editionVal")
                                        option.attr('value', x).text(this.advtmis_distedn_name);
                                        $('#editions').append(option);
                                    } else if (this.advtmis_distedn_eenaduregion == 5) {
                                        option.attr('class', "north editionVal")
                                        option.attr('value', x).text(this.advtmis_distedn_name);
                                        $('#editions').append(option);
                                    } else if (this.advtmis_distedn_eenaduregion == 6) {
                                        option.attr('class', "rayalaseema editionVal")
                                        option.attr('value', x).text(this.advtmis_distedn_name);
                                        $('#editions').append(option);
                                    } else {
                                        option.attr('class', "apcombined editionVal")
                                        option.attr('value', x).text(this.advtmis_distedn_name);
                                        $('#editions').append(option);
                                    }
                                }
                                else if (this.advtmis_edn_statecode == 17) {
                                    if (this.advtmis_distedn_eenaduregion == 2) {
                                        option.attr('class', "greaterhyd editionVal")
                                        option.attr('value', x).text(this.advtmis_distedn_name);
                                        $('#editions').append(option);
                                    }
                                    if (this.advtmis_distedn_eenaduregion == 3) {
                                        option.attr('class', "telanganaregion editionVal")
                                        option.attr('value', x).text(this.advtmis_distedn_name);
                                        $('#editions').append(option);
                                    }
                                    else {
                                        option.attr('class', "tgcombined editionVal")
                                        option.attr('value', x).text(this.advtmis_distedn_name);
                                        $('#editions').append(option);
                                    }
                                }
                            }

//console.log(option);

                        });

                    }
//                                          $(".fs-options").html('');
//                            $('#editions').multiselect({
//                                columns: 1,
//                                placeholder: 'Select Editions',
//                                search: true,
//                                selectAll: true,
//                                
//                            });
//                    $('#editions').multiselect('reload');
                }

            });

        }
        
        
           function modificationpagesize() {
                    var size = $('#size1').val();
                    $.ajax({

                        type: 'POST',
                        url: '<?php echo base_url(); ?>Entrydata/ajaxsize/',
                        data: {'size': size},
                        success: function (data) {
                            var valuee = jQuery.parseJSON(data);
                            $("#pagesize1").val(valuee);
                            console.log(data);
                        }
                    });
                }
                    function modificationbrand() {
                    var prod = $('#product1').val();
                    var productcode = prod.split('~');
                    var client = $('#client1').val();
                    var clientcode = client.split('~');
//                            alert(prod);
                    $.ajax({

                        type: 'POST',
                        url: '<?php echo base_url(); ?>Entrydata/ajaxbrand/',
                        data: {'product': productcode[0], 'client': clientcode[0]},
                        success: function (data) {
                            var brand = jQuery.parseJSON(data);
                            console.log(data);
                            if (brand) {
                                $('#brand1').html('');
                                var option = $('<option value="0">Select</option>');
                                $('#brand1').append(option);
                                $(brand).each(function () {
                                    var option = $('<option />');
                                    var x = this.mst012_brcode + '~' + this.mst012_brname;
                                    option.attr('value', x).text(this.mst012_brname);
                                    $('#brand1').append(option);
                                });
                            }
                        }
                    });
                }
                function modificationproduct() {
                    var main = $('#client1').val();
                    var clientcode = main.split('~');
//                    alert(clientcode[0]);
                    $.ajax({

                        type: 'POST',
                        url: '<?php echo base_url(); ?>Entrydata/ajaxproduct/',
                        data: {'client': clientcode[0]},
                        success: function (data) {
                            var product = jQuery.parseJSON(data);
                            console.log(data);
                            if (product) {
                                $('#product1').html('');
                                var option = $('<option value="0">Select</option>');
                                $('#product1').append(option);
                                $(product).each(function () {
                                    var option = $('<option />');
//                                    var x = this.mst011_prodname;
                                    var y = this.mst011_prodcode + '~' + this.mst011_prodname;
                                    option.attr('value', y).text(this.mst011_prodname);
                                    $('#product1').append(option);
                                });
                            }
                        }
                    });
                }

                function modifysplpage() {
                    var publication = $("#publication1").val();
                    var pubcode = publication.split('~');
                    var radiotype = $("#mainmini1").val();
                    alert(radiotype);

                    $.ajax({
                        type: 'POST',
                        url: '<?php echo base_url(); ?>/Entrydata/ajaxmodification/',

                        data: {'radiotype': radiotype, 'publication': pubcode[1]},
                        success: function (data) {
                            var specialp = jQuery.parseJSON(data);
                            console.log(data);
                            if (specialp) {
                                $('#splpage1').html('');
                                var option = $('<option value="0">Select</option>');
                                $('#splpage1').append(option);
                                $(specialp).each(function () {
                                    var option = $('<option />');
//                                    var x = this.mst011_prodname;
                                    var y = this.advtmis_splpg_name;
                                    option.attr('value', y).text(this.advtmis_splpg_name);
                                    $('#splpage1').append(option);
                                });
                            }
                        }
                    });
                }
                
//                var myData = [];
                 function edition_change() {
                    var public = $('#publication').val();
                    var radiotype = $("#mainmini").val();
                    var pubcode = public.split('~');
//                                     $("#editions ").attr('multiple','multiple');
//                                     $(".editions").fSelect();
                    alert(pubcode[0]);
//                            if(radiotype=="Main"){
//                                alert(radiotype);
                    $('#editions').html('');
//                                  $('.fs-option g0').html('');

                    $.ajax({

                        type: 'POST',
                        url: '<?php echo base_url(); ?>Entrydata/ajaxeditions/',

                        //                 dataType: 'json', 
                        data: {'publication': pubcode[0], 'radiotype': radiotype},
                        success: function (data) {
                            var myData = jQuery.parseJSON(data);
//                                            alert(data);
//                                            alert(myData);
                            console.log(data);
                            if (myData) {
//                                alert("entered into myData");
//                                alert(myData);
//                                var dataforeditions =[];
                  
                 
                 
                 
                 var dataforeditions = [{ id: 00,
                 title: 'select all', subs:[{id: 200,
                       title:'CENTRAL ANDHRA REGION', subs: [{
                 id: 200,
                 title:'CENTRAL ANDHRA REGION'},{
                 id: 202,
                 title:'VIJAYAWADA'},{
                 id: 209,
                 title:'GUNTUR'},{
                 id: 210,
                 title:'NELLORE'},{
                 id: 213,
                 title:'TADEPALLY GUDEM'},{
                 id: 218,
                 title:'ONGOLE'},]
                    },
                   {id: 300,
                       title:'NORTH ANDHRA REGION', subs: [{
                 id: 300,
                 title:'NORTH ANDHRA REGION'},{
                 id: 303,
                 title:'VISAKHAPATNAM'},{
                 id: 307,
                 title:'RAJAHMUNDRY'},{
                 id: 311,
                 title:'SRIKAKULAM'},]},{id: 400,
                       title:'RAYALASEEMA REGION', subs: [{
                 id: 400,
                 title:'RAYALASEEMA REGION'},{
                 id: 404,
                 title:'TIRUPATHI'},{
                 id: 405,
                 title:'ANANTHAPUR'},{
                 id: 412,
                 title:'KURNOOL'},{
                 id: 415,
                 title:'CUDDAPAH'},]},{id: 100,
                       title:'GRT HYDERABAD REGION', subs: [{
                 id: 100,
                 title:'GRT HYDERABAD REGION'},{
                 id: 101,
                 title:'HYDERABAD'},]},{id: 600,
                       title:'TELANGANA REGION', subs: [{
                 id: 600,
                 title:'TELANGANA REGION'},{
                 id: 606,
                 title:'KARIMNAGAR'},{
                 id: 608,
                 title:'SURYAPET'},{
                 id: 614,
                 title:'WARANGAL'},{
                 id: 616,
                 title:'NIZAMABAD'},{
                 id: 617,
                 title:'KHAMMAM'},{
                 id: 619,
                 title:'MAHABUBNAGAR'},]}]}];
                 
                 
                                
//                            var comboTree1 =
                                    $('.example').comboTree({
                                    
     
            source: dataforeditions,
            isMultiple: true, //for checkbox//
            cascadeSelect: true,
            collapse: true,

        });
        
//        var selectedTitles = comboTree1.getSelectedItemsTitle();
//var selectedIds = comboTree1.getSelectedItemsId();
//alert(selectedTitles);
//alert(selectedIds);

                                
//                                
//                        var arraydata  =  myData
     
     
                                
//                               alert(myData);
                               
                                

                            } 
                           
                             
                           
//                                          $(".fs-options").html('');
//                            $('#editions').multiselect({
//                                columns: 1,
//                                placeholder: 'Select Editions',
//                                search: true,
//                                selectAll: true,
//                                
//                            });
//                            $('#editions').multiselect('reload');
                        }
                        

                    });
                    

                }
                                     
                
//  var myData = [
//
//    {
//
//        id: 0,
//
//        title: 'Select All ',
//        subs: [{
//
//            id: 1,
//
//            title: 'Telangana Region ',
//             subs: [
//
//                {
//
//                    id: 7,
//
//                    text: 'Vizag',
//                    title: 'vizag value'
//
//                }, {
//
//                    id: 8,
//
//                    title: 'Srikakulam'
//
//                }, {
//
//                    id: 9,
//
//                    title: 'Vkpm+Sklm  '
//
//                }
//
//            ]
//
//        }, {
//
//            id: 2,
//
//            title: 'AP Region',
//
//            subs: [
//
//                {
//
//                    id: 3,
//
//                    title: 'Hyderabad'
//
//                }, {
//
//                    id: 4,
//
//                    title: 'Srikakulam'
//
//                }, {
//
//                    id: 5,
//
//                    title: 'Vkpm+Sklm'
//
//                }
//
//            ]
//
//        },  ]
//
//    }
//
//
//    // more data here
//
//];
//   edition_change();
//        $('.example').comboTree({
//     
//            source: myData,
//            isMultiple: true, //for checkbox//
//            cascadeSelect: true,
//            collapse: true,
//
//        });
//        $('.example').comboTree({
//            source: Data,
//            isMultiple: true, //for checkbox//
//            cascadeSelect: true,
//            collapse: true,
//        });

    });
</script>







</body>

</html>