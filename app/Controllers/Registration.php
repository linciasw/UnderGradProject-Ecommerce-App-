<?php

//required files
require_once APP_DIR . "Config/Database.php";
require_once APP_DIR . "Models/User.php";

//create objects
$db_object = new Database();
$user_object = new User($db_object);


debug($_POST);



// $user_object->showName();


if (isset($_POST["registration"])) {
    $user_object->register($_POST);
}


//load views




require_once APP_DIR . "Views/pages/registration.php";


