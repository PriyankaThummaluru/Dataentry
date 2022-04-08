<?php
// echo "<pre>";
// print_r($datashowformodifi);
// exit;
?>

<!--<div class="container" width="50">-->
<!--<form method="post">-->
<table class="table table-bordered datatablec " cellspacing="5">
    <thead>
        <tr>
         
            <th>InsDate</th>
              
            <th>Bill.No</th>
             <th>Srl.No</th>
            <th>Publication Name</th>
            <th>Edn Name</th>
            <th>Client Name</th>
            <th>Product Name</th>
            <th>Brand Name</th>
            <th>Agency Name</th>
            <th>MainCatName</th>
            <th>SubCatName</th>
            <th>Add Type</th>
            <th>Place</th>
            <th>Page</th>
            <th>Color</th>
            <th>Size</th>
            <th>Space</th>
            <th>Spl Page</th>
            <th>Entry By</th>
            <th>Entry Date</th>
            <th>Main Mini</th>
        </tr>
    </thead>
    <tbody>

        <?php
//        echo "<pre>";
//        print_r($datashowformodifi);exit;
        if(!empty($datashowformodifi)){
        foreach ($datashowformodifi as $key => $val) {

//                echo "<pre>" ;
//                print_r($datashowformodifi);exit;
            ?>
            <?php
            $editionin = "";
            foreach ($editionsdisplay as $keyy => $vall) {
                $editionin .= $editionsdisplay[$keyy]['advtmis_ednname'];
                $editionin .= "~";
            }
            ?>
        <input type="hidden" name="edioptions" id="edioptions" value="<?php echo $editionin; ?>">
        <?php
            echo "<tr>";
              echo "<td>" . $datashowformodifi[$key]['advtmis_insdate'] . "</td>";
        $str = "priyanka~" . $datashowformodifi[$key]['advtmis_srlno'] . "~" . $datashowformodifi[$key]['advtmis_mainmini']."~".$datashowformodifi[$key]['advtmis_insdate'];
       
        ?>
        <td> <a href="<?php echo base_url(); ?>Entrydata/displayEntry/<?php echo $str;?>" class="btn btn-primary btn-sm serialno" id="srlno" name="srlno"  value="<?php echo $datashowformodifi[$key]['advtmis_blno'] ?>"><?php echo $datashowformodifi[$key]['advtmis_blno'] ?></a></td>

        <?PHP
          echo "<td>" . $datashowformodifi[$key]['advtmis_srlno'] . "</td>";
        echo "<td>" . $datashowformodifi[$key]['advtmis_pubname'] . "</td>";
        echo "<td>" . $datashowformodifi[$key]['advtmis_ednname'] . "</td>";
        echo "<td>" . $datashowformodifi[$key]['advtmis_client'] . "</td>";
        echo "<td>" . $datashowformodifi[$key]['advtmis_product'] . "</td>";
        echo "<td>" . $datashowformodifi[$key]['advtmis_brand'] . "</td>";
        echo "<td>" . $datashowformodifi[$key]['advtmis_agency'] . "</td>";
        echo "<td>" . $datashowformodifi[$key]['advtmis_maincatgname'] . "</td>";
        echo "<td>" . $datashowformodifi[$key]['advtmis_subcatgname'] . "</td>";
        echo "<td>" . $datashowformodifi[$key]['advtmis_adtype'] . "</td>";
        echo "<td>" . $datashowformodifi[$key]['advtmis_place'] . "</td>";
        echo "<td>" . $datashowformodifi[$key]['advtmis_page'] . "</td>";
        echo "<td>" . $datashowformodifi[$key]['advtmis_colbw'] . "</td>";
        echo "<td>" . $datashowformodifi[$key]['advtmis_size'] . "</td>";
        echo "<td>" . $datashowformodifi[$key]['advtmis_space'] . "</td>";
        echo "<td>" . $datashowformodifi[$key]['advtmis_splpage'] . "</td>";
      
        echo "<td>" . $datashowformodifi[$key]['advtmis_entryby'] . "</td>";
        echo "<td>" . $datashowformodifi[$key]['advtmis_entrydate'] . "</td>";
          echo "<td>" . $datashowformodifi[$key]['advtmis_mainmini'] . "</td>";


        echo "</tr>";

//                $data['var'] = $datashowformodifi[$key]['advtmis_srlno'];
//$this->view('dataEntry_view',$data);
    }
    }
    else if(!empty($detailsofmulti)){
        foreach ($detailsofmulti as $key => $val) {
//            echo "<pre>";
//            print_r($detailsofmulti);exit;
            ?>
            <?php
//            $editionin = "";
//            foreach ($editionsdisplay as $keyy => $vall) {
//                $editionin .= $editionsdisplay[$keyy]['advtmis_ednname'];
//                $editionin .= "~";
//            }
//            echo $detailsofmulti[$key]['advtmis_blno'];exit;
            ?>
        <!--<input type="hidden" name="edioptions" id="edioptions" value="<?php echo $editionin; ?>">-->
        <?php
            echo "<tr>";
              echo "<td><input type=\"checkbox\" id=\"srlnocheck\" name=\"srlnocheck[]\" class=\"checkboxbills\" value=\" ".$detailsofmulti[$key]['advtmis_blno']." \" multiple=\"multiple\" />" . $detailsofmulti[$key]['advtmis_insdate'] . "</td>";
        $str = "priyanka~" . $detailsofmulti[$key]['advtmis_srlno'] . "~" . $detailsofmulti[$key]['advtmis_mainmini'];
        ?>
      
      
        <!--<td> <a href="<?php echo base_url(); ?>Entrydata/displayEntry/priymulti" class="btn btn-primary btn-sm serialno" id="srlno" name="srlno"  value="<?php echo $detailsofmulti[$key]['advtmis_blno'] ?>"><?php echo $detailsofmulti[$key]['advtmis_blno'] ?></a></td>-->

        <?PHP
          echo "<td>" . $detailsofmulti[$key]['advtmis_blno'] . "</td>";
          echo "<td>" . $detailsofmulti[$key]['advtmis_srlno'] . "</td>";
        echo "<td>" . $detailsofmulti[$key]['advtmis_pubname'] . "</td>";
        echo "<td>" . $detailsofmulti[$key]['advtmis_ednname'] . "</td>";
        echo "<td>" . $detailsofmulti[$key]['advtmis_client'] . "</td>";
        echo "<td>" . $detailsofmulti[$key]['advtmis_product'] . "</td>";
        echo "<td>" . $detailsofmulti[$key]['advtmis_brand'] . "</td>";
        echo "<td>" . $detailsofmulti[$key]['advtmis_agency'] . "</td>";
        echo "<td>" . $detailsofmulti[$key]['advtmis_maincatgname'] . "</td>";
        echo "<td>" . $detailsofmulti[$key]['advtmis_subcatgname'] . "</td>";
        echo "<td>" . $detailsofmulti[$key]['advtmis_adtype'] . "</td>";
        echo "<td>" . $detailsofmulti[$key]['advtmis_place'] . "</td>";
        echo "<td>" . $detailsofmulti[$key]['advtmis_page'] . "</td>";
        echo "<td>" . $detailsofmulti[$key]['advtmis_colbw'] . "</td>";
        echo "<td>" . $detailsofmulti[$key]['advtmis_size'] . "</td>";
        echo "<td>" . $detailsofmulti[$key]['advtmis_space'] . "</td>";
        echo "<td>" . $detailsofmulti[$key]['advtmis_splpage'] . "</td>";
        echo "<td>" . $detailsofmulti[$key]['advtmis_entryby'] . "</td>";
        echo "<td>" . $detailsofmulti[$key]['advtmis_entrydate'] . "</td>";
        echo "<td>" . $detailsofmulti[$key]['advtmis_mainmini'] . "</td>";


        echo "</tr>";
        }
        
    
    }
    ?>
