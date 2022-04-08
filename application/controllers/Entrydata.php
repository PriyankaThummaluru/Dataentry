
<?php

class Entrydata extends CI_Controller {

    public function __construct() {
        parent::__construct();
//        $this->load->library('excel');
        $this->load->model('Entrydata_model');
        $this->load->database();
        ini_set('memory_limit', '1024M');
        ini_set('max_execution_time', '0');
        $this->load->helper('url');
        $this->load->helper(array('cookie', 'url'));
        defined('site_url') OR define('site_url', 'http://172.17.12.129/Dataentry/');
    }

    function removeSplChars($data) {
        $str = strip_tags(html_entity_decode($data));
        $str = htmlspecialchars($str);
        $str = trim(htmlentities($str));
        $str = str_replace("-", ' ', $str);
//        $str = str_replace("&zwnj;", '', $str);
        $str = str_replace("&nbsp;", ' ', $str);
        $str = str_replace("&times;", '', $str);
        $str = str_replace("\xE2\x80\x8C", "", $str);
        $str = str_replace("\xE2\x80\x8B", "", $str);
        $str = str_replace("\r", "", $str);
        $str = str_replace("\n", "", $str);
        $str = str_replace("\xc2\xa0", "", $str);
        $str = trim($str, " -\t\n\r\0\x0B\xc2\xa0");
        return $str;
    }

    public function display() {
//        echo $data;
//          set_cookie('usernamepwd', $data,'3600');
          $data = get_cookie('usernamepwd');
//          exit;
//          exit;
        
         $yearmonthfortable = get_cookie('tablenamecheck');
         
//        echo $data;exit;
         $userinfo = explode("~", $data);
//         echo "<pre>";
//         print_r($userinfo);exit;
         $user['user']=$userinfo[0];
         $user['pwd']=$userinfo[1];
         $userinformation['user'] = $this->Entrydata_model->userDetails($user,$yearmonthfortable);
         $userinformation['main'] = $this->Entrydata_model->dayclosedetailsmain($yearmonthfortable);
         $userinformation['mini'] = $this->Entrydata_model->dayclosedetailsmini($yearmonthfortable);
         $userinformation['pubnamemain'] = $this->Entrydata_model->pubnamesmain($yearmonthfortable);
         $userinformation['pubnamemini'] = $this->Entrydata_model->pubnamesmain($yearmonthfortable);
         $userinformation['unitnames'] = $this->Entrydata_model->unitnamesford($yearmonthfortable);
//         echo "<pre>";
//         print_r($userinformation);exit;
        $this->load->view('newDataEntry_view',$userinformation);
    }

//    public function disafter(){
//        
//    }
    public function login() {
//        set_cookie('myfirstcookie','bharu@priya@manju@nageswarreddy','3600'); 
//         $val['cookievalue']= get_cookie('myfirstcookie'); 
        $this->load->view('Dashboard_view');
    }

    public function deleteid($name) {

        if ($name) {
            $nameinfo = explode("~", $name);
            $serialno = $nameinfo[1];
            $mainormini = $nameinfo[2];
//         echo "<pre>";
//         print_r($nameinfo);exit;
//                     window.location.href='" . base_url() . "/Entrydata/display';
            $userdetails = $this->Entrydata_model->deletefun($serialno, $mainormini);

//            echo "<script>alert('Record Deleted Succesfully');
//                    window.".history.go(-2)."
//                </script>";

            echo "<script>alert('Record Deleted Succesfully');
                      window.history.go(-2); 
                  
                </script>";
        }
    }



