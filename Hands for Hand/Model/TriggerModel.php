<?php  
include '../Model/DBConn.php';
 function trigger1($rpid,$budget){
    $conn = connection();
    $sql = oci_parse($conn,"update REQUESTED_PRODUCT set budget = $budget where RP_ID = '$rpid'") ;
    $res = oci_execute($sql);
    return $res;
 }
 function trigger2($aid,$mblno){
    $conn = connection();
    $sql = oci_parse($conn,"update admin set A_MBL = '$mblno' where A_ID = '$aid'") ;
    $res = oci_execute($sql);
    return $res;
 }
 function trigger3($pid,$amount){
    $conn = connection();
    $sql = oci_parse($conn,"update payment set AMOUNT = $amount where P_ID = '$pid'") ;
    $res = oci_execute($sql);
    return $res;
 }
 function trigger4($bid,$mbln){
   $conn = connection();
   $sql = oci_parse($conn,"update borrower set B_PW = '$mbln' where B_ID = '$bid'") ;
   $res = oci_execute($sql);
   return $res;
}
function t3(){
   $conn = connection();
   $sql = oci_parse($conn,"alter trigger trigger_payment disable") ;
   $res = oci_execute($sql);
   return $res;
}
function t4(){
   $conn = connection();
   $sql = oci_parse($conn,"alter trigger trigger_payment enable") ;
   $res = oci_execute($sql);
   return $res;
}
function t5(){
   $conn = connection();
   $sql = oci_parse($conn,"alter trigger trigger_rpBudgets disable") ;
   $res = oci_execute($sql);
   return $res;
}
function t6(){
   $conn = connection();
   $sql = oci_parse($conn,"alter trigger trigger_rpBudgets enable") ;
   $res = oci_execute($sql);
   return $res;
}

 function logShow1(){
    $conn = connection();
    $sql = oci_parse($conn,"select * from adminMBL_log") ;
    $res = oci_execute($sql);
    return $sql;
 }
?>