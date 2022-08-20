<?php

//required files
require_once APP_DIR . "Utils/code.precheckout.php";
$completed = false;



//check url parameters

//get cart details
$cart_details = $cart_object->getCartDetails($user_id);



//calculate total
$cart_object->calculateTotal();


//determine the payment used
switch ($payment) {
    case 'debug':
        echo "Testing<br>";
        $data = [
            "payment" => "none",
            "payment_id" => null,
            "subtotal" => $cart_object->getSubtotal(),
            "total" => $cart_object->getTotal(),
            "total_discount_amount" => 0
        ];
        $completed = true;
        break;


    case 'stripe':
        # code...
        break;
  
    
    default:
        # code...
        break;
}



//check if payment was completed
//if array has data or if it's empty
if(!$completed || empty($data)) {

    echo "payment was not completed";
    exit;
}


//insert order 


//insert order details
