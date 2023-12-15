<?php
include ("../Model/SignUpModel.php");
$fname=$lname=$age=$uname=$pass=$gender=$mbl=$email=$joinningdate=$result=$res=$dataerr="";
$fnameerr=$lnameerr=$ageerr=$unameerr=$passerr=$gendererr=$mblerr=$emailerr=$joinningdateerr="";
$emailcount=$unamecount=0;
$count=0;


if(isset($_POST["btnsignUp"]))
{

    $uname=$_POST["uname"];
    if(!empty($uname))
    {
        $res=UniqueUsername($uname);
        while ($row = oci_fetch_array($res, OCI_RETURN_NULLS+OCI_ASSOC))
        {
            foreach ($row as $item) 
            {
                $unamecount=$unamecount+$item;
            }
        }

    }
    if(empty($uname) || strlen($uname)<3)
    {
        $unameerr= " Please enter a valid username!";
    }
    else
    {
        $count++;
    }

    $fname=$_POST["fname"];
    if(empty($fname)|| !preg_match ("/^[a-zA-Z\s]+$/", $fname) || strlen($fname)<3)
    {
        $fnameerr= " Please enter a valid name!";
    }
    else
    {
        $count++;
    }
    
    $lname=$_POST["lname"];
    if(empty($lname)|| !preg_match ("/^[a-zA-Z\s]+$/", $lname) || strlen($lname)<3)
    {
        $lnameerr= " Please enter a valid name!";
    }
    else
    {
        $count++;
    }
    
    $age=$_POST["age"];
    if(empty("$age"))
    {
        $ageerr= " Please enter age!";
    }
    else
    {
        $count++;
    }
    
    if(isset($_POST["gender"]))
    {
        $count++;
    }
    else
    {
        $gendererr=" Please select gender!";
    }
    
    $mbl=$_POST["mbl"];
    if(empty("$mbl"))
    {
        $mblerr= " Please enter Mobile Number!";
    }
    else
    {
        $count++;
    }


    $email=$_POST["email"];
    if(!empty($email))
    {
        $res=UniqueEmail($email);
        while ($row = oci_fetch_array($res, OCI_RETURN_NULLS+OCI_ASSOC))
        {
            foreach ($row as $item) 
            {
                $emailcount=$emailcount+$item;
            }
        }

    }

    if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
    {
        $emailerr="Please enter a valid email!";
    }
    elseif($emailcount!=0)
    {
        $emailerr="User Email already Exists!! Please enter a unique email!";
    }
    else
    {
        $count++;
    }
    
    $pass=$_POST["pass"];
    $uppercase = preg_match('@[A-Z]@', $pass);
    $lowercase = preg_match('@[a-z]@', $pass);
    $number    = preg_match('@[0-9]@', $pass);

    if(empty($pass) || !$uppercase || !$lowercase || !$number  || strlen($pass) < 8 )
    {
        $passerr= "Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character!";
        
    }
    else
    {
        $count++;
    }
    
    if($count==8)
    {
        $result = Signup($fname,$lname,$age,$_POST["gender"],$mbl,$email,$uname,$pass);
       
        if($result)
        {
            $dataerr="SignUp Succesfull!!";
        }
        else
        {
            $dataerr="SignUp Failed!!";
        }
    }

}
