<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Trigger.css">
    
    <title>Trigger</title>
</head>
<body>
<?php

include '../View/Header.php';
include '../Model/TriggerModel.php';
?>
<div class="title">
    <h1>Trigger Operation</h1>
</div>
<div class="heading-table">
    <p>Insert a negative value of budget to check trigger</p>
</div>
<div class="info">
<form action="../Controller/TriggerCheck.php" method="POST"  name="form1" >
    <table> 
        <tr>
            <td><label for="rpid">Requested Product ID: </label></td>
            <td><input type="text" id="rpid" name="rpid" ></td>
            <td></td><td></td>
            <td> <label for="budget">Add a Negative Value: </label></td>
            <td><input type="number" id="budget" name="budget" ></td>
        </tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr><td colspan="6"><input class="submit" type="submit" id="submit1" name="submit1" value="Submit"></td></tr>
        <tr><td colspan="1"> <input class="submit" type="submit" id="t10" name="t10" value="Tigger on"></td>
        <td > <input class="submit" type="submit" id="t1f" name="t1f" value="Tigger off"></td></tr>
    </table>
</form>
<br><br>
</div>


<div class="heading-table">
    <p>Creating a trigger to automatically store admins' mobile no update information in a table</p>
</div>
<div class="info">
   
<form action="../Controller/TriggerCheck.php" method="POST" name="form2" >
    <table> 
        <tr>
            <td><label for="aid">Admin ID: </label></td>
            <td><input type="text" id="aid" name="aid" required></td>
            <td> </td><td> </td>
            <td> <label for="mblno">New Mobile No: </label></td>
            <td><input type="text" id="mblno" name="mblno" required></td>
        </tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr><td colspan="6"> <input class="submit" type="submit" id="submit2" name="submit2" value="Submit"></td></tr>
        
    </table>
    <br><br>
</form>
</div>
<div class="heading-table">
    <p>Creating a trigger to automatically store Borrower' password  update information in a table</p>
</div>
<div class="info">
   
<form action="../Controller/TriggerCheck.php" method="POST" name="form2" >
    <table> 
        <tr>
            <td><label for="bid">Borrower ID: </label></td>
            <td><input type="text" id="bid" name="bid" required></td>
            <td> </td><td> </td>
            <td> <label for="mbln">New Password: </label></td>
            <td><input type="text" id="mbln" name="mbln" required></td>
        </tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr><td colspan="6"> <input class="submit" type="submit" id="submit4" name="submit4" value="Submit"></td></tr>
        
    </table>
    <br><br>
</form>
</div>
<div class="heading-table">

<p>Performing insert, update, or delete operation not in the working period </p>
   
</div>
<div class="info">
   
<form action="../Controller/TriggerCheck.php" method="POST" name="form3" >
<table> 
        <tr>
            <td><label for="pid">Payment ID: </label></td>
            <td><input type="text" id="pid" name="pid" ></td>
            <td> </td><td> </td>
            <td> <label for="amount">New amount: </label></td>
            <td><input type="number" id="amount" name="amount" ></td>
        </tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr><td colspan="6"> <input class="submit" type="submit" id="submit3" name="submit3" value="Submit"></td></tr>
        <tr><td colspan="1"> <input class="submit" type="submit" id="t30" name="t30" value="Tigger on"></td>
        <td > <input class="submit" type="submit" id="t3f" name="t3f" value="Tigger off"></td></tr>
    </table>
    <br><br>
</form>

<?php ?>
<hr>


<hr>
</div>
</body>
</html>