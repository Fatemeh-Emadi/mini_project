<?php 
include "model/database.php";
$text=$_POST["text"];
$services=$db->query("SELECT *,medical_service.id AS m_id FROM medical_service INNER JOIN doctor ON medical_service.doctor_id=doctor.id WHERE info LIKE '%$text%' OR first_name='$text' OR last_name='$text'");
require "view/medical_service.php";
?>