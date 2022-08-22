<?php

require_once APP_DIR . "Utils/code.precheckout.php";


//shows the user log in info on screen as an array
//debug($_POST);
// debug($_SESSION);


//$cart_object->addToCart(1, 2, 2);
//$cart_object->addToCart(2, 2, 2);
//$cart_object->removeFromCart(2, 1);


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (isset($_POST["cart_id"])) {
        $cart_object->removeFromCart($_POST["cart_id"], $user_id);
    }
}


$cart_details = $cart_object->getCartDetails($user_id);


$cart_object->calculateTotal();
//debug($cart_details);


//load views
require_once APP_DIR . "Views/header.php";
require_once APP_DIR . "Views/pages/cart.php";
require_once APP_DIR . "Views/footer.php";