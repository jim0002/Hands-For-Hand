<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Table.css">
    <title>Table View</title>
</head>
<body>
<?php

include '../View/Header.php';
include '../Model/TableModel.php';
?>
<div class="title">
    <h1>Table View From Oracle</h1>
</div>
<div class="heading-table">
    <h1>01. ADMIN:</h1>
</div>
<table border="2">
    <tr>
    <th>Admin ID</th>
    <th>Admin Password</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Joinning Date</th>
    <th>Age</th>
    <th>Gender</th>
    <th>Mobile No</th>
    <th>Email</th>
    </tr>
    <?php
    $res = AdminShow(); //res = sql
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
    <h1>02. Customer Support:</h1>
</div>
<table border="2">
    <tr>
    <th>Customer Support ID</th>
    <th>Customer Support Password</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Joinning Date</th>
    <th>Age</th>
    <th>Gender</th>
    <th>Mobile No</th>
    <th>Email</th>
    </tr>
    <?php
    $res = CUSTOMER_SUPPORTShow();
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
    <h1>03. Borrower:</h1>
</div>
<table border="2">
    <tr>
    <th>Borrower ID</th>
    <th>Borrower Password</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Joinning Date</th>
    <th>Age</th>
    <th>Gender</th>
    <th>Mobile No</th>
    <th>Email</th>
    </tr>
    <?php
    $res = BorrowerShow();
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
    <h1>04. Owner:</h1>
</div>
<table border="2">
    <tr>
    <th>Owner ID</th>
    <th>Owner Password</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Joinning Date</th>
    <th>Age</th>
    <th>Gender</th>
    <th>Mobile No</th>
    <th>Email</th>
    </tr>
    <?php
    $res = OwnerShow();
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
    <h1>05. Category:</h1>
</div>
<table border="2">
    <tr>
    <th>Category ID</th>
    <th>Category Name</th>
    </tr>
    <?php
    $res =CATEGORYShow();
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
    <h1>06. Customer:</h1>
</div>
<table border="2">
    <tr>
    <th>Customer ID</th>
    <th>Borrower-Owner ID</th>
    
    </tr>
    <?php
    $res = CustomerShow();
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
    <h1>07. Payment Methods:</h1>
</div>
<table border="2">
    <tr>
    <th>Payment Method ID</th>
    <th>Payment Method Name</th>
    
    </tr>
    <?php
    $res = pMethodShow();
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
    <h1>08. Employees:</h1>
</div>
<table border="2">
    <tr>
    <th>Employee ID</th>
    <th>Admin-CustomerSupport ID</th>
    <th>Job</th>
    </tr>
    <?php
    $res = EmployeeShow();
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
    <h1>09. Complaints:</h1>
</div>
<table border="2">
    <tr>
    <th>Complaint ID</th>
    <th>Customer ID</th>
    <th>Mobile No</th>
    <th>E-mail</th>
    <th>Complaints Details</th>
    <th>Date</th>
    </tr>
    <?php
    $res = ComplaintsShow();
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
    <h1>10. Requested Products:</h1>
</div>
<table border="2">
    <tr>
    <th>Requested Product ID</th>
    <th>Borrower ID</th>
    <th>Requested Product Name</th>
    <th>Customer ID</th>
    <th>Budget</th>
    <th>Date</th>
    </tr>
    <?php
    $res = RequestedProductsShow();
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
    <h1>11. Rented Products:</h1>
</div>
<table border="2">
    <tr>
    <th>Rented Product ID</th>
    <th>Owner ID</th>
    <th>REnted Product Name</th>
    <th>Customer ID</th>
    <th>Rent</th>
    <th>Date</th>
    </tr>
    <?php
    $res = RentedProductsShow();
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
    <h1>12. Payment Details:</h1>
</div>
<table border="2">
    <tr>
    <th>Payment ID</th>
    <th>Customer ID</th>
    <th>Payment Method ID</th>
    <th>Amount</th>
    <th>Date</th>
    </tr>
    <?php
    $res = PaymentShow();
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