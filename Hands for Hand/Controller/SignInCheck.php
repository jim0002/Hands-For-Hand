<?php
include ("../Model/SignInModel.php");
$uname=$pass=$unameerr=$passerr=$signinerr=$res=$wfname="";
$count=$count2=$flag=0;
session_start();

if(isset($_SESSION["uname"]))
{
    header("location: ../View/Dashboard.php");
}

if(isset($_POST["btnsignin"]))
{
    $uname=$_POST["uname"];

    if(!empty($_POST["remember_me"])) 
    {
        setcookie ('uname', $uname, time()+ 20);
    }
    else 
    {
        setcookie('uname',"");
    }
    if(empty($uname) ){
        $unameerr= "Please enter a valid username!";
    }
    else
    {
        $count++;
    }

    $pass=$_POST["pass"];

    if(!empty($_POST["remember_me"])) 
    {
        setcookie ('pass', $pass, time()+ 20);
    }
    else 
    {
        setcookie('pass',"");
    }

    if(empty($pass))
    {
        $passerr= "Please enter password!";
    }
    else
    {
        $count++;
    }
    
    if($count==2)
    {
        $res=Signin($uname,$pass);
        if($res)
        {
            $_SESSION['aid']=$res['A_ID'];
            $_SESSION['pass']=$res['A_PW'];
            $_SESSION['fname']=$res['A_FNAME'];
            $wfname=$res['A_FNAME'];
            $_SESSION['lname']=$res['A_LNAME'];
            $_SESSION['joinningdate']=$res['A_JOINNING_DATE'];
            $_SESSION['age']=$res['A_AGE'];
            $_SESSION['gender']=$res['A_GENDER'];
            $_SESSION['mbl']=$res['A_MBL'];
            $_SESSION['email']=$res['A_EMAIL'];

            $signinerr="SignIn Successful";
            header("location: ../View/Dashboard.php");
        }  
        else
        {
            $signinerr="Wrong username or password!!!";
        }
    }
}

?>