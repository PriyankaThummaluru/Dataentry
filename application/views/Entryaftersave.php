
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
        <!-- multiselect -->
        <link rel="stylesheet" href="<?php echo site_url ?>assets/plugins/Drop-Down-Combo-Tree/style.css">
        <!-- datatable -->
        <!--<link rel="stylesheet" href="<?php echo site_url ?>assets/plugins/DataTables-1.11.3/css/dataTables.bootstrap4.min.css">-->


    </head>
    <form  method='post'  name="myForm"  enctype="multipart/form-data">
      
        <?php
//        $fildetails = array();
//        echo "<pre>";
//        print_r($dateaftersave);
//        echo "<br>";
//        print_r($publicationaftersave);
//         echo "<br>";
//        print_r($mainminiaftersave);
//         echo "<br>";
//        print_r($editionsaftersave);
//        echo $editionids;
//         echo "<br>";
//        print_r($namee);
//         echo "<br>";
////        print_r($addtype);
//        exit;
//          echo "<pre>";
//          echo "data in entry";
//            print_r($dropdowndata);
//            foreach($maincategory as $keymain=>$valmain){
//                echo $maincategory[$keymain]['advtmis_catg_subname'];
//                echo "<br>";
//                if($maincategory[$keymain]['advtmis_catg_subname'] == "Cellular Phones"){
//                    echo "financial";
//                }
//            }
//            exit;
//            print_r($maincategory);
//            print_r($updatingdetails);exit;
//       echo $fildetails;exit;
        ?>
        <?php if ($namee == "bhargavi") { ?>
                      <!--<form action="//<?php echo base_url(); ?>Entrydata/displayEntry/bhargavi" name="myForm" method="post">-->
            <?php
//        } else {
////    $nameinf = explode("~", $namee);
            ?>
                              <!--<form action="//<?php echo base_url(); ?>Entrydata/displayEntry/<?php echo $namee; ?>" name="myForm" method="post">-->
        <?php } ?>
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

                                    <!--<Link to="/signup" className="btn btn-primary">Log Out</Link>-->
                                    <!--<a href="" class="btn btn-sm-danger bg-dark btn-sm">Log Out</a>-->


                                    <input type="hidden" class="form-control " name="<?php echo $this->security->get_csrf_token_name(); ?>"  value="<?php echo $this->security->get_csrf_hash(); ?>">
                                    <input type="button" placeholder="Log Out" value="Log Out" id="logoutb" class="btn btn-sm-danger bg-dark btn-sm">

                                    <!--<meta http-equiv = "Log Out" placeholder="Log Out" content = "172.17.12.129/Dataentry/index.php/Entrydata/login" />-->
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



<?php if ($namee == "bhargavi") { ?>
                                            <li class="breadcrumb-item ">Entry</li>
                                            <?php
                                        } elseif ($namee == "priymulti") {
                                            ?>
                                            <li class="breadcrumb-item ">Multi Publication Update</li>
                                            <?php
                                        } else {
                                            ?>
                                            <li class="breadcrumb-item ">Modification</li>
                                        <?php } ?>
                                    </ol>
                                </div>

                                <!--breadcrumb Ends -->
                            </div>
                        </div>
                        <div class="col-sm-12 bg-white pt-3 shadow ">
<?php
// echo "<pre>";
//                             if($maincategory[$mainkey]['advtmis_catg_mainname'] == $dropdowndata[0]['advtmis_maincatgname'])
?>
                            <!--dropdowndata-->
                            <div class="row ">
                                <div class="col-sm-3  ">
                                    <div class="form-group row">

                                        <label for="newName" class="col-sm-5 col-form-label cusLabel">Date:</label>
                                        <div class="col-md-7 ">
                                            <div class="date-container">
<?php if ($namee == "bhargavi") { ?>
                                                <input type="hidden" value="<?php echo $dateaftersave ?>" id="hiddendate" name="hiddendate">
                                                    <input type="text" class="form-control datepicker" id="date" name="date"  autocomplete="off">
                                                <?php }
                                                
                                                elseif ($namee == "priymulti") {
                                                    ?>
                                                    <input type="text" class="form-control datepicker" id="date" name="date" autocomplete="off" disabled>
                                                    <?php
                                                } else {
                                                    ?>

                                                    <input type="text" class="form-control"  id="date" name="date"  value="<?php echo $dropdowndata[0]['advtmis_insdate'] ?>" autocomplete="off">
<?php } ?>
                                                <i class="date-icon fa fa-calendar " aria-hidden="true"></i>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group row">
                                        <label for="newName" class="col-md-5 col-form-label cusLabel">Publication:</label>
                                        <div class="col-md-7">
