<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/View.css">
    <title>View</title>
</head>
<body>
<?php

include '../View/Header.php';
include '../Model/ViewModel.php';
?>
<div class="title">
    <h1>View</h1>
</div>
<div class="heading-table">
    <p>Requested Products with the Category name </p>
</div>
<table border="2">
    <tr>
    <th>Requested Product ID</th>
    <th>Requested Product Name</th>
    <th>Category </th>
    <th>Budget</th>
    </tr>
    <?php
    $res = view1();
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

<div class="heading-table">
    <p>Owner who rented products amount of more than 500:</p>
</div>
<table border="2">
    <tr>
    <th>Owner ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Age</th>
    <th>Gender</th>
    <th>Mobile No</th>
    <th>Amount</th>
    <th>Date</th>
    </tr>
    <?php
    $res = view2();
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

<div class="heading-table">
    <p>Company taking 15% profit share breakdown:</p>
</div>
<table border="2">
    <tr>
    <th>Rented Product ID</th>
    <th>Owner ID</th>
    <th>Rented Product Name</th>
    <th>Rent</th>
    <th>Company Share</th>
    <th>Owner Profit</th>
    </tr>
    <?php
    $res = view3();
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


<div class="heading-table">
    <p>Owner customers’ complaints: </p>
</div>
<table border="2">
    <tr>
    <th>Owner ID</th>
    <th>Compaint ID</th>
    <th>Customer ID</th>
    <th>Mobile No</th>
    <th>Email</th>
    <th>Complaint Details</th>
    <th>Posted Date</th>
    </tr>
    <?php
    $res = view4();
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
</body>
</html>