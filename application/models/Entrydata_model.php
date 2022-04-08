
<?php

class Entrydata_model extends CI_Model {

    public function __construct() {
        parent::__construct();
//$this->load->helper('date');
        ini_set('max_execution_time', 0);
        date_default_timezone_set('Asia/Kolkata');
    }

    public function userDetails($data1,$tabledatecheck) {
//echo "<pre>";
//print_r($data1);
//exit;
        $query = $this->db->query("select * from pg_tables where tablename ='advtmis_publicationsspace_mainheader".$tabledatecheck."'");
         $mainheaderres = $query->result_array();
        
        $query = $this->db->query("select * from pg_tables where tablename ='advtmis_publicationsspace_main".$tabledatecheck."'");
        $mainres = $query->result_array();
        
        $query = $this->db->query("select * from pg_tables where tablename ='advtmis_publicationsspace_retaheader".$tabledatecheck."'");
        $retaheaderres = $query->result_array();
        
        $query = $this->db->query("select * from pg_tables where tablename ='advtmis_publicationsspace_reta".$tabledatecheck."'");
        $retares = $query->result_array();
        
        
        $query = $this->db->query("select * from pg_tables where tablename ='advtmis_missedads_".$tabledatecheck."'");
        $missedadsres = $query->result_array();
         if(empty($missedadsres)){
            $this->db->query("CREATE TABLE advtmis_priyanka_missedads_$tabledatecheck 
                                   (like advtmis_priyanka_missedads_202201 INCLUDING DEFAULTS )");
        }
        
        
        if(empty($mainheaderres)){
            $this->db->query("CREATE TABLE advtmis_publicationsspace_mainheader$tabledatecheck 
                                   (like advtmis_publicationsspace_mainheader202201 INCLUDING DEFAULTS )");
        }
        if(empty($mainres)){
            $this->db->query("CREATE TABLE advtmis_publicationsspace_main$tabledatecheck 
                                   (like advtmis_publicationsspace_main202201 INCLUDING DEFAULTS )");
        }
        if(empty($retaheaderres)){
            $this->db->query("CREATE TABLE advtmis_publicationsspace_retaheader$tabledatecheck 
                                   (like advtmis_publicationsspace_retaheader202201 INCLUDING DEFAULTS )");
        }
        if(empty($retares)){
            $this->db->query("CREATE TABLE advtmis_publicationsspace_reta$tabledatecheck 
                                   (like advtmis_publicationsspace_reta202201 INCLUDING DEFAULTS )");
        }
        
        
         $query = $this->db->query("select * from pg_tables where tablename ='advtmis_priyanka_missedads_".$tabledatecheck."'");
        $missedadsres = $query->result_array();
         if(empty($missedadsres)){
            $this->db->query("CREATE TABLE advtmis_priyanka_missedads_$tabledatecheck 
                                   (like advtmis_priyanka_missedads_202201 INCLUDING DEFAULTS )");
        }
//        echo "<pre>";
//        print_r($mainheaderres);
//        print_r($mainres);
//        print_r($retaheaderres);
//        print_r($retares);
//        exit;
        
        
        
        $query = $this->db->query(" select advtmis_user_empcode, advtmis_user_empname, advtmis_user_lastlogin,  advtmis_user_password, advtmis_user_rgnrgcdaccess, 
        advtmis_user_designation,  advtmis_user_unitcode, advtmis_unit_code, advtmis_unit_name, advtmis_unit_shortname,    advtmis_unit_rgncode , advtmis_unit_rgcd,
        advtmis_unit_nap_ipaddress,  md5('" . $data1['pwd'] . "') as userpwd  From advtmis_master_users   
        left outer join advtmis_master_units on  advtmis_unit_code = 1 where advtmis_user_allowflag = 'A'   and advtmis_user_empcode = " . $data1['user']);
        $res = $query->result_array();
        return $res;
    }

    public function updateUserLastlogin() {
        $query = $this->db->query(" update advtmis_master_users set advtmis_user_lastlogin ='2022-02-03 10:51:04',advtmis_user_roles='3132986'
               where advtmis_user_empcode = 9313286 and advtmis_user_allowflag = 'A' ");
        $res = $query->result_array();
        return $res;
    }

    public function clientmulti() {
        $query = $this->db->query("select * from advt_mst_client order by 3");
        $res = $query->result_array();
        return $res;
    }

    public function productmulti() {
        $query = $this->db->query("select * from advt_mst_product order by 2");
        $res = $query->result_array();
//        echo "<pre>";
//        print_r($res);exit;
        return $res;
    }

    public function brandmulti() {
        $query = $this->db->query("select * from advt_mst_brand order by 3");
        $res = $query->result_array();
        return $res;
    }

    function headerDisplay($fdate, $tdate, $pubtype, $mainmini) {
     $fyearm = date('Ym', strtotime($fdate));
     $tyearm = date('Ym', strtotime($tdate));
     $mainque="";
     for($i=$fyearm;$i<=$tyearm;$i++){
        
        if ($mainmini == "MAIN") {
            $mainque .=" select advtmis_entryby,date(advtmis_entrydate) as advtmis_entrydate,advtmis_modifydate,advtmis_srlno,advtmis_blno,date(advtmis_insdate) as advtmis_insdate,advtmis_pubname,advtmis_ednname,advtmis_client,
                advtmis_product,advtmis_brand,advtmis_agency,advtmis_maincatgname,advtmis_subcatgname,advtmis_adtype,advtmis_place,advtmis_page,
                advtmis_colbw,advtmis_size,advtmis_space,advtmis_splpage,advtmis_mainmini from advtmis_publicationsspace_mainheader".$i."
                where date(advtmis_insdate) between '$fdate' and '$tdate' and advtmis_pubname='$pubtype' and advtmis_mainmini='$mainmini' union all";
            
        } elseif ($mainmini == "MINI") {
             $mainque .=" select advtmis_entryby,date(advtmis_entrydate) as advtmis_entrydate,advtmis_modifydate,advtmis_srlno,advtmis_blno,date(advtmis_insdate) as advtmis_insdate,advtmis_pubname,advtmis_ednname,advtmis_client,
                advtmis_product,advtmis_brand,advtmis_agency,advtmis_maincatgname,advtmis_subcatgname,advtmis_adtype,advtmis_place,advtmis_page,
                advtmis_colbw,advtmis_size,advtmis_space,advtmis_splpage,advtmis_mainmini from advtmis_publicationsspace_retaheader".$i."
                where date(advtmis_insdate) between '$fdate' and '$tdate' and advtmis_pubname='$pubtype' and advtmis_mainmini='$mainmini' union all";
        }
     }
//     echo $mainque;exit;
     $mainque2="";
     $mainque2 .= rtrim($mainque, ' union all');
//     exit;
     $mainque2 .=" order by advtmis_insdate,advtmis_blno,advtmis_srlno";
//     echo $mainque2;exit;
      $query = $this->db->query($mainque2);
        $fields = $query->result_array();
//           echo $this->db->last_query($mainque2);exit;
        return $fields;
    }

//    public function unitnamesmain($ym) {
//        $query = $this->db->query("select distinct advtmis_pub_name as pubnamee
// from advtmis_publicationsspace_main".$ym."
//  inner join advtmis_master_publications on advtmis_pub_code=advtmis_pubcode order by 1
//");
//         $unitsmain = $query->result_array();
////         echo $this->db->last_query($query);exit;
//        return $unitsmain;
//    }
//    
    public function unitnamesford($ym) {
        $query = $this->db->query("select distinct advtmis_unit_name,advtmis_unit_code,advtmis_unit_shortname 
 from advtmis_master_units  order by 2
");
         $unitsmini = $query->result_array();
//         echo $this->db->last_query($query);exit;
        return $unitsmini;
    }
    public function pubnamesmain($ym) {
        $query = $this->db->query("select distinct advtmis_pub_name as pubnamee
 from advtmis_publicationsspace_main".$ym."
  inner join advtmis_master_publications on advtmis_pub_code=advtmis_pubcode order by 1
");
        $maindetails = $query->result_array();
//         echo $this->db->last_query($query);exit;
        return $maindetails;
    }
    public function pubnamesmini($ym) {
        $query = $this->db->query("select distinct advtmis_pub_name as pubnamee
 from advtmis_publicationsspace_reta".$ym."
  inner join advtmis_master_publications on advtmis_pub_code=advtmis_pubcode order by 1
");
        $maindetails = $query->result_array();
//         echo $this->db->last_query($query);exit;
        return $maindetails;
    }
    public function dayclosedetailsmain($ym) {
        $query = $this->db->query("select  0 as cnt,insdate,pubcode,pubname,unit,unname,count(*) as adcount ,insdate  ||' (' ||count(*) || ')' as date
from
(
select max(date(advtmis_insdate)) as insdate ,advtmis_pubcode as pubcode,advtmis_pub_name as pubname,  advtmis_entryunit as unit,advtmis_unit_shortname as unname,  'MAIN' as edntype
 from advtmis_publicationsspace_main".$ym."
  inner join advtmis_master_publications on advtmis_pub_code=advtmis_pubcode 
   inner join advtmis_master_units on advtmis_unit_code=advtmis_entryunit 
     group by  advtmis_pubcode,advtmis_pub_name,  advtmis_entryunit,advtmis_unit_shortname
) as a
inner join advtmis_publicationsspace_main".$ym." on date(advtmis_insdate) = date(insdate) and advtmis_pubcode = pubcode and advtmis_entryunit = unit
group by insdate,pubcode,pubname,unit,unname 
order by 4,5
");
        $maindetails = $query->result_array();
//         echo $this->db->last_query($query);exit;
        return $maindetails;
    }
    public function dayclosedetailsmini($ym) {
        $query = $this->db->query("select  0 as cnt,insdate,pubcode,pubname,unit,unname,count(*) as adcount ,insdate  ||'(' ||count(*) || ')' as date
from
(
select max(date(advtmis_insdate)) as insdate ,advtmis_pubcode as pubcode,advtmis_pub_name as pubname,  advtmis_entryunit as unit,advtmis_unit_shortname as unname,  'MINI' as edntype
 from advtmis_publicationsspace_reta".$ym."
  inner join advtmis_master_publications on advtmis_pub_code=advtmis_pubcode 
   inner join advtmis_master_units on advtmis_unit_code=advtmis_entryunit 
     group by  advtmis_pubcode,advtmis_pub_name,  advtmis_entryunit,advtmis_unit_shortname
) as a
inner join advtmis_publicationsspace_reta".$ym." on date(advtmis_insdate) = date(insdate) and advtmis_pubcode = pubcode and advtmis_entryunit = unit
group by insdate,pubcode,pubname,unit,unname 
order by 4,5
");
        $minidetails = $query->result_array();
        
//        echo "<pre>";
//        print_r($minidetails);exit;
        return $minidetails;
    }
    public function editionsdisplay($date) {
        $yearm = date('Ym', strtotime($date));
        $query = $this->db->query("select advtmis_ednname,advtmis_edncode from advtmis_publicationsspace_main".$yearm." where date(advtmis_insdate)='$date' ");
        $editions = $query->result_array();
        return $editions;
    }
    
    
    

    public function deletefun($date,$billno, $mainormini) {
//        echo $billno;
//                echo "<br>";
//        echo $mainormini;
         $yearm = date('Ym', strtotime($date));
        if ($mainormini == 'MAIN') {
            $entrydetails = $this->db->query("select advtmis_entrydate,advtmis_entryby from advtmis_publicationsspace_mainheader".$yearm." where advtmis_blno=$billno");
            $entryuserdet = $entrydetails->result_array();

            $query = $this->db->query("delete from advtmis_publicationsspace_mainheader".$yearm." where advtmis_blno=$billno");
            $query1 = $this->db->query("delete from advtmis_publicationsspace_main".$yearm." where advtmis_blno=$billno");
        } elseif ($mainormini == 'MINI') {
            $entrydetails = $this->db->query("select advtmis_entrydate,advtmis_entryby from advtmis_publicationsspace_retaheader".$yearm." where advtmis_blno=$billno");
            $entryuserdet = $entrydetails->result_array();
//echo $this->db->last_query($entrydetails);exit;
            $query = $this->db->query("delete from advtmis_publicationsspace_retaheader".$yearm." where advtmis_blno=$billno");
            $query1 = $this->db->query("delete from advtmis_publicationsspace_reta".$yearm." where advtmis_blno=$billno");
        }
//        echo "<pre>";
//        print_r($entryuserdet);exit;
//        echo "<pre>";
//        print_r($entryuserdet);
        if (!defined('ENTRYDATE')) {
            define("ENTRYDATE", $entryuserdet[0]['advtmis_entrydate']);
        }

        if (!defined('ENTRYBY')) {
            define("ENTRYBY", $entryuserdet[0]['advtmis_entryby']);
        }

        return $entryuserdet;
    }

    public function multipleupdate($data) {
//        $filterarr=array();
//        echo "<pre>";
//        print_r($data);
        $detailsforupdate = explode(",", $data['srlnocheck']);
        $fieldstoupdate = explode(",", $data['updatingfields']);
//       echo "<pre>";
//       print_r($fieldstoupdate);
//        exit;
       
        
       
//        if(!empty($data['agency'])){
//        $agencyinfor = explode("~", $data['agency']);
//        }
//        else{
//            $agencyinfor[0]=0;
//            $agencyinfor[1]="";
//        }
      
//        $placeinfor = explode("~", $data['place']);
//        $maincinfor = explode("~", $data['subcat']);
//        echo "<pre>";
//        print_r($maincinfor);exit;
        if (in_array("client",$fieldstoupdate) || in_array("product",$fieldstoupdate) || in_array("brand",$fieldstoupdate)) {
                     
            $productinfor = explode("~", $data['product']);
             $productname = "advtmis_product='" . $productinfor[1] . "'";
             $productcode = "advtmis_productcode=" . $productinfor[0] ;
             $entryproductname = "advtmis_entryproduct='" . $productinfor[1] . "'";
             $entryproductcode = "advtmis_entryproductcode=" . $productinfor[0] ;
            
             $brandinfor = explode("~", $data['brand']);
            $brandname = "advtmis_brand='" . $brandinfor[1] . "'";
            $brandcode = "advtmis_brandcode=" . $brandinfor[0] ;
            $entrybrandname = "advtmis_entrybrand='" . $brandinfor[1] . "'";
            $entrybrandcode = "advtmis_entrybrandcode=" . $brandinfor[0] ;
            
            
              $clientinfor = explode("~", $data['client']);
            $clientname = "advtmis_client='" . $clientinfor[1] . "'";
            $clientcode = "advtmis_clientcode=" . $clientinfor[0] ;
            $entryclientname = "advtmis_entryclient='" . $clientinfor[1] . "'";
            $entryclientcode = "advtmis_entryclientcode=" . $clientinfor[0] ;
        }
        else{
             $productname = "";
             $productcode = "";
             $entryproductname = "";
             $entryproductcode = "";
             
             $brandname = "";
            $brandcode = "";
            $entrybrandname = "";
            $entrybrandcode = "";
            
             $clientname = "";
            $clientcode = "";
            $entryclientname = "";
            $entryclientcode = "";
        }
        
        
        
        
        
        if(in_array("maincat",$fieldstoupdate) || in_array("subcat",$fieldstoupdate))
        {
              $subcinfor = explode("~", $data['subcat']);
              $entrycatgcode = "advtmis_entrycatgcode='" . $subcinfor[1] . "'";
              $catgcode = "advtmis_catgcode='" . $subcinfor[1] . "'";
              $catgorder = "advtmis_catgorder=" . $subcinfor[2] ;
              $maincatgname = "advtmis_maincatgname='" . $subcinfor[0] . "'";
              $subcatgname = "advtmis_subcatgname='" . $subcinfor[3] . "'";
              $adcd = "advtmis_adcd=" . $subcinfor[4] ;
            
        }
        else{
             $entrycatgcode = "";
              $catgcode = "";
              $catgorder = "";
              $maincatgname = "";
              $subcatgname = "";
              $adcd = "";
        }
        
        
        
        
        if(in_array("agency",$fieldstoupdate))
        {
             $agencyinfor = explode("~", $data['agency']);
             $agencycode = "advtmis_agencycode=" . $agencyinfor[0] ;
             $agencyname = "advtmis_agency='" . $agencyinfor[1] . "'";
        }
        else{
            $agencycode = "";
             $agencyname = "";
        }
        
        
        if(in_array("place",$fieldstoupdate)){
            $placeinfor = explode("~", $data['place']);
            $rgncode = "advtmis_rgncode=" . $placeinfor[0]  ;
            $entryrgncode = "advtmis_entryrgncode=" . $placeinfor[0] ;
            $rgnplace = "advtmis_place='" . $placeinfor[1] . "'";
            $rgcd = "advtmis_rgcd=" . $placeinfor[2] ;
            $rgcdname = "advtmis_rgcdname='" . $placeinfor[3] . "'";
        }
        else{
            $rgncode = "";
            $entryrgncode = "";
            $rgnplace = "";
            $rgcd = "";
            $rgcdname = "";
        }
        
        
        if(in_array("promotedby",$fieldstoupdate)){
            $promotedtype = "advtmis_eeadpromotiontype='" . $data['promoted'] . "'";
        }
        else{
            $promotedtype = "" ;
        }
        $updatefieldsval ="";
        
         $updatefieldsval .=(!empty($entrycatgcode) ? $entrycatgcode."," : "");
        $updatefieldsval .=(!empty($catgcode) ? $catgcode."," : "");
        $updatefieldsval .=(!empty($catgorder) ? $catgorder."," : "");
        $updatefieldsval .=(!empty($maincatgname) ? $maincatgname."," : "");
        $updatefieldsval .=(!empty($subcatgname) ? $subcatgname."," : "");
        $updatefieldsval .=(!empty($adcd) ? $adcd."," : "");
        
        
        $updatefieldsval .=(!empty($clientcode) ? $clientcode."," : "");
        $updatefieldsval .=(!empty($clientname) ? $clientname."," : "");
        $updatefieldsval .=(!empty($entryclientcode) ? $entryclientcode."," : "");
        $updatefieldsval .=(!empty($entryclientname) ? $entryclientname."," : "");
        
        $updatefieldsval .=(!empty($productname) ? $productname."," : "");
        $updatefieldsval .=(!empty($productcode) ? $productcode."," : "");
        $updatefieldsval .=(!empty($entryproductcode) ? $entryproductcode."," : "");
        $updatefieldsval .=(!empty($entryproductname) ? $entryproductname."," : "");
        
        $updatefieldsval .=(!empty($brandname) ? $brandname."," : "");
        $updatefieldsval .=(!empty($brandcode) ? $brandcode."," : "");
        $updatefieldsval .=(!empty($entrybrandcode) ? $entrybrandcode."," : "");
        $updatefieldsval .=(!empty($entrybrandname) ? $entrybrandname."," : "");
        
        
        $updatefieldsval .=(!empty($rgncode) ? $rgncode."," : "");
        $updatefieldsval .=(!empty($entryrgncode) ? $entryrgncode."," : "");
        $updatefieldsval .=(!empty($rgnplace) ? $rgnplace."," : "");
        $updatefieldsval .=(!empty($rgcd) ? $rgcd."," : "");
        $updatefieldsval .=(!empty($rgcdname) ? $rgcdname."," : "");
        
         $updatefieldsval .=(!empty($agencycode) ? $agencycode."," : "");
        $updatefieldsval .=(!empty($agencyname) ? $agencyname."," : "");
        
         $updatefieldsval .=(!empty($promotedtype) ? $promotedtype."," : "");
       $fieldsto_update = rtrim($updatefieldsval, ',');
       
foreach($detailsforupdate as $srldetkey=>$srldetval){
    if(!empty($detailsforupdate[$srldetkey])){
    
        if ($data['mainminimodi'] == 'MAIN') {
            $this->db->query("update advtmis_publicationsspace_priyanka_mainheader202112 set $fieldsto_update where advtmis_srlno=".$detailsforupdate[$srldetkey]);
            $this->db->query("update advtmis_priyanka_publicationsspace_main202112 set $fieldsto_update where advtmis_srlno=".$detailsforupdate[$srldetkey]);
            echo "updated multiple publication";
            echo "<br>";
        } elseif ($data['mainminimodi'] == 'MINI') {
            $this->db->query("update advtmis_publicationsspace_priyanka_retaheader202112 set  $fieldsto_update where advtmis_srlno=".$detailsforupdate[$srldetkey]);
            $this->db->query("update advtmis_priyanka_publicationsspace_reta202112 set $fieldsto_update  where advtmis_srlno=".$detailsforupdate[$srldetkey]);
            echo "updated mini data";
             echo "<br>";
        } elseif ($data['mainminimodi'] == 'MAIN/MINI') {
            $this->db->query("update advtmis_publicationsspace_priyanka_mainheader202112 set  $fieldsto_update where advtmis_srlno=".$detailsforupdate[$srldetkey]);
            $this->db->query("update advtmis_priyanka_publicationsspace_main202112 set $fieldsto_update where advtmis_srlno=".$detailsforupdate[$srldetkey]);
            $this->db->query("update advtmis_publicationsspace_priyanka_retaheader202112 set $fieldsto_update where advtmis_srlno=".$detailsforupdate[$srldetkey]);
            $this->db->query("update advtmis_priyanka_publicationsspace_reta202112 set $fieldsto_update where advtmis_srlno=".$detailsforupdate[$srldetkey]);
            echo "updated main and mini data";
             echo "<br>";
        }
        }
        }
            echo "<script>alert('Updated Succesfully');
                      window.history.go(-2); 
                  
                </script>";
    }

    public function updatequery($data, $mainormini, $serialno) {
        $pubinfor = explode("~", $data['publication11']);
        $clientinfor = explode("~", $data['client']);
        $productinfor = explode("~", $data['product']);
        $brandinfor = explode("~", $data['brand']);
        $agencyinfor = explode("~", $data['agency']);
        $placeinfor = explode("~", $data['place']);
        $maincinfor = explode("~", $data['subcat']);
         $yearm = date('Ym', strtotime($data['date']));

        $subcinfor = explode("~", $data['subcat']);
//        $editionsinfor = explode(",", $data['editions'][0]);
//
//        echo "<pre>";
//        print_r($data);exit;
        if ($mainormini == 'MAIN') {
            $this->db->query("update advtmis_publicationsspace_mainheader".$yearm." set advtmis_pubcode=$pubinfor[1],advtmis_pubname='$pubinfor[2]',
             advtmis_clientcode=$clientinfor[0], advtmis_client='$clientinfor[1]',advtmis_entryclientcode=$clientinfor[0],advtmis_entryclient='$clientinfor[1]',advtmis_productcode=$productinfor[0],
                 advtmis_product='$productinfor[1]',advtmis_entryproductcode=$productinfor[0],advtmis_entryproduct='$productinfor[1]',advtmis_brandcode=$brandinfor[0],advtmis_brand='$brandinfor[1]',
             advtmis_entrybrandcode=$brandinfor[0],advtmis_entrybrand='$brandinfor[1]',advtmis_agencycode=$agencyinfor[0],advtmis_agency='$agencyinfor[1]',
         advtmis_page=" . $data['page'] . ",advtmis_size='" . $data['size'] . "',advtmis_colbw='" . $data['color'] . "',advtmis_rgncode=$placeinfor[0],advtmis_entryrgncode=$placeinfor[0],advtmis_place='$placeinfor[1]',advtmis_rgcd=$placeinfor[2],
             advtmis_rgcdname='$placeinfor[3]',advtmis_mainmini='" . $data['mainmini11'] . "',advtmis_adtype='" . $data['addtype'] . "',advtmis_catgcode='" . $maincinfor[1] . "',
                 advtmis_catgorder='" . $maincinfor[2] . "',advtmis_maincatgname='" . $data['maincat'] . "',advtmis_subcatgname='" . $maincinfor[0] . "',advtmis_adcd='" . $maincinfor[3] . "',
             advtmis_entrycatgcode='" . $maincinfor[1] . "',advtmis_splpage='" . $data['splpage1'] . "',advtmis_space=" . $data['pagesize'] . " where advtmis_blno=" . $serialno);


            $this->db->query("update advtmis_publicationsspace_main".$yearm." set advtmis_pubcode=$pubinfor[1],advtmis_pubname='$pubinfor[2]',
             advtmis_clientcode=$clientinfor[0], advtmis_client='$clientinfor[1]',advtmis_entryclientcode=$clientinfor[0],advtmis_entryclient='$clientinfor[1]',advtmis_productcode=$productinfor[0],
                 advtmis_product='$productinfor[1]',advtmis_entryproductcode=$productinfor[0],advtmis_entryproduct='$productinfor[1]',advtmis_brandcode=$brandinfor[0],advtmis_brand='$brandinfor[1]',
             advtmis_entrybrandcode=$brandinfor[0],advtmis_entrybrand='$brandinfor[1]',advtmis_agencycode=$agencyinfor[0],advtmis_agency='$agencyinfor[1]',
         advtmis_page=" . $data['page'] . ",advtmis_size='" . $data['size'] . "',advtmis_colbw='" . $data['color'] . "',advtmis_rgncode=$placeinfor[0],advtmis_entryrgncode=$placeinfor[0],advtmis_place='$placeinfor[1]',advtmis_rgcd=$placeinfor[2],
             advtmis_rgcdname='$placeinfor[3]',advtmis_mainmini='" . $data['mainmini11'] . "',advtmis_adtype='" . $data['addtype'] . "',
                  advtmis_catgcode='" . $maincinfor[1] . "',
                 advtmis_catgorder='" . $maincinfor[2] . "',advtmis_maincatgname='" . $data['maincat'] . "',advtmis_subcatgname='" . $maincinfor[0] . "',advtmis_adcd='" . $maincinfor[3] . "',
             advtmis_entrycatgcode='" . $maincinfor[1] . "',advtmis_splpage='" . $data['splpage1'] . "',advtmis_space=" . $data['pagesize'] . " where advtmis_blno=" . $serialno);
        }

        if ($mainormini == 'MINI') {
            $this->db->query("update advtmis_publicationsspace_retaheader".$yearm." set advtmis_pubcode=$pubinfor[1],advtmis_pubname='$pubinfor[2]',
             advtmis_clientcode=$clientinfor[0], advtmis_client='$clientinfor[1]',advtmis_entryclientcode=$clientinfor[0],advtmis_entryclient='$clientinfor[1]',advtmis_productcode=$productinfor[0],
                 advtmis_product='$productinfor[1]',advtmis_entryproductcode=$productinfor[0],advtmis_entryproduct='$productinfor[1]',advtmis_brandcode=$brandinfor[0],advtmis_brand='$brandinfor[1]',
             advtmis_entrybrandcode=$brandinfor[0],advtmis_entrybrand='$brandinfor[1]',advtmis_agencycode=$agencyinfor[0],advtmis_agency='$agencyinfor[1]',
         advtmis_page=" . $data['page'] . ",advtmis_size='" . $data['size'] . "',advtmis_colbw='" . $data['color'] . "',advtmis_rgncode=$placeinfor[0],advtmis_entryrgncode=$placeinfor[0],advtmis_place='$placeinfor[1]',advtmis_rgcd=$placeinfor[2],
             advtmis_rgcdname='$placeinfor[3]',advtmis_mainmini='" . $data['mainmini11'] . "',advtmis_adtype='" . $data['addtype'] . "',advtmis_catgcode='" . $maincinfor[1] . "',
                 advtmis_catgorder='" . $maincinfor[2] . "',advtmis_maincatgname='" . $data['maincat'] . "',advtmis_subcatgname='" . $maincinfor[0] . "',advtmis_adcd='" . $maincinfor[3] . "',
             advtmis_entrycatgcode='" . $maincinfor[1] . "',advtmis_splpage='" . $data['splpage1'] . "',advtmis_space=" . $data['pagesize'] . " where advtmis_blno=" . $serialno);


            $this->db->query("update advtmis_publicationsspace_reta".$yearm." set advtmis_pubcode=$pubinfor[1],advtmis_pubname='$pubinfor[2]',
             advtmis_clientcode=$clientinfor[0], advtmis_client='$clientinfor[1]',advtmis_entryclientcode=$clientinfor[0],advtmis_entryclient='$clientinfor[1]',advtmis_productcode=$productinfor[0],
                 advtmis_product='$productinfor[1]',advtmis_entryproductcode=$productinfor[0],advtmis_entryproduct='$productinfor[1]',advtmis_brandcode=$brandinfor[0],advtmis_brand='$brandinfor[1]',
             advtmis_entrybrandcode=$brandinfor[0],advtmis_entrybrand='$brandinfor[1]',advtmis_agencycode=$agencyinfor[0],advtmis_agency='$agencyinfor[1]',
         advtmis_page=" . $data['page'] . ",advtmis_size='" . $data['size'] . "',advtmis_colbw='" . $data['color'] . "',advtmis_rgncode=$placeinfor[0],advtmis_entryrgncode=$placeinfor[0],advtmis_place='$placeinfor[1]',advtmis_rgcd=$placeinfor[2],
             advtmis_rgcdname='$placeinfor[3]',advtmis_mainmini='" . $data['mainmini11'] . "',advtmis_adtype='" . $data['addtype'] . "',
                advtmis_catgcode='" . $maincinfor[1] . "',
                 advtmis_catgorder='" . $maincinfor[2] . "',advtmis_maincatgname='" . $data['maincat'] . "',advtmis_subcatgname='" . $maincinfor[0] . "',advtmis_adcd='" . $maincinfor[3] . "',
             advtmis_entrycatgcode='" . $maincinfor[1] . "',advtmis_splpage='" . $data['splpage1'] . "',advtmis_space=" . $data['pagesize'] . " where advtmis_blno=" . $serialno);
        }

//        echo "<pre>";
//        print_r($data);
//        echo "<br>";
//        echo $mainormini;
//         echo "<br>";
//        echo $serialno;
//        exit;
    }

    public function insertquery($data, $mainormini) {
        $username = get_cookie('usernamecookie');
//        $userquery=$this->db->query("select * from advtmis_master_users where advtmis_user_unitcode=1 limit 1");


        $userquery = $this->db->query("select advtmis_user_empname,advtmis_user_empcode,advtmis_user_unitcode,advtmis_unit_code,advtmis_unit_name 
               from advtmis_master_users inner join advtmis_master_units on advtmis_unit_code = advtmis_user_unitcode where advtmis_user_empcode=" . $username);
        $userdetails = $userquery->result_array();

        $todaydate = date('Y-m-d H:i:s');

        if (!defined('TODAYDATE')) {
            define("TODAYDATE", $todaydate);
        }
//         echo $todaydate;
//         $format = "%Y-%m-%d %h:%i %A";
//$todaydate= mdate($format);
//echo $todaydate;
//         exit;
//         echo "<pre>";
//         print_r($userdetails);exit;

        if (isset($data['publication'])) {
//            echo "<pre>";
//            print_r($data['editions']);
//            $valofedi = explode(",",$data['editions'][0]);
//                    print_r($valofedi);
//            if(in_array("CENTRAL ANDHRA REGION", $valofedi)){
//                echo "<br>";
//                echo "dshfjkhsdlfhsl";
//            }
//            else{
//                echo "priyanka";
//            }
//            exit;
//echo "<pre>";
//print_r($data);exitADV

            $ednVal = $data['editions'][0];
            $editionArray = explode(",", $ednVal);

            $insdate1 = $data['date'];
            $insdate = date('Y-m-d', strtotime($insdate1));
            $yearmonth = date('Ym', strtotime($insdate));

            $public = explode("~", $data['publication']);
            $pub_code = $public[1];
            $pub_name = $public[2];



            $clientdetails = explode("~", $data['client']);
            $client_code = $clientdetails[0];
            $client_name = $clientdetails[1];
            $client_entcode = $clientdetails[0];
            $client_entname = $clientdetails[1];

            $productdetails = explode("~", $data['product']);
            $product_code = $productdetails[0];
            $product_name = $productdetails[1];
            $product_entcode = $productdetails[0];
            $product_entname = $productdetails[1];

            $branddetails = explode("~", $data['brand']);
            $brand_code = $branddetails[0];
            $brand_name = $branddetails[1];
            $brand_entcode = $branddetails[0];
            $brand_entname = $branddetails[1];
            if (!empty($data['agency'])) {
                $agencydetails = explode("~", $data['agency']);
                $agency_code = $agencydetails[0];
                $agency_name = $agencydetails[1];
            }

            $addtypedetails = explode("~", $data['addtype']);
            $addtype_code = $addtypedetails[0];

//echo $data['subcat'];
            $catdetails = explode("~", $data['subcat']);
//            echo "<pre>";
//            print_r($catdetails);exit;
            $cat_code = $catdetails[1];
            $cat_order = $catdetails[2];
            $cat_maincatname = $catdetails[0];
//            $cat_subcatname = $catdetails[3];
            $cat_agcd = $catdetails[4];

            $placedetails = explode("~", $data['place']);
            $rgn_rgncode = $placedetails[0];
            $rgn_rgnentrycode = $placedetails[0];
            $rgn_place = $placedetails[1];
            $rgn_rgcd = $placedetails[2];
            $rgn_rgname = $placedetails[3];

            $mis_flag = "null";
            $page = $data['page'];
//             $size = $data['size'];
            $page_color = $data['color'];
            $size=  strtoupper ( $data['size'] );
//            echo $size;
//            exit;
           
            $space = $data['pagesize'];
            $espace = 0.00;
            $special_page = $data['splpage'];
            $mainmini = $data['mainmini'];

            if ($data['mainmini'] == "MAIN") {

//                echo "<pre>";
//                print_r($data);exit;

                $billno = $this->db->query("Select nextval('advtmis_srlnoseq'::text)");
                $billnoo = $billno->result_array();

//                foreach ($editionArray as $keyy => $val) {
//                    if(($editionArray[$keyy]=="CENTRAL ANDHRA REGION") || ($editionArray[$keyy]==" NORTH ANDHRA REGION")){
//                $editionArrayy[]=$editionArray[$keyy];
//            }
//                }
//                 echo "<pre>";
//            print_r($editionArrayy);exit;
//                $countofreg=0;
                foreach ($editionArray as $key => $val) {

                    if ($editionArray[$key] != "select all") {
//                echo $key;
                        $srlno = $this->db->query("Select nextval('advtmis_srlnoseq'::text)");
                        $srlnoo = $srlno->result_array();

                        $inserting_data = array();
                        $inserting_data['advtmis_srlno'] = $srlnoo[0]['nextval'] - 1;
                        $inserting_data['advtmis_blno'] = $billnoo[0]['nextval'];
                        $inserting_data['advtmis_idno'] = 0;

                        $inserting_data['advtmis_yearmonth'] = $yearmonth;
                        $inserting_data['advtmis_insdate'] = $insdate;

                        $inserting_data['advtmis_pubcode'] = $public[1];
                        $inserting_data['advtmis_pubname'] = $public[2];
//                    if($editionArray[$key] != "select all"){
                        $new_str = trim($editionArray[$key]);
//                    }
//                    echo $new_str;exit;
//                     if($new_str != 'select all'){
                        $que = $this->db->query("select advtmis_edn_code,advtmis_edn_name,advtmis_edn_shortname,advtmis_edn_eenaduregion
                         from advtmis_master_editions
                         where advtmis_edn_name=case when '" . $new_str . "' = advtmis_edn_name then '" . $new_str . "' 
                                else case when '$editionArray[$key]'  = advtmis_edn_name then '" . $editionArray[$key] . "' else '" . $new_str . " '  end  end");

                        $edncode = $que->result_array();
//                     }
//                        echo "<pre>";
//                        print_r($edncode);
//                        echo $countofreg;
//                        echo "<br>";

                        foreach ($editionArray as $ednkey => $ednval) {
//                        echo $new_strr;
                            $new_strr = trim($editionArray[$ednkey]);
//                        echo $new_strr;
                            if ($new_strr != 'select all') {

                                $queryedn = $this->db->query("select advtmis_edn_code,advtmis_edn_name,advtmis_edn_shortname,advtmis_edn_eenaduregion,advtmis_edn_eedncode
                         from advtmis_master_editions
                         where advtmis_edn_name=case when '" . $new_strr . "' = advtmis_edn_name then '" . $new_strr . "' 
                                else case when '$editionArray[$ednkey]'  = advtmis_edn_name then '" . $editionArray[$ednkey] . "' else '" . $new_strr . " '  end  end");

                                $edncoderes[] = $queryedn->result_array();
                            }
                        }
                        $countt = count($edncoderes);

                        $regvalue = "";
                        $noofreg = 0;
                        $addval = 1;



                        $multiedi = "MULTI EDITION ADVT FOR ";
//                   echo "<pre>";
//                   print_r($data['editions']);exit;

                        foreach ($edncoderes as $editionkey => $editionval) {
//                         $multiflagvalue = "EDITION ADVT FOR " .  $edncoderes[$editionkey][0]['advtmis_edn_shortname'];
                            if ($countt == 1) {
                                $multiflagvalue = "EDITION ADVT FOR " . $edncoderes[$editionkey][0]['advtmis_edn_shortname'];
                            } else if ($countt > 1 && $edncoderes[$editionkey][0]['advtmis_edn_eenaduregion'] == $edncoderes[$editionkey][0]['advtmis_edn_eedncode']) {
                                $noofreg = $noofreg + $addval;
                                $regvalue .= $edncoderes[$editionkey][0]['advtmis_edn_shortname'];
                                $regvalue .= ",";
                            } else if ($countt > 1 && $edncoderes[$editionkey][0]['advtmis_edn_eenaduregion'] != $edncoderes[$editionkey][0]['advtmis_edn_eedncode']) {

                                $multiedi .= $edncoderes[$editionkey][0]['advtmis_edn_shortname'];
                                $multiedi .= ",";
                                $multiflagvalue = $multiedi;
                            }
                        }

                        if ($noofreg == 1) {
                            $multiflagvalue = "REGION ADVT FOR " . $regvalue;
                        } else if ($noofreg > 1) {
                            $multiflagvalue = "MULTI REGION ADVT FOR " . $regvalue;
                        }

                        if (!defined('GREETING')) {
                            define("GREETING", $multiflagvalue);
                        }

//echo "<pre>";
//print_r($edncode);
                        $edn_code_main = $edncode[0]['advtmis_edn_code'];
                        $edn_name_main = $edncode[0]['advtmis_edn_shortname'];
                        $edn_eedncode = $edncode[0]['advtmis_edn_eenaduregion'];

                        $edn_code_mini = -1;
                        $edn_name_mini = "";
                        $header['code'][$key] = $edn_code_main;
                        $header['name'][$key] = $edn_name_main;
                        $header['eedncode'][$key] = $edn_eedncode;


                        $inserting_data["advtmis_edncode"] = $edn_code_main;
                        $inserting_data["advtmis_ednname"] = $edn_name_main;
                        $inserting_data['advtmis_distedncode'] = $edn_code_mini;
                        $inserting_data['advtmis_distednname'] = $edn_name_mini;

                        $inserting_data['advtmis_clientcode'] = $clientdetails[0];
                        $inserting_data['advtmis_client'] = $clientdetails[1];
                        $inserting_data['advtmis_entryclientcode'] = $clientdetails[0];
                        $inserting_data['advtmis_entryclient'] = $clientdetails[1];

                        $inserting_data['advtmis_productcode'] = $productdetails[0];
                        $inserting_data['advtmis_product'] = $productdetails[1];
                        $inserting_data['advtmis_entryproductcode'] = $productdetails[0];
                        $inserting_data['advtmis_entryproduct'] = $productdetails[1];

                        $inserting_data['advtmis_brandcode'] = $branddetails[0];
                        $inserting_data['advtmis_brand'] = $branddetails[1];
                        $inserting_data['advtmis_entrybrandcode'] = $branddetails[0];
                        $inserting_data['advtmis_entrybrand'] = $branddetails[1];
                        if (!empty($agencydetails)) {
                            $inserting_data['advtmis_agencycode'] = $agencydetails[0];
                            $inserting_data['advtmis_agency'] = $agencydetails[1];
                            $inserting_data['advtmis_agencyplace'] = "$agencydetails[2]";
                        } else {
                            $inserting_data['advtmis_agencycode'] = 0;
                            $inserting_data['advtmis_agency'] = "";
                            $inserting_data['advtmis_agencyplace'] = "";
                        }


                        $inserting_data['advtmis_ismmpl'] = "";
                        $inserting_data['advtmis_freead'] = "";
                        $inserting_data['advtmis_selfad'] = "";
                        $inserting_data['advtmis_dipr'] = "";
                        $inserting_data['advtmis_npag'] = "";
                        $inserting_data['advtmis_rpcat'] = 0;

                        $inserting_data['advtmis_catgcode'] = $catdetails[1];
                        $inserting_data['advtmis_entrycatgcode'] = $catdetails[1];
                        $inserting_data['advtmis_catgorder'] = $catdetails[2];
                        $inserting_data['advtmis_maincatgname'] = $data['maincat'];
                        $inserting_data['advtmis_subcatgname'] = $catdetails[3];
                        $inserting_data['advtmis_adcd'] = $catdetails[4];
                        if (!empty($addtypedetails[0])) {
                            $inserting_data['advtmis_adtype'] = $addtypedetails[0];
                        } else {
                            $inserting_data['advtmis_adtype'] = "";
                        }

                        $inserting_data['advtmis_rgncode'] = $placedetails[0];
                        $inserting_data['advtmis_entryrgncode'] = $placedetails[0];
                        $inserting_data['advtmis_place'] = $placedetails[1];
                        $inserting_data['advtmis_rgcd'] = $placedetails[2];
                        $inserting_data['advtmis_rgcdname'] = $placedetails[3];

//                        echo GREETING;exit;
                        $inserting_data['advtmis_flag'] = GREETING;
//echo "<pre>";
//print_r($data);exit;

                        $inserting_data['advtmis_page'] = $data['page'];
                        $inserting_data['advtmis_colbw'] = $data['color'];
                        $inserting_data['advtmis_size'] = strtoupper ( $data['size'] );
                        $inserting_data['advtmis_space'] = $data['pagesize'];
                        $inserting_data['advtmis_espace'] = 0.00;
                        if (!empty($data['splpage'])) {
                            $inserting_data['advtmis_splpage'] = $data['splpage'];
                        } else {
                            $inserting_data['advtmis_splpage'] = 0;
                        }

                        $inserting_data['advtmis_adcategory'] = "";
                        $inserting_data['advtmis_pageposition'] = "";
                        $inserting_data['advtmis_adposition'] = "";

                        $inserting_data['advtmis_cardrate'] = 0.00;
                        $inserting_data['advtmis_commissionper'] = 0.00;
                        $inserting_data['advtmis_discountper'] = 0.00;
                        $inserting_data['advtmis_extper'] = 0.00;
                        $inserting_data['advtmis_cardgross'] = 0.00;
                        $inserting_data['advtmis_cardnet'] = 0.00;
                        $inserting_data['advtmis_rate'] = 0.00;
                        $inserting_data['advtmis_grossamt'] = 0.00;
                        $inserting_data['advtmis_netamt'] = 0.00;

                        $inserting_data['advtmis_adexeid'] = 0;
                        $inserting_data['advtmis_adexename'] = "";
                        $inserting_data['advtmis_epos'] = 0;

                        $inserting_data['advtmis_en_hin'] = "";

                        $inserting_data['advtmis_sgross1'] = 0.00;
                        $inserting_data['advtmis_snetamt1'] = 0.00;
                        $inserting_data['advtmis_sgross'] = 0.00;
                        $inserting_data['advtmis_snetamt'] = 0.00;
                        $inserting_data['advtmis_crspc'] = 0.00;
                        $inserting_data['advtmis_crgross'] = 0.00;
                        $inserting_data['advtmis_crnet'] = 0.00;
                        $inserting_data['advtmis_drspc'] = 0.00;
                        $inserting_data['advtmis_drgross'] = 0.00;
                        $inserting_data['advtmis_drnet'] = 0.00;

                        $inserting_data['advtmis_entryunit'] = $userdetails[0]['advtmis_user_unitcode'];
                        $inserting_data['advtmis_entryunitname'] = $userdetails[0]['advtmis_unit_name'];
                        $inserting_data['advtmis_entryby'] = $userdetails[0]['advtmis_user_empcode'];
                        $inserting_data['advtmis_entrydate'] = TODAYDATE;
                        $inserting_data['advtmis_modifyby'] = $userdetails[0]['advtmis_user_empcode'];
                        $inserting_data['advtmis_modifydate'] = $todaydate;
                        $inserting_data['advtmis_allowflag'] = "A";
                        $inserting_data['advtmis_mainmini'] = $data['mainmini'];
                        $inserting_data['advtmis_remarks'] = "record by way of php";
                        $inserting_data['advtmis_eeadpromotiontype'] = $data['promoted'];
                        $inserting_data['advtmis_competitor_offer_rate'] = 0;
                        $inserting_data['advtmis_client_request_rate'] = 0;

//                        echo "<pre>";
//                        print_r($inserting_data);exit;
//echo "<pre>";
//print_r($edncode);
//                        foreach ($edncode as $editionval => $editionkey) {
//                            $countedi=
                        if ($edncode[0]['advtmis_edn_eenaduregion'] == 4) {
                            if ($edncode[0]['advtmis_edn_name'] == 'CENTRAL ANDHRA REGION') {
                                $countofreg = 4;
                                if (!defined('CENVAL')) {
                                    define("CENVAL", 4);
                                }

//                                    $countedi += 1;
                            } else {
                                $countofreg = 400;
                            }
                        } elseif ($edncode[0]['advtmis_edn_eenaduregion'] == 5) {
                            if ($edncode[0]['advtmis_edn_name'] == 'NORTH ANDHRA REGION') {
                                $countofreg = 5;
                                if (!defined('NORVAL')) {
                                    define("NORVAL", 5);
                                }
                            } else {
                                $countofreg = 500;
                            }
                        } elseif ($edncode[0]['advtmis_edn_eenaduregion'] == 6) {
                            if ($edncode[0]['advtmis_edn_name'] == 'RAYALASEEMA REGION') {
                                $countofreg = 6;
                                if (!defined('RAYALVAL')) {
                                    define("RAYALVAL", 6);
                                }
                            } else {
                                $countofreg = 600;
                            }
                        } elseif ($edncode[0]['advtmis_edn_eenaduregion'] == 2) {
                            if ($edncode[0]['advtmis_edn_name'] == 'GRT HYDERABAD REGION') {
                                $countofreg = 2;
                                if (!defined('GRTVAL')) {
                                    define("GRTVAL", 2);
                                }
                            } else {
                                $countofreg = 200;
                            }
                        } elseif ($edncode[0]['advtmis_edn_eenaduregion'] == 3) {
                            if ($edncode[0]['advtmis_edn_name'] == 'TELANGANA REGION') {
                                $countofreg = 3;
                                if (!defined('RESTTGVAL')) {
                                    define("RESTTGVAL", 3);
                                }
                            } else {
                                $countofreg = 300;
                            }
                        } else {
                            $countofreg = 800;
                        }

//                        echo $countofreg;
                        
//                        echo "<br>";
//                       echo "<pre>";
                        
//                       echo $yearmonth;
//                       echo "<br>";
//                       echo $yearmonth-1;
//                       echo "<br>";
//                       print_r($inserting_data['advtmis_insdate']);
//                       exit;
//                        if($yearmonth)
//                        $yearmonthh="202112";
//                         exit;
//                        $tablecheck = $this->db->query("select * from pg_tables where tablename = 'advtmis_priyanka_publicationsspace_main" . $yearmonth . "'");

//                        $tableres = $tablecheck->result_array();
//                        echo "<pre>";
//                        print_r($tableres);
////                        echo $tableres[0]['tablename'];
//                         if (!empty($tableres)) {
//                             echo "kasldfjdlfj";
//                         }
//                         else{
//                             echo "fail";
//                         }
//                        exit;
//                        
//                        if (!empty($tableres)) {
//echo "sjkldfjlkdsjf";exit;
                            if ($countofreg == 4) {
                                $editionvalues['code'][] = $edncode[0]['advtmis_edn_code'];
                                $editionvalues['name'][] = $edncode[0]['advtmis_edn_name'];
                                $editionvalues['shortname'][] = $edncode[0]['advtmis_edn_shortname'];
                                $editionvalues['regcode'][] = $edncode[0]['advtmis_edn_eenaduregion'];
                                $query1 = $this->db->insert('advtmis_publicationsspace_main'.$yearmonth, $inserting_data);
                                  
                            }
                            if (!defined('CENVAL')) {
                                if (('CENVAL' != 4) && ($countofreg == 400)) {
                                    $editionvalues['code'][] = $edncode[0]['advtmis_edn_code'];
                                    $editionvalues['name'][] = $edncode[0]['advtmis_edn_name'];
                                    $editionvalues['shortname'][] = $edncode[0]['advtmis_edn_shortname'];
                                    $editionvalues['regcode'][] = $edncode[0]['advtmis_edn_eenaduregion'];
                                    $query1 = $this->db->insert('advtmis_publicationsspace_main'.$yearmonth, $inserting_data);
                                }
                            }


                            if ($countofreg == 5) {
                                $editionvalues['code'][] = $edncode[0]['advtmis_edn_code'];
                                $editionvalues['name'][] = $edncode[0]['advtmis_edn_name'];
                                $editionvalues['shortname'][] = $edncode[0]['advtmis_edn_shortname'];
                                $editionvalues['regcode'][] = $edncode[0]['advtmis_edn_eenaduregion'];
                                $query1 = $this->db->insert('advtmis_publicationsspace_main'.$yearmonth, $inserting_data);
                                
                            }
                            if (!defined('NORVAL')) {
                                if (('NORVAL' != 5) && ($countofreg == 500)) {
                                    $editionvalues['code'][] = $edncode[0]['advtmis_edn_code'];
                                    $editionvalues['name'][] = $edncode[0]['advtmis_edn_name'];
                                    $editionvalues['shortname'][] = $edncode[0]['advtmis_edn_shortname'];
                                    $editionvalues['regcode'][] = $edncode[0]['advtmis_edn_eenaduregion'];
                                    $query1 = $this->db->insert('advtmis_publicationsspace_main'.$yearmonth, $inserting_data);
                                    
                                }
                            }
                            if ($countofreg == 6) {
                                $editionvalues['code'][] = $edncode[0]['advtmis_edn_code'];
                                $editionvalues['name'][] = $edncode[0]['advtmis_edn_name'];
                                $editionvalues['shortname'][] = $edncode[0]['advtmis_edn_shortname'];
                                $editionvalues['regcode'][] = $edncode[0]['advtmis_edn_eenaduregion'];
                                 $query1 = $this->db->insert('advtmis_publicationsspace_main'.$yearmonth, $inserting_data);
                                
                            }
                            if (!defined('RAYALVAL')) {
                                if (('RAYALVAL' != 6) && ($countofreg == 600)) {
                                    $editionvalues['code'][] = $edncode[0]['advtmis_edn_code'];
                                    $editionvalues['name'][] = $edncode[0]['advtmis_edn_name'];
                                    $editionvalues['shortname'][] = $edncode[0]['advtmis_edn_shortname'];
                                    $editionvalues['regcode'][] = $edncode[0]['advtmis_edn_eenaduregion'];
                                   $query1 =  $this->db->insert('advtmis_publicationsspace_main'.$yearmonth, $inserting_data);
                                 
                                }
                            }


                            if ($countofreg == 2) {
                                $editionvalues['code'][] = $edncode[0]['advtmis_edn_code'];
                                $editionvalues['name'][] = $edncode[0]['advtmis_edn_name'];
                                $editionvalues['shortname'][] = $edncode[0]['advtmis_edn_shortname'];
                                $editionvalues['regcode'][] = $edncode[0]['advtmis_edn_eenaduregion'];
                                $query1 = $this->db->insert('advtmis_publicationsspace_main'.$yearmonth, $inserting_data);
                                 
                            }
                            if (!defined('GRTVAL')) {
                                if (('GRTVAL' != 2) && ($countofreg == 200)) {
                                    $editionvalues['code'][] = $edncode[0]['advtmis_edn_code'];
                                    $editionvalues['name'][] = $edncode[0]['advtmis_edn_name'];
                                    $editionvalues['shortname'][] = $edncode[0]['advtmis_edn_shortname'];
                                    $editionvalues['regcode'][] = $edncode[0]['advtmis_edn_eenaduregion'];
                                    $query1 = $this->db->insert('advtmis_publicationsspace_main'.$yearmonth, $inserting_data);
                                   
                                }
                                
                            }

 
                            if ($countofreg == 3) {
                                $editionvalues['code'][] = $edncode[0]['advtmis_edn_code'];
                                $editionvalues['name'][] = $edncode[0]['advtmis_edn_name'];
                                $editionvalues['shortname'][] = $edncode[0]['advtmis_edn_shortname'];
                                $editionvalues['regcode'][] = $edncode[0]['advtmis_edn_eenaduregion'];
//                                echo "<pre>";
//                                print_r($inserting_data);
                                
                                $query1=$this->db->insert('advtmis_publicationsspace_main'.$yearmonth, $inserting_data);
//                                 echo $this->db->last_query($query1);exit;
                            }
                            if (!defined('RESTTGVAL')) {
                                if (('RESTTGVAL' != 3) && ($countofreg == 300)) {
                                    $editionvalues['code'][] = $edncode[0]['advtmis_edn_code'];
                                    $editionvalues['name'][] = $edncode[0]['advtmis_edn_name'];
                                    $editionvalues['shortname'][] = $edncode[0]['advtmis_edn_shortname'];
                                    $editionvalues['regcode'][] = $edncode[0]['advtmis_edn_eenaduregion'];
                                    $this->db->insert('advtmis_publicationsspace_main'.$yearmonth, $inserting_data);
                                }
                            }
//                        }
                      
//                        else{
//                            
//                            $this->db->query("CREATE TABLE advtmis_priyanka_publicationsspace_main$yearmonth 
//                                   (like advtmis_priyanka_publicationsspace_main202202 INCLUDING DEFAULTS )");
//                            
//                            if ($countofreg == 4) {
//                                $editionvalues['code'][] = $edncode[0]['advtmis_edn_code'];
//                                $editionvalues['name'][] = $edncode[0]['advtmis_edn_name'];
//                                $editionvalues['shortname'][] = $edncode[0]['advtmis_edn_shortname'];
//                                $editionvalues['regcode'][] = $edncode[0]['advtmis_edn_eenaduregion'];
//                                $this->db->insert('advtmis_priyanka_publicationsspace_main'.$yearmonth, $inserting_data);
//                            }
//                            if (!defined('CENVAL')) {
//                                if (('CENVAL' != 4) && ($countofreg == 400)) {
//                                    $editionvalues['code'][] = $edncode[0]['advtmis_edn_code'];
//                                    $editionvalues['name'][] = $edncode[0]['advtmis_edn_name'];
//                                    $editionvalues['shortname'][] = $edncode[0]['advtmis_edn_shortname'];
//                                    $editionvalues['regcode'][] = $edncode[0]['advtmis_edn_eenaduregion'];
//                                    $this->db->insert('advtmis_priyanka_publicationsspace_main'.$yearmonth, $inserting_data);
//                                }
//                            }
//
//
//                            if ($countofreg == 5) {
//                                $editionvalues['code'][] = $edncode[0]['advtmis_edn_code'];
//                                $editionvalues['name'][] = $edncode[0]['advtmis_edn_name'];
//                                $editionvalues['shortname'][] = $edncode[0]['advtmis_edn_shortname'];
//                                $editionvalues['regcode'][] = $edncode[0]['advtmis_edn_eenaduregion'];
//                                $this->db->insert('advtmis_priyanka_publicationsspace_main'.$yearmonth, $inserting_data);
//                            }
//                            if (!defined('NORVAL')) {
//                                if (('NORVAL' != 5) && ($countofreg == 500)) {
//                                    $editionvalues['code'][] = $edncode[0]['advtmis_edn_code'];
//                                    $editionvalues['name'][] = $edncode[0]['advtmis_edn_name'];
//                                    $editionvalues['shortname'][] = $edncode[0]['advtmis_edn_shortname'];
//                                    $editionvalues['regcode'][] = $edncode[0]['advtmis_edn_eenaduregion'];
//                                    $this->db->insert('advtmis_priyanka_publicationsspace_main'.$yearmonth, $inserting_data);
//                                }
//                            }
//                            if ($countofreg == 6) {
//                                $editionvalues['code'][] = $edncode[0]['advtmis_edn_code'];
//                                $editionvalues['name'][] = $edncode[0]['advtmis_edn_name'];
//                                $editionvalues['shortname'][] = $edncode[0]['advtmis_edn_shortname'];
//                                $editionvalues['regcode'][] = $edncode[0]['advtmis_edn_eenaduregion'];
//                                 $this->db->insert('advtmis_priyanka_publicationsspace_main'.$yearmonth, $inserting_data);
//                            }
//                            if (!defined('RAYALVAL')) {
//                                if (('RAYALVAL' != 6) && ($countofreg == 600)) {
//                                    $editionvalues['code'][] = $edncode[0]['advtmis_edn_code'];
//                                    $editionvalues['name'][] = $edncode[0]['advtmis_edn_name'];
//                                    $editionvalues['shortname'][] = $edncode[0]['advtmis_edn_shortname'];
//                                    $editionvalues['regcode'][] = $edncode[0]['advtmis_edn_eenaduregion'];
//                                    $this->db->insert('advtmis_priyanka_publicationsspace_main'.$yearmonth, $inserting_data);
//                                }
//                            }
//
//
//                            if ($countofreg == 2) {
//                                $editionvalues['code'][] = $edncode[0]['advtmis_edn_code'];
//                                $editionvalues['name'][] = $edncode[0]['advtmis_edn_name'];
//                                $editionvalues['shortname'][] = $edncode[0]['advtmis_edn_shortname'];
//                                $editionvalues['regcode'][] = $edncode[0]['advtmis_edn_eenaduregion'];
//                                $this->db->insert('advtmis_priyanka_publicationsspace_main'.$yearmonth, $inserting_data);
//                            }
//                            if (!defined('GRTVAL')) {
//                                if (('GRTVAL' != 2) && ($countofreg == 200)) {
//                                    $editionvalues['code'][] = $edncode[0]['advtmis_edn_code'];
//                                    $editionvalues['name'][] = $edncode[0]['advtmis_edn_name'];
//                                    $editionvalues['shortname'][] = $edncode[0]['advtmis_edn_shortname'];
//                                    $editionvalues['regcode'][] = $edncode[0]['advtmis_edn_eenaduregion'];
//                                    $this->db->insert('advtmis_priyanka_publicationsspace_main'.$yearmonth, $inserting_data);
//                                }
//                            }
//
//
//                            if ($countofreg == 3) {
//                                $editionvalues['code'][] = $edncode[0]['advtmis_edn_code'];
//                                $editionvalues['name'][] = $edncode[0]['advtmis_edn_name'];
//                                $editionvalues['shortname'][] = $edncode[0]['advtmis_edn_shortname'];
//                                $editionvalues['regcode'][] = $edncode[0]['advtmis_edn_eenaduregion'];
//                                $this->db->insert('advtmis_priyanka_publicationsspace_main'.$yearmonth, $inserting_data);
//                            }
//                            if (!defined('RESTTGVAL')) {
//                                if (('RESTTGVAL' != 3) && ($countofreg == 300)) {
//                                    $editionvalues['code'][] = $edncode[0]['advtmis_edn_code'];
//                                    $editionvalues['name'][] = $edncode[0]['advtmis_edn_name'];
//                                    $editionvalues['shortname'][] = $edncode[0]['advtmis_edn_shortname'];
//                                    $editionvalues['regcode'][] = $edncode[0]['advtmis_edn_eenaduregion'];
//                                    $this->db->insert('advtmis_priyanka_publicationsspace_main'.$yearmonth, $inserting_data);
//                                }
//                            }
                            
//                        }
                    }
                }
//                exit;
//                echo "<pre>";
//                        print_r($editionvalues);
                $edncodeheader = "";
                $ednnameheader = "";
                $edn_eenaduregion = "";
//                echo "<pre>";
//                print_r($header['code']);

                foreach ($editionvalues['code'] as $valcode => $value) {
                    $edncodeheader .= $editionvalues['code'][$valcode];
                    $edncodeheader .= ",";
                }
                
                foreach ($editionvalues['name'] as $valname => $value) {
                    $ednnameheader .= $editionvalues['name'][$valname];
                    $ednnameheader .= ",";
                }
                
                foreach ($editionvalues['regcode'] as $valregcode => $value) {
                    $edn_eenaduregion .= $editionvalues['regcode'][$valregcode];
                    $edn_eenaduregion .= ",";
                }
//                echo $edncodeheader;echo "<br>";
//                echo $ednnameheader;echo "<br>";
//                echo $edn_eenaduregion;echo "<br>";
                $inserting_data = array();
                $inserting_data['advtmis_srlno'] = $billnoo[0]['nextval'];
                $inserting_data['advtmis_blno'] = $billnoo[0]['nextval'];
                $inserting_data['advtmis_idno'] = 0;

                $inserting_data['advtmis_yearmonth'] = $yearmonth;
                $inserting_data['advtmis_insdate'] = $insdate;

                $inserting_data['advtmis_pubcode'] = $public[1];
                $inserting_data['advtmis_pubname'] = $public[2];
                $edn_code_mini = -1;
                $edn_name_mini = "";

                $inserting_data['advtmis_edncode'] = $edncodeheader;
                $inserting_data['advtmis_ednname'] = $ednnameheader;
                $inserting_data['advtmis_distedncode'] = $edn_code_mini;
                $inserting_data['advtmis_distednname'] = $edn_name_mini;

                $inserting_data['advtmis_clientcode'] = $clientdetails[0];
                $inserting_data['advtmis_client'] = $clientdetails[1];
                $inserting_data['advtmis_entryclientcode'] = $clientdetails[0];
                $inserting_data['advtmis_entryclient'] = $clientdetails[1];

                $inserting_data['advtmis_productcode'] = $productdetails[0];
                $inserting_data['advtmis_product'] = $productdetails[1];
                $inserting_data['advtmis_entryproductcode'] = $productdetails[0];
                $inserting_data['advtmis_entryproduct'] = $productdetails[1];

                $inserting_data['advtmis_brandcode'] = $branddetails[0];
                $inserting_data['advtmis_brand'] = $branddetails[1];
                $inserting_data['advtmis_entrybrandcode'] = $branddetails[0];
                $inserting_data['advtmis_entrybrand'] = $branddetails[1];
                if (!empty($agencydetails)) {
                    $inserting_data['advtmis_agencycode'] = $agencydetails[0];
                    $inserting_data['advtmis_agency'] = $agencydetails[1];
                    $inserting_data['advtmis_agencyplace'] = "$agencydetails[2]";
                } else {
                    $inserting_data['advtmis_agencycode'] = 0;
                    $inserting_data['advtmis_agency'] = "";
                    $inserting_data['advtmis_agencyplace'] = "";
                }

                $inserting_data['advtmis_ismmpl'] = "";
                $inserting_data['advtmis_freead'] = "";
                $inserting_data['advtmis_selfad'] = "";
                $inserting_data['advtmis_dipr'] = "";
                $inserting_data['advtmis_npag'] = "";
                $inserting_data['advtmis_rpcat'] = 0;

                $inserting_data['advtmis_catgcode'] = $catdetails[1];
                $inserting_data['advtmis_entrycatgcode'] = $catdetails[1];
                $inserting_data['advtmis_catgorder'] = $catdetails[2];
                $inserting_data['advtmis_maincatgname'] = $data['maincat'];
                $inserting_data['advtmis_subcatgname'] = $catdetails[3];
                $inserting_data['advtmis_adcd'] = $catdetails[4];
                if (!empty($addtypedetails[0])) {
                    $inserting_data['advtmis_adtype'] = $addtypedetails[0];
                } else {
                    $inserting_data['advtmis_adtype'] = "";
                }
//                $inserting_data['advtmis_adtype'] = $addtypedetails[0];

                $inserting_data['advtmis_rgncode'] = $placedetails[0];
                $inserting_data['advtmis_entryrgncode'] = $placedetails[0];
                $inserting_data['advtmis_place'] = $placedetails[1];
                $inserting_data['advtmis_rgcd'] = $placedetails[2];
                $inserting_data['advtmis_rgcdname'] = $placedetails[3];

                $inserting_data['advtmis_flag'] = "$edn_eenaduregion";

                $inserting_data['advtmis_page'] = $data['page'];
                $inserting_data['advtmis_colbw'] = $data['color'];
                $inserting_data['advtmis_size'] =  strtoupper ( $data['size'] );
                $inserting_data['advtmis_space'] = $data['pagesize'];
                $inserting_data['advtmis_espace'] = 0.00;
                if (!empty($data['splpage'])) {
                    $inserting_data['advtmis_splpage'] = $data['splpage'];
                } else {
                    $inserting_data['advtmis_splpage'] = 0;
                }
//                $inserting_data['advtmis_splpage'] = $data['splpage'];

                $inserting_data['advtmis_adcategory'] = "";
                $inserting_data['advtmis_pageposition'] = "";
                $inserting_data['advtmis_adposition'] = "";

                $inserting_data['advtmis_cardrate'] = 0.00;
                $inserting_data['advtmis_commissionper'] = 0.00;
                $inserting_data['advtmis_discountper'] = 0.00;
                $inserting_data['advtmis_extper'] = 0.00;
                $inserting_data['advtmis_cardgross'] = 0.00;
                $inserting_data['advtmis_cardnet'] = 0.00;
                $inserting_data['advtmis_rate'] = 0.00;
                $inserting_data['advtmis_grossamt'] = 0.00;
                $inserting_data['advtmis_netamt'] = 0.00;

                $inserting_data['advtmis_adexeid'] = 0;
                $inserting_data['advtmis_adexename'] = "";
                $inserting_data['advtmis_epos'] = 0;

                $inserting_data['advtmis_en_hin'] = "";

                $inserting_data['advtmis_sgross1'] = 0.00;
                $inserting_data['advtmis_snetamt1'] = 0.00;
                $inserting_data['advtmis_sgross'] = 0.00;
                $inserting_data['advtmis_snetamt'] = 0.00;
                $inserting_data['advtmis_crspc'] = 0.00;
                $inserting_data['advtmis_crgross'] = 0.00;
                $inserting_data['advtmis_crnet'] = 0.00;
                $inserting_data['advtmis_drspc'] = 0.00;
                $inserting_data['advtmis_drgross'] = 0.00;
                $inserting_data['advtmis_drnet'] = 0.00;

                $inserting_data['advtmis_entryunit'] = $userdetails[0]['advtmis_user_unitcode'];
                $inserting_data['advtmis_entryunitname'] = $userdetails[0]['advtmis_unit_name'];
                ;
                $inserting_data['advtmis_entryby'] = $userdetails[0]['advtmis_user_empcode'];
                $inserting_data['advtmis_entrydate'] = TODAYDATE;
                $inserting_data['advtmis_modifyby'] = $userdetails[0]['advtmis_user_empcode'];
                $inserting_data['advtmis_modifydate'] = $todaydate;
                $inserting_data['advtmis_allowflag'] = "A";
                $inserting_data['advtmis_mainmini'] = $data['mainmini'];
                $inserting_data['advtmis_remarks'] = "record by way of php";
                $inserting_data['advtmis_eeadpromotiontype'] = $data['promoted'];
                $inserting_data['advtmis_competitor_offer_rate'] = 0;
                $inserting_data['advtmis_client_request_rate'] = 0;
//                echo "<pre>";
//                print_r($inserting_data);exit;
                $redirectkey = "priyanka~" . $inserting_data['advtmis_blno'] . "~" . $inserting_data['advtmis_mainmini'];
                
//                  $tablecheck = $this->db->query("select * from pg_tables where tablename = 'advtmis_priyanka_publicationsspace_mainheader" . $yearmonth . "'");

//                        $tableres = $tablecheck->result_array();
//                        echo "<pre>";
//                        print_r($tableres);
//                        echo $tableres[0]['tablename'];
//                        exit;
//                        if (!empty($tableres)) {

                $this->db->insert('advtmis_publicationsspace_mainheader'.$yearmonth, $inserting_data);
//                        }
//                        else{
//                               $this->db->query("CREATE TABLE advtmis_priyanka_publicationsspace_mainheader$yearmonth 
//                                      (like advtmis_priyanka_publicationsspace_mainheader202202 INCLUDING DEFAULTS )");
//                                $this->db->insert('advtmis_priyanka_publicationsspace_mainheader'.$yearmonth, $inserting_data);
//
//                        }
//                echo "inserted succesfully in both tables..... :)";
//                 redirect(base_url().'Entrydata/display');
//                 window.location.href = "site_url('new_controller')";
//                echo "<script>alert('Inserted Succesfully');
//                     window.location.href='" . base_url() . "/Entrydata/displayEntry/bhargavi';
//                       
//                </script>";
//                 echo "<script>window.location.href = 'echo base_url()('Entrydata/display');'</script>";
//window.location.href='" . base_url() . "/Entrydata/displayEntry/bhargavi';
// window.location.hash = '#';
//  window.history.go(-1); 
//   window.history.replaceState( null, null, window.history.go(-1) );
//    window.history.replaceState( null, null, window.location.href );
//                window.top.location.reload(true)

//                exit;
            } elseif ($data['mainmini'] == "MINI") {
                $billno = $this->db->query("Select nextval('advtmis_srlnoseq'::text)");
                $billnoo = $billno->result_array();
                foreach ($editionArray as $key => $val) {
                    $srlno = $this->db->query("Select nextval('advtmis_srlnoseq'::text)");
                    $srlnoo = $srlno->result_array();
                    $count = count($data['editions']);
                    $inserting_data = array();
                    $inserting_data['advtmis_srlno'] = $srlnoo[0]['nextval'] - 1;
                    $inserting_data['advtmis_blno'] = $billnoo[0]['nextval'];
                    $inserting_data['advtmis_idno'] = 0;

                    $inserting_data['advtmis_yearmonth'] = $yearmonth;
                    $inserting_data['advtmis_insdate'] = $insdate;

                    $inserting_data['advtmis_pubcode'] = $public[1];
                    $inserting_data['advtmis_pubname'] = $public[2];



                    $new_str = trim($editionArray[$key]);
                    $que = $this->db->query("select advtmis_distedn_edncode,advtmis_distedn_name,advtmis_distedn_code,advtmis_distedn_shortname,advtmis_distedn_eenaduregion 
                        from advtmis_master_disteditions where advtmis_distedn_name = case when '" . $new_str . "' = advtmis_distedn_name then '" . $new_str . "' else case when '$editionArray[$key]'  = advtmis_distedn_name then '" . $editionArray[$key] . "' else '" . $new_str . " '  end  end");
                    $edncode = $que->result_array();


                    foreach ($editionArray as $ednkey => $ednval) {
                        $new_strr = trim($editionArray[$ednkey]);
                        $queryedn = $this->db->query("select advtmis_distedn_edncode,advtmis_distedn_name,advtmis_distedn_code,advtmis_distedn_shortname,advtmis_distedn_eenaduregion 
                        from advtmis_master_disteditions where advtmis_distedn_name = case when '" . $new_strr . "' = advtmis_distedn_name then '" . $new_strr . ""
                                . "' else case when '$editionArray[$ednkey]'  = advtmis_distedn_name then '"
                                . $editionArray[$ednkey] . "' else '" . $new_strr . " '  end  end");
                        $edncoderess[] = $queryedn->result_array();
                    }
                    $countt = count($edncoderess);

                    $regvalue = "";
                    $noofreg = 0;
                    $addval = 1;



                    $multiedi = "MULTI EDITION ADVT FOR ";

                    foreach ($edncoderess as $editionkey => $editionval) {

                        if ($countt == 1) {
                            $multiflagvalue = "EDITION ADVT FOR " . $edncoderess[$editionkey][0]['advtmis_distedn_shortname'];
                        } else if ($countt > 1 && (($edncoderess[$editionkey][0]['advtmis_distedn_eenaduregion'] == 2 && $edncoderess[$editionkey][0]['advtmis_distedn_code'] == 10000) || ($edncoderess[$editionkey][0]['advtmis_distedn_eenaduregion'] == 4 && $edncoderess[$editionkey][0]['advtmis_distedn_code'] == 20000) || ($edncoderess[$editionkey][0]['advtmis_distedn_eenaduregion'] == 5 && $edncoderess[$editionkey][0]['advtmis_distedn_code'] == 30000) || ($edncoderess[$editionkey][0]['advtmis_distedn_eenaduregion'] == 6 && $edncoderess[$editionkey][0]['advtmis_distedn_code'] == 40000) || ($edncoderess[$editionkey][0]['advtmis_distedn_eenaduregion'] == 3 && $edncoderess[$editionkey][0]['advtmis_distedn_code'] == 60000))) {
                            $noofreg = $noofreg + $addval;
                            $regvalue .= $edncoderess[$editionkey][0]['advtmis_distedn_shortname'];
                            $regvalue .= ",";
                        } else {

                            $multiedi .= $edncoderess[$editionkey][0]['advtmis_distedn_shortname'];
                            $multiedi .= ",";
                            $multiflagvalue = $multiedi;
                        }
                    }

                    if ($noofreg == 1) {
                        $multiflagvalue = "REGION ADVT FOR " . $regvalue;
                    } else if ($noofreg > 1) {
                        $multiflagvalue = "MULTI REGION ADVT FOR " . $regvalue;
                    }

                    $edn_code_mini = $edncode[0]['advtmis_distedn_code'];
                    $edn_name_mini = $edncode[0]['advtmis_distedn_shortname'];
                    $edn_code_main = $edncode[0]['advtmis_distedn_edncode'];
                    $edn_name_main = $edncode[0]['advtmis_distedn_name'];
                    $edn_name_region = $edncode[0]['advtmis_distedn_eenaduregion'];


                    $header['code'][$key] = $edn_code_main;
                    $header['name'][$key] = $edn_name_main;
                    $header['code'][$key] = $edn_code_mini;
                    $header['name'][$key] = $edn_name_mini;
                    $header['maincode'][$key] = $edn_code_main;
                    $header['mainname'][$key] = $edn_name_main;
                    $header['eedncode'][$key] = $edn_name_region;

                    $inserting_data['advtmis_edncode'] = $edn_code_main;
                    $inserting_data['advtmis_ednname'] = $edn_name_main;
                    $inserting_data['advtmis_distedncode'] = $edn_code_mini;
                    $inserting_data['advtmis_distednname'] = $edn_name_mini;

                    $inserting_data['advtmis_clientcode'] = $clientdetails[0];
                    $inserting_data['advtmis_client'] = $clientdetails[1];
                    $inserting_data['advtmis_entryclientcode'] = $clientdetails[0];
                    $inserting_data['advtmis_entryclient'] = $clientdetails[1];

                    $inserting_data['advtmis_productcode'] = $productdetails[0];
                    $inserting_data['advtmis_product'] = $productdetails[1];
                    $inserting_data['advtmis_entryproductcode'] = $productdetails[0];
                    $inserting_data['advtmis_entryproduct'] = $productdetails[1];

                    $inserting_data['advtmis_brandcode'] = $branddetails[0];
                    $inserting_data['advtmis_brand'] = $branddetails[1];
                    $inserting_data['advtmis_entrybrandcode'] = $branddetails[0];
                    $inserting_data['advtmis_entrybrand'] = $branddetails[1];
                    if (!empty($agencydetails)) {
                        $inserting_data['advtmis_agencycode'] = $agencydetails[0];
                        $inserting_data['advtmis_agency'] = $agencydetails[1];
                        $inserting_data['advtmis_agencyplace'] = "$agencydetails[2]";
                    } else {
                        $inserting_data['advtmis_agencycode'] = 0;
                        $inserting_data['advtmis_agency'] = "";
                        $inserting_data['advtmis_agencyplace'] = "";
                    }
                    $inserting_data['advtmis_ismmpl'] = "";
                    $inserting_data['advtmis_freead'] = "";
                    $inserting_data['advtmis_selfad'] = "";
                    $inserting_data['advtmis_dipr'] = "";
                    $inserting_data['advtmis_npag'] = "";
                    $inserting_data['advtmis_rpcat'] = 0;

                    $inserting_data['advtmis_catgcode'] = $catdetails[1];
                    $inserting_data['advtmis_entrycatgcode'] = $catdetails[1];
                    $inserting_data['advtmis_catgorder'] = $catdetails[2];
                    $inserting_data['advtmis_maincatgname'] = $data['maincat'];
                    $inserting_data['advtmis_subcatgname'] = $catdetails[3];
                    $inserting_data['advtmis_adcd'] = $catdetails[4];
                    if (!empty($addtypedetails[0])) {
                        $inserting_data['advtmis_adtype'] = $addtypedetails[0];
                    } else {
                        $inserting_data['advtmis_adtype'] = "";
                    }
//                    $inserting_data['advtmis_adtype'] = $addtypedetails[0];

                    $inserting_data['advtmis_rgncode'] = $placedetails[0];
                    $inserting_data['advtmis_entryrgncode'] = $placedetails[0];
                    $inserting_data['advtmis_place'] = $placedetails[1];
                    $inserting_data['advtmis_rgcd'] = $placedetails[2];
                    $inserting_data['advtmis_rgcdname'] = $placedetails[3];
                    if (!defined('GREETING')) {
                        define("GREETING", $multiflagvalue);
                    }
                    $inserting_data['advtmis_flag'] = GREETING;

                    $inserting_data['advtmis_flag'] = GREETING;

                    $inserting_data['advtmis_page'] = $data['page'];
                    $inserting_data['advtmis_colbw'] = $data['color'];
                    $inserting_data['advtmis_size'] =  strtoupper ( $data['size'] );
                    $inserting_data['advtmis_space'] = $data['pagesize'];
                    $inserting_data['advtmis_espace'] = 0.00;
                    if (!empty($data['splpage'])) {
                        $inserting_data['advtmis_splpage'] = $data['splpage'];
                    } else {
                        $inserting_data['advtmis_splpage'] = 0;
                    }
//                    $inserting_data['advtmis_splpage'] = $data['splpage'];

                    $inserting_data['advtmis_adcategory'] = "";
                    $inserting_data['advtmis_pageposition'] = "";
                    $inserting_data['advtmis_adposition'] = "";

                    $inserting_data['advtmis_cardrate'] = 0.00;
                    $inserting_data['advtmis_commissionper'] = 0.00;
                    $inserting_data['advtmis_discountper'] = 0.00;
                    $inserting_data['advtmis_extper'] = 0.00;
                    $inserting_data['advtmis_cardgross'] = 0.00;
                    $inserting_data['advtmis_cardnet'] = 0.00;
                    $inserting_data['advtmis_rate'] = 0.00;
                    $inserting_data['advtmis_grossamt'] = 0.00;
                    $inserting_data['advtmis_netamt'] = 0.00;

                    $inserting_data['advtmis_adexeid'] = 0;
                    $inserting_data['advtmis_adexename'] = "";
                    $inserting_data['advtmis_epos'] = 0;

                    $inserting_data['advtmis_en_hin'] = "";

                    $inserting_data['advtmis_sgross1'] = 0.00;
                    $inserting_data['advtmis_snetamt1'] = 0.00;
                    $inserting_data['advtmis_sgross'] = 0.00;
                    $inserting_data['advtmis_snetamt'] = 0.00;
                    $inserting_data['advtmis_crspc'] = 0.00;
                    $inserting_data['advtmis_crgross'] = 0.00;
                    $inserting_data['advtmis_crnet'] = 0.00;
                    $inserting_data['advtmis_drspc'] = 0.00;
                    $inserting_data['advtmis_drgross'] = 0.00;
                    $inserting_data['advtmis_drnet'] = 0.00;

                    $inserting_data['advtmis_entryunit'] = $userdetails[0]['advtmis_user_unitcode'];
                    $inserting_data['advtmis_entryunitname'] = $userdetails[0]['advtmis_unit_name'];
                    ;
                    $inserting_data['advtmis_entryby'] = $userdetails[0]['advtmis_user_empcode'];
                    $inserting_data['advtmis_entrydate'] = TODAYDATE;
                    $inserting_data['advtmis_modifyby'] = $userdetails[0]['advtmis_user_empcode'];
                    $inserting_data['advtmis_modifydate'] = $todaydate;
                    $inserting_data['advtmis_allowflag'] = "A";
                    $inserting_data['advtmis_mainmini'] = $data['mainmini'];
                    $inserting_data['advtmis_remarks'] = "record by way of php";
                    $inserting_data['advtmis_eeadpromotiontype'] = $data['promoted'];
                    $inserting_data['advtmis_competitor_offer_rate'] = 0;
                    $inserting_data['advtmis_client_request_rate'] = 0;




                
               



                    if ($edncode[0]['advtmis_distedn_code'] >= 20000 & $edncode[0]['advtmis_distedn_code'] < 30000) {
                        if ($edncode[0]['advtmis_distedn_name'] == 'CENTRAL ANDHRA REGION') {
                            $countofreg = 4;
                            if (!defined('CENVAL')) {
                                define("CENVAL", 4);
                            }

//                                    $countedi += 1;
                        } else {
                            $countofreg = 400;
                        }
                    } elseif ($edncode[0]['advtmis_distedn_code'] >= 30000 & $edncode[0]['advtmis_distedn_code'] < 40000) {
                        if ($edncode[0]['advtmis_distedn_name'] == 'NORTH ANDHRA REGION') {
                            $countofreg = 5;
                            if (!defined('NORVAL')) {
                                define("NORVAL", 5);
                            }
                        } else {
                            $countofreg = 500;
                        }
                    } elseif ($edncode[0]['advtmis_distedn_code'] >= 40000 & $edncode[0]['advtmis_distedn_code'] < 50000) {
                        if ($edncode[0]['advtmis_distedn_name'] == 'RAYALASEEMA REGION') {
                            $countofreg = 6;
                            if (!defined('RAYALVAL')) {
                                define("RAYALVAL", 6);
                            }
                        } else {
                            $countofreg = 600;
                        }
                    } elseif ($edncode[0]['advtmis_distedn_code'] >= 10000 & $edncode[0]['advtmis_distedn_code'] < 20000) {
                        if ($edncode[0]['advtmis_distedn_name'] == 'GRT HYDERABAD REGION') {
                            $countofreg = 2;
                            if (!defined('GRTVAL')) {
                                define("GRTVAL", 2);
                            }
                        } else {
                            $countofreg = 200;
                        }
                    } elseif ($edncode[0]['advtmis_distedn_code'] >= 60000 & $edncode[0]['advtmis_distedn_code'] < 70000) {
                        if ($edncode[0]['advtmis_distedn_name'] == 'TELANGANA REGION') {
                            $countofreg = 3;
                            if (!defined('RESTTGVAL')) {
                                define("RESTTGVAL", 3);
                            }
                        } else {
                            $countofreg = 300;
                        }
                    } else {
                        $countofreg = 800;
                    }

//                echo $countofreg;echo "<br>";
           
                    
//                     $tablecheck = $this->db->query("select * from pg_tables where tablename = 'advtmis_priyanka_publicationsspace_reta" . $yearmonth . "'");
//
//                        $tableres = $tablecheck->result_array();
//                        
//                        
//                        if(!empty($tableres)){
                    if ($countofreg == 4) {
                        $editionvalues['maincode'][] = $edncode[0]['advtmis_distedn_edncode'];
                        $editionvalues['code'][] = $edncode[0]['advtmis_distedn_code'];
                        $editionvalues['name'][] = $edncode[0]['advtmis_distedn_name'];
                        $editionvalues['shortname'][] = $edncode[0]['advtmis_distedn_shortname'];
                        $editionvalues['regcode'][] = $edncode[0]['advtmis_distedn_eenaduregion'];
                        
                        $this->db->insert('advtmis_publicationsspace_reta'.$yearmonth, $inserting_data);
                    }
                    if (!defined('CENVAL')) {

                        if (('CENVAL' != 4) && ($countofreg == 400)) {
                            $editionvalues['maincode'][] = $edncode[0]['advtmis_distedn_edncode'];
                            $editionvalues['code'][] = $edncode[0]['advtmis_distedn_code'];
                            $editionvalues['name'][] = $edncode[0]['advtmis_distedn_name'];
                            $editionvalues['shortname'][] = $edncode[0]['advtmis_distedn_shortname'];
                            $editionvalues['regcode'][] = $edncode[0]['advtmis_distedn_eenaduregion'];
                            
                            $this->db->insert('advtmis_publicationsspace_reta'.$yearmonth, $inserting_data);
                        }
                    }


                    if ($countofreg == 5) {
                        $editionvalues['maincode'][] = $edncode[0]['advtmis_distedn_edncode'];
                        $editionvalues['code'][] = $edncode[0]['advtmis_distedn_code'];
                        $editionvalues['name'][] = $edncode[0]['advtmis_distedn_name'];
                        $editionvalues['shortname'][] = $edncode[0]['advtmis_distedn_shortname'];
                        $editionvalues['regcode'][] = $edncode[0]['advtmis_distedn_eenaduregion'];
                        
                        $this->db->insert('advtmis_publicationsspace_reta'.$yearmonth, $inserting_data);
                    }
                    if (!defined('NORVAL')) {

                        if (('NORVAL' != 5) && ($countofreg == 500)) {
                            $editionvalues['maincode'][] = $edncode[0]['advtmis_distedn_edncode'];
                            $editionvalues['code'][] = $edncode[0]['advtmis_distedn_code'];
                            $editionvalues['name'][] = $edncode[0]['advtmis_distedn_name'];
                            $editionvalues['shortname'][] = $edncode[0]['advtmis_distedn_shortname'];
                            $editionvalues['regcode'][] = $edncode[0]['advtmis_distedn_eenaduregion'];
                            
                            $this->db->insert('advtmis_publicationsspace_reta'.$yearmonth, $inserting_data);
                        }
                    }
                    if ($countofreg == 6) {
                        $editionvalues['maincode'][] = $edncode[0]['advtmis_distedn_edncode'];
                        $editionvalues['code'][] = $edncode[0]['advtmis_distedn_code'];
                        $editionvalues['name'][] = $edncode[0]['advtmis_distedn_name'];
                        $editionvalues['shortname'][] = $edncode[0]['advtmis_distedn_shortname'];
                        $editionvalues['regcode'][] = $edncode[0]['advtmis_distedn_eenaduregion'];
                        
                        $this->db->insert('advtmis_publicationsspace_reta'.$yearmonth, $inserting_data);
                    }
                    if (!defined('RAYALVAL')) {

                        if (('RAYALVAL' != 6) && ($countofreg == 600)) {
                            $editionvalues['maincode'][] = $edncode[0]['advtmis_distedn_edncode'];
                            $editionvalues['code'][] = $edncode[0]['advtmis_distedn_code'];
                            $editionvalues['name'][] = $edncode[0]['advtmis_distedn_name'];
                            $editionvalues['shortname'][] = $edncode[0]['advtmis_distedn_shortname'];
                            $editionvalues['regcode'][] = $edncode[0]['advtmis_distedn_eenaduregion'];
//                            echo 'advtmis_publicationsspace_main'.$yearmonth;exit;
                            $this->db->insert('advtmis_publicationsspace_reta'.$yearmonth, $inserting_data);
                        }
                    }


                    if ($countofreg == 2) {
                        $editionvalues['maincode'][] = $edncode[0]['advtmis_distedn_edncode'];
                        $editionvalues['code'][] = $edncode[0]['advtmis_distedn_code'];
                        $editionvalues['name'][] = $edncode[0]['advtmis_distedn_name'];
                        $editionvalues['shortname'][] = $edncode[0]['advtmis_distedn_shortname'];
                        $editionvalues['regcode'][] = $edncode[0]['advtmis_distedn_eenaduregion'];
                        $this->db->insert('advtmis_publicationsspace_reta'.$yearmonth, $inserting_data);
                    }
                    if (!defined('GRTVAL')) {
                        if (('GRTVAL' != 2) && ($countofreg == 200)) {
                            $editionvalues['maincode'][] = $edncode[0]['advtmis_distedn_edncode'];
                            $editionvalues['code'][] = $edncode[0]['advtmis_distedn_code'];
                            $editionvalues['name'][] = $edncode[0]['advtmis_distedn_name'];
                            $editionvalues['shortname'][] = $edncode[0]['advtmis_distedn_shortname'];
                            $editionvalues['regcode'][] = $edncode[0]['advtmis_distedn_eenaduregion'];
                            $this->db->insert('advtmis_publicationsspace_reta'.$yearmonth, $inserting_data);
                        }
                    }


                    if ($countofreg == 3) {
                        $editionvalues['maincode'][] = $edncode[0]['advtmis_distedn_edncode'];
                        $editionvalues['code'][] = $edncode[0]['advtmis_distedn_code'];
                        $editionvalues['name'][] = $edncode[0]['advtmis_distedn_name'];
                        $editionvalues['shortname'][] = $edncode[0]['advtmis_distedn_shortname'];
                        $editionvalues['regcode'][] = $edncode[0]['advtmis_distedn_eenaduregion'];
                        $this->db->insert('advtmis_publicationsspace_reta'.$yearmonth, $inserting_data);
                    }
                    if (!defined('RESTTGVAL')) {
                        if (('RESTTGVAL' != 3) && ($countofreg == 300)) {
                            $editionvalues['maincode'][] = $edncode[0]['advtmis_distedn_edncode'];
                            $editionvalues['code'][] = $edncode[0]['advtmis_distedn_code'];
                            $editionvalues['name'][] = $edncode[0]['advtmis_distedn_name'];
                            $editionvalues['shortname'][] = $edncode[0]['advtmis_distedn_shortname'];
                            $editionvalues['regcode'][] = $edncode[0]['advtmis_distedn_eenaduregion'];
                            $this->db->insert('advtmis_publicationsspace_reta'.$yearmonth, $inserting_data);
                        }
                    }
                    

                $edncodeheader = "";
                $ednnameheader = "";
                $ednmaincodeheader = "";
                $ednmainnameheader = "";
                $edn_eenaduregion = "";
                foreach ($editionvalues['code'] as $valcode => $value) {
                    $edncodeheader .= $editionvalues['code'][$valcode];
                    $edncodeheader .= ",";
                }
                foreach ($editionvalues['name'] as $valname => $value) {
                    $ednnameheader .= $editionvalues['name'][$valname];
                    $ednnameheader .= ",";
                }
                foreach ($editionvalues['maincode'] as $valmainname => $value) {
                    $ednmaincodeheader .= $editionvalues['maincode'][$valmainname];
                    $ednmaincodeheader .= ",";
                }
                foreach ($editionvalues['shortname'] as $valmainname => $value) {
                    $ednmainnameheader .= $editionvalues['shortname'][$valmainname];
                    $ednmainnameheader .= ",";
                }

                foreach ($editionvalues['regcode'] as $valregcode => $value) {
                    $edn_eenaduregion .= $editionvalues['regcode'][$valregcode];
                    $edn_eenaduregion .= ",";
                }

                $count = count($data['editions']);
                $inserting_data = array();
                $inserting_data['advtmis_srlno'] = $billnoo[0]['nextval'];
                $inserting_data['advtmis_blno'] = $billnoo[0]['nextval'];
                $inserting_data['advtmis_idno'] = 0;

                $inserting_data['advtmis_yearmonth'] = $yearmonth;
                $inserting_data['advtmis_insdate'] = $insdate;

                $inserting_data['advtmis_pubcode'] = $public[1];
                $inserting_data['advtmis_pubname'] = $public[2];
                $inserting_data['advtmis_edncode'] = $ednmaincodeheader;
                $inserting_data['advtmis_ednname'] = $ednnameheader;
                $inserting_data['advtmis_distedncode'] = $edncodeheader;
                $inserting_data['advtmis_distednname'] = $ednmainnameheader;

                $inserting_data['advtmis_clientcode'] = $clientdetails[0];
                $inserting_data['advtmis_client'] = $clientdetails[1];
                $inserting_data['advtmis_entryclientcode'] = $clientdetails[0];
                $inserting_data['advtmis_entryclient'] = $clientdetails[1];

                $inserting_data['advtmis_productcode'] = $productdetails[0];
                $inserting_data['advtmis_product'] = $productdetails[1];
                $inserting_data['advtmis_entryproductcode'] = $productdetails[0];
                $inserting_data['advtmis_entryproduct'] = $productdetails[1];

                $inserting_data['advtmis_brandcode'] = $branddetails[0];
                $inserting_data['advtmis_brand'] = $branddetails[1];
                $inserting_data['advtmis_entrybrandcode'] = $branddetails[0];
                $inserting_data['advtmis_entrybrand'] = $branddetails[1];
                if (!empty($agencydetails)) {
                    $inserting_data['advtmis_agencycode'] = $agencydetails[0];
                    $inserting_data['advtmis_agency'] = $agencydetails[1];
                    $inserting_data['advtmis_agencyplace'] = "$agencydetails[2]";
                } else {
                    $inserting_data['advtmis_agencycode'] = 0;
                    $inserting_data['advtmis_agency'] = "";
                    $inserting_data['advtmis_agencyplace'] = "";
                }

                $inserting_data['advtmis_ismmpl'] = "";
                $inserting_data['advtmis_freead'] = "";
                $inserting_data['advtmis_selfad'] = "";
                $inserting_data['advtmis_dipr'] = "";
                $inserting_data['advtmis_npag'] = "";
                $inserting_data['advtmis_rpcat'] = 0;

                $inserting_data['advtmis_catgcode'] = $catdetails[1];
                $inserting_data['advtmis_entrycatgcode'] = $catdetails[1];
                $inserting_data['advtmis_catgorder'] = $catdetails[2];
                $inserting_data['advtmis_maincatgname'] = $data['maincat'];
                $inserting_data['advtmis_subcatgname'] = $catdetails[3];
                $inserting_data['advtmis_adcd'] = $catdetails[4];
                if (!empty($addtypedetails[0])) {
                    $inserting_data['advtmis_adtype'] = $addtypedetails[0];
                } else {
                    $inserting_data['advtmis_adtype'] = "";
                }
//                $inserting_data['advtmis_adtype'] = $addtypedetails[0];

                $inserting_data['advtmis_rgncode'] = $placedetails[0];
                $inserting_data['advtmis_entryrgncode'] = $placedetails[0];
                $inserting_data['advtmis_place'] = $placedetails[1];
                $inserting_data['advtmis_rgcd'] = $placedetails[2];
                $inserting_data['advtmis_rgcdname'] = $placedetails[3];

                $inserting_data['advtmis_flag'] = "$edn_eenaduregion";

                $inserting_data['advtmis_page'] = $data['page'];
                $inserting_data['advtmis_colbw'] = $data['color'];
                $inserting_data['advtmis_size'] =  strtoupper ( $data['size'] );
                $inserting_data['advtmis_space'] = $data['pagesize'];
                $inserting_data['advtmis_espace'] = 0.00;
//                $inserting_data['advtmis_splpage'] = $data['splpage'];
                if (!empty($data['splpage'])) {
                    $inserting_data['advtmis_splpage'] = $data['splpage'];
                } else {
                    $inserting_data['advtmis_splpage'] = 0;
                }

                $inserting_data['advtmis_adcategory'] = "";
                $inserting_data['advtmis_pageposition'] = "";
                $inserting_data['advtmis_adposition'] = "";

                $inserting_data['advtmis_cardrate'] = 0.00;
                $inserting_data['advtmis_commissionper'] = 0.00;
                $inserting_data['advtmis_discountper'] = 0.00;
                $inserting_data['advtmis_extper'] = 0.00;
                $inserting_data['advtmis_cardgross'] = 0.00;
                $inserting_data['advtmis_cardnet'] = 0.00;
                $inserting_data['advtmis_rate'] = 0.00;
                $inserting_data['advtmis_grossamt'] = 0.00;
                $inserting_data['advtmis_netamt'] = 0.00;

                $inserting_data['advtmis_adexeid'] = 0;
                $inserting_data['advtmis_adexename'] = "";
                $inserting_data['advtmis_epos'] = 0;

                $inserting_data['advtmis_en_hin'] = "";

                $inserting_data['advtmis_sgross1'] = 0.00;
                $inserting_data['advtmis_snetamt1'] = 0.00;
                $inserting_data['advtmis_sgross'] = 0.00;
                $inserting_data['advtmis_snetamt'] = 0.00;
                $inserting_data['advtmis_crspc'] = 0.00;
                $inserting_data['advtmis_crgross'] = 0.00;
                $inserting_data['advtmis_crnet'] = 0.00;
                $inserting_data['advtmis_drspc'] = 0.00;
                $inserting_data['advtmis_drgross'] = 0.00;
                $inserting_data['advtmis_drnet'] = 0.00;

                $inserting_data['advtmis_entryunit'] = $userdetails[0]['advtmis_user_unitcode'];
                $inserting_data['advtmis_entryunitname'] = $userdetails[0]['advtmis_unit_name'];
                ;
                $inserting_data['advtmis_entryby'] = $userdetails[0]['advtmis_user_empcode'];
                $inserting_data['advtmis_entrydate'] = TODAYDATE;
                $inserting_data['advtmis_modifyby'] = $userdetails[0]['advtmis_user_empcode'];
                $inserting_data['advtmis_modifydate'] = $todaydate;
                $inserting_data['advtmis_allowflag'] = "A";
                $inserting_data['advtmis_mainmini'] = $data['mainmini'];
                $inserting_data['advtmis_remarks'] = "record by way of php";
                $inserting_data['advtmis_eeadpromotiontype'] = $data['promoted'];
                $inserting_data['advtmis_competitor_offer_rate'] = 0;
                $inserting_data['advtmis_client_request_rate'] = 0;
                

                            $this->db->insert('advtmis_publicationsspace_retaheader'.$yearmonth, $inserting_data);
            }
//            exit;
        }
        }


//    ===================================================================================================================================================================
        else {
            $modifydate = date('Y-m-d H:i:s');
//            echo "<pre>";
//            print_r($data);exit;
            $ednVal = $data['updatededitions'][0];
            $editionArray = explode(",", $ednVal);
            $insdate1 = $data['date'];
            $insdate = date('Y-m-d', strtotime($insdate1));
            $yearmonth = date('Ym', strtotime($insdate));

            $public = explode("~", $data['publication11']);
            $pub_code = $public[1];
            $pub_name = $public[2];


            $clientdetails = explode("~", $data['client']);
            $client_code = $clientdetails[0];
            $client_name = $clientdetails[1];
            $client_entcode = $clientdetails[0];

            $client_entname = $clientdetails[1];

            $productdetails = explode("~", $data['product']);
            $product_code = $productdetails[0];
            $product_name = $productdetails[1];
            $product_entcode = $productdetails[0];
            $product_entname = $productdetails[1];

            $branddetails = explode("~", $data['brand']);
            $brand_code = $branddetails[0];
            $brand_name = $branddetails[1];
            $brand_entcode = $branddetails[0];
            $brand_entname = $branddetails[1];

            $agencydetails = explode("~", $data['agency']);
            $agency_code = $agencydetails[0];
            $agency_name = $agencydetails[1];

            $addtypedetails = explode("~", $data['addtype']);
            $addtype_code = $addtypedetails[0];
            $catdetails = explode("~", $data['subcat']);
            $cat_code = $catdetails[1];
            $cat_order = $catdetails[2];
            $cat_maincatname = $data['maincat'];
            $cat_subcatname = $catdetails[0];
            $cat_agcd = $catdetails[4];

            $placedetails = explode("~", $data['place']);
            $rgn_rgncode = $placedetails[0];
            $rgn_rgnentrycode = $placedetails[0];
            $rgn_place = $placedetails[1];
            $rgn_rgcd = $placedetails[2];
            $rgn_rgname = $placedetails[3];

            $mis_flag = "null";
            $page = $data['page'];
            $page_color = $data['color'];
             $size=  strtoupper ( $data['size'] );
            $space = $data['pagesize'];
            $espace = 0.00;
            $special_page = $data['splpage1'];
            $mainmini = $data['mainmini11'];
            if ($mainormini == "MAIN") {
                $billno = $this->db->query("Select nextval('advtmis_srlnoseq'::text)");
                $billnoo = $billno->result_array();
                foreach ($editionArray as $key => $val) {
//                echo $key;
                    $srlno = $this->db->query("Select nextval('advtmis_srlnoseq'::text)");
                    $srlnoo = $srlno->result_array();

                    $inserting_data = array();
                    $inserting_data['advtmis_srlno'] = $srlnoo[0]['nextval'] - 1;
                    $inserting_data['advtmis_blno'] = $billnoo[0]['nextval'];
                    $inserting_data['advtmis_idno'] = 0;

                    $inserting_data['advtmis_yearmonth'] = $yearmonth;
                    $inserting_data['advtmis_insdate'] = $insdate;

                    $inserting_data['advtmis_pubcode'] = $public[1];
                    $inserting_data['advtmis_pubname'] = $public[2];
                    $new_str = trim($editionArray[$key]);
                    $que = $this->db->query("select advtmis_edn_code,advtmis_edn_shortname,advtmis_edn_eenaduregion,advtmis_edn_name from advtmis_master_editions where advtmis_edn_name='$new_str'");
                    $edncode = $que->result_array();

                    foreach ($editionArray as $ednkey => $ednval) {
//                        echo $new_strr;
                        $new_strr = trim($editionArray[$ednkey]);
//                        echo $new_strr;
                        if ($new_strr != 'select all') {
                            $queryedn = $this->db->query("select advtmis_edn_code,advtmis_edn_name,advtmis_edn_shortname,advtmis_edn_eenaduregion,advtmis_edn_eedncode
                         from advtmis_master_editions
                         where advtmis_edn_name=case when '" . $new_strr . "' = advtmis_edn_name then '" . $new_strr . "' 
                                else case when '$editionArray[$ednkey]'  = advtmis_edn_name then '" . $editionArray[$ednkey] . "' else '" . $new_strr . " '  end  end");

                            $edncoderes[] = $queryedn->result_array();
                        }
                    }
                    $countt = count($edncoderes);

                    $regvalue = "";
                    $noofreg = 0;
                    $addval = 1;



                    $multiedi = "MULTI EDITION ADVT FOR ";
//                   echo "<pre>";
//                   print_r($edncoderes);exit;

                    foreach ($edncoderes as $editionkey => $editionval) {
//                         $multiflagvalue = "EDITION ADVT FOR " .  $edncoderes[$editionkey][0]['advtmis_edn_shortname'];
                        if ($countt == 1) {
                            $multiflagvalue = "EDITION ADVT FOR " . $edncoderes[$editionkey][0]['advtmis_edn_shortname'];
                        } else if ($countt > 1 && $edncoderes[$editionkey][0]['advtmis_edn_eenaduregion'] == $edncoderes[$editionkey][0]['advtmis_edn_eedncode']) {
                            $noofreg = $noofreg + $addval;
                            $regvalue .= $edncoderes[$editionkey][0]['advtmis_edn_shortname'];
                            $regvalue .= ",";
                        } else if ($countt > 1 && $edncoderes[$editionkey][0]['advtmis_edn_eenaduregion'] != $edncoderes[$editionkey][0]['advtmis_edn_eedncode']) {

                            $multiedi .= $edncoderes[$editionkey][0]['advtmis_edn_shortname'];
                            $multiedi .= ",";
                            $multiflagvalue = $multiedi;
                        }
                    }

                    if ($noofreg == 1) {
                        $multiflagvalue = "REGION ADVT FOR " . $regvalue;
                    } else if ($noofreg > 1) {
                        $multiflagvalue = "MULTI REGION ADVT FOR " . $regvalue;
                    }


                    $edn_code_main = $edncode[0]['advtmis_edn_code'];
                    $edn_name_main = $edncode[0]['advtmis_edn_shortname'];
                    $edn_name = $edncode[0]['advtmis_edn_name'];
                    $edn_eedncode = $edncode[0]['advtmis_edn_eenaduregion'];
                    $edn_code_mini = -1;
                    $edn_name_mini = "";
                    $header['code'][$key] = $edn_code_main;
                    $header['name'][$key] = $edn_name_main;
                    $header['eedncode'][$key] = $edn_eedncode;

                    $inserting_data['advtmis_edncode'] = $edn_code_main;
                    $inserting_data['advtmis_ednname'] = $edn_name_main;
                    $inserting_data['advtmis_distedncode'] = $edn_code_mini;
                    $inserting_data['advtmis_distednname'] = $edn_name_mini;

                    $inserting_data['advtmis_clientcode'] = $clientdetails[0];
                    $inserting_data['advtmis_client'] = $clientdetails[1];
                    $inserting_data['advtmis_entryclientcode'] = $clientdetails[0];
                    $inserting_data['advtmis_entryclient'] = $clientdetails[1];

                    $inserting_data['advtmis_productcode'] = $productdetails[0];
                    $inserting_data['advtmis_product'] = $productdetails[1];
                    $inserting_data['advtmis_entryproductcode'] = $productdetails[0];
                    $inserting_data['advtmis_entryproduct'] = $productdetails[1];

                    $inserting_data['advtmis_brandcode'] = $branddetails[0];
                    $inserting_data['advtmis_brand'
                            ] = $branddetails[1];
                    $inserting_data['advtmis_entrybrandcode'] = $branddetails[0];
                    $inserting_data['advtmis_entrybrand'] = $branddetails[1];
                    if (!empty($agencydetails)) {
                        $inserting_data['advtmis_agencycode'] = $agencydetails[0];
                        $inserting_data['advtmis_agency'] = $agencydetails[1];
                        $inserting_data['advtmis_agencyplace'] = "$agencydetails[2]";
                    } else {
                        $inserting_data['advtmis_agencycode'] = 0;
                        $inserting_data['advtmis_agency'] = "";
                        $inserting_data['advtmis_agencyplace'] = "";
                    }

                    $inserting_data['advtmis_ismmpl'] = "";
                    $inserting_data['advtmis_freead'] = "";
                    $inserting_data['advtmis_selfad'] = "";
                    $inserting_data['advtmis_dipr'] = "";
                    $inserting_data['advtmis_npag'] = "";
                    $inserting_data['advtmis_rpcat'] = 0;

                    $inserting_data['advtmis_catgcode'] = $catdetails[1];
                    $inserting_data['advtmis_entrycatgcode'] = $catdetails[1];
                    $inserting_data['advtmis_catgorder'] = $catdetails[2];
                    $inserting_data['advtmis_maincatgname'] = $data['maincat'];
                    $inserting_data['advtmis_subcatgname'] = $catdetails[3];
                    $inserting_data['advtmis_adcd'] = $catdetails[4];
                    if (!empty($addtypedetails[0])) {
                        $inserting_data['advtmis_adtype'] = $addtypedetails[0];
                    } else {
                        $inserting_data['advtmis_adtype'] = "";
                    }
//                    $inserting_data['advtmis_adtype'] = $addtypedetails[0];

                    $inserting_data['advtmis_rgncode'] = $placedetails[0];
                    $inserting_data['advtmis_entryrgncode'] = $placedetails[0];
                    $inserting_data['advtmis_place'] = $placedetails[1];
                    $inserting_data['advtmis_rgcd'] = $placedetails[2];
                    $inserting_data['advtmis_rgcdname'] = $placedetails[3];

                    $inserting_data['advtmis_rgcdname'] = $placedetails[3];
                    if (!defined('GREETING')) {
                        define("GREETING", $multiflagvalue);
                    }
                    $inserting_data['advtmis_flag'] = GREETING;


                    $inserting_data['advtmis_page'] = $data['page'];
                    $inserting_data['advtmis_colbw'] = $data['color'];
                    $inserting_data['advtmis_size'] =  strtoupper ( $data['size'] );
                    $inserting_data['advtmis_space'] = $data['pagesize'];
                    $inserting_data['advtmis_espace'] = 0.00;
                    if (!empty($data['splpage1'])) {
                        $inserting_data['advtmis_splpage'] = $data['splpage1'];
                    } else {
                        $inserting_data['advtmis_splpage'] = 0;
                    }
//                    $inserting_data['advtmis_splpage'] = $data['splpage1'];

                    $inserting_data['advtmis_adcategory'] = "";
                    $inserting_data['advtmis_pageposition'] = "";
                    $inserting_data['advtmis_adposition'] = "";

                    $inserting_data['advtmis_cardrate'] = 0.00;
                    $inserting_data['advtmis_commissionper'] = 0.00;
                    $inserting_data['advtmis_discountper'] = 0.00;
                    $inserting_data['advtmis_extper'] = 0.00;
                    $inserting_data['advtmis_cardgross'] = 0.00;
                    $inserting_data['advtmis_cardnet'] = 0.00;
                    $inserting_data['advtmis_rate'] = 0.00;
                    $inserting_data['advtmis_grossamt'] = 0.00;
                    $inserting_data['advtmis_netamt'] = 0.00;

                    $inserting_data['advtmis_adexeid'] = 0;
                    $inserting_data['advtmis_adexename'] = "";
                    $inserting_data['advtmis_epos'] = 0;

                    $inserting_data['advtmis_en_hin'] = "";

                    $inserting_data['advtmis_sgross1'] = 0.00;
                    $inserting_data['advtmis_snetamt1'] = 0.00;
                    $inserting_data['advtmis_sgross'] = 0.00;
                    $inserting_data['advtmis_snetamt'] = 0.00;
                    $inserting_data['advtmis_crspc'] = 0.00;
                    $inserting_data['advtmis_crgross'] = 0.00;
                    $inserting_data['advtmis_crnet'] = 0.00;
                    $inserting_data['advtmis_drspc'] = 0.00;
                    $inserting_data['advtmis_drgross'] = 0.00;
                    $inserting_data['advtmis_drnet'] = 0.00;

                    $inserting_data['advtmis_entryunit'] = $userdetails[0]['advtmis_user_unitcode'];
                    $inserting_data['advtmis_entryunitname'] = $userdetails[0]['advtmis_unit_name'];
                    ;
                    $inserting_data['advtmis_entryby'] = ENTRYBY;
                    $inserting_data['advtmis_entrydate'] = ENTRYDATE;
                    $inserting_data['advtmis_modifyby'] = $userdetails[0]['advtmis_user_empcode'];
                    $inserting_data['advtmis_modifydate'] = $modifydate;
                    $inserting_data['advtmis_allowflag'] = "A";
                    $inserting_data['advtmis_mainmini'] = $data['mainmini11'];
                    $inserting_data['advtmis_remarks'] = "record by way of php";
                    $inserting_data['advtmis_eeadpromotiontype'] = $data['promoted'];
                    $inserting_data['advtmis_competitor_offer_rate'] = 0;
                    $inserting_data['advtmis_client_request_rate'] = 0;
//                     echo "<pre>";
//                            print_r($edncode);exit;
                    if ($edncode[0]['advtmis_edn_eenaduregion'] == 4) {
                        if ($edncode[0]['advtmis_edn_name'] == 'CENTRAL ANDHRA REGION') {
                            $countofreg = 4;
                            if (!defined('CENVAL')) {
                                define("CENVAL", 4);
                            }

//                                    $countedi += 1;
                        } else {
                            $countofreg = 400;
                        }
                    } elseif ($edncode[0]['advtmis_edn_eenaduregion'] == 5) {
                        if ($edncode[0]['advtmis_edn_name'] == 'NORTH ANDHRA REGION') {
                            $countofreg = 5;
                            if (!defined('NORVAL')) {
                                define("NORVAL", 5);
                            }
                        } else {
                            $countofreg = 500;
                        }
                    } elseif ($edncode[0]['advtmis_edn_eenaduregion'] == 6) {
                        if ($edncode[0]['advtmis_edn_name'] == 'RAYALASEEMA REGION') {
                            $countofreg = 6;
                            if (!defined('RAYALVAL')) {
                                define("RAYALVAL", 6);
                            }
                        } else {
                            $countofreg = 600;
                        }
                    } elseif ($edncode[0]['advtmis_edn_eenaduregion'] == 2) {
                        if ($edncode[0]['advtmis_edn_name'] == 'GRT HYDERABAD REGION') {
                            $countofreg = 2;
                            if (!defined('GRTVAL')) {
                                define("GRTVAL", 2);
                            }
                        } else {
                            $countofreg = 200;
                        }
                    } elseif ($edncode[0]['advtmis_edn_eenaduregion'] == 3) {
                        if ($edncode[0]['advtmis_edn_name'] == 'TELANGANA REGION') {
                            $countofreg = 3;
                            if (!defined('RESTTGVAL')) {
                                define("RESTTGVAL", 3);
                            }
                        } else {
                            $countofreg = 300;
                        }
                    } else {
                        $countofreg = 800;
                    }

                    if ($countofreg == 4) {
                        $editionvalues['code'][] = $edncode[0]['advtmis_edn_code'];
                        $editionvalues['name'][] = $edncode[0]['advtmis_edn_name'];
                        $editionvalues['shortname'][] = $edncode[0]['advtmis_edn_shortname'];
                        $editionvalues['regcode'][] = $edncode[0]['advtmis_edn_eenaduregion'];
                        $this->db->insert('advtmis_publicationsspace_main'.$yearmonth, $inserting_data);
                    }
                    if (!defined('CENVAL')) {
                        if (('CENVAL' != 4) && ($countofreg == 400)) {
                            $editionvalues['code'][] = $edncode[0]['advtmis_edn_code'];
                            $editionvalues['name'][] = $edncode[0]['advtmis_edn_name'];
                            $editionvalues['shortname'][] = $edncode[0]['advtmis_edn_shortname'];
                            $editionvalues['regcode'][] = $edncode[0]['advtmis_edn_eenaduregion'];
                            $this->db->insert('advtmis_publicationsspace_main'.$yearmonth, $inserting_data);
                        }
                    }


                    if ($countofreg == 5) {
                        $editionvalues['code'][] = $edncode[0]['advtmis_edn_code'];
                        $editionvalues['name'][] = $edncode[0]['advtmis_edn_name'];
                        $editionvalues['shortname'][] = $edncode[0]['advtmis_edn_shortname'];
                        $editionvalues['regcode'][] = $edncode[0]['advtmis_edn_eenaduregion'];
                        $this->db->insert('advtmis_publicationsspace_main'.$yearmonth, $inserting_data);
                    }
                    if (!defined('NORVAL')) {
                        if (('NORVAL' != 5) && ($countofreg == 500)) {
                            $editionvalues['code'][] = $edncode[0]['advtmis_edn_code'];
                            $editionvalues['name'][] = $edncode[0]['advtmis_edn_name'];
                            $editionvalues['shortname'][] = $edncode[0]['advtmis_edn_shortname'];
                            $editionvalues['regcode'][] = $edncode[0]['advtmis_edn_eenaduregion'];
                            $this->db->insert('advtmis_publicationsspace_main'.$yearmonth, $inserting_data);
                        }
                    }
                    if ($countofreg == 6) {
                        $editionvalues['code'][] = $edncode[0]['advtmis_edn_code'];
                        $editionvalues['name'][] = $edncode[0]['advtmis_edn_name'];
                        $editionvalues['shortname'][] = $edncode[0]['advtmis_edn_shortname'];
                        $editionvalues['regcode'][] = $edncode[0]['advtmis_edn_eenaduregion'];
                        $this->db->insert('advtmis_publicationsspace_main'.$yearmonth, $inserting_data);
                    }
                    if (!defined('RAYALVAL')) {
                        if (('RAYALVAL' != 6) && ($countofreg == 600)) {
                            $editionvalues['code'][] = $edncode[0]['advtmis_edn_code'];
                            $editionvalues['name'][] = $edncode[0]['advtmis_edn_name'];
                            $editionvalues['shortname'][] = $edncode[0]['advtmis_edn_shortname'];
                            $editionvalues['regcode'][] = $edncode[0]['advtmis_edn_eenaduregion'];
                            $this->db->insert('advtmis_publicationsspace_main'.$yearmonth, $inserting_data);
                        }
                    }


                    if ($countofreg == 2) {
                        $editionvalues['code'][] = $edncode[0]['advtmis_edn_code'];
                        $editionvalues['name'][] = $edncode[0]['advtmis_edn_name'];
                        $editionvalues['shortname'][] = $edncode[0]['advtmis_edn_shortname'];
                        $editionvalues['regcode'][] = $edncode[0]['advtmis_edn_eenaduregion'];
                        $this->db->insert('advtmis_publicationsspace_main'.$yearmonth, $inserting_data);
                    }
                    if (!defined('GRTVAL')) {
                        if (('GRTVAL' != 2) && ($countofreg == 200)) {
                            $editionvalues['code'][] = $edncode[0]['advtmis_edn_code'];
                            $editionvalues['name'][] = $edncode[0]['advtmis_edn_name'];
                            $editionvalues['shortname'][] = $edncode[0]['advtmis_edn_shortname'];
                            $editionvalues['regcode'][] = $edncode[0]['advtmis_edn_eenaduregion'];
                            $this->db->insert('advtmis_publicationsspace_main'.$yearmonth, $inserting_data);
                        }
                    }


                    if ($countofreg == 3) {
                        $editionvalues['code'][] = $edncode[0]['advtmis_edn_code'];
                        $editionvalues['name'][] = $edncode[0]['advtmis_edn_name'];
                        $editionvalues['shortname'][] = $edncode[0]['advtmis_edn_shortname'];
                        $editionvalues['regcode'][] = $edncode[0]['advtmis_edn_eenaduregion'];
                        $this->db->insert('advtmis_publicationsspace_main'.$yearmonth, $inserting_data);
                    }
                    if (!defined('RESTTGVAL')) {
                        if (('RESTTGVAL' != 3) && ($countofreg == 300)) {
                            $editionvalues['code'][] = $edncode[0]['advtmis_edn_code'];
                            $editionvalues['name'][] = $edncode[0]['advtmis_edn_name'];
                            $editionvalues['shortname'][] = $edncode[0]['advtmis_edn_shortname'];
                            $editionvalues['regcode'][] = $edncode[0]['advtmis_edn_eenaduregion'];
                            $this->db->insert('advtmis_publicationsspace_main'.$yearmonth, $inserting_data);
                        }
                    }
                }
//                echo "<pre>";
//                        print_r($editionvalues);
                $edncodeheader = "";
                $ednnameheader = "";
                $edn_eenaduregion = "";
//                echo "<pre>";
//                print_r($header['code']);

                foreach ($editionvalues['code'] as $valcode => $value) {
                    $edncodeheader .= $editionvalues['code'][$valcode];
                    $edncodeheader .= ",";
                }
                foreach ($editionvalues['name'] as $valname => $value) {
                    $ednnameheader .= $editionvalues['name'][$valname];
                    $ednnameheader .= ",";
                }
                foreach ($editionvalues['regcode'] as $valregcode => $value) {
                    $edn_eenaduregion .= $editionvalues['regcode'][$valregcode];
                    $edn_eenaduregion .= ",";
                }
                $inserting_data = array();
                $inserting_data['advtmis_srlno'] = $billnoo[0]['nextval'];
                $inserting_data['advtmis_blno'] = $billnoo[0]['nextval'];
                $inserting_data['advtmis_idno'] = 0;

                $inserting_data['advtmis_yearmonth'] = $yearmonth;
                $inserting_data['advtmis_insdate'] = $insdate;

                $inserting_data['advtmis_pubcode'] = $public[1];
                $inserting_data['advtmis_pubname'] = $public[2];
                $edn_code_mini = -1;
                $edn_name_mini = "";

                $inserting_data['advtmis_edncode'] = $edncodeheader;
                $inserting_data['advtmis_ednname'] = $ednnameheader;
                $inserting_data['advtmis_distedncode'] = $edn_code_mini;
                $inserting_data['advtmis_distednname'] = $edn_name_mini;

                $inserting_data['advtmis_clientcode'] = $clientdetails[0];
                $inserting_data['advtmis_client'] = $clientdetails[1];
                $inserting_data['advtmis_entryclientcode'] = $clientdetails[0];
                $inserting_data['advtmis_entryclient'] = $clientdetails[1];

                $inserting_data['advtmis_productcode'] = $productdetails[0];
                $inserting_data['advtmis_product'] = $productdetails[1];
                $inserting_data['advtmis_entryproductcode'] = $productdetails[0];
                $inserting_data['advtmis_entryproduct'] = $productdetails[1];

                $inserting_data['advtmis_brandcode'] = $branddetails[0];
                $inserting_data['advtmis_brand'] = $branddetails[1];
                $inserting_data['advtmis_entrybrandcode'] = $branddetails[0];
                $inserting_data['advtmis_entrybrand'] = $branddetails[1];
                if (!empty($agencydetails)) {
                    $inserting_data['advtmis_agencycode'] = $agencydetails[0];
                    $inserting_data['advtmis_agency'] = $agencydetails[1];
                    $inserting_data['advtmis_agencyplace'] = "$agencydetails[2]";
                } else {
                    $inserting_data['advtmis_agencycode'] = 0;
                    $inserting_data['advtmis_agency'] = "";
                    $inserting_data['advtmis_agencyplace'] = "";
                }

                $inserting_data['advtmis_ismmpl'] = "";
                $inserting_data['advtmis_freead'] = "";
                $inserting_data['advtmis_selfad'] = "";
                $inserting_data['advtmis_dipr'] = "";
                $inserting_data['advtmis_npag'] = "";
                $inserting_data['advtmis_rpcat'] = 0;

                $inserting_data['advtmis_catgcode'] = $catdetails[1];
                $inserting_data['advtmis_entrycatgcode'] = $catdetails[1];
                $inserting_data['advtmis_catgorder'] = $catdetails[2];
                $inserting_data['advtmis_maincatgname'] = $data['maincat'];
                $inserting_data['advtmis_subcatgname'] = $catdetails[3];
                $inserting_data['advtmis_adcd'] = $catdetails[4];
                if (!empty($addtypedetails[0])) {
                    $inserting_data['advtmis_adtype'] = $addtypedetails[0];
                } else {
                    $inserting_data['advtmis_adtype'] = "";
                }
//                $inserting_data['advtmis_adtype'] = $addtypedetails[0];

                $inserting_data['advtmis_rgncode'] = $placedetails[0];
                $inserting_data['advtmis_entryrgncode'] = $placedetails[0];
                $inserting_data['advtmis_place'] = $placedetails[1];
                $inserting_data['advtmis_rgcd'] = $placedetails[2];
                $inserting_data['advtmis_rgcdname'] = $placedetails[3];

                $inserting_data['advtmis_flag'] = "$edn_eenaduregion";

                $inserting_data['advtmis_page'] = $data['page'];
                $inserting_data['advtmis_colbw'] = $data['color'];
                $inserting_data['advtmis_size'] =  strtoupper ( $data['size'] );
                $inserting_data['advtmis_space'] = $data['pagesize'];
                $inserting_data['advtmis_espace'] = 0.00;
                if (!empty($data['splpage1'])) {
                    $inserting_data['advtmis_splpage'] = $data['splpage1'];
                } else {
                    $inserting_data['advtmis_splpage'] = 0;
                }
//                $inserting_data['advtmis_splpage'] = $data['splpage1'];

                $inserting_data['advtmis_adcategory'] = "";
                $inserting_data['advtmis_pageposition'] = "";
                $inserting_data['advtmis_adposition'] = "";

                $inserting_data['advtmis_cardrate'] = 0.00;
                $inserting_data['advtmis_commissionper'] = 0.00;
                $inserting_data['advtmis_discountper'] = 0.00;
                $inserting_data['advtmis_extper'] = 0.00;
                $inserting_data['advtmis_cardgross'] = 0.00;
                $inserting_data['advtmis_cardnet'] = 0.00;
                $inserting_data['advtmis_rate'] = 0.00;
                $inserting_data['advtmis_grossamt'] = 0.00;
                $inserting_data['advtmis_netamt'] = 0.00;

                $inserting_data['advtmis_adexeid'] = 0;
                $inserting_data['advtmis_adexename'] = "";
                $inserting_data['advtmis_epos'] = 0;

                $inserting_data['advtmis_en_hin'] = "";

                $inserting_data['advtmis_sgross1'] = 0.00;
                $inserting_data['advtmis_snetamt1'] = 0.00;
                $inserting_data['advtmis_sgross'] = 0.00;
                $inserting_data['advtmis_snetamt'] = 0.00;
                $inserting_data['advtmis_crspc'] = 0.00;
                $inserting_data['advtmis_crgross'] = 0.00;
                $inserting_data['advtmis_crnet'] = 0.00;
                $inserting_data['advtmis_drspc'] = 0.00;
                $inserting_data['advtmis_drgross'] = 0.00;
                $inserting_data['advtmis_drnet'] = 0.00;

                $inserting_data['advtmis_entryunit'] = $userdetails[0]['advtmis_user_unitcode'];
                $inserting_data['advtmis_entryunitname'] = $userdetails[0]['advtmis_unit_name'];
                ;
                $inserting_data['advtmis_entryby'] = ENTRYBY;
                $inserting_data['advtmis_entrydate'] = ENTRYDATE;
                $inserting_data['advtmis_modifyby'] = $userdetails[0]['advtmis_user_empcode'];
                $inserting_data['advtmis_modifydate'] = $modifydate;
                $inserting_data['advtmis_allowflag'] = "A";
                $inserting_data['advtmis_mainmini'] = $data['mainmini11'];
                $inserting_data['advtmis_remarks'] = "record by way of php";
                $inserting_data['advtmis_eeadpromotiontype'] = $data['promoted'];
                $inserting_data['advtmis_competitor_offer_rate'] = 0;
                $inserting_data['advtmis_client_request_rate'] = 0;


                $this->db->insert('advtmis_publicationsspace_mainheader'.$yearmonth, $inserting_data);

//                exit;
            } elseif ($mainormini == "MINI") {

                $billno = $this->db->query("Select nextval('advtmis_srlnoseq'::text)");
                $billnoo = $billno->result_array();
                foreach ($editionArray as $key => $val) {
                    $srlno = $this->db->query("Select nextval('advtmis_srlnoseq'::text)");
                    $srlnoo = $srlno->result_array();
                    $inserting_data = array();
                    $inserting_data['advtmis_srlno'] = $srlnoo[0]['nextval'] - 1;
                    $inserting_data['advtmis_blno'] = $billnoo[0]['nextval'];
                    $inserting_data['advtmis_idno'] = 0;

                    $inserting_data['advtmis_yearmonth'] = $yearmonth;
                    $inserting_data['advtmis_insdate'] = $insdate;

                    $inserting_data['advtmis_pubcode'] = $public[1];
                    $inserting_data['advtmis_pubname'] = $public[2];


                    $new_str = trim($editionArray[$key]);


                    $que = $this->db->query("select advtmis_distedn_code,advtmis_distedn_shortname,advtmis_distedn_eenaduregion,advtmis_distedn_name,advtmis_distedn_edncode 
                        from advtmis_master_disteditions where advtmis_distedn_name = case when '" . $new_str . "' = advtmis_distedn_name then '" . $new_str . "' else case when '$editionArray[$key]'  = advtmis_distedn_name then '" . $editionArray[$key] . "' else '" . $new_str . " '  end  end");
                    $edncode = $que->result_array();

                    foreach ($editionArray as $ednkey => $ednval) {
                        $new_strr = trim($editionArray[$ednkey]);
                        $queryedn = $this->db->query("select advtmis_distedn_edncode,advtmis_distedn_name,advtmis_distedn_code,advtmis_distedn_shortname,advtmis_distedn_eenaduregion 
                        from advtmis_master_disteditions where advtmis_distedn_name = case when '" . $new_strr . "' = advtmis_distedn_name then '" . $new_strr . ""
                                . "' else case when '$editionArray[$ednkey]'  = advtmis_distedn_name then '"
                                . $editionArray[$ednkey] . "' else '" . $new_strr . " '  end  end");
                        $edncoderess[] = $queryedn->result_array();
                    }
                    $countt = count($edncoderess);

                    $regvalue = "";
                    $noofreg = 0;
                    $addval = 1;



                    $multiedi = "MULTI EDITION ADVT FOR ";

                    foreach ($edncoderess as $editionkey => $editionval) {

                        if ($countt == 1) {
                            $multiflagvalue = "EDITION ADVT FOR " . $edncoderess[$editionkey][0]['advtmis_distedn_shortname'];
                        } else if ($countt > 1 && (($edncoderess[$editionkey][0]['advtmis_distedn_eenaduregion'] == 2 && $edncoderess[$editionkey][0]['advtmis_distedn_code'] == 10000) || ($edncoderess[$editionkey][0]['advtmis_distedn_eenaduregion'] == 4 && $edncoderess[$editionkey][0]['advtmis_distedn_code'] == 20000) || ($edncoderess[$editionkey][0]['advtmis_distedn_eenaduregion'] == 5 && $edncoderess[$editionkey][0]['advtmis_distedn_code'] == 30000) || ($edncoderess[$editionkey][0]['advtmis_distedn_eenaduregion'] == 6 && $edncoderess[$editionkey][0]['advtmis_distedn_code'] == 40000) || ($edncoderess[$editionkey][0]['advtmis_distedn_eenaduregion'] == 3 && $edncoderess[$editionkey][0]['advtmis_distedn_code'] == 60000))) {
                            $noofreg = $noofreg + $addval;
                            $regvalue .= $edncoderess[$editionkey][0]['advtmis_distedn_shortname'];
                            $regvalue .= ",";
                        } else {

                            $multiedi .= $edncoderess[$editionkey][0]['advtmis_distedn_shortname'];
                            $multiedi .= ",";
                            $multiflagvalue = $multiedi;
                        }
                    }

                    if ($noofreg == 1) {
                        $multiflagvalue = "REGION ADVT FOR " . $regvalue;
                    } else if ($noofreg > 1) {
                        $multiflagvalue = "MULTI REGION ADVT FOR " . $regvalue;
                    }



                    $edn_code_mini = $edncode[0]['advtmis_distedn_code'];
                    $edn_name_mini = $edncode[0]['advtmis_distedn_shortname'];

                    $edn_code_main = $edncode[0]['advtmis_distedn_edncode'];
                    $edn_name_main = $edncode[0]['advtmis_distedn_name'];


                    $header['code'][$key] = $edn_code_mini;
                    $header['name'][$key] = $edn_name_mini;
                    $header['maincode'][$key] = $edn_code_main;
                    $header['mainname'][$key] = $edn_name_main;


                    $inserting_data['advtmis_edncode'] = $edn_code_main;
                    $inserting_data['advtmis_ednname'] = $edn_name_main;
                    $inserting_data['advtmis_distedncode'] = $edn_code_mini;
                    $inserting_data['advtmis_distednname'] = $edn_name_mini;

                    $inserting_data['advtmis_clientcode'] = $clientdetails[0];
                    $inserting_data['advtmis_client'] = $clientdetails[1];
                    $inserting_data['advtmis_entryclientcode'] = $clientdetails[0];
                    $inserting_data['advtmis_entryclient'] = $clientdetails[1];

                    $inserting_data['advtmis_productcode'] = $productdetails[0];
                    $inserting_data['advtmis_product'] = $productdetails[1];
                    $inserting_data['advtmis_entryproductcode'] = $productdetails[0];
                    $inserting_data['advtmis_entryproduct'] = $productdetails[1];

                    $inserting_data['advtmis_brandcode'] = $branddetails[0];
                    $inserting_data['advtmis_brand'] = $branddetails[1];
                    $inserting_data['advtmis_entrybrandcode'] = $branddetails[0];
                    $inserting_data['advtmis_entrybrand'] = $branddetails[1];
                    if (!empty($agencydetails)) {
                        $inserting_data['advtmis_agencycode'] = $agencydetails[0];
                        $inserting_data['advtmis_agency'] = $agencydetails[1];
                        $inserting_data['advtmis_agencyplace'] = "$agencydetails[2]";
                    } else {
                        $inserting_data['advtmis_agencycode'] = 0;
                        $inserting_data['advtmis_agency'] = "";
                        $inserting_data['advtmis_agencyplace'] = "";
                    }

                    $inserting_data['advtmis_ismmpl'] = "";
                    $inserting_data['advtmis_freead'] = "";
                    $inserting_data['advtmis_selfad'] = "";
                    $inserting_data['advtmis_dipr'] = "";
                    $inserting_data['advtmis_npag'] = "";
                    $inserting_data['advtmis_rpcat'] = 0;


                    $inserting_data['advtmis_catgcode'] = $catdetails[1];
                    $inserting_data['advtmis_entrycatgcode'] = $catdetails[1];
                    $inserting_data['advtmis_catgorder'] = $catdetails[2];
                    $inserting_data['advtmis_maincatgname'] = $data['maincat'];
                    $inserting_data['advtmis_subcatgname'] = $catdetails[3];
                    $inserting_data['advtmis_adcd'] = $catdetails[4];
                    if (!empty($addtypedetails[0])) {
                        $inserting_data['advtmis_adtype'] = $addtypedetails[0];
                    } else {
                        $inserting_data['advtmis_adtype'] = "";
                    }
//                    $inserting_data['advtmis_adtype'] = $addtypedetails[0];

                    $inserting_data['advtmis_rgncode'] = $placedetails[0];
                    $inserting_data['advtmis_entryrgncode'] = $placedetails[0];
                    $inserting_data['advtmis_place'] = $placedetails[1];
                    $inserting_data['advtmis_rgcd'] = $placedetails[2];
                    $inserting_data['advtmis_rgcdname'] = $placedetails[3];

//                    define("GREETING", $multiflagvalue);
//                }
                    if (!defined('GREETING')) {
                        define("GREETING", $multiflagvalue);
                    }
//                $inserting_data['advtmis_flag'] = GREETING;

                    $inserting_data['advtmis_flag'] = GREETING;

                    $inserting_data['advtmis_page'] = $data['page'];
                    $inserting_data['advtmis_colbw'] = $data['color'];
                    $inserting_data['advtmis_size'] =  strtoupper ( $data['size'] );
                    $inserting_data['advtmis_space'] = $data['pagesize'];
                    $inserting_data['advtmis_espace'] = 0.00;
                    if (!empty($data['splpage1'])) {
                        $inserting_data['advtmis_splpage'] = $data['splpage1'];
                    } else {
                        $inserting_data['advtmis_splpage'] = 0;
                    }
//                $inserting_data['advtmis_splpage'] = $data['splpage1'];

                    $inserting_data['advtmis_adcategory'] = "";
                    $inserting_data['advtmis_pageposition'] = "";
                    $inserting_data['advtmis_adposition'] = "";

                    $inserting_data['advtmis_cardrate'] = 0.00;
                    $inserting_data['advtmis_commissionper'] = 0.00;
                    $inserting_data['advtmis_discountper'] = 0.00;
                    $inserting_data['advtmis_extper'] = 0.00;
                    $inserting_data['advtmis_cardgross'] = 0.00;
                    $inserting_data['advtmis_cardnet'] = 0.00;
                    $inserting_data['advtmis_rate'] = 0.00;
                    $inserting_data['advtmis_grossamt'] = 0.00;
                    $inserting_data['advtmis_netamt'] = 0.00;

                    $inserting_data['advtmis_adexeid'] = 0;
                    $inserting_data['advtmis_adexename'] = "";
                    $inserting_data['advtmis_epos'] = 0;

                    $inserting_data['advtmis_en_hin'] = "";

                    $inserting_data['advtmis_sgross1'] = 0.00;
                    $inserting_data['advtmis_snetamt1'] = 0.00;
                    $inserting_data['advtmis_sgross'] = 0.00;
                    $inserting_data['advtmis_snetamt'] = 0.00;
                    $inserting_data['advtmis_crspc'] = 0.00;
                    $inserting_data['advtmis_crgross'] = 0.00;
                    $inserting_data['advtmis_crnet'] = 0.00;
                    $inserting_data['advtmis_drspc'] = 0.00;
                    $inserting_data['advtmis_drgross'] = 0.00;
                    $inserting_data['advtmis_drnet'] = 0.00;

                    $inserting_data['advtmis_entryunit'] = $userdetails[0]['advtmis_user_unitcode'];
                    $inserting_data['advtmis_entryunitname'] = $userdetails[0]['advtmis_unit_name'];
                    ;
                    $inserting_data['advtmis_entryby'] = ENTRYBY;
                    $inserting_data['advtmis_entrydate'] = ENTRYDATE;
                    $inserting_data['advtmis_modifyby'] = $userdetails[0]['advtmis_user_empcode'];
                    $inserting_data['advtmis_modifydate'] = $modifydate;
                    $inserting_data['advtmis_allowflag'] = "A";
                    $inserting_data['advtmis_mainmini'] = $data['mainmini11'];
                    $inserting_data['advtmis_remarks'] = "record by way of php";
                    $inserting_data['advtmis_eeadpromotiontype'] = $data['promoted'];
                    $inserting_data['advtmis_competitor_offer_rate'] = 0;
                    $inserting_data['advtmis_client_request_rate'] = 0;


                    if ($edncode[0]['advtmis_distedn_code'] >= 20000 & $edncode[0]['advtmis_distedn_code'] < 30000) {
                        if ($edncode[0]['advtmis_distedn_name'] == 'CENTRAL ANDHRA REGION') {
                            $countofreg = 4;
                            if (!defined('CENVAL')) {
                                define("CENVAL", 4);
                            }

//                                    $countedi += 1;
                        } else {
                            $countofreg = 400;
                        }
                    } elseif ($edncode[0]['advtmis_distedn_code'] >= 30000 & $edncode[0]['advtmis_distedn_code'] < 40000) {
                        if ($edncode[0]['advtmis_distedn_name'] == 'NORTH ANDHRA REGION') {
                            $countofreg = 5;
                            if (!defined('NORVAL')) {
                                define("NORVAL", 5);
                            }
                        } else {
                            $countofreg = 500;
                        }
                    } elseif ($edncode[0]['advtmis_distedn_code'] >= 40000 & $edncode[0]['advtmis_distedn_code'] < 50000) {
                        if ($edncode[0]['advtmis_distedn_name'] == 'RAYALASEEMA REGION') {
                            $countofreg = 6;
                            if (!defined('RAYALVAL')) {
                                define("RAYALVAL", 6);
                            }
                        } else {
                            $countofreg = 600;
                        }
                    } elseif ($edncode[0]['advtmis_distedn_code'] >= 10000 & $edncode[0]['advtmis_distedn_code'] < 20000) {
                        if ($edncode[0]['advtmis_distedn_name'] == 'GRT HYDERABAD REGION') {
                            $countofreg = 2;
                            if (!defined('GRTVAL')) {
                                define("GRTVAL", 2);
                            }
                        } else {
                            $countofreg = 200;
                        }
                    } elseif ($edncode[0]['advtmis_distedn_code'] >= 60000 & $edncode[0]['advtmis_distedn_code'] < 70000) {
                        if ($edncode[0]['advtmis_distedn_name'] == 'TELANGANA REGION') {
                            $countofreg = 3;
                            if (!defined('RESTTGVAL')) {
                                define("RESTTGVAL", 3);
                            }
                        } else {
                            $countofreg = 300;
                        }
                    } else {
                        $countofreg = 800;
                    }

//                echo $countofreg;echo "<br>";

                    if ($countofreg == 4) {
                        $editionvalues['maincode'][] = $edncode[0]['advtmis_distedn_edncode'];
                        $editionvalues['code'][] = $edncode[0]['advtmis_distedn_code'];
                        $editionvalues['name'][] = $edncode[0]['advtmis_distedn_name'];
                        $editionvalues['shortname'][] = $edncode[0]['advtmis_distedn_shortname'];
                        $editionvalues['regcode'][] = $edncode[0]['advtmis_distedn_eenaduregion'];
                        $this->db->insert('advtmis_publicationsspace_reta'.$yearmonth, $inserting_data);
                    }
                    if (!defined('CENVAL')) {

                        if (('CENVAL' != 4) && ($countofreg == 400)) {
                            $editionvalues['maincode'][] = $edncode[0]['advtmis_distedn_edncode'];
                            $editionvalues['code'][] = $edncode[0]['advtmis_distedn_code'];
                            $editionvalues['name'][] = $edncode[0]['advtmis_distedn_name'];
                            $editionvalues['shortname'][] = $edncode[0]['advtmis_distedn_shortname'];
                            $editionvalues['regcode'][] = $edncode[0]['advtmis_distedn_eenaduregion'];
                            $this->db->insert('advtmis_publicationsspace_reta'.$yearmonth, $inserting_data);
                        }
                    }


                    if ($countofreg == 5) {
                        $editionvalues['maincode'][] = $edncode[0]['advtmis_distedn_edncode'];
                        $editionvalues['code'][] = $edncode[0]['advtmis_distedn_code'];
                        $editionvalues['name'][] = $edncode[0]['advtmis_distedn_name'];
                        $editionvalues['shortname'][] = $edncode[0]['advtmis_distedn_shortname'];
                        $editionvalues['regcode'][] = $edncode[0]['advtmis_distedn_eenaduregion'];
                        $this->db->insert('advtmis_publicationsspace_reta'.$yearmonth, $inserting_data);
                    }
                    if (!defined('NORVAL')) {

                        if (('NORVAL' != 5) && ($countofreg == 500)) {
                            $editionvalues['maincode'][] = $edncode[0]['advtmis_distedn_edncode'];
                            $editionvalues['code'][] = $edncode[0]['advtmis_distedn_code'];
                            $editionvalues['name'][] = $edncode[0]['advtmis_distedn_name'];
                            $editionvalues['shortname'][] = $edncode[0]['advtmis_distedn_shortname'];
                            $editionvalues['regcode'][] = $edncode[0]['advtmis_distedn_eenaduregion'];
                            $this->db->insert('advtmis_publicationsspace_reta'.$yearmonth, $inserting_data);
                        }
                    }
                    if ($countofreg == 6) {
                        $editionvalues['maincode'][] = $edncode[0]['advtmis_distedn_edncode'];
                        $editionvalues['code'][] = $edncode[0]['advtmis_distedn_code'];
                        $editionvalues['name'][] = $edncode[0]['advtmis_distedn_name'];
                        $editionvalues['shortname'][] = $edncode[0]['advtmis_distedn_shortname'];
                        $editionvalues['regcode'][] = $edncode[0]['advtmis_distedn_eenaduregion'];
                        $this->db->insert('advtmis_publicationsspace_reta'.$yearmonth, $inserting_data);
                    }
                    if (!defined('RAYALVAL')) {

                        if (('RAYALVAL' != 6) && ($countofreg == 600)) {
                            $editionvalues['maincode'][] = $edncode[0]['advtmis_distedn_edncode'];
                            $editionvalues['code'][] = $edncode[0]['advtmis_distedn_code'];
                            $editionvalues['name'][] = $edncode[0]['advtmis_distedn_name'];
                            $editionvalues['shortname'][] = $edncode[0]['advtmis_distedn_shortname'];
                            $editionvalues['regcode'][] = $edncode[0]['advtmis_distedn_eenaduregion'];
                            $this->db->insert('advtmis_publicationsspace_reta'.$yearmonth, $inserting_data);
                        }
                    }


                    if ($countofreg == 2) {
                        $editionvalues['maincode'][] = $edncode[0]['advtmis_distedn_edncode'];
                        $editionvalues['code'][] = $edncode[0]['advtmis_distedn_code'];
                        $editionvalues['name'][] = $edncode[0]['advtmis_distedn_name'];
                        $editionvalues['shortname'][] = $edncode[0]['advtmis_distedn_shortname'];
                        $editionvalues['regcode'][] = $edncode[0]['advtmis_distedn_eenaduregion'];
                        $this->db->insert('advtmis_publicationsspace_reta'.$yearmonth, $inserting_data);
                    }
                    if (!defined('GRTVAL')) {
                        if (('GRTVAL' != 2) && ($countofreg == 200)) {
                            $editionvalues['maincode'][] = $edncode[0]['advtmis_distedn_edncode'];
                            $editionvalues['code'][] = $edncode[0]['advtmis_distedn_code'];
                            $editionvalues['name'][] = $edncode[0]['advtmis_distedn_name'];
                            $editionvalues['shortname'][] = $edncode[0]['advtmis_distedn_shortname'];
                            $editionvalues['regcode'][] = $edncode[0]['advtmis_distedn_eenaduregion'];
                            $this->db->insert('advtmis_publicationsspace_reta'.$yearmonth, $inserting_data);
                        }
                    }


                    if ($countofreg == 3) {
                        $editionvalues['maincode'][] = $edncode[0]['advtmis_distedn_edncode'];
                        $editionvalues['code'][] = $edncode[0]['advtmis_distedn_code'];
                        $editionvalues['name'][] = $edncode[0]['advtmis_distedn_name'];
                        $editionvalues['shortname'][] = $edncode[0]['advtmis_distedn_shortname'];
                        $editionvalues['regcode'][] = $edncode[0]['advtmis_distedn_eenaduregion'];
                        $this->db->insert('advtmis_publicationsspace_reta'.$yearmonth, $inserting_data);
                    }
                    if (!defined('RESTTGVAL')) {
                        if (('RESTTGVAL' != 3) && ($countofreg == 300)) {
                            $editionvalues['maincode'][] = $edncode[0]['advtmis_distedn_edncode'];
                            $editionvalues['code'][] = $edncode[0]['advtmis_distedn_code'];
                            $editionvalues['name'][] = $edncode[0]['advtmis_distedn_name'];
                            $editionvalues['shortname'][] = $edncode[0]['advtmis_distedn_shortname'];
                            $editionvalues['regcode'][] = $edncode[0]['advtmis_distedn_eenaduregion'];
                            $this->db->insert('advtmis_publicationsspace_reta'.$yearmonth, $inserting_data);
                        }
                    }
                }
                $edncodeheader = "";
                $ednnameheader = "";
                $ednmaincodeheader = "";
                $ednmainnameheader = "";
                $edn_eenaduregion = "";
                foreach ($editionvalues['code'] as $valcode => $value) {
                    $edncodeheader .= $editionvalues['code'][$valcode];
                    $edncodeheader .= ",";
                }
                foreach ($editionvalues['name'] as $valname => $value) {
                    $ednnameheader .= $editionvalues['name'][$valname];
                    $ednnameheader .= ",";
                }
                foreach ($editionvalues['maincode'] as $valmainname => $value) {
                    $ednmaincodeheader .= $editionvalues['maincode'][$valmainname];
                    $ednmaincodeheader .= ",";
                }
                foreach ($editionvalues['shortname'] as $valmainname => $value) {
                    $ednmainnameheader .= $editionvalues['shortname'][$valmainname];
                    $ednmainnameheader .= ",";
                }

                foreach ($editionvalues['regcode'] as $valregcode => $value) {
                    $edn_eenaduregion .= $editionvalues['regcode'][$valregcode];
                    $edn_eenaduregion .= ",";
                }


                $count = count($data['editions']);
                $inserting_data = array();
                $inserting_data['advtmis_srlno'] = $billnoo[0]['nextval'];
                $inserting_data['advtmis_blno'] = $billnoo[0]['nextval'];
                $inserting_data['advtmis_idno'] = 0;

                $inserting_data['advtmis_yearmonth'] = $yearmonth;
                $inserting_data['advtmis_insdate'] = $insdate;

                $inserting_data['advtmis_pubcode'] = $public[1];
                $inserting_data['advtmis_pubname'] = $public[2];


                $inserting_data['advtmis_edncode'] = $ednmaincodeheader;
                $inserting_data['advtmis_ednname'] = $ednmainnameheader;
                $inserting_data['advtmis_distedncode'] = $edncodeheader;
                $inserting_data['advtmis_distednname'] = $ednnameheader;

                $inserting_data['advtmis_clientcode'] = $clientdetails[0];
                $inserting_data['advtmis_client'] = $clientdetails[1];
                $inserting_data['advtmis_entryclientcode'] = $clientdetails[0];
                $inserting_data['advtmis_entryclient'] = $clientdetails[1];

                $inserting_data['advtmis_productcode'] = $productdetails[0];
                $inserting_data['advtmis_product'] = $productdetails[1];
                $inserting_data['advtmis_entryproductcode'] = $productdetails[0];
                $inserting_data['advtmis_entryproduct'] = $productdetails[1];

                $inserting_data['advtmis_brandcode'] = $branddetails[0];
                $inserting_data['advtmis_brand'] = $branddetails[1];
                $inserting_data['advtmis_entrybrandcode'] = $branddetails[0];
                $inserting_data['advtmis_entrybrand'] = $branddetails[1];
                if (!empty($agencydetails)) {
                    $inserting_data['advtmis_agencycode'] = $agencydetails[0];
                    $inserting_data['advtmis_agency'] = $agencydetails[1];
                    $inserting_data['advtmis_agencyplace'] = "$agencydetails[2]";
                } else {
                    $inserting_data['advtmis_agencycode'] = 0;
                    $inserting_data['advtmis_agency'] = "";
                    $inserting_data['advtmis_agencyplace'] = "";
                }

                $inserting_data['advtmis_ismmpl'] = "";
                $inserting_data['advtmis_freead'] = "";
                $inserting_data['advtmis_selfad'] = "";
                $inserting_data['advtmis_dipr'] = "";
                $inserting_data['advtmis_npag'] = "";
                $inserting_data['advtmis_rpcat'] = 0;

                $inserting_data['advtmis_catgcode'] = $catdetails[1];
                $inserting_data['advtmis_entrycatgcode'] = $catdetails[1];
                $inserting_data['advtmis_catgorder'] = $catdetails[2];
                $inserting_data['advtmis_maincatgname'] = $data['maincat'];
                $inserting_data['advtmis_subcatgname'] = $catdetails[3];
                $inserting_data['advtmis_adcd'] = $catdetails[4];
                if (!empty($addtypedetails[0])) {
                    $inserting_data['advtmis_adtype'] = $addtypedetails[0];
                } else {
                    $inserting_data['advtmis_adtype'] = "";
                }
//            $inserting_data['advtmis_adtype'] = $addtypedetails[0];

                $inserting_data['advtmis_rgncode'] = $placedetails[0];
                $inserting_data['advtmis_entryrgncode'] = $placedetails[0];
                $inserting_data['advtmis_place'] = $placedetails[1];
                $inserting_data['advtmis_rgcd'] = $placedetails[2];
                $inserting_data['advtmis_rgcdname'] = $placedetails[3];

                $inserting_data['advtmis_flag'] = $edn_eenaduregion;

                $inserting_data['advtmis_page'] = $data['page'];
                $inserting_data['advtmis_colbw'] = $data['color'];
                $inserting_data['advtmis_size'] =  strtoupper ( $data['size'] );
                $inserting_data['advtmis_space'] = $data['pagesize'];
                $inserting_data['advtmis_espace'] = 0.00;
                if (!empty($data['splpage1'])) {
                    $inserting_data['advtmis_splpage'] = $data['splpage1'];
                } else {
                    $inserting_data['advtmis_splpage'] = 0;
                }
//            $inserting_data['advtmis_splpage'] = $data['splpage1'];

                $inserting_data['advtmis_adcategory'] = "";
                $inserting_data['advtmis_pageposition'] = "";
                $inserting_data['advtmis_adposition'] = "";

                $inserting_data['advtmis_cardrate'] = 0.00;
                $inserting_data['advtmis_commissionper'] = 0.00;
                $inserting_data['advtmis_discountper'] = 0.00;
                $inserting_data['advtmis_extper'] = 0.00;
                $inserting_data['advtmis_cardgross'] = 0.00;
                $inserting_data['advtmis_cardnet'] = 0.00;
                $inserting_data['advtmis_rate'] = 0.00;
                $inserting_data['advtmis_grossamt'] = 0.00;
                $inserting_data['advtmis_netamt'] = 0.00;

                $inserting_data['advtmis_adexeid'] = 0;
                $inserting_data['advtmis_adexename'] = "";
                $inserting_data['advtmis_epos'] = 0;

                $inserting_data['advtmis_en_hin'] = "";

                $inserting_data['advtmis_sgross1'] = 0.00;
                $inserting_data['advtmis_snetamt1'] = 0.00;
                $inserting_data['advtmis_sgross'] = 0.00;
                $inserting_data['advtmis_snetamt'] = 0.00;
                $inserting_data['advtmis_crspc'] = 0.00;
                $inserting_data['advtmis_crgross'] = 0.00;
                $inserting_data['advtmis_crnet'] = 0.00;
                $inserting_data['advtmis_drspc'] = 0.00;
                $inserting_data['advtmis_drgross'] = 0.00;
                $inserting_data['advtmis_drnet'] = 0.00;

                $inserting_data['advtmis_entryunit'] = $userdetails[0]['advtmis_user_unitcode'];
                $inserting_data['advtmis_entryunitname'] = $userdetails[0]['advtmis_unit_name'];
                
                $inserting_data['advtmis_entryby'] = ENTRYBY;
                $inserting_data['advtmis_entrydate'] = ENTRYDATE;
                $inserting_data['advtmis_modifyby'] = $userdetails[0]['advtmis_user_empcode'];
                $inserting_data['advtmis_modifydate'] = $modifydate;
                $inserting_data['advtmis_allowflag'] = "A";
                $inserting_data['advtmis_mainmini'] = $data['mainmini11'];
                $inserting_data['advtmis_remarks'] = "record by way of php";
                $inserting_data['advtmis_eeadpromotiontype'] = $data['promoted'];
                $inserting_data['advtmis_competitor_offer_rate'] = 0;
                $inserting_data['advtmis_client_request_rate'] = 0;


                $this->db->insert('advtmis_publicationsspace_retaheader'.$yearmonth, $inserting_data);


            }
        }
    }

    public function publication() {

        $query = $this->db->query("select advtmis_pub_name,* from  advtmis_master_publications where advtmis_pub_name<>'EENADU' and advtmis_pub_name<>'E + H' and advtmis_pub_maineditions<>''  order by 1");
        $res = $query->result_array();
        return $res;
    }

    public function publicationformodi() {

        $query = $this->db->query("select advtmis_pub_name,* from  advtmis_master_publications where advtmis_pub_name<>'E + H' and advtmis_pub_maineditions<>'' order by 1");
        $res = $query->result_array();
        return $res;
    }

//    public function publicationmodify($srlno) {
//        echo "<pre>";
//        print_r($srlno);exit;
//
//        $query = $this->db->query("select advtmis_pub_name,* from  advtmis_master_publications where  order by 1");
////             echo $this->db->last_query($query);exit;
//        $res = $query->result_array();
//        return $res;
//    }
    public function updatemultipub($data) {
//    echo "in function";
//    echo "<pre>";
//    print_r($data);exit;
//    echo $data['mainminimodi'];exit;
        $publiccode = "";
        $maincatname = "";
        foreach ($data['pubtype'] as $multikey => $multyval) {
            $publiccode .= $data['pubtype'][$multikey] . ",";
        }
        foreach ($data['maincate'] as $multikeyc => $multyvalc) {
//        $maincatname .=
            $maincatname .= "'" . $data['maincate'][$multikeyc] . "',";
        }
//    echo $publiccode;
//    echo "<br>";
//    echo $maincatname;exit;

        $publiccodee = rtrim($publiccode, ",");
        $maincatnamee = rtrim($maincatname, ",");
//    exit;
        $fdate = date('Y-m-d', strtotime($data['fromdate']));
        $tdate = date('Y-m-d', strtotime($data['todate']));
//    echo $fdate;
        if ($data['mainmini'] == 'MAIN') {
            if ($data['typefilter'] == 'client') {
                $query = $this->db->query("select * from advtmis_publicationsspace_priyanka_mainheader202112 
             where  advtmis_insdate between '" . $fdate . "' and '" . $tdate . "' and  advtmis_pubcode in (" . $publiccodee . ") 
             and advtmis_client='" . $data['liketype'] . "'and trim(advtmis_maincatgname) in(" . $maincatnamee . ")");
            }
            if ($data['typefilter'] == 'product') {
                $query = $this->db->query("select * from advtmis_publicationsspace_priyanka_mainheader202112 
             where  advtmis_insdate between '" . $fdate . "' and '" . $tdate . "' and  advtmis_pubcode in (" . $publiccodee . ") 
             and advtmis_product='" . $data['liketype'] . "'and trim(advtmis_maincatgname) in(" . $maincatnamee . ")");
            }
            if ($data['typefilter'] == 'brand') {
//        echo "skljdfkl";
                $query = $this->db->query("select * from advtmis_publicationsspace_priyanka_mainheader202112 
             where  advtmis_insdate between '" . $fdate . "' and '" . $tdate . "' and  advtmis_pubcode in (" . $publiccodee . ") 
             and advtmis_brand='" . $data['liketype'] . "'and trim(advtmis_maincatgname) in(" . $maincatnamee . ")");
            }
        } elseif ($data['mainmini'] == 'MINI') {
            
            if ($data['typefilter'] == 'client') {
                $query = $this->db->query("select * from advtmis_publicationsspace_priyanka_retaheader202112 
             where  advtmis_insdate between '" . $fdate . "' and '" . $tdate . "' and  advtmis_pubcode in (" . $publiccodee . ") 
             and advtmis_client='" . $data['liketype'] . "'and trim(advtmis_maincatgname) in(" . $maincatnamee . ")");
            }
            if ($data['typefilter'] == 'product') {
                $query = $this->db->query("select * from advtmis_publicationsspace_priyanka_retaheader202112 
             where  advtmis_insdate between '" . $fdate . "' and '" . $tdate . "' and  advtmis_pubcode in (" . $publiccodee . ") 
             and advtmis_product='" . $data['liketype'] . "'and trim(advtmis_maincatgname) in(" . $maincatnamee . ")");
            }
            if ($data['typefilter'] == 'brand') {
//        echo "skljdfkl";
                $query = $this->db->query("select * from advtmis_publicationsspace_priyanka_retaheader202112 
             where  advtmis_insdate between '" . $fdate . "' and '" . $tdate . "' and  advtmis_pubcode in (" . $publiccodee . ") 
             and advtmis_brand='" . $data['liketype'] . "'and trim(advtmis_maincatgname) in(" . $maincatnamee . ")");
            }
        } elseif ($data['mainmini'] == 'MAIN/MINI') {
            if ($data['typefilter'] == 'client') {
                $query = $this->db->query("select * from advtmis_publicationsspace_priyanka_mainheader202112 
             where  advtmis_insdate between '" . $fdate . "' and '" . $tdate . "' and  advtmis_pubcode in (" . $publiccodee . ") 
             and advtmis_client='" . $data['liketype'] . "'and trim(advtmis_maincatgname) in(" . $maincatnamee . ")
             union all 
             select * from advtmis_publicationsspace_priyanka_retaheader202112 
             where  advtmis_insdate between '" . $fdate . "' and '" . $tdate . "' and  advtmis_pubcode in (" . $publiccodee . ") 
             and advtmis_client='" . $data['liketype'] . "'and trim(advtmis_maincatgname) in(" . $maincatnamee . ")");
            }
            if ($data['typefilter'] == 'product') {
                $query = $this->db->query("select * from advtmis_publicationsspace_priyanka_mainheader202112 
             where  advtmis_insdate between '" . $fdate . "' and '" . $tdate . "' and  advtmis_pubcode in (" . $publiccodee . ") 
             and advtmis_product='" . $data['liketype'] . "'and trim(advtmis_maincatgname) in(" . $maincatnamee . ")
             union all
             select * from advtmis_publicationsspace_priyanka_retaheader202112 
             where  advtmis_insdate between '" . $fdate . "' and '" . $tdate . "' and  advtmis_pubcode in (" . $publiccodee . ") 
             and advtmis_product='" . $data['liketype'] . "'and trim(advtmis_maincatgname) in(" . $maincatnamee . ")");
            }
            if ($data['typefilter'] == 'brand') {
                $query = $this->db->query("select * from advtmis_publicationsspace_priyanka_mainheader202112  
             where  advtmis_insdate between '" . $fdate . "' and '" . $tdate . "' and  advtmis_pubcode in (" . $publiccodee . ") 
             and advtmis_brand='" . $data['liketype'] . "'and trim(advtmis_maincatgname) in(" . $maincatnamee . ")
             union all
             select * from advtmis_publicationsspace_priyanka_retaheader202112 
             where  advtmis_insdate between '" . $fdate . "' and '" . $tdate . "' and  advtmis_pubcode in (" . $publiccodee . ") 
             and advtmis_brand='" . $data['liketype'] . "'and trim(advtmis_maincatgname) in(" . $maincatnamee . ")");
            }
        }
//    echo $this->db->last_query($query);exit;
        $res = $query->result_array();
//     echo "<pre>";
//     print_r($res);exit;
        return $res;
    }

    public function maincategory() {
        $query = $this->db->query("select distinct advtmis_catg_mainname from advtmis_master_categories ");
        $res = $query->result_array();
        return $res;
    }

    public function subcategory($mainname) {
//          echo $mainname;exit;
        $query = $this->db->query("select * from advtmis_master_categories where advtmis_catg_mainname='$mainname'");
        $res = $query->result_array();
        return $res;
    }

    public function subname() {
//          echo $mainname;exit;
        $query = $this->db->query("select * from advtmis_master_categories");
        $res = $query->result_array();
        return $res;
    }

    public function place() {
        $query = $this->db->query("select advtmis_rgn_place,* from advtmis_master_regions order by 1");
        $res = $query->result_array();
        return $res;
    }

    public function client() {
        $query = $this->db->query("select distinct mst014_clname,* from advt_mst_client  where mst014_suspend_status = 'N' order by 1");
        $res = $query->result_array();
        return $res;
    }

    public function product($client) {
        $query = $this->db->query("select distinct mst011_prodname,* from advt_mst_product  inner join advt_mst_client_products on mst043_product=mst011_prodcode 
                        where mst043_clcode=" . $client . " and length(trim(mst011_prodname)) > 0  and mst011_display is true order by 2");

//         echo $this->db->last_query($query);exit;
        $res = $query->result_array();
        return $res;
    }

    public function brand($product, $clientc) {
        $query = $this->db->query("select distinct mst012_brname,* from advt_mst_brand inner join advt_mst_client_products on mst043_brand=mst012_brcode 
                                where mst043_product=" . $product . " and mst043_clcode=" . $clientc . " and length(trim(mst012_brname)) > 0  order by 3");
        $res = $query->result_array();
        return $res;
    }

    public function agency() {
        $query = $this->db->query("select mst013_agname,* from advtmis_master_agencies where mst013_suspend_status = 'N'  order by 1");
        $res = $query->result_array();
        return $res;
    }

    public function splpage($publication, $radio) {
        $query = $this->db->query("  select * from  advtmis_master_splpages where advtmis_splpg_pubcode in($publication,0)
                                    and advtmis_splpg_edntype in('ALL','$radio') and advtmis_splpg_allowflag='A'  order by 2");
        $res = $query->result_array();
        return $res;
    }

    public function modisplpage($publication, $radio) {
        $query = $this->db->query("  select * from  advtmis_master_splpages where advtmis_splpg_pubcode in($publication,0)
                                    and advtmis_splpg_edntype in('ALL','$radio') and advtmis_splpg_allowflag='A'  order by 2");
        $res = $query->result_array();
        return $res;
    }

    public function addtype() {
        $query = $this->db->query(" select * from  advtmis_master_adtypes where trim(advtmis_adtype_allowflag)='A' order by 2");
//        echo $query;
        $res = $query->result_array();
        return $res;
    }

    public function modification() {
        $query = $this->db->query(" select * from  advtmis_master_adtypes where trim(advtmis_adtype_allowflag)='A' order by 2");
//        echo $query;
        $res = $query->result_array();
        return $res;
    }

    public function editions($publication, $radiotype) {

        if ($radiotype == "MAIN") {
//            echo $publication;echo "<br>";
//echo count($publication);
//exit;
//         $var= TRIM(BOTH FROM $publication);exit;
            $var = rtrim($publication, ',');
            $var1 = ltrim($var, ',');
            $var2 = (explode(",", $var1));
            if (in_array('101', $var2) & count($var2) == 1) {
                $var1 .= ',100';
            }
//         echo $publication;
//         echo "<br>";
            if ($var1 == 'ALL') {
                $var1 = "120,121,122,123,0,64,100,101,600,606,608,614,616,617,619,200,202,209,213,218,300,303,307,311,400,404,412,415,66,1,2,210,405,65,221,222,321,620,124";
            }
//         echo $var1;
//         exit;
            $query = $this->db->query("select * from  advtmis_master_editions where advtmis_edn_code in($var1)
                                 union  select * from  advtmis_master_editions where advtmis_edn_code in($var1) and advtmis_edn_unitcode is 
                                     null
                 and advtmis_edn_name<>'AP REGION'  and advtmis_edn_name<>'REST OF AP' and advtmis_edn_name<>'REST OF TG' order by advtmis_edn_eedncode");
//        echo $this->db->last_query($query);
//        exit;
//        echo $query;
            $res = $query->result_array();
//        echo "<pre>";
//        print_r($res);
//        exit;
//             echo $this->db->last_query($query);exit;
            return $res;
        } elseif ($radiotype == "MINI") {



            $var = rtrim($publication, ',');

            $var1 = ltrim($var, ',');
            $var2 = (explode(",", $var1));
            if (in_array('10100', $var2) & count($var2) == 1) {
                $var1 .= ',10000';
            }
//             echo "<pre>";
//             print_r($var2);
//             exit;
//            echo $var1;exit;
//         echo $publication;
//         echo "<br>";
            if ($var1 == 'ALL') {
                $var1 = "  0,12300,40500,60802,20000,61903,12200,21000,10000,10100,2,20200,40000,61402,61901,30300,12100,20900,10102,22200,40400,61902,41500,31100,61400,60600,61900,10101,60607,30700,12400,61600,21800,32100,22100,30000,61401,60604,60603,60801,12000,60601,61601,61701,61403,41200,60000,6400,61404,21300,60602,60605,60606,1,31101,61700,60800";
            }

//         echo $var1;
//         exit;
//            $query = $this->db->query("select * from advtmis_master_disteditions where advtmis_distedn_edncode in($var1) and advtmis_distedn_unitcode<=19
//                                 union all select * from advtmis_master_disteditions where advtmis_distedn_edncode in($var1) and advtmis_distedn_unitcode is null 
//                and advtmis_distedn_name<>'AP REGION' and advtmis_distedn_name<>'REST OF AP' and advtmis_distedn_name<>'REST OF TG' order by 5");

            $query = $this->db->query("select * from advtmis_master_disteditions where advtmis_distedn_code  in($var1) 
                                 union  select * from advtmis_master_disteditions where advtmis_distedn_code in($var1) and advtmis_distedn_unitcode is null 
                and advtmis_distedn_name<>'AP REGION' and advtmis_distedn_name<>'REST OF AP' and advtmis_distedn_name<>'REST OF TG' order by 5");



//        echo $query;
            $res = $query->result_array();
//        echo "<pre>";
//        print_r($res);
//        exit;
            return $res;
        }
    }

    public function insertigdetails($serialno, $mainOrmini,$ym) {
      
        if ($mainOrmini == "MAIN") {
            $query = $this->db->query("select advtmis_distedncode,advtmis_pub_minieditions,advtmis_brandcode,advtmis_productcode,advtmis_clientcode,advtmis_edncode,advtmis_pub_maineditions,advtmis_pubcode,date(advtmis_insdate) as advtmis_insdate,advtmis_pubname,advtmis_ednname,advtmis_client,advtmis_product,advtmis_brand,advtmis_place,
        advtmis_agency,advtmis_maincatgname,advtmis_subcatgname,advtmis_adtype,advtmis_page,advtmis_colbw,advtmis_size,
        advtmis_space,advtmis_splpage,advtmis_mainmini
        from advtmis_publicationsspace_mainheader".$ym." inner join advtmis_master_publications on advtmis_pubcode=advtmis_pub_code
        where advtmis_srlno=$serialno");
        } elseif ($mainOrmini == "MINI") {
            $query = $this->db->query("select advtmis_distedncode,advtmis_pub_minieditions,advtmis_brandcode,advtmis_productcode,advtmis_clientcode,advtmis_edncode,advtmis_pub_maineditions,advtmis_pubcode,date(advtmis_insdate) as advtmis_insdate,advtmis_pubname,advtmis_ednname,advtmis_client,advtmis_product,advtmis_brand,advtmis_place,
        advtmis_agency,advtmis_maincatgname,advtmis_subcatgname,advtmis_adtype,advtmis_page,advtmis_colbw,advtmis_size,
        advtmis_space,advtmis_splpage,advtmis_mainmini
        from advtmis_publicationsspace_retaheader".$ym." inner join advtmis_master_publications on advtmis_pubcode=advtmis_pub_code
        where advtmis_srlno=$serialno");
        }
        $res = $query->result_array();
//        echo $this->db->last_query($query);exit;
//        echo "<pre>";
//        print_r($res);exit;
        return $res;
    }
    public function editionids($edi,$regions) {
        $regidstring="";
        $regids=explode(',',$regions[0]);
        foreach($regids as $regkey=>$regval){
            $regidstring.="'".ltrim($regids[$regkey],' ')."',";
        }
        $regionid=rtrim($regidstring, ',');
        
//        echo "<pre>";
//        print_r($regids);
//        echo $regionid;
//        exit;
        
        if ($edi == "MAIN") {
            $query = $this->db->query("select advtmis_edn_code,advtmis_edn_name from advtmis_master_editions where trim(advtmis_edn_name) in (".$regionid.")");
        } elseif ($edi == "MINI") {
            $query = $this->db->query("select advtmis_distedn_code,advtmis_distedn_name from advtmis_master_disteditions where trim(advtmis_distedn_name) in (".$regionid.")");
        }
//        echo $this->db->last_query($query);exit;
        $res = $query->result_array();
//         echo "<pre>";
//        print_r($res);
//        echo $regionid;
//        exit;
        return $res;
    }

    public function totadsspacesformodify($serialno, $mainOrmini,$ym) {
        if ($mainOrmini == "MAIN") {
            $query = $this->db->query("select count(*),sum(advtmis_space) from advtmis_publicationsspace_mainheader".$ym." where advtmis_srlno=$serialno");
        } elseif ($mainOrmini == "MINI") {
            $query = $this->db->query("select count(*),sum(advtmis_space) from advtmis_publicationsspace_retaheader".$ym." where advtmis_srlno=$serialno");
        }
        $res = $query->result_array();
        return $res;
    }

    public function totalads($date, $pub, $mainmini) {
        $ymonth = date('Ym', strtotime($date));
        if ($mainmini == 'MAIN') {
            $query = $this->db->query(" select count(*) from advtmis_publicationsspace_mainheader".$ymonth." where advtmis_pubcode=$pub and advtmis_insdate='$date'");
        } elseif ($mainmini == 'MINI') {
            $query = $this->db->query(" select count(*) from advtmis_publicationsspace_retaheader".$ymonth." where advtmis_pubcode=$pub and advtmis_insdate='$date'");
        }
        $res = $query->result_array();
        return $res;
    }

//    public function insertion($data) {
//        $pubinfor = explode("~", $data['publication11']);
//        $clientinfor = explode("~", $data['client']);
//        $productinfor = explode("~", $data['product']);
//        $brandinfor = explode("~", $data['brand']);
//        $agencyinfor = explode("~", $data['agency']);
//        $placeinfor = explode("~", $data['place']);
//        $editionsinfor = explode(",", $data['editions'][0]);
//        foreach ($editionsinfor as $keyy => $varr) {
//            $new_str = trim($editionsinfor[$keyy]);
//            $query = $this->db->query("select advtmis_edn_code,advtmis_edn_name,advtmis_edn_shortname from advtmis_master_editions where advtmis_edn_name='" . $new_str . "'");
//            $res[] = $query->result_array();
//        }
//
//        $editionname = "";
//        $editionahortname = "";
//        $editionacode = "";
//        if (!empty($res[0])) {
//            foreach ($res as $keyy => $varr) {
//                $editionname .= $res[$keyy][0]['advtmis_edn_name'];
//                $editionname .= ",";
//
//                $editionahortname .= $res[$keyy][0]['advtmis_edn_shortname'];
//                $editionahortname .= ",";
//
//                $editionacode .= $res[$keyy][0]['advtmis_edn_code'];
//                $editionacode .= ",";
//            }
//        }
//        $query = $this->db->query("update advtmis_publicationsspace_priyanka_mainheader202112 set advtmis_pubcode=$pubinfor[1],advtmis_pubname='$pubinfor[2]',
//             advtmis_clientcode=$clientinfor[0], advtmis_client='$clientinfor[1]',advtmis_entryclientcode=$clientinfor[0],advtmis_entryclient='$clientinfor[1]',advtmis_productcode=$productinfor[0],
//                 advtmis_product='$productinfor[1]',advtmis_entryproductcode=$productinfor[0],advtmis_entryproduct='$productinfor[1]',advtmis_brandcode=$brandinfor[0],advtmis_brand='$brandinfor[1]',
//             advtmis_entrybrandcode=$brandinfor[0],advtmis_entrybrand='$brandinfor[1]',advtmis_agencycode=$agencyinfor[0],advtmis_agency='$agencyinfor[1]',
//         advtmis_page=" . $data['page'] . ",advtmis_size='" . $data['size'] . "',advtmis_colbw='" . $data['color'] . "',advtmis_rgncode=$placeinfor[0],advtmis_entryrgncode=$placeinfor[0],advtmis_place='$placeinfor[1]',advtmis_rgcd=$placeinfor[2],
//             advtmis_rgcdname='$placeinfor[3]',advtmis_mainmini='" . $data['mainmini11'] . "',advtmis_adtype='" . $data['addtype'] . "',advtmis_edncode='$editionacode' ,advtmis_ednname='$editionahortname',
//             advtmis_splpage='" . $data['splpage1'] . "' where advtmis_blno=" . $data['srlno'] . "");
//        echo "updated successfully";
//
//        echo "<pre>";
//        print_r($data);
//        exit;
//        $querydelete = $this->db->query("delete from advtmis_priyanka_publicationsspace_main202112 where advtmis_srlno=$srlno ");
//        foreach ($res as $key => $val) {
//
//            $query = $this->db->query("select min(advtmis_srlno) as srlno,min(advtmis_blno) as blno from advtmis_priyanka_publicationsspace_main202112 where advtmis_blno=$srlno ");
//            $res1 = $query->result_array();
//        }
//    }

    public function totalspaces($date, $pub, $mainmini) {
        $ymonth = date('Ym', strtotime($date));
        if ($mainmini == 'MAIN') {
            $query = $this->db->query(" select sum(advtmis_space) from advtmis_publicationsspace_mainheader".$ymonth." where advtmis_pubcode=$pub and advtmis_insdate='$date'");
        } elseif ($mainmini == 'MINI') {
            $query = $this->db->query(" select sum(advtmis_space) from advtmis_publicationsspace_retaheader".$ymonth." where advtmis_pubcode=$pub and advtmis_insdate='$date'");
        }
//        echo $query;
        $res = $query->result_array();
//        echo "<pre>";
//        print_r($res);
        return $res;
    }

}

?>