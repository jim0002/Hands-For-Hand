<?php
$username="SYSTEM";
    $password="system";
    $dbname= "localhost/XE";
$conn = oci_connect($username,$password,$dbname);


	if(!$conn){
		echo "ERROR";
	}

	else{
		echo "ok";
	}
	
?>