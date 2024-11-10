
<?php get_header(); ?>

  <main>

    <section class="hero"  style="background-image:url(<?php the_field('section_hero_background_image'); ?>);">
      <div class="container">
        <!-- <h1 class="big-title">hero setction</h1>
        <h2 class="sub-title">hero setction</h2> -->

        <h1 class="big-title"><?php the_field('section_hero_big_title'); ?></h1>
        <h5 class="sub-title"><?php the_field('section_hero_subtitle'); ?></h5>
        <p class="special-p"><?php the_field('section_discover_discription_first'); ?>
        </p><?php the_field('section_discover_discription_second'); ?>
        
        <!-- Dynamic button -->
        <a class="hero-btn btn" href="">Book a reservation</a>
      </div>
    </section>



    <section class="featured">
    <div class="container">
      <!-- <h1 class="big-title">featuured section</h1> -->
        
      <div class="feture-one" data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="0" style="background-image:url(<?php the_field('section_featured_one_image'); ?>);">
    
          <div class="feture-one-flex">
            <div class="feture-one-text-hoder">
              <h2><?php the_field('section_feature_one_title'); ?></h2>
              <p><?php the_field('section_feature_one_text_area'); ?></p>
            </div>
            <div class="feture-one-img-holder" style="background-image:url(<?php the_field('section_featured_one_card_image'); ?>);"></div>
          </div>
      </div>

      <!--  style="background-image:url(<?php the_field('section_featured_two_image'); ?>);"  -->
      <div class="feture-two" data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="0">
          <div class="feture-two-flex">
            <div class="feture-two-img-holder" tyle="background-image:url(<?php the_field('section_featured_two_card_image'); ?>);"></div>
            <div class="feture-two-text-holder">
            <h2><?php the_field('section_feature_two_title'); ?></h2>
            <p><?php the_field('section_feature_two_text_area'); ?></p>
            <a class="btn" href="">Book a reservation</a>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="blog">
      <div class="container">

      <!-- Dynamic title and color changing -->
        <h2 class="blog-big-title" style="color:<?php the_field('section_blogs_title_color')?> ;"><?php the_field('section_blogs_title'); ?></h2>
        
        <div class="blog-grid">

        <!-- LOOP BLOGS - STEP 1 -->
         <?php 
         $homepageBlogPosts = new WP_Query(array(
          'posts_per_page' => 8,
          'post_type' => 'post'
         ));

            // while loop
            while($homepageBlogPosts->have_posts()){
              $homepageBlogPosts->the_post();
          ?>

        <!-- CARDS -->
          <div class="blog-card" data-aos="zoom-out" data-aos-duration="3000" data-aos-delay="0">



            <!-- Dynamic IMAGE STEP-1-->
             <?php 
             $postimg = wp_get_attachment_url(
              get_post_thumbnail_id($post->ID),
             );
            ?>

              <!-- Dynamic IMAGE STEP-2-->
            <div class="blog-card-img" style="background-image:url(<?php echo $postimg; ?>);"></div>

              <div class="blog-card-info">
                <p class="date">published: <?php the_time('y,m,d');?> </p>

                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"> 
                  <h5 class="info-title"> <?php the_title();?></h5>
                </a>

                <!-- Excerpt  -->
                 <p class="excerpt"><?php echo wp_trim_words(get_the_excerpt(),15, '...'); ?></p>

                <p class="aothor">Author: <?php the_author();?></p>
              </div>
          </div>

         <!-- LOOP BLOGS - STEP 2 -->
          <?php } wp_reset_postdata(); ?>

      </div>
    
    </section>


</main>


<?php get_footer(); ?>