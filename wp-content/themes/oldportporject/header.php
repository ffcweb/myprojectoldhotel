<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Old Hotel</title>
  
  <!--font awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
  
    <!--Google fonts-->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />

  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet" />
  
  <!--AOS Link (Animate On Scroll)-->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

   <!-- CDN for icons -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://kit.fontawesome.com/ead014dd91.js" crossorigin="anonymous"></script>

  <!-- CDN slick slider css -->
  <!-- https://cdnjs.com/libraries/slick-carousel -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"
    integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <!--Custom CSS(last thing before closing your head)-->
  <link rel="stylesheet" href="style.css" />

</head>

<?php wp_head(); ?>

<!-- body_class() fuction  -->
<body <?php body_class();?>>
  
  <header>
    <div class="container">
      <!-- <h1 class="big-title">this is header</h1> -->
       <div class="header-flex">

          <div class="logo">
            <a class="logo" href="<?php echo home_url() ?>"><?php the_custom_logo();?>
          </div>

          <div class="menu-holder">
            <!-- Dynamicly get the menu from wp -->
            <?php 
          
              // Step 1, define the rules
              $rules =array(
                'theme_location' => 'header-menu',
                'menu_class' => 'menu-ul'
              );

              // Step 2, function to run the code
              wp_nav_menu($rules);
              ?>
          </div>

        </div>

      </div>
  </header>