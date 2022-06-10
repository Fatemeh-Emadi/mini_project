<?php
session_start();
$request=$_SERVER["REQUEST_URI"];
$request=str_replace("/mini_project","",$request);
switch($request)
{
    case("/"):

    case("/index"):
        require "controller/index.php";
        break;

        case("/reserve"):
            require "controller/reserve.php";
            break;
   
    case("/login-patient"):
        require "controller/login_patient.php";
        break;

    case("/login-doctor"):
        require "controller/login_doctor.php";
        break;
     case("/register-patient"):
        require "controller/register_patient.php";
        break;
        case("/p-register"):
            require "controller/p_register.php";
            break;
        case("/p-login"):
            require "controller/p_login.php";
            break;
            case("/d-register"):
                require "controller/d_register.php";
                break;
            case("/d-login"):
                require "controller/d_login.php";
                break;
    case("/register-doctor"):
        require "controller/register_doctor.php";
        break;
        case("/medical-service"):
            require "controller/medical_service.php";
            break;
        case("/patient-panel"):
            require "controller/patient_panel.php";
            break;
        case("/doctor-panel"):
            require "controller/doctor_panel.php";
            break;
        case("/add-service"):
            require "controller/add_service.php";
            break;
        case("/doctor-add-service"):
            require "controller/doctor_add_service.php";
            break;
    case("/logout"):
        require "controller/logout.php";
        break;

    case("/search"):
        require "controller/search.php";
        break;
    default:
    require __DIR__ . $request;
    //require __DIR__ . "view/404.php";
}