    public function displayEntry($name) {
//        echo "<pre>";
//        print_r($name);exit;
        if ($name == 'priymulti') {
//            echo $name;
            $data2 = $this->input->post();
//            echo "<pre>";
//            print_r($data2);exit;
            $data2['namee'] = $name;
            
//            if (!empty($data2)) {
//         echo "<pre>";
//         print_r($data2);exit;
//                $data['filterdata']=$data2;
                
//                $data['publication'] = $this->Entrydata_model->publication();
//                $data['updatingdetails'] = $this->Entrydata_model->updatemultipub($data2);
                $data2['agency'] = $this->Entrydata_model->agency();
                 $data2['place'] = $this->Entrydata_model->place();
            $data2['client'] = $this->Entrydata_model->client();
             $data2['maincategory'] = $this->Entrydata_model->maincategory();
//             echo "<pre>";
//             print_r( $data['updatingdetails'] );exit;
//                $this->load->view('Entry', $data);
//                 $data3 = $this->input->post();
//                 if(!empty($data3)){
//                      $data['place'] = $this->Entrydata_model->multipleupdate($data3);
////                 echo "<pre>";
////                 print_r($data3);exit;
//                 }
                 $this->load->view('Entry', $data2);
                 
            }
          
        
//        ECHO IDOFUSER;EXIT;
//        echo $name;exit;
        elseif ($name == "bhargavi") {

            $data['publication'] = $this->Entrydata_model->publication();
            $data['maincategory'] = $this->Entrydata_model->maincategory();
           
//            $data['subcategory'] = $this->Entrydata_model->subcategory();
            $data['place'] = $this->Entrydata_model->place();
            $data['client'] = $this->Entrydata_model->client();
            $data['agency'] = $this->Entrydata_model->agency();
            $data['addtype'] = $this->Entrydata_model->addtype();
           

            $data['namee'] = $name;
            $data1 = $this->input->post();


            if (!empty($data1)) {
                
//                echo date("d-m-Y");
               
//                echo "<pre>";
//            print_r($data1);exit;
                $mainormini = $data1['mainmini'];
                $insertdata = $this->Entrydata_model->insertquery($data1, $mainormini);
                $data['editionsaftersave'] = $this->Entrydata_model->editionids($mainormini,$data1['editions']);
                
                $data['dateaftersave']=$data1['date'];
                $data['publicationaftersave']=$data1['publication'];
                $data['mainminiaftersave']=$data1['mainmini'];
//                $data['editionsaftersave']=$data1['editions'];
                
                $idofreg="";
                
                foreach($data['editionsaftersave'] as $datakey=>$dataval){
                    if($mainormini=='MAIN'){
                    $idofreg .=$data['editionsaftersave'][$datakey]['advtmis_edn_code'].",";
                    }
                    else{
                        $idofreg .=$data['editionsaftersave'][$datakey]['advtmis_distedn_code'].",";
                    }
                    
                }
//                echo $idofreg;exit;
                $data['editionids']=$idofreg;
                $data['nameaftersave'] = "Bhargaviaftersave";
                
                
//                echo "<pre>";
//                print_r($data['editionsaftersave']);
//               exit;
                $this->load->view('Entryaftersave', $data);
//                exit;
                
//                  echo "<script>alert('Inserted Succesfully');
//                     window.location.href='" . base_url() . "/Entrydata/displayEntry/bhargavi';
//                       
//                </script>";
//                   $this->load->view('Entry', $dataaftersave);
            
            }
//            echo "<pre>";
//            print_r($data);exit;
            else
            $this->load->view('Entry', $data);
        
        } 
        else {

            $data['namee'] = $name;

            $nameinfo = explode("~", $name);
            $serialno = $nameinfo[1];
            $mainOrmini = $nameinfo[2];
//             echo "<pre>";
//                print_r($nameinfo);
//                exit;
//              echo "<pre>";
//              print_r($data);
//              exit;
              $ym = date('Ym', strtotime($nameinfo[3]));

            $data['publication'] = $this->Entrydata_model->publication();
            $data['maincatname'] = $this->Entrydata_model->maincategory();
            $data['place'] = $this->Entrydata_model->place();
            $data['client'] = $this->Entrydata_model->client();
            $data['agency'] = $this->Entrydata_model->agency();
            $data['addtype'] = $this->Entrydata_model->addtype();
            
//            echo $ym;exit;
            $data['dropdowndata'] = $this->Entrydata_model->insertigdetails($serialno, $mainOrmini,$ym);
            $data['adsandspaces'] = $this->Entrydata_model->totadsspacesformodify($serialno, $mainOrmini,$ym);
             $data['maincategory'] = $this->Entrydata_model->subname();
             
//              echo "<pre>";
          
//            print_r( $data['adsandspaces']);exit;

            $data1 = $this->input->post();

            if (!empty($data1)) {
//                echo "jdfsjfkdjf";
//                 echo "<pre>";
//                 echo "successs";
//            print_r($data1['date']);exit;
//            updatededitions
                $nameinf = explode("~", $name);
               
                $data1['srlno'] = $nameinf[1];
                $serialno = $nameinf[1];
                $mainormini = $nameinf[2];
                if (!empty($data1['editions'])) {

//                  echo "<pre>";
//                  echo "sjdklfj";
//            print_r($data1);exit;
//                echo "delete and insert";
                    $insertdata = $this->Entrydata_model->updatequery($data1, $mainormini, $serialno);
//                    echo "<pre>";
//                    echo "injsklfd";
//                    print_r($insertdata);exit;
                    echo "<script>alert('Updated Succesfully');
                      window.history.go(-2); 
                  
                </script>";
                } else {
//                    echo "<pre>";
//            print_r($data1);exit;

                    $this->Entrydata_model->deletefun($data1['date'],$serialno, $mainormini);
                    $insertdata = $this->Entrydata_model->insertquery($data1, $mainormini);
                    echo "<script>alert('Updated Succesfully');
                      window.history.go(-2); 
                  
                </script>";
                }
            }
//            echo "<pre>";
//            print_r($data);exit;
            $this->load->view('Entry', $data);
        }
    }
public function updatemultipublic(){
     $this->load->database();
     $data2 = $this->input->post();
//     echo "<pre>";
//     print_r($data2);
//     exit;
      $data1['detailsofmulti'] = $this->Entrydata_model->multipleupdate($data2);
//      echo "<pre>";
//      print_r($data1);exit;
      
}
    public function displayViewEdit() {
        $dataview['publication'] = $this->Entrydata_model->publicationformodi();
        $this->load->view('view-Edit', $dataview);
    }

