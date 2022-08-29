<style>
    
	.container {
        margin-top: 40px;
    } 



    body {
        /* background: linear-gradient(to right, #c04848, #480048); */
        min-height: 100vh
    }

    .text-gray {
        color: #aaa
    }

    img {
        height: 170px;
        width: 140px
    }


</style>


<div class="container py-5">
    <div class="row text-center text-black mb-5">
        <div class="col-lg-7 mx-auto">
            <h1 class="display-4">Order Details</h1>
            <a href="<?php echo BASE_URL . "orders" ?>">Return To Product Listing</a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <!-- List group-->
            <ul class="list-group shadow">



            <?php foreach ($orders as $data) : ?>
                <!-- list group item-->
                <li class="list-group-item">
                    <!-- Custom content-->
                    <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                        <div class="media-body order-2 order-lg-1">
                            <h5><?php echo $data["product_title"]; ?></h5>
                            <h4>Date ordered: <?php echo $data["order_details_created"]; ?></h4>
                            <!-- <p class="font-italic text-muted mb-0 small">128 GB ROM | 15.49 cm (6.1 inch) Display 12MP Rear Camera | 7MP Front Camera A12 Bionic Chip Processor</p> -->
                            <div class="d-flex align-items-center justify-content-between mt-1">
                                <h6 class="font-weight-bold my-2"><?php echo $data["order_details_price"]; ?></h6>
                                <ul class="list-inline small">
                                    <li class="list-inline-item m-0"><i class="fa fa-star-o text-gray"></i></li>
                                </ul>
                            </div>
                        </div><img src="<?php echo BASE_URL . $data["product_image1"]; ?>" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2">
                    </div> <!-- End -->
                </li> <!-- End -->
            <?php endforeach; ?>





            <li class="list-group-item">
                    <!-- Custom content-->
                    <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                        <div class="media-body order-2 order-lg-1">
                        <h1 class="text-center">Summary</h1>
                        <h3>Order # <span class="float-right"><?php echo $data["order_id"]; ?></span></h3>
                        <h3>Subtotal <span class="float-right"><?php echo $data["subtotal"]; ?></span></h3>
                        <h3>Total <span class="float-right"><?php echo $data["total"]; ?></span></h3>

                        </div>
                    </div>
            </li>




            </ul> <!-- End -->
        </div>
    </div>
</div>