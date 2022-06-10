<?php 

include "model/database.php";
//session_start();
$phone=$_POST["phone"];
$password=$_POST["password"];

$secure_password=md5($password);
$result=$db->query("SELECT * FROM patient WHERE phone='$phone' AND password='$secure_password'");
$check_phone=$db->query("SELECT * FROM patient WHERE phone='$phone'");

$patient_count=$result->num_rows;
$phone_count=$check_phone->num_rows;

if($patient_count == 1)
{
    $patient = $result->fetch_assoc();
    
    $_SESSION["login_status"] = true;
    $_SESSION["first_name"]=$patient["first_name"];
    $_SESSION["last_name"]=$patient["last_name"];
    $_SESSION["patient_id"] = $patient["id"];
    header("Location:patient-panel");
}
else{
    if($phone_count==0){
    $_SESSION["message"]="incorrect phone ";
    $_SESSION["message_type"]="error";
    header("Location: p-login");
    }
    else 
    {
        $_SESSION["message"]="incorrect password ";
        $_SESSION["message_type"]="error";
        header("Location: p-login");
    }
}


?>