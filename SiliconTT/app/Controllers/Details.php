<?php

//required files
require_once APP_DIR . "Config/Database.php";
require_once APP_DIR . "Models/User.php";
require_once APP_DIR . "Models/Product.php";
require_once APP_DIR . "Models/Cart.php";



//create objects
$db_object = new Database();
$user_object = new User($db_object);
$product_object = new Product($db_object);
$cart_object = new Cart($db_object);


//shows the user log in info on screen as an array
//debug($_POST);
//debug($_SESSION);


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (isset($_POST["cart_quantity"])) {

        require_once APP_DIR . "Utils/code.isLoggedIn.php";
        $cart_object->addToCart($user_id, $id, $_POST["cart_quantity"]);
        $_SESSION["message"] = "Product added to cart!";
        header("location: " . BASE_URL . "homepage");
        exit;
    }
}



$product_details = $product_object->getProductDetails($id);
// debug($product_details);


foreach ($product_details as $data) {
    # code...
}



//load views
require_once APP_DIR . "Views/header.php";
require_once APP_DIR . "Views/includes/alerts.php";
require_once APP_DIR . "Views/pages/details.php";
require_once APP_DIR . "Views/includes/recommended-products.php";
//require_once APP_DIR . "Views/includes/slider.php";
require_once APP_DIR . "Views/footer.php";