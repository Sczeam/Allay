<?php include('header.php'); ?>

    <!--
      - BANNER
    -->
<?php 

  // include banner area
  include('template/_banner-area.php');
  // include banner area


  // include category.php
  include('template/_category.php');
  // include category.php
?>    

  

    <!--
      - PRODUCT
    -->

    <div class="product-container">

      <div class="container">


        <!--
          - SIDEBAR
        -->
        <!-- best seller -->
        <?php 
        
          include('template/_best-seller.php');

          include('template/_product.php');
        
        ?>

        
      </div>

    </div>





    <!--
      - TESTIMONIALS, CTA & SERVICE
    -->
    <?php 
        
        include('template/_t-c-s.php');

        
        include('template/_blog.php');
        
    ?>
    

    <?php include('footer.php'); ?>
 