    public function displayMultiEdit() {
        $dataview['publication'] = $this->Entrydata_model->publicationformodi();
        $dataview['maincategory'] = $this->Entrydata_model->maincategory();
        $dataview['client'] = $this->Entrydata_model->client();
        $this->load->view('Multi-Edit', $dataview);
    }

    public function ajaxsize() {
        $this->load->database();
        $this->load->model("Entrydata_model");
        $sizepage = $this->input->post('size');
        $size = $sizepage;
//        preg_match_all('/([a-zA-Z]+)/', $size, $matches);
        preg_match_all('/([0-9]+|[x,X]+)/', $size, $matches);
//        echo "<pre>";
//        print_r($matches);
        if (!empty($matches[0][0]) & !empty($matches[0][1]) & !empty($matches[0][2])) {
            $firstnum = $matches[0][0];

            $mul = $matches[0][1];

            $lastnum = $matches[0][2];


            $sqrvalue = $firstnum * $lastnum;
            $value = $sqrvalue;
        } else {
            $value = 00;
        }

//      echo $value;
//        else{
//             echo "<script>alert('Updated Succesfully');
//                </script>";
//        }
        echo json_encode($value);
    }

    public function ajaxdateformodification() {
//        echo "message";exit;
        $this->load->database();
        $this->load->model("Entrydata_model");
       
//        $date1 = $this->input->post('Date');
        $fromdate = $this->input->post('fromdate');
         $yearmon = date('Ym', strtotime($fromdate));
//         echo $fromdate;
          set_cookie('yearmonth', $yearmon, '3600');
        $todate = $this->input->post('todate');
        $pubtype = $this->input->post('pubtype');
        $mainmini = $this->input->post('mainmini');
        $fdate = date('Y-m-d', strtotime($fromdate));
        $tdate = date('Y-m-d', strtotime($todate));
//        echo $date;exit;
//        echo $date;
        $data1['datashowformodifi'] = $this->Entrydata_model->headerDisplay($fdate, $tdate, $pubtype, $mainmini);
        $data1['editionsdisplay'] = $this->Entrydata_model->editionsdisplay($fdate);
        $data1['publication'] = $this->Entrydata_model->publicationformodi();
        $data1['place'] = $this->Entrydata_model->place();
        $data1['client'] = $this->Entrydata_model->client();
        $data1['agency'] = $this->Entrydata_model->agency();
        $data1['addtype'] = $this->Entrydata_model->addtype();
        $this->load->view('datashowscreen', $data1);
    }

