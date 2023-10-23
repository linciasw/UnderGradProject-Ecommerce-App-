<?php

require_once APP_DIR . "Utils/code.precheckout.php";


//shows the user log in info on screen as an array
//debug($_POST);
// debug($_SESSION);

$orders = $order_object->getUserOrders($user_id);



//load views
require_once APP_DIR . "Views/header.php";
require_once APP_DIR . "Views/pages/Orders.php";
require_once APP_DIR . "Views/footer.php";