



<div class="container">

<div class="my-slider">


    <?php 
    $product_details = $product_object->getRandomProducts();
    foreach($product_details as $data):
    ?>
  <div>
    <div class="slider-img"><img class="img-fluid" src="<?php echo BASE_URL . $data["product_image1"] ?>" alt=""></div>
  </div>
    <?php endforeach; ?>

</div>
</div>



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">



<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>




<script type="module">

    $(document).ready(function(){

        var slider = tns({
            container: '.my-slider',
            items: 6,
            slideBy: 'page',
            autoplay: true,
            mouseDrag: true,
            gutter: 10

    });
});
 </script>