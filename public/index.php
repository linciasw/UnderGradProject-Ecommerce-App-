<?php



require_once "../app/Config/Paths.php";
require_once APP_DIR . "Config/Router.php";



get($_ENV["PROJECT_PATH"] . 'home', 'app/Controllers/Homepage.php');


//http://localhost/class_template/registration
get($_ENV["PROJECT_PATH"] . 'registration', 'app/Controllers/Registration.php');
post($_ENV["PROJECT_PATH"] . 'registration', 'app/Controllers/Registration.php');


//http://localhost/class_template/login
get($_ENV["PROJECT_PATH"] . 'login', 'app/Controllers/Login.php');
post($_ENV["PROJECT_PATH"] . 'login', 'app/Controllers/Login.php');



//http://localhost/class_template/logout
get($_ENV["PROJECT_PATH"] . 'logout', 'app/Controllers/Logout.php');
post($_ENV["PROJECT_PATH"] . 'logout', 'app/Controllers/Logout.php');


//http://localhost/class_template/store
get($_ENV["PROJECT_PATH"] . 'store', 'app/Controllers/Store.php');
post($_ENV["PROJECT_PATH"] . 'store', 'app/Controllers/Store.php');

/*
$serverEnv = 0;
$configDir = dirname(_DIR_, 1) . "/app/Config";
is_dir($configDir) ? true : exit("Invalid Directory: " . $configDir);
require_once $configDir . "/Paths.php";
require_once $configDir . "/Router.php";
require_once $configDir . "/Debugger.php";
*/

/*
get('/home', 'app/Controllers/Homepage.php');


get('/registration', 'app/Controllers/Registration.php');
post('/registration', 'app/Controllers/Registration.php');


get('/login', 'app/Controllers/Login.php');
post('/login', 'app/Controllers/Login.php');
*/






// ##################################################
// ##################################################
// ##################################################

// Static GET
// In the URL -> http://localhost
// The output -> Index
// get(PROJECT_FOLDER, 'app/Controllers/Homepage.php');
get('/', 'app/Controllers/Homepage.php');
// get(PROJECT_FOLDER . 'login', 'app/Controllers/Login.php');




// Dynamic GET. Example with 1 variable
// The $id will be available in user.php
//get('/user/$id', 'index.php');

// Dynamic GET. Example with 2 variables
// The $name will be available in user.php
// The $last_name will be available in user.php
//get('/user/$name/$last_name', 'user.php');

// Dynamic GET. Example with 2 variables with static
// In the URL -> http://localhost/product/shoes/color/blue
// The $type will be available in product.php
// The $color will be available in product.php
//get('/product/$type/color/:color', 'product.php');

// Dynamic GET. Example with 1 variable and 1 query string
// In the URL -> http://localhost/item/car?price=10
// The $name will be available in items.php which is inside the views folder
//get('/item/$name', 'views/items.php');


// ##################################################
// ##################################################
// ##################################################
// any can be used for GETs or POSTs

// For GET or POST
// The 404.php which is inside the views folder will be called
// The 404.php has access to $_GET and $_POST
any('/404', 'app/views/404.php');