    public function ajaxmodification() {
        $this->load->database();
        $this->load->model("Entrydata_model");
        $radiotype = $this->input->post('radiotype');
        $publication = $this->input->post('publication');
        $modisplpages = $this->Entrydata_model->modisplpage($publication, $radiotype);
        echo json_encode($modisplpages);
//        echo $maincat;
    }

    public function ajaxmulticlient() {
        $this->load->database();
        $this->load->model("Entrydata_model");
        $allclient = $this->Entrydata_model->clientmulti();
//        echo "<pre>";
//        print_r($allclient);
//        exit;
        echo json_encode($allclient);
    }

    public function ajaxmultiproduct() {
        $this->load->database();
        $this->load->model("Entrydata_model");
        $allproduct = $this->Entrydata_model->productmulti();
//         echo "<pre>";
//        print_r($allproduct);
//        exit;
        echo json_encode($allproduct);
    }

    public function ajaxmultibrand() {
        $this->load->database();
        $this->load->model("Entrydata_model");
        $allbrand = $this->Entrydata_model->brandmulti();
//         echo "<pre>";
//        print_r($allbrand);
//        exit;
        echo json_encode($allbrand);
    }

    public function ajaxsplpages() {
        $this->load->database();
        $this->load->model("Entrydata_model");
        $publication = $this->input->post('publiccode');
        $radio = $this->input->post('radiotype');
        $splpages = $this->Entrydata_model->splpage($publication, $radio);
        echo json_encode($splpages);
    }

    public function ajaxtotalads() {
        $this->load->database();
        $this->load->model("Entrydata_model");
        $date1 = $this->input->post('date');
        $date = date('Y-m-d', strtotime($date1));
        $publication = $this->input->post('public');
        $mainmini = $this->input->post('mainmini');
        $adsTotal = $this->Entrydata_model->totalads($date, $publication, $mainmini);
        $count = $adsTotal[0]['count'];
        echo json_encode($count);
    }

    public function ajaxtotalsizespace() {
        $this->load->database();
        $this->load->model("Entrydata_model");
        $date1 = $this->input->post('date');
        $date = date('Y-m-d', strtotime($date1));
        $publication = $this->input->post('public');
        $mainmini = $this->input->post('mainmini');
        $spaceTotal = $this->Entrydata_model->totalspaces($date, $publication, $mainmini);
        $sum = $spaceTotal[0]['sum'];
        echo json_encode($sum);
    }

    public function ajaxproduct() {
        $this->load->database();
        $this->load->model("Entrydata_model");
        $client = $this->input->post('client');
        $product = $this->Entrydata_model->product($client);
        echo json_encode($product);
    }
    
    
    public function loginuserinfor(){
        $data['user'] = $this->input->post('user');
         $data['pwd'] = $this->input->post('pwd');
         
         $passcheckdetails = $this->Entrydata_model->userDetails($data);
          echo json_encode($passcheckdetails);
    }
    

    public function ajaxpwdcheck() {
        $data = $this->input->post();
        $tabledatecheck = get_cookie('tablenamecheck');
//        echo "<pre>";
//        print_r($data);
//        exit;
        $data['user'] = $this->input->post('user');
        $data['pwd'] = $this->input->post('pwd');
        set_cookie('usernamecookie', $data['user'], '3600');
//         $val['cookievalue']= get_cookie('usernamecookie'); 
        $passcheckdetails = $this->Entrydata_model->userDetails($data,$tabledatecheck);
//         echo "<pre>";
//         print_r($data);
//         print_r($passcheckdetails);
//         exit;
        if ($passcheckdetails[0]['userpwd'] == $passcheckdetails[0]['advtmis_user_password']) {
            echo json_encode($passcheckdetails);
        } else {
            echo json_encode(0);
        }
//         echo "<pre>";
//         print_r($passcheckdetails);
//        
//         echo json_encode($passcheckdetails);
    }

    public function ajaxbrand() {
        $this->load->database();
        $this->load->model("Entrydata_model");
        $product = $this->input->post('product');
        $clientc = $this->input->post('client');
        $brand = $this->Entrydata_model->brand($product, $clientc);

        echo json_encode($brand);
    }

