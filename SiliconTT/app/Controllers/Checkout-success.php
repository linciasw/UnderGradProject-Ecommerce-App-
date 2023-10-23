<?php

//required files
require_once APP_DIR . "Utils/code.precheckout.php";
$completed = false;



//check url parameters

//get cart details
$cart_details = $cart_object->getCartDetails($user_id);



if (empty($cart_details)) {
    echo "Cart is empty";
    exit;
}



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
        $payment_object = new Stripehelper();
        $checkout_order = $payment_object->getCheckoutOrder($id);
        //debug($checkout_order);
        $completed = $payment_object->isCheckoutCompleted($checkout_order);
        $data = $payment_object->getPaymentDetails($checkout_order);
        break;
  
    
    default:
        # code...
        break;
}



//check if payment was completed
//if array has data or if it's empty
if(!$completed || empty($data)) {
    echo "payment process was not completed";
    exit;
}




//check if cart is empty


//insert order 
//to tell order id object to execute function
$order_id = $order_object->insertOrder(
    $user_id,
    $data["subtotal"],
    $data["total"],
    $data["total_discount_amount"],
    $data["payment"],
    $data["payment_id"]
);



//insert order details
$order_object->insertOrderDetails($cart_details, $order_id);


header("location: " . BASE_URL . "thanks");
exit;