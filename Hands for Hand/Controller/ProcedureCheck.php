<?php
include '../Model/ProcedureModel.php';
function input_data($data) 
{  
$data = trim($data);  
$data = stripslashes($data);  
$data = htmlspecialchars($data);  
return $data;  
}

if(isset($_POST['submit1'])){
    $acsId = $job = "";
    

    
        $acsId = input_data($_POST['acsId']);
        $job = input_data($_POST['job']);
       $res = plsqldb1($acsId , $job);
       if($res){
           echo "Insertion Successfull!";
       }
       else{
           echo"Failed Insertion!";
       }

    }

if(isset($_POST['submit2'])){
    $pid = "";
    
        $pid = input_data($_POST['pid']);
    
       $res = plsqldb2($pid);
       if($res){
           echo "Deletion Successfull";
       }
       else{
           echo"Failed Deletion";
       }

    }

if (isset($_POST['submit3'])) {
    
    $bid=$pname=$cid=$budg="";
    
        $bid = input_data($_POST['bid']);
        $pname = input_data($_POST['pname']);
        $cid = input_data($_POST['cid']);
        $budg = input_data($_POST['budg']);
       $res = plsqldb3($bid,$pname,$cid,$budg);
       if($res)
       {
        echo "Insertion Successfull!";
       }
    else{
        echo"Failed Insertion!";
    }

    }
    if (isset($_POST['submit4'])) {
    
        $pmi = $pmn = "";
    

    
        $pmi = input_data($_POST['pmi']);
        $pmn = input_data($_POST['pmn']);
       $res = plsqldb4($pmi , $pmn);
       if($res){
           echo "Insertion Successfull!";
       }
       else{
           echo"Failed Insertion!";
       }
    
        }

        if (isset($_POST['submit5'])) {
    
            $ai = $uap = "";
        
    
        
            $ai = input_data($_POST['ai']);
            $uap = input_data($_POST['uap']);
           $res = plsqldb5($ai , $uap);
           if($res){
               echo "Update Successfull!";
           }
           else{
               echo"Failed Insertion!";
           }
        
            }
            if(isset($_POST['submit6'])){
                $Rp = "";
                
                    $Rp = input_data($_POST['Rp']);
                
                   $res = plsqldb6($Rp);
                   if($res){
                       echo "Deletion Successfull for rent in above 2000";
                   }
                   else{
                       echo"Failed Deletion";
                   }
            
                }

?>