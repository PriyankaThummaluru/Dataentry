<html>
    <head>
        <title>
            Data Entry
        </title>
        <!--<link rel="stylesheet" href="<?php echo site_url; ?>assets/css/fSelect.css" type="text/css" />-->
        <link rel="stylesheet" href="<?php echo site_url; ?>assets/css/jquery.multiselect.css" type="text/css" />
        <style>
            /*      div {
                    margin-bottom: 10px;
                  }*/
            label {
                display: inline-block;
                width: 150px;
                text-align: right;
                color:blue;
            }
            .div-1 {
                height: 800px;
                width: 50%;
                /*  z-index: 15;
                   top: 50%;
                  left: 50%;*/
                background-color: lightsteelblue;
                /*align:center;*/
                /*         background-size: contain;*/
            }
            .button {
                display: inline-block;
                vertical-align: top;
                width: 80px;
                height: 30px;
                line-height: 30px;
                background: gray;
                margin: 0 4px;
                text-align: center;
                /*align: left;*/
            }
            #favDialog{
                background-color: lightpink;
            }
/*            #modificationscreen {
  height: 200px;
  width: 50%;
  background-color: powderblue;
}*/
            /*.container{
              display:flex;
              flex-direction:row;
              align-items:left;
            }*/
        </style>
    </head>
    <body>

        <form action="<?php echo base_url(); ?>Entrydata/display" name="myForm" method="post">
            <div class="div-1">
                <h3>Data Entry Form</h3>

                <div class='row'>
                    <div class="col-sm-3">
                        <label class="dialoguelabel">Main</label>
                        <input type="radio" class="radiot" id="main" name="radio"  value="MAIN" checked > 
                    </div>
                    <div class="col-sm-3">
                        <label class="dialoguelabel">Mini</label>
                        <input type="radio" class="radiot" id="mini" name="radio" value="MINI" > 
                    </div>
                    <!--<label for="date"><font style="font-family:georgia,garamond,serif;font-style:italic;" > Date : </font></label>-->
                    <div class="col-sm-3">
                        <label > Date :</label>
                        <input type="text"  id="date" name="date"  value="<?php
//            if (!empty($date)) {
//                echo $date;
//            }
                        ?>" autocomplete="off">
                        <!--<div id='container'>-->

                    </div>
                </div>

                <!--                <br>
                                <br>-->

                <!--<div class="col-sm-3">-->
                <div class='row'>
                    <div class="col-sm-3">
                        <label>Publication : </label>
                        <select name="publication" id="publication" class='form-control'>
                            <?php
                            foreach ($publication as $key => $var) {
                                $arr = $publication[$key]['advtmis_pub_maineditions'] . '~' . $publication[$key]['advtmis_pub_code'] . '~' . $publication[$key]['advtmis_pub_name'];
//                         $arr[1]=
                                ?>

                                <option value="<?php echo $arr; ?>"><?php echo $publication[$key]['advtmis_pub_name']; ?></option>
                                <?php
                            }
                            ?>
