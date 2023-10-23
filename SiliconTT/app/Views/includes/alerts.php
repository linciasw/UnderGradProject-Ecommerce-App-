<?php

    if(isset($_SESSION["message"])){
        $message = $_SESSION["message"];
        ?>

                <style>
                    
                    .alert {
                        margin-top: 80px;
                    }

                </style>



                <div class="container">
                    <div class="alert alert-info">
                        <strong>Hi!</strong> <?php echo $message; ?>
                    </div>
                </div>

        <?php
        unset($_SESSION["message"]);

    }

?>




