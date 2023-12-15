<?php
include '../Model/DBConn.php';

function borrowerSearch($bid){
    $conn = connection();
    $sql = oci_parse($conn,"select * from BORROWER where B_ID='$bid' OR B_ID like '%$bid%'") ;
    $res = oci_execute($sql);
    return $sql;
}
function ownerSearch($oid){
    $conn = connection();
    $sql = oci_parse($conn,"select * from OWNER where O_ID='$oid' OR O_ID like '%$oid%'") ;
    $res = oci_execute($sql);
    return $sql;
}

function problem1(){
    $conn = connection();
    $sql = oci_parse($conn,"select employee.emp_id, employee.job, admin.a_id, admin.a_fname, admin.a_lname, admin.A_JOINNING_DATE, admin.A_AGE, admin.A_GENDER, admin.A_MBL, admin.A_EMAIL from employee, admin where a_id=employee.AD_OR_CS_ID
    ") ;
    $res = oci_execute($sql);
    return $sql;
}

function problem2(){
    $conn = connection();
    $sql = oci_parse($conn,"select CUSTOMER_SUPPORT.CS_FNAME, CUSTOMER_SUPPORT.CS_LNAME, CUSTOMER_SUPPORT.CS_JOINNING_DATE, CUSTOMER_SUPPORT.CS_AGE, CUSTOMER_SUPPORT.CS_GENDER, CUSTOMER_SUPPORT.CS_MBL, CUSTOMER_SUPPORT.cs_email  from CUSTOMER_SUPPORT where CS_ID in (SELECT AD_OR_CS_ID FROM EMPLOYEE WHERE AD_OR_CS_ID IN (SELECT A_ID FROM ADMIN WHERE A_JOINNING_DATE > to_date('31 Dec 2020','DD MON YYYY')) OR AD_OR_CS_ID IN (SELECT CS_ID FROM CUSTOMER_SUPPORT WHERE CS_JOINNING_DATE > to_date('31 Dec 2019','DD MON YYYY')))") ;
    $res = oci_execute($sql);
    return $sql;
}

function problem3(){
    $conn = connection();
    $sql = oci_parse($conn,"
    select requested_product.RP_ID,  requested_product.RP_NAME, requested_product.B_ID, orented_product.OP_ID,orented_product.OP_NAME,  orented_product.O_ID, orented_product.RENT from requested_product, orented_product where BUDGET=RENT") ;
    $res = oci_execute($sql);
    return $sql;
}
function problem4(){
    $conn = connection();
    $sql = oci_parse($conn,"
    SELECT BORROWER.B_ID, BORROWER.B_FNAME, BORROWER.B_LNAME, BORROWER.B_AGE, BORROWER.B_GENDER, BORROWER.B_MBL, BORROWER.B_EMAIL FROM BORROWER WHERE B_ID IN (SELECT BORO_ID FROM CUSTOMER WHERE CUST_ID IN (SELECT CUST_ID FROM PAYMENT WHERE PM_ID=(SELECT PM_ID FROM PAYMENT_METHOD WHERE PM_NAME='BKASH')))") ;
    $res = oci_execute($sql);
    return $sql;
}

function problem5(){
    $conn = connection();
    $sql = oci_parse($conn,"SELECT C_NAME FROM CATEGORY WHERE C_ID=(SELECT C_ID FROM requested_product GROUP BY C_ID HAVING COUNT(C_ID)=(select MAX(COUNT(C_ID)) from requested_product GROUP BY C_ID))") ;
    $res = oci_execute($sql);
    return $sql;
}

function problem6(){
    $conn = connection();
    $sql = oci_parse($conn,"select p.* from requested_product p where p.BUDGET in(select max(BUDGET) from requested_product where BUDGET<(select max(BUDGET) from requested_product ))") ;
    $res = oci_execute($sql);
    return $sql;
}

?>