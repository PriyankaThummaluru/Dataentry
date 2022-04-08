
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
    <!-- datatable -->
    <link rel="stylesheet" href="<?php echo site_url ?>assets/plugins/DataTables-1.11.3/css/dataTables.bootstrap4.min.css">

    
    <style>
        .nav-link{
             color: brown;
             font-weight: bold;
             font-style: italic;
        }
        thead {   
    position: sticky;   
    top: 0; 
}
        #pubid { 
    position: sticky; 
    left: 0; 
}
        .scroller {
  width: 1500px;
  height: 500px;
  overflow-y: scroll;
  scrollbar-width: thin;
}
    </style>
</head>

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
                    MIS </a>
                <p class="navbar-brand text-pink font-weight-bolder display-6">
                    <?php echo $user[0]['advtmis_user_empname']. " Logged In From ".$user[0]['advtmis_unit_name']." Unit And Your Last Login : ".$user[0]['advtmis_user_lastlogin']    ?></p>
                
              
            </ul>
            <?php 
//            echo "<pre>";
//            print_r($user);exit;
            ?>

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
                         <input type="hidden" class="form-control " name="<?php echo $this->security->get_csrf_token_name();?>"  value="<?php echo $this->security->get_csrf_hash();?>">
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
                            <a href="#" class="nav-link">
                                <i class="zmdi zmdi-view-dashboard nav-icon text-primary"></i>
                                <p>Dashboard
                                
                                    
                                <!--<i class="right zmdi zmdi-chevron-down  ml-3"></i>-->
                                </p>
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
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>

                        <!--breadcrumb Ends -->
                    </div>
                </div>
               
<div  style="overflow-x:auto;">
    <h3 align="center" style="color:blue;">Other Publication Latest Details</h3>
    
    <?php
//    echo "<pre>";
//    print_r($mini);
//    exit;
    foreach($main as $mainkey=>$mainvar){
        $arrmain[$main[$mainkey]['pubname']][$main[$mainkey]['unname']]=$main[$mainkey]['date'];
    }
    
    foreach($mini as $minikey=>$minivar){
        $arrmini[$mini[$minikey]['pubname']][$mini[$minikey]['unname']]=$mini[$minikey]['date'];
    }
//    echo "<pre>";
//    print_r($arrmini);
//    exit;
    ?>
    <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link in active" id="custom-tabs-one-home-tab" data-toggle="pill"  href="#main" aria-controls="main" role="tab" aria-selected="true" >Main Dayclose Details</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#mini" aria-controls="mini" role="tab" aria-selected="false" >Mini Dayclose Details</a>
                                </li>
                            </ul>
     <div class="tab-content">
                                        <div id="main" class="tab-pane fade show active  "> 
    
    <div class="scroller">
                <table border="2px" >
                    <thead>
                          
                        <?php
                         echo "<tr>";
                         echo "<th></th>";
                        foreach($unitnames as $unitkey=>$unitvar){
                           echo "<th bgcolor=\"lightgreen\">".$unitnames[$unitkey]['advtmis_unit_shortname']."</th>" ;  
                        }
                         echo "</tr>";
                        ?>
                         
                    </thead>
                    <tbody>
                        <?php 
                            foreach($arrmain as $arrkey=>$arrval){
                            echo "<tr bgcolor=\"lightyellow\">";
                             echo "<td bgcolor=\"lightpink\" id=\"pubid\">".$arrkey."</td>";
//                            echo "<td></td>";
       foreach($arrval as $arrvalkey=>$arrvalval){
         foreach($unitnames as $unitnamekey=>$unitnameval){
             
             if(!empty($arrval[$unitnames[$unitnamekey]['advtmis_unit_shortname']])){
                
           echo "<td>".$arrval[$unitnames[$unitnamekey]['advtmis_unit_shortname']]."</td>";
             }
 else {
     echo "<td></td>";
 }
         }
         break;
       }
       echo "</tr>";
    }
                                      
                        
                         
                        ?>
                    </tbody>
                </table>
                                            </div>
                                            </div>
         
          <div id="mini" class="tab-pane fade"> 
    
    <div class="scroller">
                <table border="2px" >
                    <thead>
                          
                        <?php
                         echo "<tr>";
                         echo "<th></th>";
                        foreach($unitnames as $unitkey=>$unitvar){ 
                           echo "<th bgcolor=\"lightgreen\">".$unitnames[$unitkey]['advtmis_unit_shortname']."</th>" ;  
                           
                         
                        }
                         echo "</tr>";
                        ?>
                         
                    </thead>
                    <tbody>
                        <?php 
                         
                        
                            foreach($arrmini as $arrkey=>$arrval){
                            echo "<tr bgcolor=\"lightyellow\">";
                             echo "<td bgcolor=\"lightpink\"  id=\"pubid\">".$arrkey."</td>";
//                            echo "<td></td>";
       foreach($arrval as $arrvalkey=>$arrvalval){
         foreach($unitnames as $unitnamekey=>$unitnameval){
             
             if(!empty($arrval[$unitnames[$unitnamekey]['advtmis_unit_shortname']])){
                
           echo "<td>".$arrval[$unitnames[$unitnamekey]['advtmis_unit_shortname']]."</td>";
             }
 else {
     echo "<td></td>";
 }
 
         }
         break;
//           }
//            else 
//               echo "none";
       }
       echo "</tr>";
    }
                                      
                        
                         
                        ?>
                    </tbody>
                </table>
                                            </div>
                                            </div>
                                            </div>
                
            </div>
            </div>
        </div>

    </div>
    <!--part-1 Ends -->



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
    <!-- datatable -->
    <link rel="stylesheet" href="<?php echo site_url ?>assets/plugins/DataTables-1.11.3/js/jquery.dataTables.min.js">
    <link rel="stylesheet" href="<?php echo site_url ?>assets/plugins/DataTables-1.11.3/js/dataTables.bootstrap4.min.js">


<script>
    $(function () {
  $('#logoutb').on('click', function ( event ) {
  event.preventDefault();
               location.href = "http://172.17.12.129/Dataentry/login";
        });
        });
</script>


<!--     normal tree select 
    <script>
        $('.example').comboTree({
            source: myData,
            isMultiple: true, //for checkbox//
            cascadeSelect: true,
            collapse: true,

        });
    </script>-->







</body>

</html>