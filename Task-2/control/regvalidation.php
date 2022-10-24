<?php
$validatefname="";
$validatelname="";
$validateage="";
$validateemail="";
$validateradio="";
$validatecheckbox="";
$validatepassword="";
$v1=$v2=$v3=NULL;
$fname=$lname=$age=$email=$password=$Occupation=NULL;
if($_SERVER["REQUEST_METHOD"]=="POST")
{

$fname=$_REQUEST["firstname"];
$lname=$_REQUEST["lastname"];
$age=$_REQUEST["age"];
$email=$_REQUEST["email"];
$password=$_REQUEST["password"];
$Occupation=$_REQUEST["Occupation"];



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
if(!isset($_REQUEST["BPH"])&&!isset($_REQUEST["BPL"])&&!isset($_REQUEST["BPN"]))
{
    $validatecheckbox = "please select at least one checkbox";
    
}
else{
   if(isset($_REQUEST["BPH"]))
   {
       $v1= $_REQUEST["BPH"];
   }
   if(isset($_REQUEST["BPL"]))
   { 
       $v2= $_REQUEST["BPL"];
   }
   if(isset($_REQUEST["BPN"]))
   {
    $v3= $_REQUEST["BPN"];
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
$formdata = array(
    'firstName'=> $fname,
    'lastName'=> $lname,
    'age'=> $age,
    'Occupation'=>$Occupation,
    'BPCONDITION'=> $v1,
    'email'=>$email,
    'password'=>$password
    );
$existingdata = file_get_contents('../Data/data.json');
$tempJSONdata = json_decode($existingdata);
$tempJSONdata[] =$formdata;
$jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
     
if(empty($fname) || (strlen($fname)<6) || empty($lname) || (strlen($lname)<5) || empty($age) || empty($email) || empty($password))
{
    echo "Please Enter Everything Correctly";
}
else{
    if(file_put_contents("../Data/data.json", $jsondata)) 
    {
        echo "Data successfully saved <br>";
    }
    else
        echo "no data saved";
}
        
$data = file_get_contents("../Data/data.json");
$mydata = json_decode($data);

}
?>