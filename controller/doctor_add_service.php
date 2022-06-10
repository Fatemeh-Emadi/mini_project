<?php 
include "model/database.php";
$info=$_POST["info"];
$date=$_POST["date"];
$time=$_POST["time"];
$id_doctor=$_SESSION["doctor_id"];

$db->query("INSERT INTO medical_service(info,doctor_id,time,date) VALUES('$info',$id_doctor,'$time','$date')");
header("Location:doctor-panel");
?>