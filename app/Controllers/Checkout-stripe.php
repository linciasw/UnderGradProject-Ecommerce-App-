<?php


require_once APP_DIR . "Utils/code.precheckout.php";


$cart_details = $cart_object->getCartDetails($user_id);
$cart_object->calculateTotal();

$stripe = Stripeclient::getClient();


header('Content-Type: application/json');

$YOUR_DOMAIN = BASE_URL;


$checkout_session = $stripe->checkout->sessions->create([
  'line_items' => [[
    'price_data' => [
        'currency' => 'USD',
        'unit_amount' => $cart_object->getTotal() * 100,
        'product_data' => [
        'name' => 'Cart Checkout',
        'images' => ['https://images.unsplash.com/photo-1604066867775-43f48e3957d8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80'],
        ]
      ],
    # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
    'quantity' => 1,
  ]],


  'payment_method_types' => ['card'],
  'mode' => 'payment',
  'success_url' => $YOUR_DOMAIN . 'checkout/success/stripe/{CHECKOUT_SESSION_ID}',
  'cancel_url' => $YOUR_DOMAIN . 'checkout',
]);




header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);