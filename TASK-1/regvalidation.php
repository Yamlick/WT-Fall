<?php
$validatefname="";
$validatelname="";
$validateage="";
$validateemail="";
$validateradio="";
$validatecheckbox="";
$validatepassword="";
$v1=$v2=$v3=$v4=$v5="";
$fname=$lname=$age=$email=$Occupation=$password="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$fname=$_REQUEST["firstname"];
$lname=$_REQUEST["lastname"];
$age=$_REQUEST["age"];
$email=$_REQUEST["email"];
$password=$_REQUEST["password"];
if(empty($_REQUEST["firstname"]) || (strlen($_REQUEST["firstname"])<6))
{
    $validatefname= "you must enter First Name";

}
else
{
    $fname=$_REQUEST["firstname"];
}


if(empty($_REQUEST["lastname"]) || (strlen($_REQUEST["lastname"])<5))
{
    $validatelname= "you must enter Last Name";

}
else
{
    $lname=$_REQUEST["lastname"];
}


if(isset($_REQUEST["age"]))
{
    $validateage= $_REQUEST["age"];
}
else{
    $validatereage= "please enter age";
}
if(!isset($_REQUEST["BP HIGH"])&&!isset($_REQUEST["BP LOW"])&&!isset($_REQUEST["NORMAL"]))
{
    $validatecheckbox = "please select at least one checkbox";
    
}
else{
   if(isset($_REQUEST["BP HIGH"]))
   {
       $v1= $_REQUEST["BP HIGH"];
   }
   if(isset($_REQUEST["BP LOW"]))
   { 
       $v2= $_REQUEST["BP LOW"];
   }
   if(isset($_REQUEST["NORMAL"]))
   {
    $v3= $_REQUEST["NORMAL"];
   }
}



if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $validateemail="you must enter email";
}
else{
    $validateemail= "your email is ".$email;
}



if(isset($_REQUEST["Occupation"]))
{
    $validateradio= $_REQUEST["Occupation"];
}
else{
    $validateradio= "please select at least one one";
}

if(isset($_REQUEST["password"]))
{
    $validatepassword= $_REQUEST["password"];
}
else{
    $validatepassword="please enter password";
}

}
?>