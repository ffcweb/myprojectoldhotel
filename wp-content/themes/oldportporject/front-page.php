
<?php get_header(); ?>

  <main>
<section class="hero" style="background-image:url(<?php the_field('section_hero_background_image'); ?>);">
  <div class="slider-section" >
      <div class="container">

        <div class="slider-holder"><!-- beginning -->

          <!-- card 1 -->
          <div class="slider-card" >
            <h2 class="title">Spacious Modern smart house</h2>
            <div class="icons">
              <div class="icon"><i class="bi bi-geo-alt"></i></div>
              <div class="text">Location</div>
              <div class="icon"><i class="bi bi-cursor-fill"></i> </div>
              <div class="text">Show on Map</div>
            </div>
            <div class="line-divider"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesent sodales commodo ex sed pellentesque.
              Aliquam vitae purus sed dolor hendrenrit vehicula imperdiet ed justo. magna.
            </p>
            <div class="line-divider"></div>
            <div class="details-flex">
              <div class="item">
                <div class="title">lot size</div>
                <div class="info-flex">
                  <div class="icon"><i class="bi bi-journal-minus"></i></div>
                  <div class="text">2561 sqlf</div>
                </div>
              </div>
              <div class="item">
                <div class="title">bed</div>
                <div class="info-flex">
                  <div class="icon"><i class="fa-solid fa-bed"></i></div>
                  <div class="text">9</div>
                </div>
              </div>
              <div class="item">
                <div class="title">baths</div>
                <div class="info-flex">
                  <div class="icon"><i class="fa-solid fa-bath"></i></div>
                  <div class="text">2</div>
                </div>
              </div>
              <div class="item">
                <div class="title">garage</div>
                <div class="info-flex">
                  <div class="icon"><i class="bi bi-house-gear-fill"></i></div>
                  <div class="text">1</div>
                </div>
              </div>
            </div>
            <div class="line-divider"></div>
            <div class="forsale">
              <div class="tag">for sale</div>
              <div class="parent-flex">
                <div class="amount">$345,000 </div>
                <div class="a-mid"><a>best deal</a></div>
              </div>
              <a class="action" href="">view property</a>
            </div>
          </div>

          <!-- card 2 -->
          <div class="slider-card">
            <h2 class="title">luxury real estate in Montreal</h2>
            <div class="icons">
              <div class="icon"><i class="bi bi-geo-alt"></i></div>
              <div class="text">Location</div>
              <div class="icon"><i class="bi bi-cursor-fill"></i> </div>
              <div class="text">Show on Map</div>
            </div>
            <div class="line-divider"></div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam sed quidem reiciendis dolore
              voluptatibus perferendis recusandae esse voluptatum modi et excepturi maxime consequatur sit qui nobis,
              dolor dicta fuga cupiditate.
            </p>
            <div class="line-divider"></div>

            <div class="details-flex">
              <div class="item">
                <div class="title">lot size</div>
                <div class="info-flex">
                  <div class="icon"><i class="bi bi-journal-minus"></i></div>
                  <div class="text">3231 sqlf</div>
                </div>
              </div>
              <div class="item">
                <div class="title">bed</div>
                <div class="info-flex">
                  <div class="icon"><i class="fa-solid fa-bed"></i></div>
                  <div class="text">11</div>
                </div>
              </div>
              <div class="item">
                <div class="title">baths</div>
                <div class="info-flex">
                  <div class="icon"><i class="fa-solid fa-bath"></i></div>
                  <div class="text">5</div>
                </div>
              </div>
              <div class="item">
                <div class="title">garage</div>
                <div class="info-flex">
                  <div class="icon"><i class="bi bi-house-gear-fill"></i></div>
                  <div class="text">3</div>
                </div>
              </div>
            </div>

            <div class="line-divider"></div>
            <div class="forsale">
              <div class="tag">for sale</div>
              <div class="parent-flex">
                <div class="amount">$833,000 </div>
                <div class="a-mid"><a>best deal</a></div>
              </div>
              <a class="action" href="">view property</a>
            </div>
          </div>
        </div> <!-- closing -->
      </div>
</div>
</section>

<!-- 
    <section class="hero"  style="background-image:url(<?php the_field('section_hero_background_image'); ?>);">
      <div class="container">

        <h1 class="big-title"><?php the_field('section_hero_big_title'); ?></h1>
        <h5 class="sub-title"><?php the_field('section_hero_subtitle'); ?></h5>
        <p class="special-p"><?php the_field('section_discover_discription_first'); ?>
        </p><?php the_field('section_discover_discription_second'); ?>
     
        <a class="hero-btn btn" href="">Book a reservation</a>
      </div>
    </section> -->



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

<!-- CDN Jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
      integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- CDN Slick -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"
      integrity="sha512-eP8DK17a+MOcKHXC5Yrqzd8WI5WKh6F1TIk5QZ/8Lbv+8ssblcz7oGC8ZmQ/ZSAPa7ZmsCU4e/hcovqR8jfJqA=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- https://kenwheeler.github.io/slick/ -->
    <script>
      $('.slider-holder').slick({
        infinite: true,
        fade: true,
        ease: 'linear',
        speed: 800,
        autoplay: true,
        autoplaySpeed: 2500,
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 990,
            settings: {
              speed: 600,
              autoplaySpeed: 2000,

            }
          }, // comma here required
          {
            breakpoint: 768,
            settings: {
              autoplaySpeed: 1500,
            }
          }
        ]

      });

    </script>


<?php get_footer(); ?>