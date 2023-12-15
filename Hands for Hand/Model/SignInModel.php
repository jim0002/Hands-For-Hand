<?php
include'../Model/DBConn.php';

function Signin($uname,$password)
{
    $conn = connection();
    $sql = oci_parse($conn, "select * from ADMIN where A_ID='$uname' and A_PW='$password'");       
    $res= oci_execute($sql);
    $row = oci_fetch_assoc($sql);
    return $row; 
}
?>