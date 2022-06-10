<?php 
include "model/database.php";
$service_id=$_POST["service_id"];
$patient_id = $_SESSION["patient_id"] ;
//$_SESSION["follow_id"]=$follow_id;
$count=$db->query("SELECT * FROM reserve WHERE patient_id=$patient_id AND service_id=$service_id")->num_rows;

if($count==0)
{
    $db->query("INSERT INTO reserve(patient_id,service_id) VALUES($patient_id,$service_id)");
    echo 1;
}
else{
    $db->query("DELETE FROM reserve WHERE patient_id=$patient_id AND service_id=$service_id");
    echo 0;
}

?>