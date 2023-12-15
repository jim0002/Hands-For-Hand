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
    <title>Sequence</title>
</head>
<body>
<?php

include '../View/Header.php';
?>
<h1>Category Insertion</h1>
<br>

<form action="../Controller/SequenceCheck.php" method="post">
            <label for="cname">Category Name:</label>
            <input id="cname" type="text" name="cname" required> <?php $cat_error ?>
            <br>
            <br>
            
            <input class="submit" type="submit" name="category" value="INSERT">
            <br>
            <br>
</form>

<h1>Payment Method Insertion</h1>
<br>

<form action="../Controller/SequenceCheck.php" method="post">
            <label for="pMethod">Payment Method Name:</label>
            <input id="pMethod" type="text" name="pMethod" required> <?php $pm_error ?>
            <br>
            <br>
            <input class="submit" type="submit" name="Payment_Method" value="INSERT">
</form>
</body>
</html>