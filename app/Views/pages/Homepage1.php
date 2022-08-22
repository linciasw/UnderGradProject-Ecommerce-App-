<style>



        /*
    *
    * ==========================================
    * CUSTOM UTIL CLASSES
    * ==========================================
    *
    */

    /* DEMO GENERAL ============================== */
    .hover {
      overflow: hidden;
      position: relative;
      padding-bottom: 60%;
    }

    .hover-overlay {
      width: 100%;
      height: 100%;
      position: absolute;
      top: 0;
      left: 0;
      z-index: 90;
      transition: all 0.4s;
    }

    .hover img {
      width: 100%;
      height: 100%;
      position: absolute;
      top: 0;
      left: 0;
      transition: all 0.3s;
    }

    .hover-content {
      position: relative;
      z-index: 99;
    }



    /* DEMO 1 ==============================  */
    .hover-1 img {
      width: 105%;
      height: 100%;
      position: absolute;
      top: 0;
      left: -5%;
      transition: all 0.3s;
      overflow: hidden;
    }

    .hover-1-content {
      position: absolute;
      bottom: 0;
      left: 0;
      z-index: 99;
      transition: all 0.4s;
    }

    .hover-1 .hover-overlay {
      background: rgba(0, 0, 0, 0.5);
    }

    .hover-1-description {
      transform: translateY(0.5rem);
      transition: all 0.4s;
      opacity: 0;
    }

    .hover-1:hover .hover-1-content {
      bottom: 2rem;
    }

    .hover-1:hover .hover-1-description {
      opacity: 1;
      transform: none;
    }

    .hover-1:hover img {
      left: 0;
    }

    .hover-1:hover .hover-overlay {
      opacity: 0;
    }






    /*
    *
    * ==========================================
    * FOR DEMO PURPOSES
    * ==========================================
    *
    */
    /* body {
      min-height: 100vh;
      background-color: #fafafa;
    } */
</style>



  <!-- DEMO 1
<div class="container py-5">
 DEMO 1
   For Demo Purpose
  <header class="text-center">
    <h1 class="display-4 font-weight-bold">Bootstrap Image Hover</h1>
    <p class="font-italic text-muted mb-0">An inspirational collection of subtle hover effects</p>
    <p class="font-italic">Snippet By <a href="https://bootstrapious.com" class="text-muted">
        <u>Bootstrapious</u></a>
    </p>
  </header>
  -->

<!--
  DEMO 1 
  <div class="py-5">
    DEMO 1 
    <h3 class="font-weight-bold mb-0">Demo 1</h3>
    <p class="font-italic text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
-->

<div class="container"></div>

    <div class="row">
      <div class="col-md-12">
        <div class="img-fluid hover hover-1 text-white rounded"><img src="https://bootstrapious.com/i/snippets/sn-img-hover/hoverSet-3.jpg" alt="">
          <div class="hover-overlay"></div>
          <div class="hover-1-content px-5 py-4">
            <h3 class="hover-1-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light"></span>WELCOME TO SILICONTT</h3>
            <p class="hover-1-description font-weight-light mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </div>
        </div>
      </div>


</div>
</div>