<?php
include '../Model/SequenceModel.php';
$cat_error = $pm_error = "";

function input_data($data) 
{  
$data = trim($data);  
$data = stripslashes($data);  
$data = htmlspecialchars($data);  
return $data;  
}
if(isset($_POST['category'])){
    $cname= " ";
    
        $cname = input_data($_POST['cname']);
        $res = Category($cname);
        if($res){
            $cat_error = "Successful Insertion!";
            echo $cat_error;
        }
        else{
            $cat_error = "Insertion Failed!";
            echo $cat_error;
        }
    }



if(isset($_POST['Payment_Method'])){
    $pMethod =" ";
    
        $pMethod = input_data($_POST['pMethod']);
        $res = Payment_Method($pMethod);
        if($res){
            $pm_error = "Successful Insertion!";
            echo $pm_error;
        }
        else{
            $pm_error = "Insertion Failed!";
            echo $pm_error;
        }
    }
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
    <title>Sequence</title>
</head>
<body>
<li><a href="../View/Sequence.php">Back</a></li>
</body>
</html>
