<?php

//required files
require_once APP_DIR . "Config/Database.php";
require_once APP_DIR . "Models/User.php";

//create objects
$db_object = new Database();
$user_object = new User($db_object);


//shows the user log in info on screen as an array
//debug($_POST);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["registration"])) {
        $_SESSION["message"] = "Registration Successful! Welcome to SiliconTT.";
        $user_object->register($_POST);
        header("location: login");  
        exit;
    }
}




//load views
require_once APP_DIR . "Views/header.php";
require_once APP_DIR . "Views/pages/registration.php";
require_once APP_DIR . "Views/footer.php";