    public function ajaxdisplay() {
        $this->load->database();
        $this->load->model("Entrydata_model");
        $maincat = $this->input->post('maincat');
        $subcat = $this->Entrydata_model->subcategory($maincat);
        echo json_encode($subcat);
    }
    
    public function ajaxmultishow(){
         $this->load->database();
        $this->load->model("Entrydata_model");
         $data2['fromdate'] = $this->input->post('fromdate');
          $data2['todate'] = $this->input->post('todate');
          $data2['pubtype'] = $this->input->post('pubtype');
          $data2['mainmini'] = $this->input->post('mainmini');
          $data2['typefilter'] = $this->input->post('typefilter');
          $data2['liketype'] = $this->input->post('liketype');
          $data2['maincate'] = $this->input->post('maincate');
    
    
     $data1['detailsofmulti'] = $this->Entrydata_model->updatemultipub($data2);
//     echo json_encode($detailsofmulti);
       $this->load->view('datashowscreen', $data1);
}
public function multiupdate(){
     $this->load->database();
      $data2['checkedbills'] = $this->input->post('checkedbills');
    
      echo "<pre>";
      print_r($data2);exit;
}

    public function ajaxeditions() {
        $this->load->database();
        $this->load->model("Entrydata_model");
        $publication = $this->input->post('publication');
        $radiotype = $this->input->post('radiotype');
//        echo $publication;exit;
        $editions = $this->Entrydata_model->editions($publication, $radiotype);
        if ($radiotype == 'MAIN') {
            $arrayof = array();
            $ednsArr = array();
//            echo "<pre>";
//            print_r($editions);exit;
            foreach ($editions as $key => $var) {
                if ($editions[$key]['advtmis_edn_unitcode'] <= 19) {
                    
                    
                       if ($editions[$key]['advtmis_edn_code'] == 101) {
                        $grethydid = $editions[$key]['advtmis_edn_code'];
                        $grethydname = $editions[$key]['advtmis_edn_name'];
                    }
                    if ($editions[$key]['advtmis_edn_code'] >= 101 && $editions[$key]['advtmis_edn_code'] < 200) {
                        $idgrthydarr[$editions[$key]['advtmis_edn_code']] = $editions[$key]['advtmis_edn_name'];
                    }
                    if ($editions[$key]['advtmis_edn_code'] == 600) {
                        $telanganalid = $editions[$key]['advtmis_edn_code'];
                        $telanganalname = $editions[$key]['advtmis_edn_name'];
                    }
                    if ($editions[$key]['advtmis_edn_code'] > 600 && $editions[$key]['advtmis_edn_code'] < 700) {
                        $nametelanganaarr[$editions[$key]['advtmis_edn_code']] = $editions[$key]['advtmis_edn_name'];
                    }

                    if ($editions[$key]['advtmis_edn_code'] == 200) {
                        $centralid = $editions[$key]['advtmis_edn_code'];
                        $centralname = $editions[$key]['advtmis_edn_name'];
                    }

                    if ($editions[$key]['advtmis_edn_code'] > 200 && $editions[$key]['advtmis_edn_code'] < 300) {
                        $idcentralarr[$editions[$key]['advtmis_edn_code']] = $editions[$key]['advtmis_edn_name'];
                    }

                    if ($editions[$key]['advtmis_edn_code'] == 300) {
                        $northid = $editions[$key]['advtmis_edn_code'];
                        $northname = $editions[$key]['advtmis_edn_name'];
                    }
                    if ($editions[$key]['advtmis_edn_code'] > 300 && $editions[$key]['advtmis_edn_code'] < 400) {
                        $idnortharr[$editions[$key]['advtmis_edn_code']] = $editions[$key]['advtmis_edn_name'];
//                      $namenortharr[]=$editions[$key]['advtmis_edn_name'];
                    }
                    if ($editions[$key]['advtmis_edn_code'] == 400) {
                        $rayalid = $editions[$key]['advtmis_edn_code'];
                        $rayalname = $editions[$key]['advtmis_edn_name'];
                    }
                    if ($editions[$key]['advtmis_edn_code'] > 400 && $editions[$key]['advtmis_edn_code'] < 500) {
                        $idrayalarr[$editions[$key]['advtmis_edn_code']] = $editions[$key]['advtmis_edn_name'];
                    }

                 
                }
            }
            
             if (!empty($grethydid) && !empty($grethydname) ) {
                $ednsArr[$grethydid . '~' . $grethydname] = $idgrthydarr;
            }



            if (!empty($telanganalid) && !empty($telanganalname)) {
                $ednsArr[$telanganalid . '~' . $telanganalname] = $nametelanganaarr;
            }
            if (!empty($centralid) && !empty($centralname)) {
                $ednsArr[$centralid . '~' . $centralname] = $idcentralarr;
            }


            if (!empty($northid) && !empty($northname)) {
                $ednsArr[$northid . '~' . $northname] = $idnortharr;
            }


            if (!empty($rayalid) && !empty($rayalname)) {
                $ednsArr[$rayalid . '~' . $rayalname] = $idrayalarr;
            }
//echo "<pre>";
//print_r($grethydid);exit;

           



            foreach ($ednsArr as $arrkey => $arrval) {
                $regions[$arrkey] = explode("~", $arrkey);

                $regarray[$arrkey] = array("id" => $regions[$arrkey][0],
                    "title" => $regions[$arrkey][1]);
            }



            foreach ($ednsArr as $arrkey => $arrval) {
                foreach ($arrval as $subarrkey => $subarrval) {
                    $regions[$arrkey] = explode("~", $arrkey);

                    $subregarray[$arrkey][$subarrkey] = array(
                        "id" => $subarrkey,
                        "title" => $arrval[$subarrkey],
                    );
                }
            }
             

            if (!empty($subregarray)) {
                foreach ($subregarray as $subkey => $subval) {
//                $mainarr[$subkey]=$regarray[$subkey];
                    foreach ($subval as $innkey => $innval) {

                        $mainarr[$subkey]['subs'][] = $subregarray[$subkey][$innkey];
                    }
                }
            }
            $finalarr = array("id" => 0, "title" => "select all");
            if (!empty($regarray)) {
                foreach ($regarray as $mainkey => $mainval) {
                    $finalarr['subs'][$mainkey] = $mainarr[$mainkey];
                }
            }
            
//             echo "<pre>";
//        print_r($finalarr);
//        exit;
            $comarray['id'] = 00;
            $comarray['title'] = "select all";

            if (!empty($finalarr['subs'])) {
                foreach ($finalarr['subs'] as $finalarrkey => $finalarrval) {

                    $comarray['subs'][] = array_merge($finalarr, $regarray[$finalarrkey], $finalarr['subs'][$finalarrkey]);
                }
//                  echo "<pre>";
//        print_r($comarray);
//        exit;
            } else {
                $m = 0;
                foreach ($editions as $spledn => $splval) {
                    if ($editions[$spledn]['advtmis_edn_unitcode'] <= 19) {
                        $comarray['subs'][$m]['id'] = $editions[$spledn]['advtmis_edn_code'];
                        $comarray['subs'][$m]['title'] = $editions[$spledn]['advtmis_edn_name'];
                        $m++;
                    } elseif ($editions[$spledn]['advtmis_edn_unitcode'] > 19) {
                        $comarray['subs'][$m]['id'] = $editions[$spledn]['advtmis_edn_code'];
                        $comarray['subs'][$m]['title'] = $editions[$spledn]['advtmis_edn_name'];
                        $m++;
                    } elseif ($editions[$spledn]['advtmis_edn_unitcode'] > 19) {
                        $comarray['subs'][$m]['id'] = $editions[$spledn]['advtmis_edn_code'];
                        $comarray['subs'][$m]['title'] = $editions[$spledn]['advtmis_edn_name'];
                        $m++;
                    }
                }
            }
//              echo "<pre>";
//        print_r($comarray);
//        exit;
        } 
        
      
        
        elseif ($radiotype == 'MINI') {
            $arrayof = array();
            $ednsArr = array();
//            echo "<pre>";
//            print_r($editions);
//             foreach ($editions as $key => $var) {
//              if ($editions[$key]['advtmis_distedn_code'] == 60000) {
//                        $telanganalid = $editions[$key]['advtmis_distedn_code'];
//                        $telanganalname = $editions[$key]['advtmis_distedn_name'];
//                    }
//                    if ($editions[$key]['advtmis_distedn_code'] > 60000 && $editions[$key]['advtmis_distedn_code'] < 70000) {
//                        $nametelanganaarr[$editions[$key]['advtmis_distedn_code']] = $editions[$key]['advtmis_distedn_name'];
//                    }
//                    }
//                    echo "<pre>";
//                    print_r($nametelanganaarr);
//            exit;
            foreach ($editions as $key => $var) {
//                echo "<pre>";
//                print_r($editions);exit;
                if ($editions[$key]['advtmis_distedn_unitcode'] <= 19) {
                    if ($editions[$key]['advtmis_distedn_code'] == 2000) {
                        $centralid = $editions[$key]['advtmis_distedn_code'];
                        $centralname = $editions[$key]['advtmis_distedn_name'];
                    }
                    if ($editions[$key]['advtmis_distedn_code'] > 20000 && $editions[$key]['advtmis_distedn_code'] < 30000) {
                        $idcentralarr[$editions[$key]['advtmis_distedn_code']] = $editions[$key]['advtmis_distedn_name'];
                    }
                    if ($editions[$key]['advtmis_distedn_code'] == 30000) {
                        $northid = $editions[$key]['advtmis_distedn_code'];
                        $northname = $editions[$key]['advtmis_distedn_name'];
                    }
                    if ($editions[$key]['advtmis_distedn_code'] > 30000 && $editions[$key]['advtmis_distedn_code'] < 40000) {
                        $idnortharr[$editions[$key]['advtmis_distedn_code']] = $editions[$key]['advtmis_distedn_name'];
                    }
                    if ($editions[$key]['advtmis_distedn_code'] == 40000) {
                        $rayalid = $editions[$key]['advtmis_distedn_code'];
                        $rayalname = $editions[$key]['advtmis_distedn_name'];
                    }
                    if ($editions[$key]['advtmis_distedn_code'] > 40000 && $editions[$key]['advtmis_distedn_code'] < 50000) {
                        $idrayalarr[$editions[$key]['advtmis_distedn_code']] = $editions[$key]['advtmis_distedn_name'];
                    }

                    if ($editions[$key]['advtmis_distedn_code'] == 10100) {
                        $grethydid = $editions[$key]['advtmis_distedn_code'];
                        $grethydname = $editions[$key]['advtmis_distedn_name'];
                    }
                    if ($editions[$key]['advtmis_distedn_code'] >= 10100 && $editions[$key]['advtmis_distedn_code'] < 20000) {
                        $idgrthydarr[$editions[$key]['advtmis_distedn_code']] = $editions[$key]['advtmis_distedn_name'];
                    }
                    if ($editions[$key]['advtmis_distedn_code'] == 60000) {
                        $telanganalid = $editions[$key]['advtmis_distedn_code'];
                        $telanganalname = $editions[$key]['advtmis_distedn_name'];
                    }
                    if ($editions[$key]['advtmis_distedn_code'] > 60000 && $editions[$key]['advtmis_distedn_code'] < 70000) {
                        $nametelanganaarr[$editions[$key]['advtmis_distedn_code']] = $editions[$key]['advtmis_distedn_name'];
                    }
                }
            }
              if (!empty($grethydid) && !empty($grethydname) && !empty($idgrthydarr)) {
                $ednsArr[$grethydid . '~' . $grethydname] = $idgrthydarr;
            }
            if (!empty($telanganalid) && !empty($telanganalname)) {
                $ednsArr[$telanganalid . '~' . $telanganalname] = $nametelanganaarr;
            }
            if (!empty($centralid) && !empty($centralname)) {
                $ednsArr[$centralid . '~' . $centralname] = $idcentralarr;
            }
            if (!empty($northid) && !empty($northname)) {
                $ednsArr[$northid . '~' . $northname] = $idnortharr;
            }
            if (!empty($rayalid) && !empty($rayalname)) {
                $ednsArr[$rayalid . '~' . $rayalname] = $idrayalarr;
            }
          

            foreach ($ednsArr as $arrkey => $arrval) {
                $regions[$arrkey] = explode("~", $arrkey);
                $regarray[$arrkey] = array("id" => $regions[$arrkey][0],
                    "title" => $regions[$arrkey][1]);
            }


            foreach ($ednsArr as $arrkey => $arrval) {
                foreach ($arrval as $subarrkey => $subarrval) {
                    $regions[$arrkey] = explode("~", $arrkey);

                    $subregarray[$arrkey][$subarrkey] = array(
                        "id" => $subarrkey,
                        "title" => $arrval[$subarrkey],
                    );
                }
            }
            if (!empty($subregarray)) {
                foreach ($subregarray as $subkey => $subval) {
                    foreach ($subval as $innkey => $innval) {
                        $mainarr[$subkey]['subs'][] = $subregarray[$subkey][$innkey];
                    }
                }
            }
            $finalarr = array("id" => 0, "title" => "select all");
            if (!empty($regarray)) {
                foreach ($regarray as $mainkey => $mainval) {
                    $finalarr['subs'][$mainkey] = $mainarr[$mainkey];
                }
            }
            $comarray['id'] = 00;
            $comarray['title'] = "select all";
            if (!empty($finalarr['subs'])) {
                foreach ($finalarr['subs'] as $finalarrkey => $finalarrval) {

                    $comarray['subs'][] = array_merge($finalarr, $regarray[$finalarrkey], $finalarr['subs'][$finalarrkey]);
                }
            } else {
                $m = 0;
                foreach ($editions as $spledn => $splval) {
                    if ($editions[$spledn]['advtmis_distedn_unitcode'] <= 19) {
                        $comarray['subs'][$m]['id'] = $editions[$spledn]['advtmis_distedn_code'];
                        $comarray['subs'][$m]['title'] = $editions[$spledn]['advtmis_distedn_name'];
                        $m++;
                    } elseif ($editions[$spledn]['advtmis_distedn_unitcode'] > 19) {
                        $comarray['subs'][$m]['id'] = $editions[$spledn]['advtmis_distedn_code'];
                        $comarray['subs'][$m]['title'] = $editions[$spledn]['advtmis_distedn_name'];
                        $m++;
                    }
                }
            }
        }

        if (empty($comarray)) {
            $comarray['id'] = 00;
            $comarray['title'] = "select all";
        }
        header("content-type:application/json");
        echo json_encode($comarray);
    }