<!--<input type="hidden" name="pubcode" id="pubcode" value="<?php echo $publication[$key]['advtmis_pub_code'] ?>">-->   
                        </select>
                    </div>

                    <div class="col-sm-3">
                        <label>Editions : </label>
                        <select name="editions[]" id="editions" multiple="multiple"  class='form-control editions '>
                            <option value=''></option>
                            <!--<input type="checkbox" value="">-->
                        </select>
                    </div>
                </div>

                <!--                <br>
                                <br>-->
                <div class='row'>
                    <div class="col-sm-3">
                        <label>Maincategory : </label>
                        <select name="maincat" id="maincat" class='form-control'>
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
                    <!--                <br>
                                    <br>-->
                    <div class="col-sm-3">
                        <label>subcategory : </label>
                        <select name="subcat" id="subcat" class='form-control'>

                            <option value=""> </option>
                        </select>
                        <!--</div>-->
                    </div>
                    <!--                <br>
                                    <br>-->
                    <div class="col-sm-3">
                        <label>Place : </label>
                        <select name="place" id="place" class='form-control'>
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
                <!--                <br>
                                <br>-->
                <div class='row'>
                    <div class="col-sm-3">
                        <label>Client Name : </label>
                      
                        <select name="client" id="client" class='form-control'>
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
                    <!--                <br>
                                    <br>-->
                    <!--<div class='row'>-->
                    <div class="col-sm-3">
                        <label>Product : </label>
                        <select name="product" id="product" class='form-control'>
                            <?php foreach ($product as $key => $var) {
                                ?>
                                <option value="<?php echo $product[$key]['mst011_prodcode']; ?>"><?php echo $product[$key]['mst011_prodname']; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <!--                <br>
                                    <br>-->
                    <!--<div class='row'>-->
                    <div class="col-sm-3">
                        <label>Brand : </label>
                        <select name="brand" id="brand" class='form-control'>
                            <?php foreach ($brand as $key => $var) { ?>
                                <option value="<?php echo $brand[$key]['mst012_brname']; ?>"><?php echo $brand[$key]['mst012_brname']; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <!--                <br>
                                <br>-->
                <div class='row'>
                    <div class="col-sm-3">
                        <label>Agency Name : </label>
                        <select name="agency" id="agency" class='form-control'>
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
                <div class='row'>
                    <!--<div class='row'>-->
                    <div class="col-sm-3">
                        <label>Size(Cm * Cm) : </label>
                        <input type="int" id="size" name="size" value="" class='form-control'> 
                    </div>
                    <!--<div class='row'>-->
                    <div class="col-sm-3">
                        <label>Sqr-Cms : </label>
                        <input type="int" name="pagesize" id="pagesize" value=" " class='form-control'> 
                    </div>
                </div>
                <!--<button type="submit">convert</button>-->
                <!--                <br>
                                <br>-->
                <div class='row'>
                    <div class="col-sm-3">
                        <label>Page : </label>
                        <input type="text" name="page" id="page" value="" class='form-control'>
                    </div>
                    <div class="col-sm-3">
                        <label>Color : </label>
                        <select name="color" id="color" class='form-control'>
                            <option value="">Black & White </option>
                            <option value="C">Color</option>
                            <option value="">Single Color </option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <label>Promoted By : </label>
                        <select name="promoted" id="promoted" class='form-control'>
                            <option value="Direct">Direct</option>
                            <option value="Agency">Agency</option>
                            <option value="MMPL">MMPL</option>
                        </select>
                    </div>
                </div>
                <!--                <br>
                                <br>-->
                <div class='row'>
                    <div class="col-sm-3">
                        <label>Special Pages : </label>
                        <select name="splpage" id="splpage" class='form-control'>

                            <option value=""></option>

                        </select>
                    </div>
                    <div class="col-sm-3">
                        <!--                <br>
                                        <br>-->



                        <label>Addtype : </label>
                        <select name="addtype" id="addtype" class='form-control'>
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
                <div class="row">
                    <div class="col-sm-3">
                        <!--                <br>
                                        <br>-->
                        <label>Total Ads : </label>
                        <input type="text" name="totads" id="totads" value="" class='form-control'>
                    </div>


                    <div class="col-sm-3">
                        <label>Total Spaces : </label>
                        <input type="text" name="totspace" id="totspace" value="" class='form-control'>
                    </div>
                </div>
                <!--<div class="col-sm-3">-->

                <br>
                <br>

                <!--<div class="row">-->
                <!--<div class="container">-->
                <div class="button">
                    <button type="submit">Save</button>
                </div>
                <div class="button">
                    <button type="button">Clear</button>
                </div>
                <div class="button">
                    <button type="button">Clear All</button>
                </div>
                <div class="button">
                    <button type="button">Exit</button>
                </div>
                <div class="button">
                    <button type="button" id="edit" name="edit">Edit</button>
                </div>
                <!--</div>-->
                <!--</div>-->

                <!--</form>-->
            </div>


            <dialog id="favDialog">
                <h3>Modification Screen</h3>
                <input type="date"  id="date1" name="date1"  value="<?php ?>" autocomplete="off">
                <?php
//               echo "<pre>";
//               print_r($headermain);
//               foreach($headermain as $row){
//                   
//               }
                ?>
                <div id="modificationscreen" >
                    
                    <?php 
//                    echo "hello data";
//                    echo "<pre>";
//                    print_r($data);
//                    exit;
                    ?>
                </div>


                <!--                <label>Client Name : </label>
                                <select name="client1" id="client1">
                <?php
                foreach ($client as $key => $var) {
                    $clientinf = $client[$key]['mst014_clcode'] . '~' . $clientinf = $client[$key]['mst014_clname'];
                    ?>
                    
                                            <option  value="<?php echo $clientinf; ?>"><?php echo $client[$key]['mst014_clname']; ?></option>
                    <?php
                }
                ?>
                                </select>
                                <br>
                                <label>Product : </label>
                                <select name="product1" id="product1">
                                    <option value=""></option>
                
                                </select>
                                <br>
                                <label>Brand : </label>
                                <select name="brand1" id="brand1">
                                    <option value=""></option>
                
                                </select>
                                <br>
                                <label>Agency Name : </label>
                                <select name="agency1" id="agency1">
                <?php
                foreach ($agency as $key => $var) {
                    $agencyinfo = $agency[$key]['mst013_agcode'] . '~' . $agency[$key]['mst013_agname'];
                    ?>
                                            <option  value="<?php echo $agencyinfo; ?>"><?php echo $agency[$key]['mst013_agname']; ?></option>
                    <?php
                }
                ?>
                                </select>
                                <br>
                
                                <label>Page : </label>
                                <input type="text" name="page1" id="page1" value="">
                
                                <br>
                                <label>Size(Cm * Cm) : </label>
                                <input type="int" id="size1" name="size1" value=""> 
                                <label>Sqr-Cms : </label>
                                <input type="int" name="pagesize1" id="pagesize1" value=" "> 
                                <br>
                
                                <label>Color : </label>
                                <select name="color1" id="color1">
                                    <option value="">Black & White </option>
                                    <option value="C">Color</option>
                                    <option value="">Single Color </option>
                                </select>
                                <br>
                                <label>Place : </label>
                                <select name="place1" id="place1">
                <?php
                foreach ($place as $key => $var) {
                    $regioninfor = $place[$key]['advtmis_rgn_code'] . '~' . $place[$key]['advtmis_rgn_place'] . '~' . $place[$key]['advtmis_rgn_rgcd'] . '~' . $place[$key]['advtmis_rgn_regionname'];
                    ?>
                                            <option  value="<?php echo $regioninfor; ?>"><?php echo $place[$key]['advtmis_rgn_place']; ?></option>
                    <?php
                }
                ?>
                                </select>
                                <br>
                                <label>Main/Mini : </label>
                                <select name="mainmini" id="mainmini">
                                    <option value="MAIN">MAIN </option>
                                    <option value="MINI">MINI</option>
                                    <option value="">Single Color </option>
                                </select>
                                <br>
                                <label>Addtype : </label>
                                <select name="addtype1" id="addtype1">
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
                                <br>
                                <label>Special Pages : </label>
                                <select name="splpage1" id="splpage1">
                
                                    <option value=""></option>
                
                                </select>
                                <br>
                                 <label>Publication : </label>
                                        <select name="publication1" id="publication1">
                <?php
                foreach ($publication as $key => $var) {
                    $arr = $publication[$key]['advtmis_pub_maineditions'] . '~' . $publication[$key]['advtmis_pub_code'] . '~' . $publication[$key]['advtmis_pub_name'];
//                         $arr[1]=
                    ?>
                    
                                                    <option value="<?php echo $arr; ?>"><?php echo $publication[$key]['advtmis_pub_name']; ?></option>
                    <?php
                }
                ?>
                <input type="hidden" name="pubcode" id="pubcode" value="<?php echo $publication[$key]['advtmis_pub_code'] ?>">   
                                        </select>
                                 <br>
                                  <label > Modify Date :</label>
                <?php
//                      $dateeeee = date('Y-m-d');   
                ?>
                                        <input type="date"  id="date1" name="date1"  value="<?php ?>" autocomplete="off">-->
                <menu>
                    <button type="button" id="cancel" value="cancel">Cancel</button>
                    <button type="button" id="save" value="save">Save</button>
                </menu>
            </dialog>




        </form> 
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <!--<link rel="stylesheet" href="/resources/demos/style.css">-->
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>   

        <!--<script src="<?php echo site_url ?>assets/js/fSelect.js"></script>-->
        <script src="<?php echo site_url ?>assets/js/jquery.multiselect.js"></script>

        <script type="text/javascript">



            $(function () {
//                 $('#demo').multiselect();
//
                $('#editions').multiselect();

//                function modification() {
//                    alert("welcome to modification screen");
//
//}



//                         $("#editions").fSelect();
                $('#date').datepicker({
                    dateFormat: "yy-mm-dd",
                });



                $('.radiot').on('change', function () {
                    edition_change();
                    specialpages();
                });
                $('#maincat').on('change', function () {
                    subcat_change();
                });
                $('#publication').on('change', function () {
//                            alert("editions open");
                    total_ads();
                    total_spaces();
                    edition_change();
                    specialpages();
//                                    var x="405~ANANTHAPUR~1";
//                                     $("#editions option[value='" + x + "']").prop("selected", true);
                });
//                                 $("#editions option[value='" + x + "']").prop("selected", true);
                $('#size').on('change', function () {
                    pagesize();
                });
                $('#client').on('change', function () {
                    product_change();
                });
                $('#product').on('change', function () {
                    brand_change();
                });
                $('#date').on('change', function () {
//                                    alert('chck');
                    total_ads();
                    total_spaces();
                });
                $('#edit').on('click', function () {
                    if (typeof favDialog.showModal === "function") {

                        favDialog.showModal();
//            alert(b1);
                    } else {
                        alert("The <dialog> API is not supported by this browser");
                    } 
                    modification();
                    
//                    Aa Bb Cc Dd Ee Ff Gg Hh Ii Jj Kk Ll Mm Nn Oo Pp Qq Rr Ss Tt Uu Vv Ww Xx Yy Zz 
//                      $('#srlno').click(function () {
////                        var date=$(".srlno").val();
////                        alert(date);
//                        alert("welcome to modification scrren");
//                    });



                });

//                 $('.edit').click(function ()
//                {
//                    modification();
//                      $('#date1').datepicker({
//                    dateFormat: "yy-mm-dd",
//                });
//                });
                $('#editions').on('change', function () {
//
                    checkboxselect();
                    $('#editions').multiselect('reload');
//
                });

                function deselect() {
//                    $('#editions').multiselect('reload');
                    var ddl = $('#editions').val();
                    alert(ddl);
                    if ($.inArray("2~AP COMBINED~1~771", ddl) == -1) {
//                                     if ($.inArray("200~CENTRAL ANDHRA REGION~20000~CA~1~4", ddl) == -1) {
                        if (ddl.includes("200~CENTRAL ANDHRA REGION~1~4") & ddl.includes("300~NORTH ANDHRA REGION~1~5") & ddl.includes("400~RAYALASEEMA REGION~1~6")) {
//                                                        alert("AP combined is  selected");
                            $(".apcombined").removeAttr('selected', "selected");
//                            $('#editions').multiselect('reload');

                        }
                    }

//                                    alert(ddl);
                    if ($.inArray("200~CENTRAL ANDHRA REGION~1~4", ddl) == -1) {
                        $(".central").removeAttr('selected', true);
//alert('CA');
//                                        $(".central").prop('selected',false);
                    }
//                                $('#editions').multiselect('reload');
                    if ($.inArray("300~NORTH ANDHRA REGION~1~5", ddl) == -1) {
                        $(".north").removeAttr('selected', true);
//                                        $(".north").prop('selected',false);
                    }
//                                $('#editions').multiselect('reload');
                    if ($.inArray("400~RAYALASEEMA REGION~1~6", ddl) == -1) {
//                                        $(".rayalaseema").prop('selected',false);
                        $(".rayalaseema").removeAttr('selected', true);
                    }
//                                $('#editions').multiselect('reload');
                    if ($.inArray("100~GRT HYDERABAD REGION~17~2", ddl) == -1) {
//                                        $(".greaterhyd").prop('selected',false);
                        $(".greaterhyd").removeAttr('selected', true);
                    }
//                                $('#editions').multiselect('reload');
                    if ($.inArray("600~TELANGANA REGION~17~3", ddl) == -1) {
//                                        $(".telanganaregion").prop('selected',false);
                        $(".telanganaregion").removeAttr('selected', "selected");
                    }
//                    $('#editions').multiselect('reload');

//                                    $('#editions').multiselect('reload');

//                    });

//                                    if ($(this).is(":checked") == false) {
////                                            $('.prettycheckbox input').prop('checked', false);
////                                            alert($(this).is(":checked"));
//                                        var edn = $(this).val();
////                                            alert(edn);
//                                        if (edn == "2~AP COMBINED~1~771") {
//                                            alert("deselect");
//                                            $(".apcombined").removeAttr('selected', "selected");
////                                                $(".central").removeAttr('selected', "selected");
////                                                $(".north").removeAttr('selected', "selected");
////                                                $(".rayalaseema").removeAttr('selected', "selected");
//                                        } else if (edn == "1~TG COMBINED~17~772") {
//                                            $(".tgcombined").removeAttr('selected', "selected");
////                                                $(".telanganaregion").removeAttr('selected', "selected");
////                                                $(".greaterhyd").removeAttr('selected', "selected");
//                                        } else if (edn == "200~CENTRAL ANDHRA REGION~1~4") {
//                                            $(".central").removeAttr('selected', "selected");
//                                        } else if (edn == "300~NORTH ANDHRA REGION~1~5") {
//                                            $(".north").removeAttr('selected', "selected");
//                                        } else if (edn == "400~RAYALASEEMA REGION~1~6") {
//                                            $(".rayalaseema").removeAttr('selected', "selected");
//                                        } else if (edn == "100~GRT HYDERABAD REGION~17~2") {
//                                            $(".greaterhyd").removeAttr('selected', "selected");
//                                        } else if (edn == "600~TELANGANA REGION~17~3") {
//                                            $(".telanganaregion").removeAttr('selected', "selected");
//                                        }
//
//
////                                            ==================================================================MINI====================================================
////                                            2~AP COMBINED~2~APCMB~1~771
//                                        if (edn == "2~AP COMBINED~2~APCMB~1~771") {
////                                                 alert("telangana ap");
//                                            $(".apcombined").removeAttr('selected', "selected");
//                                            $(".central").removeAttr('selected', "selected");
//                                            $(".north").removeAttr('selected', "selected");
//                                            $(".rayalaseema").removeAttr('selected', "selected");
//                                        }
//                                        if (edn == "1~TG COMBINED~1~TGCMB~17~772") {
////                                                 alert("telangana tg");
//                                            $(".tgcombined").removeAttr('selected', "selected");
//                                            $(".greaterhyd").removeAttr('selected', "selected");
//                                            $(".telanganaregion").removeAttr('selected', "selected");
//                                        }
//                                        if (edn == "200~CENTRAL ANDHRA REGION~20000~CA~1~4") {
//                                            $(".central").removeAttr('selected', "selected");
//                                        }
//                                        if (edn == "300~NORTH ANDHRA REGION~30000~NA~1~5") {
//                                            $(".north").removeAttr('selected', "selected");
//                                        }
//                                        if (edn == "400~RAYALASEEMA REGION~40000~RA~1~6") {
//                                            $(".rayalaseema").removeAttr('selected', "selected");
//                                        }
//
//                                        if (edn == "600~TELANGANA REGION~60000~TG~1~3") {
//                                            $(".telanganaregion").removeAttr('selected', "selected");
//                                        }
//                                        if (edn == "100~GRT HYDERABAD REGION~10000~GH~17~2") {
//                                            $(".greaterhyd").removeAttr('selected', "selected");
//                                        }
////                                             $('#editions').multiselect('reload');
//
//                                    }
                }
                function checkboxselect() {
//$('#editions').multiselect('reload');
//                    $('.editionVal').each(function () {
                    var ddl = $('#editions').val();
//                    alert(ddl);
//                        if ($(this).is(":checked") == true) {
//                            var edn = $(this).val();

                    if (ddl.includes("2~AP COMBINED~1~771")) {
//                            if (edn == "2~AP COMBINED~1~771") {
//                        alert("ap combined second time");
                        $(".apcombined").attr('selected', "selected");
//                        $(".ms-options").children("ul li").attr('selected', "selected");
//                                                $(".central").attr('selected', "selected");
//                                                $(".north").attr('selected', "selected");
//                                                $(".rayalaseema").attr('selected', "selected");
                    }
                    if (ddl.includes("1~TG COMBINED~17~772")) {
                        $(".tgcombined").attr('selected', "selected");
//                                                $(".telanganaregion").attr('selected', "selected");
//                                                $(".greaterhyd").attr('selected', "selected");
                    }
                    if (ddl.includes("200~CENTRAL ANDHRA REGION~1~4")) {
//                                                aert("central andra second time");
                        $(".central").attr('selected', "selected");
                    }
                    if (ddl.includes("300~NORTH ANDHRA REGION~1~5")) {
                        $(".north").attr('selected', "selected");
                    }
                    if (ddl.includes("400~RAYALASEEMA REGION~1~6")) {
                        $(".rayalaseema").attr('selected', "selected");
                    }
                    if (ddl.includes("100~GRT HYDERABAD REGION~17~2")) {
                        $(".greaterhyd").attr('selected', "selected");
                    }
                    if (ddl.includes("600~TELANGANA REGION~17~3")) {
                        $(".telanganaregion").attr('selected', "selected");
                    }


//                                            ==================================================================MINI====================================================
                    if (ddl.includes("2~AP COMBINED~2~APCMB~1~771")) {
                        $(".apcombined").attr('selected', "selected");
                        $(".central").attr('selected', "selected");
                        $(".north").attr('selected', "selected");
                        $(".rayalaseema").attr('selected', "selected");
                    }
                    if (ddl.includes("1~TG COMBINED~1~TGCMB~17~772")) {
                        $(".tgcombined").attr('selected', "selected");
                        $(".greaterhyd").attr('selected', "selected");
                        $(".telanganaregion").attr('selected', "selected");
                    }
                    if (ddl.includes("200~CENTRAL ANDHRA REGION~20000~CA~1~4")) {
                        $(".central").attr('selected', "selected");
                    }
                    if (ddl.includes("300~NORTH ANDHRA REGION~30000~NA~1~5")) {
                        $(".north").attr('selected', "selected");
                    }
                    if (ddl.includes("400~RAYALASEEMA REGION~40000~RA~1~6")) {
                        $(".rayalaseema").attr('selected', "selected");
                    }

                    if (ddl.includes("600~TELANGANA REGION~60000~TG~1~3")) {
                        $(".telanganaregion").attr('selected', "selected");
                    }
                    if (ddl.includes("100~GRT HYDERABAD REGION~10000~GH~17~2")) {
                        $(".greaterhyd").attr('selected', "selected");
                    }
//                    $('#editions').multiselect('reload');
                    
//                        }
//============================================================================================================

//                                        else if ($(this).is(":checked") == false){
////                                            $('.prettycheckbox input').prop('checked', false);
////                                            alert($(this).is(":checked"));
//                                             var edn = $(this).val();
////                                            alert(edn);
//                                            if (edn == "2~AP COMBINED~1~771") {
//                                                alert("deselect");
//                                                $(".apcombined").removeAttr('selected', "selected");
////                                                $(".central").removeAttr('selected', "selected");
////                                                $(".north").removeAttr('selected', "selected");
////                                                $(".rayalaseema").removeAttr('selected', "selected");
//                                            } else if (edn == "1~TG COMBINED~17~772") {
//                                                $(".tgcombined").removeAttr('selected', "selected");
////                                                $(".telanganaregion").removeAttr('selected', "selected");
////                                                $(".greaterhyd").removeAttr('selected', "selected");
//                                            } else if (edn == "200~CENTRAL ANDHRA REGION~1~4") {
//                                                $(".central").removeAttr('selected', "selected");
//                                            } else if (edn == "300~NORTH ANDHRA REGION~1~5") {
//                                                $(".north").removeAttr('selected', "selected");
//                                            } else if (edn == "400~RAYALASEEMA REGION~1~6") {
//                                                $(".rayalaseema").removeAttr('selected', "selected");
//                                            } else if (edn == "100~GRT HYDERABAD REGION~17~2") {
//                                                $(".greaterhyd").removeAttr('selected', "selected");
//                                            } else if (edn == "600~TELANGANA REGION~17~3") {
//                                                $(".telanganaregion").removeAttr('selected', "selected");
//                                            }
//
//
////                                            ==================================================================MINI====================================================
////                                            2~AP COMBINED~2~APCMB~1~771
//                                            if (edn == "2~AP COMBINED~2~APCMB~1~771") {
////                                                 alert("telangana ap");
//                                                $(".apcombined").removeAttr('selected', "selected");
//                                                $(".central").removeAttr('selected', "selected");
//                                                $(".north").removeAttr('selected', "selected");
//                                                $(".rayalaseema").removeAttr('selected', "selected");
//                                            }
//                                            if (edn == "1~TG COMBINED~1~TGCMB~17~772") {
////                                                 alert("telangana tg");
//                                                $(".tgcombined").removeAttr('selected', "selected");
//                                                $(".greaterhyd").removeAttr('selected', "selected");
//                                                $(".telanganaregion").removeAttr('selected', "selected");
//                                            }
//                                            if (edn == "200~CENTRAL ANDHRA REGION~20000~CA~1~4") {
//                                                $(".central").removeAttr('selected', "selected");
//                                            }
//                                            if (edn == "300~NORTH ANDHRA REGION~30000~NA~1~5") {
//                                                $(".north").removeAttr('selected', "selected");
//                                            }
//                                            if (edn == "400~RAYALASEEMA REGION~40000~RA~1~6") {
//                                                $(".rayalaseema").removeAttr('selected', "selected");
//                                            }
//
//                                            if (edn == "600~TELANGANA REGION~60000~TG~1~3") {
//                                                $(".telanganaregion").removeAttr('selected', "selected");
//                                            }
//                                            if (edn == "100~GRT HYDERABAD REGION~10000~GH~17~2") {
//                                                $(".greaterhyd").removeAttr('selected', "selected");
//                                            }
////                                             $('#editions').multiselect('reload');
//                                            
//                                        }
// $('#editions').multiselect('reload');
//                    });

//                                    var selected=document.getElementById('editions');
//                                     var ddlArray = new Array();
//                                                    var ddl = document.querySelectorAll('#editions :selected');


//                    $('#editions').multiselect('reload');
//                                          var ddl = $('#editions').val();
////                                     if ($.inArray("2~AP COMBINED~1~771", ddl) == -1) {
//////                                     if ($.inArray("200~CENTRAL ANDHRA REGION~20000~CA~1~4", ddl) == -1) {
////                                         if (ddl.includes("200~CENTRAL ANDHRA REGION~1~4") & ddl.includes("300~NORTH ANDHRA REGION~1~5") & ddl.includes("400~RAYALASEEMA REGION~1~6")) {
//////                                                        alert("AP combined is  selected");
////                                        $(".apcombined").removeAttr('selected', "selected");
////                                        $('#editions').multiselect('reload');
////                                    
////                                    }
////                                }
//                                if ($.inArray("200~CENTRAL ANDHRA REGION~1~4", ddl) == -1) {
//                                    $(".central").removeAttr('selected', "selected");
//                                }
//                                if ($.inArray("300~NORTH ANDHRA REGION~1~5", ddl) == -1) {
//                                    $(".north").removeAttr('selected', "selected");
//                                }
//                                if ($.inArray("400~RAYALASEEMA REGION~1~6", ddl) == -1) {
//                                    $(".rayalaseema").removeAttr('selected', "selected");
//                                }
//                                
//                                 $('#editions').multiselect('reload');
                }
                 
//                                function checkboxdeselect() {
//                                    $('.editionVal').each(function () {
////alert();
//                                       if ($(this).is(":checked") == false){
////                                            $('.prettycheckbox input').prop('checked', false);
////                                            alert($(this).is(":checked"));
//                                             var edn = $(this).val();
////                                            alert(edn);
//                                            if (edn == "2~AP COMBINED~1~771") {
//                                                alert("deselect");
//                                                $(".apcombined").removeAttr('selected', "selected");
//                                                $(".central").removeAttr('selected', "selected");
//                                                $(".north").removeAttr('selected', "selected");
//                                                $(".rayalaseema").removeAttr('selected', "selected");
//                                            } else if (edn == "1~TG COMBINED~17~772") {
//                                                $(".tgcombined").removeAttr('selected', "selected");
//                                                $(".telanganaregion").removeAttr('selected', "selected");
//                                                $(".greaterhyd").removeAttr('selected', "selected");
//                                            } else if (edn == "200~CENTRAL ANDHRA REGION~1~4") {
//                                                $(".central").removeAttr('selected', "selected");
//                                            } else if (edn == "300~NORTH ANDHRA REGION~1~5") {
//                                                $(".north").removeAttr('selected', "selected");
//                                            } else if (edn == "400~RAYALASEEMA REGION~1~6") {
//                                                $(".rayalaseema").removeAttr('selected', "selected");
//                                            } else if (edn == "100~GRT HYDERABAD REGION~17~2") {
//                                                $(".greaterhyd").removeAttr('selected', "selected");
//                                            } else if (edn == "600~TELANGANA REGION~17~3") {
//                                                $(".telanganaregion").removeAttr('selected', "selected");
//                                            }
//
//
////                                            ==================================================================MINI====================================================
////                                            2~AP COMBINED~2~APCMB~1~771
//                                            if (edn == "2~AP COMBINED~2~APCMB~1~771") {
////                                                 alert("telangana ap");
//                                                $(".apcombined").removeAttr('selected', "selected");
//                                                $(".central").removeAttr('selected', "selected");
//                                                $(".north").removeAttr('selected', "selected");
//                                                $(".rayalaseema").removeAttr('selected', "selected");
//                                            }
//                                            if (edn == "1~TG COMBINED~1~TGCMB~17~772") {
////                                                 alert("telangana tg");
//                                                $(".tgcombined").removeAttr('selected', "selected");
//                                                $(".greaterhyd").removeAttr('selected', "selected");
//                                                $(".telanganaregion").removeAttr('selected', "selected");
//                                            }
//                                            if (edn == "200~CENTRAL ANDHRA REGION~20000~CA~1~4") {
//                                                $(".central").removeAttr('selected', "selected");
//                                            }
//                                            if (edn == "300~NORTH ANDHRA REGION~30000~NA~1~5") {
//                                                $(".north").removeAttr('selected', "selected");
//                                            }
//                                            if (edn == "400~RAYALASEEMA REGION~40000~RA~1~6") {
//                                                $(".rayalaseema").removeAttr('selected', "selected");
//                                            }
//
//                                            if (edn == "600~TELANGANA REGION~60000~TG~1~3") {
//                                                $(".telanganaregion").removeAttr('selected', "selected");
//                                            }
//                                            if (edn == "100~GRT HYDERABAD REGION~10000~GH~17~2") {
//                                                $(".greaterhyd").removeAttr('selected', "selected");
//                                            }
//                                            
//                                        }
//                                        
//                                       
//
//
//
//                                    });
//                                    $('#editions').multiselect('reload');
////                                    $("#editions").fSelect('reload');
//                                }
//                                    if (!!toteditions){
////                                    alert(toteditions);
////                              alert(public);
//
//                                    var APcombined = "2~AP COMBINED~1";
////                                    var TGcombined = "1~TG COMBINED~17";
//                                    var publication = $('#publication').val();
//                                    var pubcode = publication.split('~');
//
//
//                                    if (toteditions.includes(APcombined)) {
////                                    if (public.includes(APcombined)) {
////                                        alert("APcombined");
//
//                                        var radiotype = $(".radiot:checked").val();
//                                        var APstatecode = APcombined.split('~');
//                                        var apcode = APstatecode[2];
////                                         var arr= document.multiselect('#editions').value;
////                                                       alert(arr);
////                                var publiccode=pubcode[1];
//                                        $.ajax({
//
//                                            type: 'POST',
//                                            url: '<?php echo base_url(); ?>Entrydata/ajaxeditionsstate/',
//                                            //                 dataType: 'json', 
//                                            data: {'publication': pubcode[0], 'radiotype': radiotype, 'statecode': apcode},
//                                            success: function (data) {
//                                                var edition = jQuery.parseJSON(data);
////                                    alert(edition);
//                                                console.log(data);
//                                                if (edition) {
//                                                    var ddlArray = new Array();
//                                                    var ddl = document.getElementById('editions');
//                                                    for (i = 0; i < ddl.options.length; i++) {
//                                                        ddlArray[i] = ddl.options[i].value;
////                                                            alert(ddlArray[i]);
//                                                    }
//                                                    $(edition).each(function () {
//                                                        var x = this.advtmis_edn_code + '~' + this.advtmis_edn_name + '~' + this.advtmis_edn_statecode;
////                                                        alert( x);
//                                                        if (ddlArray.includes(x)) {
////                                                            alert(x);
////                                                             $("input[value='" + x + "']").attr('selected', 'selected');
////                                                             $("#edition option:selected").attr("selected", "selected");
////                                                            $("#apcombined option[value='" + x + "']").attr('checked', "checked");
//                                                            $(".apcombined").attr('selected', "selected")
////                                                            $(".apcombined").attr('class', "apcombined selected")
////                                                             option.attr('class', "apcombined ")
////                                                            $(".apcombined option[value='" + x + "']").prop("checked", true);
////                                                           alert(y);
////                                                            $("#editions option[value=" + x + "]").setAttribute("selected", "selected");
//                                                        }
//
//                                                    });
//
//                                                }
//////                                          $(".fs-options").html('');
////                                                $("#editions").fSelect('reload');
////                                    $("#editions").fSelect();
//                                            }
//
//                                        });
//
////                                alert(radiotype)
////                                alert("welcome to AP combined");
////                               document.getElementById("400~RAYALASEEMA REGION").checked = true;
// $("#editions").fSelect('reload');
//                                    }
//                                    }
////                                    if (public.includes(TGcombined))
////                                    {
////                                        var TGstatecode = TGcombined.split('~');
////                                        var tgcode = TGstatecode[2];
////                                alert("welcome to TG combined");
////                               document.getElementById("400~RAYALASEEMA REGION").checked = true;
////                                    }
////                                     $("#editions").fSelect();
////                                });
//
//                                }

                function specialpages() {
                    var public = $('#publication').val();
                    var pubcode = public.split('~');
                    var radiotype = $(".radiot:checked").val();
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


                function edition_change() {
                    var public = $('#publication').val();
                    var radiotype = $(".radiot:checked").val();
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
                                        } else if (this.advtmis_edn_statecode == 17) {
                                            if (this.advtmis_distedn_eenaduregion == 2) {
                                                option.attr('class', "greaterhyd editionVal")
                                                option.attr('value', x).text(this.advtmis_distedn_name);
                                                $('#editions').append(option);
                                            }
                                            if (this.advtmis_distedn_eenaduregion == 3) {
                                                option.attr('class', "telanganaregion editionVal")
                                                option.attr('value', x).text(this.advtmis_distedn_name);
                                                $('#editions').append(option);
                                            } else {
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
                            $('#editions').multiselect('reload');
                        }

                    });

                }
                
                
                function screendata() {
                    var date = $("#date1").val();
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
                             $("#modificationscreen").html(data);
//                             $(".modificationscreen").append("<div>" + data + "</div>");
                            
                            
                         

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

                function modification() {




//                product_change();

//                    alert("welcome to modification screen");

//                    var date=$("#date").val();

//                    var editions=$("#editions").val();
//                    alert(editions);
//                    $('#client1').change(function () {
//                        modificationproduct();
//
//                        modificationbrand();
//
//                    });
//                    $('#product1').change(function () {
//                        modificationbrand();
//                         
//                    
//                    });
//                    $('#size1').change(function () {
//                        modificationpagesize();
//                    });
                    $('#date1').change(function () {
                        screendata();
                        
                    });
                  
                    $('#cancel').click(function ()
                    {
                        var x = document.getElementById("favDialog");
                        x.close()
                    });
//                    modifysplpage();


           

//                     var entrydate=$("#date").val();
//                    


                }
//   
//               
//
////        var b1 = $(this).val();
////        var tabledatef = $("#datepicker").val();
////        var tabledatet = $("#datepicker1").val();
////        var publish = $("#publish").val();
////        var selectsez = $("#selectsez").val();
//
////        alert(b1);
////        alert(selectsez);
////                                    alert("dialog box");
//                    if (typeof favDialog.showModal === "function") {
//
//                        favDialog.showModal();
////            alert(b1);
//                    } else {
//                        alert("The <dialog> API is not supported by this browser");
//                    }
//
//                    $('#cancel').click(function ()
//                    {
//                        var x = document.getElementById("favDialog");
//                        x.close()
//                    });
//                }
//
            });
//            var dataa = [
//    {label: "ACNP", value: "ACNP"},
//    {label: "test", value: "test"}
//];
            jQuery('#editions').multiselect({
                columns: 1,
                placeholder: 'Select Editions',
                search: true,
                selectAll: true,
                maxHeight: 300
            
            });
//                     $(document).ready(function () {
//                                             alert("bullshit");
//                                              $('.fs-option').html('');

//                                        });
        </script>

    </body>
</html>

