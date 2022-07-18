<?php
include("../Model/RegistrationDB.php");
$fname=$lname=$age=$pass=$pl=$pl1=$pl2=$pl3=$email=$file="";
$fnameerr=$lnameerr=$ageerr=$passerr=$deserr=$plerr=$emailerr="";
$count=0;

if(isset($_POST["Submit"])){

$fname=$_POST["fname"];

if(empty($fname)|| !preg_match ("/^[a-zA-z]*$/", $fname) || strlen($fname)<3){

$fnameerr= "->please enter a valid a name";

}
else{
    $fnameerr="->your first name is ".$fname;
    $count++;
}

$lname=$_POST["lname"];

if(empty($lname)|| !preg_match ("/^[a-zA-z]*$/", $lname) || strlen($lname)<3){

$lnameerr= "->please enter a valid a name";

}
else{
    $lnameerr="->your last name is ".$lname;
    $count++;
}


$age=$_POST["age"];
if(empty("$age")){

    $ageerr= "->please enter your age";
    
    }
    else{
        $ageerr="-> your age is ".$age;
        $count++;
    }

    $pass=$_POST["password"];

    $uppercase = preg_match('@[A-Z]@', $pass);
$lowercase = preg_match('@[a-z]@', $pass);
$number    = preg_match('@[0-9]@', $pass);

    if(empty($pass) || !$uppercase || !$lowercase || !$number  || strlen($pass) < 5 ){

        $passerr= "Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character!";
        
        }
        else{
            $passerr="->your password is ".$pass;
            $count++;
        }

   
    
        if(isset($_POST["designation"])){
            $des=$_POST["designation"];
            $deserr="-> you have selected ".$des;
            $count++;
        }
        else{
            $deserr="->you have not selected any designation";
        }

    if(isset($_POST["Java"])  || isset($_POST["PHP"])   || isset($_POST["C++"])){
        $count++;
        $plerr="->you have selected ";
        if(isset($_POST["Java"])){
          $pl1=$_POST["Java"].",";
          
        }
        if(isset($_POST["PHP"])){
            $pl2=$_POST["PHP"].",";
          }
        if(isset($_POST["C++"])){
            $pl3=$_POST["C++"];
          }
          $pl=$pl1.$pl2.$pl3;

    }
    else{
        $plerr="->you have not selected any preferred language";
    }

    $email=$_POST["email"];
    if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $emailerr="->please enter a valid email";
}
else{
    $emailerr= "->your email is ".$email;
    $count++;
}

$file=$_POST["file"];
if (!empty($file))
{
    $count++;
}
if($count==8){
    $mydb=new MYDB();
  $conobj=$mydb->opencon();
  $mydb->InsertData($fname,$lname,$age, $des,$pl,$email,$pass,$file,"employee",$conobj);
  $mydb->closecon($conobj);
}


}

?>