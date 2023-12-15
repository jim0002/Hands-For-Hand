<?php
include'../Model/DBConn.php';
function AdminShow(){
    $conn = connection();
     $sql = oci_parse($conn,"select * from admin") ;
     $res = oci_execute($sql);
     return $sql;
}

function CUSTOMER_SUPPORTShow(){
    $conn = connection();
     $sql = oci_parse($conn,"select * from CUSTOMER_SUPPORT") ;
     $res = oci_execute($sql);
     return $sql;
}

function BorrowerShow(){
    $conn = connection();
     $sql = oci_parse($conn,"select * from Borrower") ;
     $res = oci_execute($sql);
     return $sql;
}
function OwnerShow(){
    $conn = connection();
     $sql = oci_parse($conn,"select * from Owner") ;
     $res = oci_execute($sql);
     return $sql;
}
function CATEGORYShow(){
    $conn = connection();
     $sql = oci_parse($conn,"select * from CATEGORY") ;
     $res = oci_execute($sql);
     return $sql;
}
function CustomerShow(){
    $conn = connection();
     $sql = oci_parse($conn,"select * from Customer") ;
     $res = oci_execute($sql);
     return $sql;
}
function pMethodShow(){
    $conn = connection();
     $sql = oci_parse($conn,"select * from PAYMENT_METHOD") ;
     $res = oci_execute($sql);
     return $sql;
}

function EmployeeShow(){
    $conn = connection();
     $sql = oci_parse($conn,"select * from EMPLOYEE") ;
     $res = oci_execute($sql);
     return $sql;
}

function ComplaintsShow(){
    $conn = connection();
     $sql = oci_parse($conn,"select * from COMPLAINTS ") ;
     $res = oci_execute($sql);
     return $sql;
}

function RequestedProductsShow(){
    $conn = connection();
     $sql = oci_parse($conn,"select * from REQUESTED_PRODUCT ") ;
     $res = oci_execute($sql);
     return $sql;
}

function RentedProductsShow(){
    $conn = connection();
     $sql = oci_parse($conn,"select * from ORENTED_PRODUCT ") ;
     $res = oci_execute($sql);
     return $sql;
}

function PaymentShow(){
    $conn = connection();
     $sql = oci_parse($conn,"select * from PAYMENT ") ;
     $res = oci_execute($sql);
     return $sql;
}


?>