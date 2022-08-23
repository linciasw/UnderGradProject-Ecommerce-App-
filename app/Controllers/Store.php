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
//debug($_POST);
//debug($_GET);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["login"])) {
    }
}


//$product_details = $product_object->getAllProducts();
//debug($product_details);


//$product_details = $product_object->filterProducts();


if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (!empty($_GET)) {
        $product_details = $product_object->filterProducts($_GET);
    } else {
        $product_details = $product_object->getAllProducts();
    }
}




if(empty($product_details)){
    require_once APP_DIR . "Views/includes/store-no-results.php";
}else{
    require_once APP_DIR . "Views/pages/store.php";
}


//load views
require_once APP_DIR . "Views/header.php";
//require_once APP_DIR . "Views/includes/store-filter.php";
require_once APP_DIR . "Views/pages/store.php";
require_once APP_DIR . "Views/footer.php";