<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

<?php require_once APP_DIR . "Views/header-contents.php"; ?>


<title>SiliconTT</title>


<style>
    nav {
    margin: auto;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: left;
    margin-bottom: 60px;
    }

    #navcol-1 {
    font-size: 18px;
    }

    @media (max-width: 576px) {
    .navbar-dark .navbar-nav .nav-link {
        float: right;
    }
}



</style>

</head>

<body>

<div class=container>

<nav class="navbar navbar-dark navbar-expand-md fixed-top bg-dark">
        <div class="container-fluid"><a class="navbar-brand" href="<?php echo BASE_URL . "homepage"; ?>">SiliconTT</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav text-right text-white ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#">About Us</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo BASE_URL . "store"; ?>">Products</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Shopping Tools</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Customer Service</a></li>
                </ul>
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"></li>
                   <!-- <li class="nav-item" role="presentation"><a name="search" class="nav-link" href="#"><i class="fa fa-search"></i></a></li> -->
                   <form class="navbar-form form-inline">
		
                        <div class="input-group search-box">								
                            <input name="search" type="text" id="search" class="form-control" placeholder="Search here...">
                            <div class="input-group-append">
                              <!--  <span class="input-group-text"></span> -->
                            </div>
                        </div>
        

                   </form>
                    <li class="nav-item" role="presentation"></li>


                    <?php 
                        if(isset($_SESSION ["current_user"])){
                      ?>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo BASE_URL . "logout"; ?>">Log Out</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo BASE_URL . "cart"; ?>">Cart</a></li>
                            
                    <?php 
                        } else {
                    ?>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo BASE_URL . "login"; ?>">Log In</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo BASE_URL . "registration"; ?>">Sign Up</a></li>
                    <?php
                        }


                        ?>
                    
                    
    

    




                   


                </ul>
            </div>
        </div>

        </div>
    </nav>