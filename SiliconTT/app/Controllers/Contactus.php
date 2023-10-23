<?php

//required files
require_once APP_DIR . "Config/Database.php";
require_once APP_DIR . "Models/Product.php";




//create objects
$db_object = new Database();
$product_object = new Product($db_object);




//debug($_POST);
//debug($_GET);



//load views
require_once APP_DIR . "Views/header.php";
require_once APP_DIR . "Views/pages/contactus.php";
require_once APP_DIR . "Views/footer.php";