    public function ajaxeditionsstate() {
        $this->load->database();
        $this->load->model("Entrydata_model");
        $publication = $this->input->post('publication');
        $radiotype = $this->input->post('radiotype');
        $regioncode = $this->input->post('regioncode');
        $editions1 = $this->Entrydata_model->editions11($publication, $radiotype, $regioncode);
        echo json_encode($editions1);
    }

    public function ajaxinsertingData() {

        $this->load->database();
        $this->load->model("Entrydata_model");

        $editionsinfor[] = $this->input->post('editionsinfor');
        $entryrgncode = $this->input->post('entryrgncode');
        $rgcd = $this->input->post('rgcd');
        $rgcdname = $this->input->post('rgcdname');
        $srlno = $this->input->post('srlno');
        $clientcode = $this->input->post('clientcode');
        $clientname = $this->input->post('clientname');
        $productcode = $this->input->post('productcode');
        $productname = $this->input->post('productname');
        $brandcode = $this->input->post('brandcode');
        $brandname = $this->input->post('brandname');
        $agencycode = $this->input->post('agencycode');
        $agencyname = $this->input->post('agencyname');
        $page = $this->input->post('page');
        $size = $this->input->post('size');
        $pagesize = $this->input->post('pagesize');
        $color = $this->input->post('color');
        $place = $this->input->post('place');
        $mainmini = $this->input->post('mainmini');
        $addtype = $this->input->post('addtype');
        $splpage = $this->input->post('splpage');
        $publicationcode = $this->input->post('publicationcode');
        $publicationname = $this->input->post('publicationname');
        $date = $this->input->post('date');
        $insdate = date('Y-m-d', strtotime($date));
        $editions = $this->Entrydata_model->insertion($editionsinfor, $entryrgncode, $rgcd, $rgcdname, $srlno, $clientcode, $clientname, $productcode, $productname, $brandcode, $brandname, $agencycode, $agencyname,
                $page, $size, $pagesize, $color, $place, $mainmini, $addtype, $splpage, $publicationcode, $publicationname, $insdate);

        echo json_encode($editions);
    }

}

?>