<?php 
include "model/database.php";

$services=$db->query("SELECT *,medical_service.id AS m_id FROM medical_service INNER JOIN doctor ON medical_service.doctor_id=doctor.id");
require "view/medical_service.php";
?>