</tbody>

</table>
    <input type="submit" formaction="<?php echo base_url(); ?>Entrydata/displayEntry/priymulti"  id="modibutton" name="modibutton" value="update">
    <!--</form>-->



<!--<a href="<?php echo base_url(); ?>Entrydata/displayEntry/priymulti" class="btn btn-primary btn-sm serialno" id="srlno" name="srlno" ">update</a>-->
<!--<dialog id="favDialog">
    
</dialog>-->
<!--</div>-->


<!--    <link rel="stylesheet" href="<?php echo site_url ?>assets/plugins/DataTables-1.11.3/js/jquery.dataTables.min.js">
    <link rel="stylesheet" href="<?php echo site_url ?>assets/plugins/DataTables-1.11.3/js/dataTables.bootstrap4.min.js">
    <link rel="stylesheet" href="<?php echo site_url ?>assets/plugins/DataTables-1.11.3/css/dataTables.bootstrap4.min.css">-->

<script src="<?php echo base_url(); ?>assets/jquery/jquery.min.js"></script>
<!--<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>--> 
<!--<script src="<?php echo base_url(); ?>assets/js/dataTables.bootstrap.min.js"></script>--> 
<script src="<?php echo base_url(); ?>assets/js/jquery-ui.js"></script>
<!--<script src="<?php echo base_url(); ?>assets/js/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/datatables/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/datatables/buttons.flash.min.js"></script>-->
<!--<script src="<?php echo base_url(); ?>assets/js/datatables/jszip.min.js"></script>-->
<!--<script src="<?php echo base_url(); ?>assets/js/datatables/pdfmake.min.js"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>-->
<!--<script src="<?php echo base_url(); ?>assets/js/datatables/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/datatables/buttons.print.min.js"></script>-->

<script>
//     $(function () {
//        
//         
//          $('#modibutton').on('click', function () {
//                updatemethod();
//              window.location='/Dataentry/index.php/Entrydata/displayEntry/priymulti';
//          
//        });
//    
//    function updatemethod(){
////        alert("priyanka");
//       
//             
//        var checkedbills = [];
//        $('.checkboxbills:checked').each(function(i){
//          checkedbills[i] = $(this).val();
////          alert($(this).val());
//        });
//         alert(checkedbills);
//      
//     
////    var checkedbills = $('#srlnocheck').val();
////    alert(checkedbills);
//     $.ajax({
////          alert(checkedbills);
//            type: 'POST',
//                url: '<?php echo base_url(); ?>Entrydata/multiupdate/',
////                alert(checkedbills);
//                data: {'checkedbills': checkedbills},
//                 success: function (data) {
//                }
//        });
//        }
////$('.check_class').val();
//     });
//    
    
    $(".datatablec").DataTable({
        "dom": 'Bfrtip',
//        "scrollY": "400px",
//        "scrollCollapse": true,
         scrollY: 300,
        scrollX: true,
        scroller: true,
//        "paging":         false
        "paging": false,
//            "scrollX": true,
        "responsive": false, "lengthChange": false, "autoWidth": false,
//             "defaultContent": "<button>Click!</button>",
        "buttons": ["colvis"],
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('.datatablec .col-md-6:eq(0)');

//         $(function () {
//         $('.serialno').click(function () {
//            var serialno = document.getElementById('srlno').getElementsByTagName('a')
//                       var edioptions = $('#edioptions').val();
//                       var serialno = $('#srlno').val();
//                        var serialno = $('a').text();

//                       alert(edioptions);
//                    });
//                 });

</script>
