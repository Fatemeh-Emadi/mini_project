<?php 
include "model/database.php";
$id_doctor=$_SESSION["doctor_id"];

$services=$db->query("SELECT *, medical_service.id AS id_service FROM medical_service INNER JOIN doctor ON medical_service.doctor_id=doctor.id WHERE doctor_id=$id_doctor ");

     
//$reserves=$db->query("SELECT *,patient.first_name AS p_name,patient.last_name AS p_lname FROM patient INNER JOIN reserve ON patient.id=reserve.patient_id INNER JOIN medical_service ON medical_service.id=reserve.service_id WHERE doctor_id=$id_doctor");
$service_array=array();
foreach($services as $service){
    $id_service=$service["id_service"];
    $service["reserve"]=$db->query("SELECT *,patient.first_name AS p_name,patient.last_name AS p_lname 
                                        FROM patient INNER JOIN reserve 
                                        ON patient.id=reserve.patient_id 
                                        INNER JOIN medical_service 
                                        ON medical_service.id=reserve.service_id 
                                        WHERE doctor_id=$id_doctor ");
   $service_array[]=$service;
}


require "view/doctor_panel.php";
?>