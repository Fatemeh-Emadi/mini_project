<?php 

include "model/database.php";
//session_start();
$email=$_POST["email"];
$password=$_POST["password"];
$secure_password=md5($password);
$result=$db->query("SELECT * FROM doctor WHERE email='$email' AND password='$secure_password'");
$check_email=$db->query("SELECT * FROM doctor WHERE email='$email'");

$doctor_count=$result->num_rows;
$email_count=$check_email->num_rows;

if($doctor_count == 1)
{
    $doctor = $result->fetch_assoc();
    $_SESSION["login_status"] = true;
    $_SESSION["doctor_id"] = $doctor["id"];
    $_SESSION["first_name"] = $doctor["first_name"];
    $_SESSION["last_name"] = $doctor["last_name"];
   // $_SESSION["type"] = $doctor["type"];
    header("Location:doctor-panel");
}
else{
    if($email_count==0){
    $_SESSION["message"]="incorrect email ";
    $_SESSION["message_type"]="error";
    header("Location: d-login");
    }
    else 
    {
        $_SESSION["message"]="incorrect password ";
        $_SESSION["message_type"]="error";
        header("Location: d-login");
    }
}


?>