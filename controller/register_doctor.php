<?php 
include "model/database.php";

$firstname = $_POST["fname"];
$lastname = $_POST["lname"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$password = $_POST["password"];
$confirm_pass = $_POST["confirmpass"];
$type = $_POST["type"];
$gender_val = $_POST["gender"];
//echo"a1";


if ($gender_val == "female")
{
    $gender = 1;
} 
else 
{
    $gender = 0;
}
$pass_length=strlen($password);
if($password==$confirm_pass){

    if($pass_length>=6){
        $doctor_count=$db->query("SELECT * FROM doctor WHERE first_name='$firstname' AND last_name='$lastname' AND email='$email'")->num_rows;
    
    
    if($doctor_count == 0)
    {
    $secure_password=md5($password);
    $db->query("INSERT INTO doctor(first_name,last_name,phone,email,password,type,gender) VALUES('$firstname','$lastname','$phone','$email','$secure_password','$type',$gender)");
    $_SESSION["message"]="You registered successfully";
    $_SESSION["message_type"]="success";
    }
    else
    {
    $_SESSION["message"]="This email is already taken" ;
    $_SESSION["message_type"]="error";
    }
}
else{
    $_SESSION["message"]="Your password length must be >=6 " ;
    $_SESSION["message_type"]="error";
}
}
else{
    $_SESSION["message"]="Unvalid password";
    $_SESSION["message_type"]="error";
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    
    $_SESSION["message"]="Invalid email format";
    $_SESSION["message_type"]="error";
}
if (empty($_POST["email"])) {
    
    $_SESSION["message"]="Email is required";
    $_SESSION["message_type"]="error";
  } 
  if (empty($_POST["password"])) {
   
    $_SESSION["message"]="password is required";
    $_SESSION["message_type"]="error";
  } 
  if (empty($_POST["confirmpass"])) {

    $_SESSION["message"]="password is required";
    $_SESSION["message_type"]="error";
  } 
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
    $_SESSION["message"]=$genderErr;
    $_SESSION["message_type"]="error";
  } 
  if (empty($_POST["phone"])) {
   
    $_SESSION["message"]="phone is required";
    $_SESSION["message_type"]="error";
  } 
header("Location:p-register");

?>