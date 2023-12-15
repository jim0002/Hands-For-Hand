<?php
include'../Model/DBConn.php';

function Signup($fname,$lname,$age,$gender,$mbl,$email,$uname,$pass){
    $conn = connection();
    $q = oci_parse($conn,"INSERT INTO ADMIN(A_ID,A_PW,A_FNAME,A_LNAME,A_JOINNING_DATE,A_AGE,A_GENDER,A_MBL,A_EMAIL) VALUES 
    ('$uname','$pass','$fname','$lname',TO_DATE(SYSDATE, 'yyyy/mm/dd'),$age,'$gender','$mbl','$email')") ;
    $res= oci_execute($q);
    return $res;
}

function UniqueUsername($uname){
    $conn = connection();
    $sql = oci_parse($conn,"SELECT count(*) FROM ADMIN WHERE A_ID='$uname' ") ;
    $res = oci_execute($sql);
    return $sql;
}

function UniqueEmail($email){
    $conn = connection();
    $sql = oci_parse($conn,"SELECT count(*) FROM ADMIN WHERE A_EMAIL='$email' ") ;
    $res = oci_execute($sql);
    return $sql;
}
?> 