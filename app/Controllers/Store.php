<?php

//required files
require_once APP_DIR . "Config/Database.php";
require_once APP_DIR . "Models/User.php";
require_once APP_DIR . "Models/Product.php";

//create objects
$db_object = new Database();
$user_object = new User($db_object);
$product_object = new Product($db_object);


//shows the user log in info on screen as an array
debug($_POST);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["login"])) {
    }
}


$product_details = $product_object->getAllProducts();
         



//load views
require_once APP_DIR . "Views/header.php";
require_once APP_DIR . "Views/pages/store.php";
require_once APP_DIR . "Views/footer.php";