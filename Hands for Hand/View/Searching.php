<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Searching.css">
    <title>Searching</title>
</head>
<body>
    
<?php

include '../View/Header.php';
include '../Model/SearchingModel.php';

//include '../Controller/SearchingCheck.php';
?>
<div class="title">
    <h1>Searching Operation from oracle</h1>
</div>

<div class='search'>

    	<table align="center" id="searchTable">
        <form action="../Controller/SearchingCheck.php" method="post">
            <tr>
                  <td> <label for="bid">Borrower ID:</label></td>
                  <td> <input id="bid" type="text" name="bid" required> <?php $bid_error ?></td>
                  <td>  <input class="submit" type="submit" name="btnbid" value="SEARCH"></td>
            </tr>
        </form>
        <form action="../Controller/SearchingCheck.php" method="post">
            <tr>
            <td> <label for="oid">Owner ID:</label></td>
                  <td> <input id="oid" type="text" name="oid" required> <?php $oid_error ?></td>
                  <td> <input class="submit" type="submit" name="btnoid" value="SEARCH"></td>
              </tr>
            </form>
        </table>
</div>


<div class="heading-table">
    <p>01. Find all admins who are listed in the employee table with the employee id</p>
</div>
<table border="2" style="width:100%">
    <tr>
    <th>Employee Id</th>
    <th>Job</th>
    <th>Admin Id</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Joinning Date</th>
    <th>Age</th>
    <th>Gender</th>
    <th>Mobile No</th>
    <th>E-mail</th>

    
    </tr>
    <?php
    $res = problem1();
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
    <p>02. Find the employee who joined after 2020</p>
</div>
<table border="2" style="width:100%">
    <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Joinning Date</th>
    <th>Age</th>
    <th>Gender</th>
    <th>Mobile No</th>
    <th>E-mail</th>
    </tr>
    <?php
    $res = problem2();
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
    <p>03. Find the requested and rented products which have same budget</p>
</div>
<table border="2"  style="width:100%" >
    <tr>
    <th>Requested Product ID</th>
    <th>Requested Product Name</th>
    <th>Borrower ID</th>
    <th>Rented Product ID</th>
    <th>Rented Product Name</th>
    <th>Owner ID</th>
    <th>Budget</th>
    </tr>
    <?php
    $res = problem3();
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
    <p>04. Find out the borrowers who paid with BKASH</p>
</div>
<table border="2"  style="width:100%" >
    <tr>
    <th>Borrower Id</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Age</th>
    <th>Gender</th>
    <th>Mobile No</th>
    <th>E-mail</th>

    </tr>
    <?php
    $res = problem4();
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
    <p>05. Find the product category that are requested most</p>
</div>
<table border="2" style="width:100%">
    <tr>
    <th>Product Category</th>
    </tr>
    <?php
    $res = problem5();
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

<div class="heading-table" style="width:100%">
    <p>06. Find the details of product of second highest budget</p>
</div>
<table border="2" style="width:100%">
    <tr>
    <th>Requested Product ID</th>
    <th>Borrower ID</th>
    <th>Product Name</th>
    <th>Customer ID</th>
    <th>Budget</th>
    <th>Request Date</th>
    </tr>
    <?php
    $res = problem6();
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