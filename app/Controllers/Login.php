<?php

//required files
require_once APP_DIR . "Config/Database.php";
require_once APP_DIR . "Models/User.php";

//create objects
$db_object = new Database();
$user_object = new User($db_object);


//shows the user log in info on screen as an array
//debug($_POST);


// if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["login"])) {

        if ($user_object->login($_POST)) {
            $_SESSION["message"] = "Login Successful! Welcome to SiliconTT.";
            //echo "Login was successful";
            header("location: homepage");   
            exit;
        }else {
           //echo "Incorrect details";
           $_SESSION["message"] = "Login unsuccessful! Incorrect email or password entered.";
        }
    }
// }



         



//load views
require_once APP_DIR . "Views/header.php";
require_once APP_DIR . "Views/includes/alerts.php";
require_once APP_DIR . "Views/pages/login.php";
require_once APP_DIR . "Views/footer.php";


