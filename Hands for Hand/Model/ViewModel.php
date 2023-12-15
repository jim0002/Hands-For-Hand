<?php
include '../Model/DBConn.php';
function view1(){
    $conn = connection();
    $sql = oci_parse($conn,"select * from view_requestedProductCat ") ;
    $res = oci_execute($sql);
    return $sql;
}
function view2(){
    $conn = connection();
    $sql = oci_parse($conn,"select * from view_ownerPaymentGreater500 ") ;
    $res = oci_execute($sql);
    return $sql;
}

function view3(){
    $conn = connection();
    $sql = oci_parse($conn,"select * from view_shareBreakdown ") ;
    $res = oci_execute($sql);
    return $sql;
}

function view4(){
    $conn = connection();
    $sql = oci_parse($conn,"select * from view_ownerComplaints ") ;
    $res = oci_execute($sql);
    return $sql;
}
?>