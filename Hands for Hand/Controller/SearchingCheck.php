<?php
include ("../Model/SearchingModel.php");

$bid_error = $oid_error = "";

function input_data($data) 
{  
$data = trim($data);  
$data = stripslashes($data);  
$data = htmlspecialchars($data);  
return $data;  
}
if(isset($_POST['btnbid'])){
    $bid= " ";
    
        $bid = input_data($_POST['bid']);
        echo "Results for '".$bid."' Search";
        $res = borrowerSearch($bid);

        if($res){
            echo $bid_error;

            ?>
            <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Sequence.css">
    <style> h1 {text-align: center}
    form {text-align: center}
    </style>
    <title>Searching</title>
</head>
<body>
<div class="heading-table">
    <p>Borrower Details</p>
</div>
<table border="2" style="width:100%">
    <tr>
    <th>Borrower ID</th>
    <th>Borrower Password</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Joinning Date</th>
    <th>Age</th>
    <th>Gender</th>
    <th>Mobile No</th>
    <th>E-mail</th>

    
    </tr>
    <?php

    while ($row = oci_fetch_array($res, OCI_RETURN_NULLS+OCI_ASSOC)) {
        
        echo '<tr>';
        foreach ($row as $item) 
        {
            echo '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
        }
        echo '</tr>';
        }
    ?>
</table>
            <?php

        }
        else{
            $bid_error = "Borrower Does Not Exist!";
            echo $bid_error;
        }
    }



if(isset($_POST['btnoid'])){
    $oid =" ";
    
        $oid = input_data($_POST['oid']);
        $res = ownerSearch($oid);
        echo "Results for '".$oid."' Search";
        if($res){
            echo $oid_error;
            ?>
            <!DOCTYPE html>
<html lang="en">
<body>
<div class="heading-table">
    <p>Owner Details</p>
</div>
<table border="2" style="width:100%">
    <tr>
    <th>Owner ID</th>
    <th>Owner Password</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Joinning Date</th>
    <th>Age</th>
    <th>Gender</th>
    <th>Mobile No</th>
    <th>E-mail</th>

    
    </tr>
    <?php

    while ($row = oci_fetch_array($res, OCI_RETURN_NULLS+OCI_ASSOC)) {
        
        echo '<tr>';
        foreach ($row as $item) 
        {
            echo '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
        }
        echo '</tr>';
        }
    ?>
</table>

            <?php
        }
        else{
            $oid_error = "Owner Does Not Exist!";
            echo $oid_error;
        }
    }
?>


<html lang="en">
<body>
<li><a href="../View/Searching.php">Back</a></li>
</body>
</html>

