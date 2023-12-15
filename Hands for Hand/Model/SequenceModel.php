<?php
include'../Model/DBConn.php';
function Category($cname){
    $conn = connection();
    $sql = oci_parse($conn,"INSERT INTO CATEGORY(C_ID, C_NAME) VALUES('CA'||seq_category.nextval,'$cname')") ;
    $res = oci_execute($sql);
    return $res;
}
function Payment_Method($pMethod){
    $conn = connection();
    $sql = oci_parse($conn,"INSERT INTO PAYMENT_METHOD(PM_ID, PM_NAME) VALUES('PM'||seq_pMethod.nextval,'$pMethod')") ;
    $res = oci_execute($sql);
    return $res;
}

/*
Sequence
CREATE SEQUENCE seq_category
MINVALUE 100
MAXVALUE 999999999999999999
START WITH 111
INCREMENT BY 1
CACHE 10;

CREATE SEQUENCE seq_pMethod
MINVALUE 100
MAXVALUE 999999999999999999
START WITH 555
INCREMENT BY 2
CACHE 10;
*/

?>