<?php if ($namee == "bhargavi") { 
    $publicationname = explode("~",$publicationaftersave);
    ?>
                                                <select class="form-control  col-md-12 col-xs-12 select2" type="text" name="publication" id="publication">

<?php 
//foreach($publication as $pubkey=>$pubvar){
//    if()
//}

        
?>
                                                    <option value="<?php echo $publicationaftersave ?>"><?php echo $publicationname[2] ?></option>
    <?php
    foreach ($publication as $key => $var) {
        if($publication[$key]['advtmis_pub_name'] == $publicationname[2]){
            continue;
        }
        $arr = $publication[$key]['advtmis_pub_maineditions'] . '~' . $publication[$key]['advtmis_pub_code'] . '~' . $publication[$key]['advtmis_pub_name'] . '~' . $publication[$key]['advtmis_pub_minieditions'];
//                         $arr[1]=
        ?>

                                                        <option value="<?php echo $arr; ?>"> <?php echo $publication[$key]['advtmis_pub_name']; ?> </option>
        <?php
    }
    ?>
                                                    <!--advtmis_pubcode-->
                                                </select>
<?php
} elseif ($namee == "priymulti") {
//                                                    $fildetails="";
//        $pubdetails="";
//        $catdetails="";
//        foreach($filterdata as $filkey=>$filval){
////            echo "<pre>";
////            print_r($filterdata);
////            print_r($filkey);
////            exit;
//            if($filkey=='publicationmodi'){
////                echo "<pre>";
////                print_r($filval);exit;
//                foreach($filval as $subfkey=>$subfval){
//                   $pubdetails .= $filval[$subfkey].",";
//                }
//            }
//            elseif($filkey=='maincategory'){
//                foreach($filval as $subfkey=>$subfval){
//                   $catdetails .= "'".$filval[$subfkey]."',";
//                }
//            }
//            else{
//            $fildetails .= $filterdata[$filkey].",";
//            }
//        }
    ?>
    <!--                                             <input type="hidden" value="<?php echo $fildetails; ?>" name="filterdata[]" id="filterdata">
                                    <input type="hidden" value="<?php echo $pubdetails; ?>" name="filterpub[]" id="filterpub">
                                    <input type="hidden" value="<?php echo $catdetails; ?>" name="filtercat[]" id="filtercat">-->
                                                <select class="form-control  col-md-12 col-xs-12 select2" type="text" name="publication" id="publication" disabled>
                                                    <option value="">Select</option>
                                                </select>
                                            <?php } else {
                                                ?>
                                                <select class="form-control  col-md-12 col-xs-12 select2" type="text" name="publication11" id="publication11"  readonly>
                                                    <?php $arr = $dropdowndata[0]['advtmis_pub_maineditions'] . '~' . $dropdowndata[0]['advtmis_pubcode'] . '~' . $dropdowndata[0]['advtmis_pubname'] . '~' . $dropdowndata[0]['advtmis_pub_minieditions']; ?>
                                                    <option value="<?php echo $arr; ?>"><?php echo $dropdowndata[0]['advtmis_pubname'] ?></option>
                                                </select>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-3">
                                    <div class="form-group row">
                                        <label for="newName" class="col-md-5 col-form-label cusLabel">Editions:</label>
                                        <div class="col-md-7">
                                            <?php if ($namee == "bhargavi") { ?>
                                                <select class="form-control  col-md-12 col-xs-12" id="mainmini" name="mainmini" type="text" >
                                                    <option value="<?php echo $mainminiaftersave ?>"><?php echo $mainminiaftersave ?></option>
                                                   <?php if($mainminiaftersave == 'MAIN'){?>
                                                   <option value="MINI">MINI</option>
                                                   <?php } else { ?>
                                                    
                                                 
                                                      <option value="MAIN">MAIN</option> 
                                                   <?php } ?>
                                                 
                                                </select>
                                            <?php } elseif ($namee == "priymulti") {
                                                ?>
                                                <select class="form-control  col-md-12 col-xs-12" id="mainmini" name="mainmini" type="text" disabled>
                                                    <option value="">Select</option>
                                                    <option value="MAIN">Main</option>
                                                    <option value="MINI">Mini</option>
                                                    <option value="MINI/MINI">Mini/Mini</option>
                                                </select>
                                                <?php
                                            } else {
                                                ?>
                                                <select class="form-control  col-md-12 col-xs-12" id="mainmini11" name="mainmini11" type="text" >
                                                    <option value="<?php echo $dropdowndata[0]['advtmis_mainmini'] ?>"><?php echo $dropdowndata[0]['advtmis_mainmini'] ?></option>
                                                </select>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>


                        <!-- part-1 ends -->
                        <div class="col-sm-12 bg-white pt-2 shadow mt-3 ">
                            <h3 class=" headinggs "><i class='far fa-edit'>Client Details</i></h3>
                            <div class="row">
                                <!-- sub1 -->
                                <div class="col-sm-3 border-right">

                                    <div class="col-sm-12 ">
                                        <div class="form-group row">
                                            <label for="newName" class="col-md-4 col-form-label cusLabel">Published Editions:</label>
                                            <div class="col-md-8" id="pubeditionsid">
                                                <?php if ($namee == "bhargavi") { ?>
                                                <input type="hidden" id="editionnames" name="editionnames" value="<?php echo $editionids ?>">
                                                    <!--<input type="hidden" id="editionnamesmini" name="editionnamesmini" value="<?php echo $dropdowndata[0]['advtmis_distedncode'] ?>">-->
                                                 <input type="text" id="editions" name="editions[]" class="form-control input-sm example1" placeholder="Select" autocomplete="off" >
                                                    <!--<input type="text" id="editions1" name="editions[]" class="form-control input-sm example" placeholder="Select" autocomplete="off">-->
                                                <?php } elseif ($namee == "priymulti") {
                                                    ?>
                                                    <input type="text" id="editions1" name="editions[]" class="form-control input-sm example" placeholder="Select"  autocomplete="off" disabled>
                                                     <!--<input type="text" id="editions" name="editions[]" class="form-control input-sm example1" placeholder="Select" autocomplete="off" onchange="checkFilled('editions')">-->
                                                    <?php
                                                } else {
                                                    ?>
                                                    <input type="hidden" id="editionnames" name="editionnames" value="<?php echo $dropdowndata[0]['advtmis_edncode'] ?>">
                                                    <input type="hidden" id="editionnamesmini" name="editionnamesmini" value="<?php echo $dropdowndata[0]['advtmis_distedncode'] ?>">
                                                    <input type="text" id="editions" name="editions[]" class="form-control input-sm example1" placeholder="Select" autocomplete="off" onchange="checkFilled('editions')">
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 " style="margin-top: -17px;">
                                        <div class="form-group row">
                                            <label for="newName" class="col-md-5 col-form-label cusLabel">Agency Name:</label>
                                            <div class="col-md-7">
                                                <?php if ($namee == "bhargavi") { ?>
                                                    <select class="form-control  col-md-12 col-xs-12 select2" type="text" name="agency" id="agency" >
                                                        <option value=""> Select </option>
                                                        <?php
                                                        foreach ($agency as $key => $var) {
                                                            $agencyinfo = $agency[$key]['mst013_agcode'] . '~' . $agency[$key]['mst013_agname'] . '~' . $agency[$key]['mst013_city'];
                                                            ?>
                                                            <option  value="<?php echo $agencyinfo; ?>"><?php echo $agency[$key]['mst013_agname'] . '~' . $agency[$key]['mst013_city']; ?></option>
                                                            <?php
                                                        }
                                                        ?>

                                                    </select>
                                                <?php } elseif ($namee == "priymulti") {
                                                    ?>
                                                    <select class="form-control  col-md-12 col-xs-12 select2" type="text" name="agency" id="agency" >
                                                        <?php
                                                        foreach ($agency as $agencykey => $agencyvar) {
                                                            if ($agency[$agencykey]['mst013_agname'] == $updatingdetails[0]['advtmis_agency']) {
                                                                $agencyinfo = $agency[$agencykey]['mst013_agcode'] . '~' . $agency[$agencykey]['mst013_agname'] . '~' . $agency[$key]['mst013_city'];
                                                            }
                                                        }
                                                        ?>
                                                        <option value=" <?php echo $agencyinfo ?>"> <?php echo $updatingdetails[0]['advtmis_agency'] ?> </option>
                                                        <?php
                                                        foreach ($agency as $key => $var) {
                                                            $agencyinfo = $agency[$key]['mst013_agcode'] . '~' . $agency[$key]['mst013_agname'] . '~' . $agency[$key]['mst013_city'];
                                                            ?>
                                                            <option  value="<?php echo $agencyinfo; ?>"><?php echo $agency[$key]['mst013_agname'] . '~' . $agency[$key]['mst013_city']; ?></option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <select class="form-control  col-md-12 col-xs-12 select2 agency" type="text" name="agency" id="agency" onchange="checkFilled('agency')">
                                                        <?php
                                                        foreach ($agency as $agencykey => $agencyvar) {
                                                            if ($agency[$agencykey]['mst013_agname'] == $dropdowndata[0]['advtmis_agency']) {
                                                                $agencyinfo = $agency[$agencykey]['mst013_agcode'] . '~' . $agency[$agencykey]['mst013_agname'] . '~' . $agency[$key]['mst013_city'];
                                                            }
                                                        }
                                                        ?>
                                                        <option value=" <?php echo $agencyinfo ?>"> <?php echo $dropdowndata[0]['advtmis_agency'] ?> </option>
                                                        <?php
                                                        foreach ($agency as $key => $var) {
                                                            $agencyinfo = $agency[$key]['mst013_agcode'] . '~' . $agency[$key]['mst013_agname'] . '~' . $agency[$key]['mst013_city'];
                                                            ?>
                                                            <option  value="<?php echo $agencyinfo; ?>"><?php echo $agency[$key]['mst013_agname'] . '~' . $agency[$key]['mst013_city']; ?></option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>

<?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 border-right">
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                            <label for="newName" class="col-md-5 col-form-label cusLabel">Main Category:</label>
                                            <div class="col-md-7">
<?php if ($namee == "bhargavi") { ?>
                                                    <select class="form-control  col-md-12 col-xs-12 select2" type="text" name="maincat" id="maincat">
                                                        <option value=""> Select </option>
    <?php
    foreach ($maincategory as $key => $var) {
//
//                                                            $catinfor = $maincategory[$key]['advtmis_catg_mainname'] . '~' . $maincategory[$key]['advtmis_catg_code'] . '~' . $maincategory[$key]['advtmis_catg_srlno']  . '~' . $maincategory[$key]['advtmis_catg_adcode'];
//                                                            
        ?>
                                                            <option value="<?php echo $maincategory[$key]['advtmis_catg_mainname']; ?>"><?php echo $maincategory[$key]['advtmis_catg_mainname']; ?></option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                <?php } elseif ($namee == "priymulti") {
                                                    ?>
                                                    <select class="form-control  col-md-12 col-xs-12 select2" type="text" name="maincat" id="maincat">
                                                    <?php
                                                    foreach ($maincategory as $mainkey => $main) {


                                                        if ($main['advtmis_catg_mainname'] == $updatingdetails[0]['advtmis_maincatgname']) {

                                                            $catinfor = $maincategory[$mainkey]['advtmis_catg_mainname'] . '~' . $maincategory[$mainkey]['advtmis_catg_code'] . '~' . $maincategory[$mainkey]['advtmis_catg_srlno'] . '~' . $maincategory[$mainkey]['advtmis_catg_subname'] . '~' . $maincategory[$mainkey]['advtmis_catg_adcode'];
                                                            ?> <option value=" <?php echo $catinfor ?>"> <?php echo $updatingdetails[0]['advtmis_maincatgname'] ?> </option>
                                                                <?php
                                                            }
                                                        }
                                                        ?>


                 <!--<option value=" <?php echo $catinfor ?>"> <?php echo $dropdowndata[0]['advtmis_maincatgname'] ?> </option>-->
    <?php
    foreach ($maincategory as $key => $var) {

        $catinfor = $maincategory[$key]['advtmis_catg_mainname'] . '~' . $maincategory[$key]['advtmis_catg_code'] . '~' . $maincategory[$key]['advtmis_catg_srlno'] . '~' . $maincategory[$key]['advtmis_catg_subname'] . '~' . $maincategory[$key]['advtmis_catg_adcode'];
        ?>
                                                            <option value="<?php echo $catinfor; ?>"><?php echo $maincategory[$key]['advtmis_catg_mainname']; ?></option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                    <?php } else { ?>
                                                    <select class="form-control  col-md-12 col-xs-12 select2 maincat" type="text" name="maincat" id="maincat" onchange="checkFilled('maincat')">
                                                    <?php
                                                    foreach ($maincatname as $mainkey => $main) {


                                                        if ($main['advtmis_catg_mainname'] == $dropdowndata[0]['advtmis_maincatgname']) {

//                                                                $catinfor = $maincategory[$mainkey]['advtmis_catg_mainname'] . '~' . $maincategory[$mainkey]['advtmis_catg_code'] . '~' . $maincategory[$mainkey]['advtmis_catg_srlno'] . '~' . $maincategory[$mainkey]['advtmis_catg_subname'] . '~' . $maincategory[$mainkey]['advtmis_catg_adcode'];
                                                            ?> <option value=" <?php echo $dropdowndata[0]['advtmis_maincatgname'] ?>"> <?php echo $dropdowndata[0]['advtmis_maincatgname'] ?> </option>
                                                                <?php
                                                            }
                                                        }
                                                        ?>


                 <!--<option value=" <?php echo $catinfor ?>"> <?php echo $dropdowndata[0]['advtmis_maincatgname'] ?> </option>-->
    <?php
    foreach ($maincatname as $key => $var) {

//                                                            $catinfor = $maincategory[$key]['advtmis_catg_mainname'] . '~' . $maincategory[$key]['advtmis_catg_code'] . '~' . $maincategory[$key]['advtmis_catg_srlno'] . '~' . $maincategory[$key]['advtmis_catg_subname'] . '~' . $maincategory[$key]['advtmis_catg_adcode'];
        ?>
                                                            <option value="<?php echo $maincatname[$key]['advtmis_catg_mainname']; ?>"><?php echo $maincatname[$key]['advtmis_catg_mainname']; ?></option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                    <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                            <label for="newName" class="col-md-5 col-form-label cusLabel">Sub Category:</label>
                                            <div class="col-md-7">
<?php if ($namee == "bhargavi") { ?>
                                                    <select class="form-control  col-md-12 col-xs-12 select2" type="text" name="subcat" id="subcat">

                                                        <option value="">Select</option>
                                                        <option value=""></option>
                                                    </select>
<?php } elseif ($namee == "priymulti") {
    ?>
                                                    <select class="form-control  col-md-12 col-xs-12 select2" type="text" name="subcat" id="subcat">
                                                        <option value="<?php echo $updatingdetails[0]['advtmis_subcatgname'] ?>"> <?php echo $updatingdetails[0]['advtmis_subcatgname'] ?> </option>
                                                        <option value=""></option>
                                                    </select>
<?php } else {
    ?>
                                                    <select class="form-control  col-md-12 col-xs-12 select2 subcat" type="text" name="subcat" id="subcat" onchange="checkFilled('subcat')"> 
                                                    <?php
                                                    foreach ($maincategory as $mainkeyy => $mainvarr) {
                                                        if ($maincategory[$mainkeyy]['advtmis_catg_subname'] == $dropdowndata[0]['advtmis_subcatgname']) {
//                                                             $sub="jsdklfjd";
//                                                              var x = this.advtmis_catg_subname +'~'+this.advtmis_catg_code+'~'+this.advtmis_catg_srlno+'~'+this.advtmis_catg_adcode;
                                                            $subcatinfo = $maincategory[$mainkeyy]['advtmis_catg_subname'] . '~' . $maincategory[$mainkeyy]['advtmis_catg_code'] . '~' . $maincategory[$mainkeyy]['advtmis_catg_srlno'] . '~' . $maincategory[$mainkeyy]['advtmis_catg_adcode'];
                                                        }
                                                    }
                                                    ?>
                                                        <option value="<?php echo $subcatinfo; ?>"> <?php echo $dropdowndata[0]['advtmis_subcatgname'] ?> </option>
                                                        <option value=""></option>
                                                    </select>
<?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- sub2 -->
                                <div class="col-sm-3 border-right">

                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                            <label for="newName" class="col-md-5 col-form-label cusLabel">Client Name:</label>
                                            <div class="col-md-7">
<?php if ($namee == "bhargavi") { ?>
                                                    <select class="form-control  col-md-12 col-xs-12 select2 " type="text" name="client" id="client">
                                                        <option value=""> Select </option>
                                                    <?php
                                                    foreach ($client as $key => $var) {
                                                        $clientinf = $client[$key]['mst014_clcode'] . '~' . $clientinf = $client[$key]['mst014_clname'];
                                                        ?>

                                                            <option  value="<?php echo $clientinf; ?>"><?php echo $client[$key]['mst014_clname']; ?></option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                    <?php } elseif ($namee == "priymulti") {
                                                        ?>
                                                    <select class="form-control  col-md-12 col-xs-12 select2 " type="text" name="client" id="client">
                                                    <?php
                                                    foreach ($client as $clientkey => $clientvar) {
                                                        if ($client[$clientkey]['mst014_clname'] == $updatingdetails[0]['advtmis_client']) {
                                                            $clientinf = $client[$clientkey]['mst014_clcode'] . '~' . $client[$clientkey]['mst014_clname'];
                                                        }
                                                    }
                                                    ?>
                                                        <option value="<?php echo $clientinf; ?>"> <?php echo $updatingdetails[0]['advtmis_client'] ?> </option>
                                                        <?php
                                                        foreach ($client as $key => $var) {
                                                            $clientinf = $client[$key]['mst014_clcode'] . '~' . $client[$key]['mst014_clname'];
                                                            ?>

                                                            <option  value="<?php echo $clientinf; ?>"><?php echo $client[$key]['mst014_clname']; ?></option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                    <?php } else {
                                                        ?>
                                                    <select class="form-control  col-md-12 col-xs-12 select2 client" type="text" name="client" id="client" onchange="checkFilled('client')">
                                                    <?php
                                                    foreach ($client as $clientkey => $clientvar) {
                                                        if ($client[$clientkey]['mst014_clname'] == $dropdowndata[0]['advtmis_client']) {
                                                            $clientinf = $client[$clientkey]['mst014_clcode'] . '~' . $client[$clientkey]['mst014_clname'];
                                                        }
                                                    }
                                                    ?>
                                                        <option value="<?php echo $clientinf; ?>"> <?php echo $dropdowndata[0]['advtmis_client'] ?> </option>
                                                        <?php
                                                        foreach ($client as $key => $var) {
                                                            $clientinf = $client[$key]['mst014_clcode'] . '~' . $client[$key]['mst014_clname'];
                                                            ?>

                                                            <option  value="<?php echo $clientinf; ?>"><?php echo $client[$key]['mst014_clname']; ?></option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                    <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                            <label for="newName" class="col-md-5 col-form-label cusLabel">Place:</label>
                                            <div class="col-md-7">
<?php if ($namee == "bhargavi") { ?>
                                                    <select class="form-control  col-md-12 col-xs-12 select2" type="text" name="place" id="place">
                                                        <option value=""> Select </option>
                                                    <?php
                                                    foreach ($place as $key => $var) {
                                                        $regioninfor = $place[$key]['advtmis_rgn_code'] . '~' . $place[$key]['advtmis_rgn_place'] . '~' . $place[$key]['advtmis_rgn_rgcd'] . '~' . $place[$key]['advtmis_rgn_regionname'];
                                                        ?>
                                                            <option  value="<?php echo $regioninfor; ?>"><?php echo $place[$key]['advtmis_rgn_place']; ?></option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                    <?php } elseif ($namee == "priymulti") {
                                                        ?>
                                                    <select class="form-control  col-md-12 col-xs-12 select2" type="text" name="place" id="place">
                                                    <?php
                                                    foreach ($place as $placekey => $placevar) {
                                                        if ($place[$placekey]['advtmis_rgn_place'] == $updatingdetails[0]['advtmis_place']) {

                                                            $regioninfor = $place[$placekey]['advtmis_rgn_code'] . '~' . $place[$placekey]['advtmis_rgn_place'] . '~' . $place[$placekey]['advtmis_rgn_rgcd'] . '~' . $place[$placekey]['advtmis_rgn_regionname'];
                                                        }
                                                    }
                                                    ?>
                                                        <option value="<?php echo $regioninfor ?>">  <?php echo $updatingdetails[0]['advtmis_place'] ?> </option>
                                                        <?php
                                                        foreach ($place as $key => $var) {
                                                            $regioninfor = $place[$key]['advtmis_rgn_code'] . '~' . $place[$key]['advtmis_rgn_place'] . '~' . $place[$key]['advtmis_rgn_rgcd'] . '~' . $place[$key]['advtmis_rgn_regionname'];
                                                            ?>
                                                            <option  value="<?php echo $regioninfor; ?>"><?php echo $place[$key]['advtmis_rgn_place']; ?></option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                    <?php } else {
                                                        ?>
                                                    <select class="form-control  col-md-12 col-xs-12 select2 place" type="text" name="place" id="place" onchange="checkFilled('place')">
                                                    <?php
                                                    foreach ($place as $placekey => $placevar) {
                                                        if ($place[$placekey]['advtmis_rgn_place'] == $dropdowndata[0]['advtmis_place']) {

                                                            $regioninfor = $place[$placekey]['advtmis_rgn_code'] . '~' . $place[$placekey]['advtmis_rgn_place'] . '~' . $place[$placekey]['advtmis_rgn_rgcd'] . '~' . $place[$placekey]['advtmis_rgn_regionname'];
                                                        }
                                                    }
                                                    ?>
                                                        <option value="<?php echo $regioninfor ?>">  <?php echo $dropdowndata[0]['advtmis_place'] ?> </option>
                                                        <?php
                                                        foreach ($place as $key => $var) {
                                                            $regioninfor = $place[$key]['advtmis_rgn_code'] . '~' . $place[$key]['advtmis_rgn_place'] . '~' . $place[$key]['advtmis_rgn_rgcd'] . '~' . $place[$key]['advtmis_rgn_regionname'];
                                                            ?>
                                                            <option  value="<?php echo $regioninfor; ?>"><?php echo $place[$key]['advtmis_rgn_place']; ?></option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                    <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 border-right">
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                            <label for="newName" class="col-md-5 col-form-label cusLabel">Product:</label>
                                            <div class="col-md-7"><?php if ($namee == "bhargavi") { ?>
                                                    <select class="form-control  col-md-12 col-xs-12 select2" type="text" name="product" id="product">
                                                        <option value="">Select</option>
                                                        <option value=""></option>
                                                    </select>  <?php } elseif ($namee == "priymulti") {
                                                        ?>
                                                    <select class="form-control  col-md-12 col-xs-12 select2" type="text" name="product" id="product">
                                                    <?php $productinfor = $updatingdetails[0]['advtmis_productcode'] . '~' . $updatingdetails[0]['advtmis_product'] ?>
                                                        <option value="<?php echo $productinfor ?>"><?php echo $updatingdetails[0]['advtmis_product'] ?></option>
                                                        <option value=""></option>
                                                    </select>
<?php } else {
    ?>
                                                    <select class="form-control  col-md-12 col-xs-12 select2 product" type="text" name="product" id="product" onchange="checkFilled('product')">
                                                    <?php $productinfor = $dropdowndata[0]['advtmis_productcode'] . '~' . $dropdowndata[0]['advtmis_product'] ?>
                                                        <option value="<?php echo $productinfor ?>"><?php echo $dropdowndata[0]['advtmis_product'] ?></option>
                                                        <option value=""></option>
                                                    </select> <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                            <label for="newName" class="col-md-5 col-form-label cusLabel">Brand:</label>
                                            <div class="col-md-7"><?php if ($namee == "bhargavi") { ?>
                                                    <select class="form-control  col-md-12 col-xs-12 select2" type="text" name="brand" id="brand">
                                                        <option value="">Select</option>
                                                        <option value=""></option>
                                                    </select> <?php } elseif ($namee == "priymulti") {
                                                        ?>
                                                    <select class="form-control  col-md-12 col-xs-12 select2" type="text" name="brand" id="brand">
                                                    <?php $brandinfor = $updatingdetails[0]['advtmis_brandcode'] . '~' . $updatingdetails[0]['advtmis_brand'] ?>
                                                        <option value="<?php echo $brandinfor ?>"><?php echo $updatingdetails[0]['advtmis_brand'] ?></option>
                                                        <option value=""></option>
                                                    </select>
<?php } else {
    ?>
                                                    <select class="form-control  col-md-12 col-xs-12 select2 brand" type="text" name="brand" id="brand" onchange="checkFilled('brand')">
                                                    <?php $brandinfor = $dropdowndata[0]['advtmis_brandcode'] . '~' . $dropdowndata[0]['advtmis_brand'] ?>
                                                        <option value="<?php echo $brandinfor ?>"><?php echo $dropdowndata[0]['advtmis_brand'] ?></option>
                                                        <option value=""></option>
                                                    </select><?php } ?>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                                <!-- sub3 -->





                            </div>
                        </div>
                        <!-- part-2 ends -->
                        <div class="col-sm-12 bg-white pt-3 mt-3 shadow ">
                            <h3 class=" headinggs "><i class='far fa-edit'> Ad Details</i></h3>
                            <div class="row">

                                <div class="col-sm-3">
                                    <div class="form-group row">
                                        <label for="newName" class="col-md-5 col-form-label cusLabel">Size(cm*cm):</label>
                                        <div class="col-md-7">
<?php if ($namee == "bhargavi") { ?>
                                                <input type="text" class="form-control input-sm" id="size" name="size"  value="" style="text-transform:uppercase"  autocomplete="off">
                                            <?php } elseif ($namee == "priymulti") {
                                                ?>
                                                <input type="text" class="form-control input-sm" id="size" name="size"  value="" style="text-transform:uppercase"  autocomplete="off" disabled>
                                                <?php
                                            } else {
                                                ?>
                                                <input type="text" class="form-control input-sm size" id="size" name="size"  value="<?php echo $dropdowndata[0]['advtmis_size'] ?>" style="text-transform:uppercase" autocomplete="off" onchange="checkFilled('size')">
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group row">
                                        <label for="newName" class="col-md-5 col-form-label cusLabel">Sqr-Cms:</label>
                                        <div class="col-md-7">
<?php if ($namee == "bhargavi") { ?>
                                                <input type="text" class="form-control input-sm" name="pagesize" id="pagesize"  value=""  autocomplete="off" readonly="true">
                                            <?php } elseif ($namee == "priymulti") {
                                                ?>
                                                <input type="text" class="form-control input-sm" name="pagesize" id="pagesize"  value=""  autocomplete="off" readonly="true" disabled>
                                                <?php
                                            } else {
                                                ?>
                                                <input type="text" class="form-control input-sm pagesize" name="pagesize" id="pagesize"  value="<?php echo $dropdowndata[0]['advtmis_space'] ?>"  autocomplete="off" readonly="true" onchange="checkFilled('pagesize')">
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group row">
                                        <label for="newName" class="col-md-5 col-form-label cusLabel">Page:</label>
                                        <div class="col-md-7">
<?php if ($namee == "bhargavi") { ?>
                                                <input type="text" class="form-control input-sm"  name="page" id="page"  value=""  autocomplete="off">
                                            <?php } elseif ($namee == "priymulti") {
                                                ?>
                                                <input type="text" class="form-control input-sm"  name="page" id="page"  value=""  autocomplete="off" disabled>
                                                <?php
                                            } else {
                                                ?>
                                                <input type="text" class="form-control input-sm page"  name="page" id="page"  value="<?php echo $dropdowndata[0]['advtmis_page'] ?>"  autocomplete="off" onchange="checkFilled('page')">
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group row">
                                        <label for="newName" class="col-md-5 col-form-label cusLabel">Color:</label>
                                        <div class="col-md-7">
<?php if ($namee == "bhargavi") { ?>
                                                <select class="form-control  col-md-12 col-xs-12 select2" type="text" name="color" id="color"  autocomplete="off">

                                                    <option value="">Select Color </option>
                                                    <option value="B">Black & White </option>
                                                    <option value="C">Color</option>
                                                    <option value="S">Single Color </option>
                                                </select>
<?php } elseif ($namee == "priymulti") {
    ?>
                                                <select class="form-control  col-md-12 col-xs-12 select2" type="text" name="color" id="color"  autocomplete="off" disabled >


                                                    <option value="<?php $updatingdetails[0]['advtmis_colbw']; ?>"><?php $updatingdetails[0]['advtmis_colbw']; ?> </option>
                                                    <option value="B">Black & White </option>
                                                    <option value="C">Color</option>
                                                    <option value="S">Single Color </option>
                                                </select>
    <?php
} else {
    ?>
                                                <select class="form-control  col-md-12 col-xs-12 select2 color" type="text" name="color" id="color"  autocomplete="off" onchange="checkFilled('color')">

                                                <?php
                                                if ($dropdowndata[0]['advtmis_colbw'] == 'B') {
                                                    $color = 'Black & White';
                                                } elseif ($dropdowndata[0]['advtmis_colbw'] == 'C') {
                                                    $color = 'Color';
                                                } elseif ($dropdowndata[0]['advtmis_colbw'] == 'S') {
                                                    $color = 'Single Color';
                                                }
                                                ?>
                                                    <option value="<?php echo $dropdowndata[0]['advtmis_colbw'] ?>"><?php echo $color ?> </option>
                                                    <option value="B">Black & White </option>
                                                    <option value="C">Color</option>
                                                    <option value="S">Single Color </option>
                                                </select>
<?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group row">
                                        <label for="newName" class="col-md-5 col-form-label cusLabel">Promoted By:</label>
                                        <div class="col-md-7">
<?php if ($namee == "bhargavi") { ?>
                                                <select class="form-control  col-md-12 col-xs-12 select2" type="text" name="promoted" id="promoted">
                                                    <!--<option value="">Select </option>-->
                                                    <option value="0">Direct</option>
                                                    <option value="1">Agency</option>
                                                    <option value="2">MMPL</option>
                                                </select>
<?php } elseif ($namee == "priymulti") {
    ?>
                                                <select class="form-control  col-md-12 col-xs-12 select2" type="text" name="promoted" id="promoted">
                                                    <!--<option value="">Select </option>-->
                                                    <option value="0">Direct</option>
                                                    <option value="1">Agency</option>
                                                    <option value="2">MMPL</option>
                                                </select>
    <?php
} else {
    ?>
                                                <select class="form-control  col-md-12 col-xs-12 select2 promoted" type="text" name="promoted" id="promoted" onchange="checkFilled('promoted')">
                                                    <!--<option value="">Select </option>-->
                                                    <option value="0">Direct</option>
                                                    <option value="1">Agency</option>
                                                    <option value="2">MMPL</option>
                                                </select>
<?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group row">
                                        <label for="newName" class="col-md-5 col-form-label cusLabel ">Special Pages:</label>
                                        <div class="col-md-7">  <?php if ($namee == "bhargavi") { ?>
                                                <select class="form-control  col-md-12 col-xs-12 select2" type="text" name="splpage" id="splpage">
                                                    <option value=""> Select </option>
                                                    <option value=""></option>
                                                </select> <?php } elseif ($namee == "priymulti") {
    ?>
                                                <select class="form-control  col-md-12 col-xs-12 select2" type="text" name="splpage" id="splpage" disabled>
                                                    <option value=""> Select </option>
                                                </select>
                                                <?php
                                            } else {
                                                ?>
                                                <select class="form-control  col-md-12 col-xs-12 select2 splpage1" type="text" name="splpage1" id="splpage1" onchange="checkFilled('splpage1')">
                                                    <option value="<?php echo $dropdowndata[0]['advtmis_splpage'] ?>"> <?php echo $dropdowndata[0]['advtmis_splpage'] ?> </option>
                                                    <option value=""></option>
                                                </select><?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group row">
                                        <label for="newName" class="col-md-5 col-form-label cusLabel ">Ad-Type:</label>
                                        <div class="col-md-7">
<?php if ($namee == "bhargavi") { ?>
                                                <select class="form-control  col-md-12 col-xs-12 select2" type="text" name="addtype" id="addtype">
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
                                                <?php } elseif ($namee == "priymulti") {
                                                    ?>
                                                <select class="form-control  col-md-12 col-xs-12 select2" type="text" name="addtype" id="addtype" disabled>
                                                    <option value="">Select</option>
                                                </select>
                                                <?php
                                            } else {
                                                ?>
                                                <select class="form-control  col-md-12 col-xs-12 select2 addtype" type="text" name="addtype" id="addtype" onchange="checkFilled('addtype')">
                                                <?php
                                                foreach ($addtype as $addkey => $addvar) {
                                                    if ($addtype[$addkey]['advtmis_adtype_code'] == $dropdowndata[0]['advtmis_adtype']) {
                                                        $addtypeinfo = $addtype[$addkey]['advtmis_adtype_code'] . '~' . $addtype[$addkey]['advtmis_adtype_name'];
                                                    }
                                                }
//                                                      echo $addtypeinfo;exit;
                                                if (!empty($addtypeinfo)) {
                                                    ?>

                                                        <option value="<?php echo $addtypeinfo; ?>"> <?php echo $dropdowndata[0]['advtmis_adtype'] ?></option>

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <option value=""> select</option>
                                                    <?php
                                                    }
                                                    foreach ($addtype as $key => $var) {
                                                        $addtypeinfo = $addtype[$key]['advtmis_adtype_code'] . '~' . $addtype[$key]['advtmis_adtype_name'];
                                                        ?>
                                                        <option value="<?php echo $addtypeinfo; ?>"><?php echo $addtype[$key]['advtmis_adtype_name']; ?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                                <?php } ?>
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
<?php if ($namee == "bhargavi") { ?>
                                                <input type="text" class="form-control input-sm " name="totads1" id="totads1" value="" disabled>
<?php } elseif ($namee == "priymulti") {
    ?>
                                                <input type="text" class="form-control input-sm " name="totads1" id="totads1" value="" disabled>
                                                <?php
                                            } else {
                                                ?>
                                                <input type="text" class="form-control input-sm " name="totads" id="totads" value="<?php echo $adsandspaces[0]['count'] ?>" disabled>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group row">
                                        <label for="newName" class="col-md-5 col-form-label cusLabel">Total Spaces:</label>
                                        <div class="col-md-7">
<?php if ($namee == "bhargavi") { ?>
                                                <input type="text" class="form-control input-sm " name="totspace1" id="totspace1" value="" disabled>
<?php } elseif ($namee == "priymulti") {
    ?>
                                                <input type="text" class="form-control input-sm " name="totspace1" id="totspace1" value="" disabled>
                                                <?php
                                            } else {
                                                ?>
                                                <input type="text" class="form-control input-sm " name="totspace" id="totspace" value="<?php echo $adsandspaces[0]['sum'] ?>" disabled>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 d-flex justify-content-center">
                                    <div class="pr-3">
<?php if ($namee == "bhargavi") { ?>
                                            <button type="submit" formaction="<?php echo base_url(); ?>Entrydata/displayEntry/bhargavi" class="btn btn-primary"  onclick="return validateEntry()">Save</button>
<?php } elseif ($namee == "priymulti") {
    ?>
                                            <button type="submit" id="updatemulti" formaction="<?php echo base_url(); ?>Entrydata/updatemultipublic" class="btn btn-primary"  onclick="return validateUpdate()">Update</button>                                          <?php
                                        } else {
                                            ?>
                                            <button type="submit" id="updateb" formaction="<?php echo base_url(); ?>Entrydata/displayEntry/<?php echo $namee; ?>" class="btn btn-primary"  onclick="return validateUpdate()">Update</button>
                                            <button type="submit" id="deleteb" formaction="<?php echo base_url(); ?>Entrydata/deleteid/<?php echo $namee; ?>" class="btn btn-primary" >Delete</button>
                                        <?php } ?>
                                    </div>
                                    <div class="pl-3">
                                        <a href="" class="btn btn-danger ">Reset</a>
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
<!-- Single select -->
<script src="<?php echo site_url ?>assets/plugins/selectSearch/select2.full.min.js"></script>
<!-- multiselect -->
<script src="<?php echo site_url ?>assets/plugins/Drop-Down-Combo-Tree/comboTreePlugin.js"></script>
<!-- multiselect dropdown data -->
<script src="<?php echo site_url ?>assets/plugins/Drop-Down-Combo-Tree/icontains.js"></script>

<!--<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->
<!-- datatable -->
<!--    <link rel="stylesheet" href="<?php echo site_url ?>assets/plugins/DataTables-1.11.3/js/jquery.dataTables.min.js">-->
<!--    <link rel="stylesheet" href="<?php echo site_url ?>assets/plugins/DataTables-1.11.3/js/dataTables.bootstrap4.min.js">-->


<script>
                                                $(function () {
                                                    $('.select2').select2()
                                                })

</script>
<script>
    function checkFilled(id) {
        if (id != 'editions') {
            let element = document.getElementById(id);

//       const colorboxes = document.querySelectorAll('[aria-labelledby="select2-"+id+"-container"]');
            const colorboxes = document.querySelectorAll('#select2-' + id + '-container');
//       alert(element);
            element.style.backgroundColor = "paleturquoise";

            colorboxes.forEach(el => {
                el.style.backgroundColor = "paleturquoise";
            });
        } else {
            $('.comboTreeDropDownContainer').on('change', function () {

                let element = document.getElementById(id);
                element.style.backgroundColor = "paleturquoise";

                element.setAttribute('name', 'updatededitions[]');

            });
        }

    }



    function validateUpdate() {
        var edi = document.forms["myForm"]["editions"].value;
//        alert(edi);
        if (edi == "") {
            alert("select publication editions");
            return false;
        }
    }


    function validateEntry() {

        var a = document.getElementById("publication");
        var optionSelIndex = a.options[a.selectedIndex].value;
        var optionSelectedText = a.options[a.selectedIndex].text;
        if (optionSelIndex == 0) {
            alert("Please select publication");
            return false;
        }







        var b = document.getElementById("mainmini");
        var optionSelIndex = b.options[b.selectedIndex].value;
        var optionSelectedText = b.options[b.selectedIndex].text;
        if (optionSelIndex == 0) {
            alert("Please select main or mini");
            return false;
        }

        var c = document.forms["myForm"]["editions"].value;
        if (c == "") {
            alert("select publication editions");
            return false;
        }

        var e = document.getElementById("maincat");
        var optionSelIndex = e.options[e.selectedIndex].value;
        var optionSelectedText = e.options[e.selectedIndex].text;
        if (optionSelIndex == 0) {
            alert("Please select  main category");
            return false;
        }
        var f = document.getElementById("subcat");
        var optionSelIndex = f.options[f.selectedIndex].value;
        var optionSelectedText = f.options[f.selectedIndex].text;
        if (optionSelIndex == 0) {
            alert("Please select  sub category");
            return false;
        }
        var g = document.getElementById("place");
        var optionSelIndex = g.options[g.selectedIndex].value;
        var optionSelectedText = g.options[g.selectedIndex].text;
        if (optionSelIndex == 0) {
            alert("Please select  place");
            return false;
        }
        var h = document.getElementById("product");
        var optionSelIndex = h.options[h.selectedIndex].value;
        var optionSelectedText = h.options[h.selectedIndex].text;
        if (optionSelIndex == 0) {
            alert("Please select  product");
            return false;
        }
        var i = document.getElementById("brand");
        var optionSelIndex = i.options[i.selectedIndex].value;
        var optionSelectedText = i.options[i.selectedIndex].text;
        if (optionSelIndex == 0) {
            alert("Please select  brand");
            return false;
        }
        var j = document.getElementById("client");
        var optionSelIndex = j.options[j.selectedIndex].value;
        var optionSelectedText = j.options[j.selectedIndex].text;
        if (optionSelIndex == 0) {
            alert("Please select  client");
            return false;
        }

        var y = document.forms["myForm"]["size"].value;
        if (y == "") {
            alert("select size");
            return false;
        }

        var y = document.forms["myForm"]["pagesize"].value;
        if (y == "") {
            alert("select page size");
            return false;
        }

        var y = document.forms["myForm"]["page"].value;
        if (y == "") {
            alert("select no.of page");
            return false;
        }

        var y = document.forms["myForm"]["size"].value;
        if (y == "") {
            alert("select size");
            return false;
        }
        var o = document.getElementById("color");
        var optionSelIndex = o.options[o.selectedIndex].value;
        var optionSelectedText = o.options[o.selectedIndex].text;
        if (optionSelIndex == 0) {
            alert("Please select  color");
            return false;
        }
    }




    $(function () {
        
        var dateaftersave = $('#hiddendate').val();
//        alert(dateaftersave);
        document.getElementById("date").value = dateaftersave;
//         $('#date').defaultValue = dateaftersave;

        $('#date').on('change', function () {
            datecheck();
        });

        function datecheck() {
            var date = $('#date').val();
//         alert(date);
            var today = new Date();
            var dd = String(today.getDate()).padStart(2, '0');
            var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
            var yyyy = today.getFullYear();

            today = dd + '-' + mm + '-' + yyyy;
//alert(today);
            if (date > today) {
                alert("please select valid date");
                var date = $('#date').val(today);
//    return false;
            }
        }

        $('#logoutb').on('click', function (event) {
//            var edate = date('d-m-Y');
//            alert(edate);

            event.preventDefault();
            location.href = "http://172.17.12.129/Dataentry/index.php/Entrydata/login";
        });

//alert(today);

        $('#mainmini').on('change', function () {
//alert("entered into mainmini");
//setTimeout("location.reload(true);",1000)
// event.preventDefault();
            total_ads();
            total_spaces();
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
//            alert("editions open");
            total_ads();
            total_spaces();
//             event.preventDefault();
            edition_change();
            specialpages();
//                                    var x="405~ANANTHAPUR~1";
//                                     $("#editions option[value='" + x + "']").prop("selected", true);
        });

//        $('#editions').on('click', function (event) {
//            event.preventDefault();
//        });

        $('#date').on('change', function () {
//            datechange();
//                          alert('chck');
//    var today = new Date();
//var dd = String(today.getDate()).padStart(2, '0');
//var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
//var yyyy = today.getFullYear();
//
//today = dd + '-' + mm + '-' + yyyy;
////alert(today);
//        $('#date').datepicker({
//            dateFormat: "yy-mm-dd",
//             maxDate: new Date(today),
//        });

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
//             var size = $('#size').val();
            pagesize();
        });
        $('#mainmini1').on('change', function () {
//            edition_change();
            modifysplpage();
        });

//                 $('#splpage1').on('click', function () {
//            edition_change();
//        specialpages11();
//        });

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
//                         var agencyy=$('#$agency').val();
//                         alert(agencyy);
            modificationpagesize();
        });
//            $('#dateformod').change(function () {
//                       var moddate=$("#dateformod").val();
//                       alert(moddate);
//                        $('#date1').change(function () {
//                screendata();
//                         $('.serialno').click(function () {
////            var serialno = document.getElementById('srlno').getElementsByTagName('a')
//                       let serialno = $(this).text();
////                       var serialno = $('#srlno').val();
////                        var serialno = $('a').text();
//                      
//                       alert(serialno);
//                    });

//                    });

//            });

//                     $('#save1').click(function ()
//                    {
////                         $('.serialno').click(function () {
////            var serialno = document.getElementById('srlno').getElementsByTagName('a')
////                       var srlno = serialno;
////                       var srlno = $(this).text();
////                       var serialno = $('#srlno').val();
////                        var serialno = $('a').text();
//                      var srlno=srlno;
////                        alert(srlno);
////                       alert(srlno);
////                    });
////                        var srlno = $("#srlno").val();
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


//            function screendata() {
////                    var date = $("#date1").val();
//                var date = $("#dateformod").val();
//                $.ajax({
//                    type: 'POST',
//                    url: '<?php echo base_url(); ?>/Entrydata/ajaxdateformodifi/',
//
//                    data: {'Date': date},
//                    success: function (data) {
////                            alert(data);
////                           var dataforscreen=[];
////                            var dataforscreen = jQuery.parseJSON(data);
//
////                             var len = data.length;
////            for(var i=0; i<len; i++){
////                var id = data[i].id;
////                var username = data[i].username;
////                var name = data[i].name;
////                var email = data[i].email;
////
////                var tr_str = "<tr>" +
//                    "<td align='center'>" + (i+1) + "</td>" +
//                    "<td align='center'>" + username + "</td>" +
//                    "<td align='center'>" + name + "</td>" +
//                    "<td align='center'>" + email + "</td>" +
////                    "</tr>";
////
////                $("#userTable tbody").append(tr_str);
////            }
//                        let srlno = 0;
//                        let edioptions = 0;
//                        $("#modificationscreen").html(data);
////                             $(".modificationscreen").append("<div>" + data + "</div>");
////                        $('.serialno').click(function () {
////////            var serialno = document.getElementById('srlno').getElementsByTagName('a')
////                            srlno = $(this).text();
////                            edioptions = $('#edioptions').val();
////                            var editioninfor = edioptions.split('~');
////
////
//////                         var modeditions=[];
////                            var modeditions = [{id: 00,
////                                    title: 'SELECT ALL', subs: [{id: 200,
////                                            title: 'CENTRAL ANDHRA REGION', subs: [{
////                                                    id: 200,
////                                                    title: 'CENTRAL ANDHRA REGION'}, {
////                                                    id: 202,
////                                                    title: 'VIJAYAWADA'}, {
////                                                    id: 209,
////                                                    title: 'GUNTUR'}, {
////                                                    id: 210,
////                                                    title: 'NELLORE'}, {
////                                                    id: 213,
////                                                    title: 'TADEPALLY GUDEM'}, {
////                                                    id: 218,
////                                                    title: 'ONGOLE'}, ]
////                                        },
////                                        {id: 300,
////                                            title: 'NORTH ANDHRA REGION', subs: [{
////                                                    id: 300,
////                                                    title: 'NORTH ANDHRA REGION'}, {
////                                                    id: 303,
////                                                    title: 'VISAKHAPATNAM'}, {
////                                                    id: 307,
////                                                    title: 'RAJAHMUNDRY'}, {
////                                                    id: 311,
////                                                    title: 'SRIKAKULAM'}, ]}, {id: 400,
////                                            title: 'RAYALASEEMA REGION', subs: [{
////                                                    id: 400,
////                                                    title: 'RAYALASEEMA REGION'}, {
////                                                    id: 404,
////                                                    title: 'TIRUPATHI'}, {
////                                                    id: 405,
////                                                    title: 'ANANTHAPUR'}, {
////                                                    id: 412,
////                                                    title: 'KURNOOL'}, {
////                                                    id: 415,
////                                                    title: 'CUDDAPAH'}, ]}, {id: 100,
////                                            title: 'GRT HYDERABAD REGION', subs: [{
////                                                    id: 100,
////                                                    title: 'GRT HYDERABAD REGION'}, {
////                                                    id: 101,
////                                                    title: 'HYDERABAD'}, ]}, {id: 600,
////                                            title: 'TELANGANA REGION', subs: [{
////                                                    id: 600,
////                                                    title: 'TELANGANA REGION'}, {
////                                                    id: 606,
////                                                    title: 'KARIMNAGAR'}, {
////                                                    id: 608,
////                                                    title: 'SURYAPET'}, {
////                                                    id: 614,
////                                                    title: 'WARANGAL'}, {
////                                                    id: 616,
////                                                    title: 'NIZAMABAD'}, {
////                                                    id: 617,
////                                                    title: 'KHAMMAM'}, {
////                                                    id: 619,
////                                                    title: 'MAHABUBNAGAR'}, ]}]}];
////
////                            alert("editions options type");
////
////                            alert(modeditions);
////
////// $('.example1').comboTree({
//////                                    
//////     
//////            source: modeditions,
//////            isMultiple: true, //for checkbox//
//////            cascadeSelect: true,
//////            collapse: true,
//////
//////        });
////
////
//////                         alert(editioninfor);
//////                         alert(editioninfor[0]);
//////                         alert(editioninfor[1]);
////                        });
//
////                        $('#save1').click(function (){
////                        
//////                         $('.serialno').click(function () {
//////            var serialno = document.getElementById('srlno').getElementsByTagName('a')
//////                       var srlno = serialno;
//////                       var srlno = $(this).text();
//////                       var serialno = $('#srlno').val();
//////                        var serialno = $('a').text();
//////                      var srlno=srlno;
//////                       alert(srlno);
//////                    });
//////                        var srlno = $("#srlno").val();
//////                        alert(edioptions[0]);
////                            var editions = $("#editions1").val();
////                            var editionsinfor = editions.split(',');
//////alert(editionsinfor);
//////alert(editionsinfor[0]);
//////alert(editionsinfor[1]);
////                            var client = $("#client1").val();
////                            var clientinf = client.split('~');
////                            var clientcode = clientinf[0];
////                            var clientname = clientinf[1];
////
////                            var product = $("#product1").val();
////                            var productinf = product.split('~');
////                            var productcode = productinf[0];
////                            var productname = productinf[1];
////
////                            var brand = $("#brand1").val();
////                            var brandinf = brand.split('~');
////                            var brandcode = brandinf[0];
////                            var brandname = brandinf[1];
////
////                            var agency = $("#agency1").val();
////                            var agencyinf = agency.split('~');
////                            var agencycode = agencyinf[0];
////                            var agencyname = agencyinf[1];
////
////                            var page = $("#page1").val();
////                            var size = $("#size1").val();
////                            var pagesize = $("#pagesize1").val();
////                            var color = $("#color1").val();
////
////                            var place1 = $("#place1").val();
////                            var placeinf = place1.split('~');
////                            var entryrgncode = placeinf[0];
////                            var place = placeinf[1];
////                            var rgcd = placeinf[2];
////                            var rgcdname = placeinf[3];
////
////                            var mainmini = $("#mainmini1").val();
////
////                            var addtype = $("#addtype1").val();
////                            var splpage = $("#splpage1").val();
////
////                            var publication = $("#publication1").val();
////                            var publicationinf = publication.split('~');
////                            var publicationcode = publicationinf[1];
////                            var publicationname = publicationinf[2];
////
////                            var date = $("#date1").val();
////
//////                        alert(entryrgncode);
//////                        alert(rgcd);
//////                        alert(rgcdname);
//////                        alert(publicationinf[1]);
////                            $.ajax({
////                                type: 'POST',
////                                url: '<?php echo base_url(); ?>/Entrydata/ajaxinsertingData/',
////
////                                data: {'editionsinfor': editionsinfor, 'rgcdname': rgcdname, 'rgcd': rgcd, 'entryrgncode': entryrgncode, 'srlno': srlno, 'clientcode': clientcode, 'clientname': clientname, 'productcode': productcode, 'productname': productname, 'brandcode': brandcode,
////                                    'brandname': brandname, 'agencycode': agencycode, 'agencyname': agencyname, 'page': page, 'size': size, 'pagesize': pagesize, 'color': color,
////                                    'place': place, 'mainmini': mainmini, 'addtype': addtype, 'splpage': splpage, 'publicationcode': publicationcode, 'publicationname': publicationname, 'date': date},
////                                success: function (data) {
////
////                                }
////                            });
////
////                        });
//////                       var serialno = $('#srlno').val();
//////                        var serialno = $('a').text();
////                      
////                       alert(srlno);
//
//
//
//
//
//
//
////                            console.log(data);
////                            if (dataforscreen) {
////                                return dataforscreen;
////                                $('#splpage1').html('');
////                                var option = $('<option value="0">Select</option>');
////                                $('#splpage1').append(option);
////                                $(specialp).each(function () {
////                                    var option = $('<option />');
//////                                    var x = this.mst011_prodname;
////                                    var y = this.advtmis_splpg_name;
////                                    option.attr('value', y).text(this.advtmis_splpg_name);
////                                    $('#splpage1').append(option);
////                                });
////                            }
//                    }
//                });
//            }


        function pagesize() {
            var size = $('#size').val();
            $.ajax({

                type: 'POST',
                url: '<?php echo base_url(); ?>Entrydata/ajaxsize/',
                data: {'size': size},
                success: function (data) {
                    var valuee = jQuery.parseJSON(data);
                    if (valuee == 00) {
                        alert("Enter Proper Size");
                        return false;
                    } else if (valuee >= 1683) {
                        alert("full page size");

                        $("#pagesize").val(valuee);

                    } else {
                        $("#pagesize").val(valuee);
                    }
                    console.log(data);
                }
            });
        }

specialpages();
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
//                    alert(specialp);
//                            console.log(data);
                    if (specialp) {
                        $('#splpage').html('');
                        var option = $('<option value="0">Select</option>');
                        $('#splpage').append(option);
                        $(specialp).each(function () {
                            var option = $('<option />');
//                                    var x = this.mst011_prodname;
                            var y = this.advtmis_splpg_name+'~'+this.advtmis_splpg_code;
                            option.attr('value', y).text(this.advtmis_splpg_name);
                            $('#splpage').append(option);
                        });
                    }
                }
            });
        }
      total_ads();
      total_spaces();
        function total_ads() {
            var date = $('#date').val();
            var public = $('#publication').val();
            var mainmini = $('#mainmini').val();
            var pubcode = public.split('~');
            $.ajax({

                type: 'POST',
                url: '<?php echo base_url(); ?>Entrydata/ajaxtotalads/',
                data: {'date': date, 'public': pubcode[1], 'mainmini': mainmini},
                success: function (data) {
                    var adstot = jQuery.parseJSON(data);
//                            alert(adstot);
                    $("#totads1").val(adstot);
//                            console.log(data);
                }
            });
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
                    var spaces = jQuery.parseJSON(data);
                    $("#totspace1").val(spaces);
//                            console.log(data);
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
//                    alert subcat;
//                            console.log(data);
                    if (subcat) {
                        $('#subcat').html('');
                        var option = $('<option value="0">Select</option>');
                        $('#subcat').append(option);
                        $(subcat).each(function () {
                            var option = $('<option />');
//                             $maincategory[$key]['advtmis_catg_code'] . '~' . $maincategory[$key]['advtmis_catg_srlno']  . '~' . $maincategory[$key]['advtmis_catg_adcode'];
                            var x = this.advtmis_catg_mainname + '~' + this.advtmis_catg_code + '~' + this.advtmis_catg_srlno + '~' + this.advtmis_catg_subname + '~' + this.advtmis_catg_adcode;
                            option.attr('value', x).text(this.advtmis_catg_subname);
                            $('#subcat').append(option);
                        });
                    }
                }
            });
        }
//            function modsubcat_change() {
//                var main = $('#maincat1').val();
//                var maincat = main.split('~');
//
//                $.ajax({
//
//                    type: 'POST',
//                    url: '<?php echo base_url(); ?>Entrydata/ajaxdisplay/',
//                    data: {'maincat': maincat[0]},
//                    success: function (data) {
//                        var subcat = jQuery.parseJSON(data);
////                            console.log(data);
//                        if (subcat) {
//                            $('#subcat1').html('');
//                            var option = $('<option value="0">Select</option>');
//                            $('#subcat1').append(option);
//                            $(subcat).each(function () {
//                                var option = $('<option />');
//                                var x = this.advtmis_catg_subname;
//                                option.attr('value', x).text(this.advtmis_catg_subname);
//                                $('#subcat1').append(option);
//                            });
//                        }
//                    }
//                });
//            }

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
//                            console.log(data);
                    if (product) {
                        $('#product').html('');
                        var option = $('<option value="0">Select</option>');
                        $('#product').append(option);
                        $(product).each(function () {
                            var option = $('<option />');
//                            var productname=$('#product1').text();
//                            if(productname==)
//                            alert(productname);
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
//                            console.log(data);

                    if (brand) {
//                        alert(brand);
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
//          alert(pubcode[0]);
//          alert(pubcode[3]);
            if (radiotype == 'MAIN') {
                var pubcodee = pubcode[0];
//                   alert(pubcodee);
            } else if (radiotype == 'MINI') {
                var pubcodee = pubcode[3];
//                 console.log(pubcodee + " hvghvv of my Data");
            }
//              alert(pubcodee);
//                            if(radiotype=="Main"){
//                                alert(radiotype);
            $('#editions1').html('');

//                 $('.example').comboTree('reload');
//                                  $('.fs-option g0').html('');
//                var data1 = {};
//                $('.example').comboTree({
//
//                    source: [data1],                   
//
//                });
//$('.example').combo("clear");
            $.ajax({

                type: 'POST',
//                          contentType: "application/json; charset=utf-8",
                dataType: "json",
                url: '<?php echo base_url(); ?>Entrydata/ajaxeditions/',
//                        contentType: "application/json; charset=utf-8",


                //                 dataType: 'json', 
//                if(radiotype=='MAIN'){
                data: {'publication': pubcodee, 'radiotype': radiotype},
//                    }
//            else if(radiotype=='MINI'){
//                data: {'publication': pubcode[3], 'radiotype': radiotype},
//                    }
                success: function (data) {
                    if (data) {
                        console.log(typeof data + " hvghvv of my Data");
//console.log(data);
                        console.log(data);
//console.log(myData);
//alert(data);
                        var exampleinput = '<input type="text" id="editions1" name="editions[]" class="form-control input-sm example" placeholder="Select" autocomplete="off">';
                        $("#pubeditionsid").html(exampleinput);

//                        $(document).ready(function () {
                        $('.example').comboTree({

                            source: [data],
                            isMultiple: true, //for checkbox//
                            cascadeSelect: true,
                            collapse: true,

                        });
//                        });
//var comboTree1;
//                         comboTree1 =   $('.example').comboTree({
//
//                                source: [data],
//                                isMultiple: true, //for checkbox//
//                                cascadeSelect: true,
//                                collapse: true,
//
//                            });

//                            $('.example').combotree('reload','data');



//                            $('.example').comboTree('reload', [data]);




                    }
//                        $('.example').combotree('reload',[data]);
// comboTree1.destroy();


                }

//                        $('.example').combotree('reload',[data]);
// comboTree1.destroy();







            });
        }

//         $('#updateb').on('click', function () {
//         return false;
//        });
//         $('#comboTree605884ArrowBtn').on('click', function (event) {
//           event.preventDefault();
//           window.history.back();
//         });
////        });
//         $('.comboTreeArrowBtnImg').on('click', function (event) {
//           event.preventDefault();
//           window.history.back();
//         });


//        $('#editions').on('click', function () {

//         setTimeout("location.reload(true);",1000)
            edition_change_modify();
//                           var names = $('#editionnames').val();
//                        var namesofedi = names.split(',');

//                         var totedit = $('.example1').combotree('setValues', values);
//                        var totedit = $('.example').text();
//                        alert(totedit);
//                        alert(namesofedi);
//                        alert(namesofedi[0]);
//                        var i=0;
//                         $(namesofedi).each(function () {
////                             var nameofeditions = this.namesofedi;
//                                $('.example1').attr('checked', true);
//                             alert(namesofedi[i]);
//                             i++;
//                         });
//        });
//                         });

        function edition_change_modify() {
//            setTimeout("location.reload(true);",1000)
            var public = $('#publication').val();
            var radiotype = $("#mainmini").val();
            var pubcode = public.split('~');

//            console.log(pubcode + " hvghvv of my Data");
//                                     $("#editions ").attr('multiple','multiple');
//                                     $(".editions").fSelect();
//            alert(pubcode[0]);
//            alert(radiotype);

            if (radiotype == 'MAIN') {
                var pubcodee = pubcode[0];
//                   alert(pubcodee);
            } else if (radiotype == 'MINI') {
                var pubcodee = pubcode[3];
//                    alert(pubcodee);
//                 console.log(pubcodee + " hvghvv of my Data");
            }
//                            if(radiotype=="Main"){
//                                alert(radiotype);
            $('#editions').html('');

//             event.preventDefault();
//                 $('.example').comboTree('reload');
//                                  $('.fs-option g0').html('');
//                var data1 = {};
//                $('.example').comboTree({
//
//                    source: [data1],                   
//
//                });
//$('.example').combo("clear");
            $.ajax({

                type: 'POST',
                async: false,
//                          contentType: "application/json; charset=utf-8",
                dataType: "json",
                url: '<?php echo base_url(); ?>Entrydata/ajaxeditions/',
//                        contentType: "application/json; charset=utf-8",


                //                 dataType: 'json', 
                data: {'publication': pubcodee, 'radiotype': radiotype},
                success: function (data) {
                    if (data) {
//                        console.log(typeof data + " hvghvv of my Data");
//console.log(data);
//                        console.log(data);
//                        let redata=data;
//console.log(myData);
//alert(data);
//obj comboTree1={};
//var comboTree1 = {}

//console.log(typeof comboTree1 +"type of");
//                        comboTree1=
                        var instvar = $('.example1').comboTree({

                            source: [data],
                            isMultiple: true, //for checkbox//
                            cascadeSelect: true,
                            collapse: true,

                        });
//                        alert(data);
//                        if (radiotype == 'MAIN') {
                            var names = $('#editionnames').val();
                            var namesofedi = names.split(',');
//                        } else if (radiotype == 'MINI') {
//                            var names = $('#editionnamesmini').val();
//                            var namesofedi = names.split(',');
//                        }
//                        alert(namesofedi);

//                        instvar.setSource([data]);

//                        instvar.setSelection(100,200);
                        var valueofselect = instvar.setSelection(namesofedi);
//                        alert(valueofselect);



//                        alert("jdklfjl");
//                        alert(comboTree1);
//                        
//                           var names = $('#editionnames').val();
//                        var namesofedi = names.split(',');
//                        
//                        var totedit = $('#editions').text();
//                        alert(totedit);
////                        alert(namesofedi);
////                        alert(namesofedi[0]);
//                        var i=0;
//                         $(namesofedi).each(function () {
////                             var nameofeditions = this.namesofedi;
//                                $('.example1').attr('checked', true);
//                             alert(namesofedi[i]);
//                             i++;
//                         });


//                         $(ctItem).find("input").prop('checked', true);
//                        $(".example1").comboTree(namesofedi[0], 'checked');
//                            $('#example1').attr('checked', true);
//                        $(".example1").comboTree(namesofedi[1], 'checked');
//                        $(".example1").comboTree(namesofedi[2], 'checked');
//                            $ (".example1"). comboTree ('setValue', namesofedi[1]);
//                            $ (".example1"). comboTree ('setValue', namesofedi[2]);
//var comboTree1;
//                         comboTree1 =   $('.example').comboTree({
//
//                                source: [data],
//                                isMultiple: true, //for checkbox//
//                                cascadeSelect: true,
//                                collapse: true,
//
//                            });

//                            $('.example').combotree('reload','data');



//                            $('.example').comboTree('reload', [data]);




                    }



                }


//                        $('.example').combotree('reload',[data]);
// comboTree1.destroy();







            });


//             $('.example').comboTree({
//            source: [data],
//            isMultiple: true, //for checkbox//
//            cascadeSelect: true,
//            collapse: true,
//        });

//setTimeout("location.reload(true);",1500)

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

    });
</script>







</body>

</html>