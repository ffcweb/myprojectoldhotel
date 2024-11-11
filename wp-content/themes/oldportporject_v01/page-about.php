
<?php get_header(); ?>

<main>

 <!-- banner section -->
 <section class="banner" >
      <div class="container">
        <!-- Title  -->
        <h1 class="title cpat"><?php the_field('about_page_section_banner_big_title'); ?></h1>
        <!-- hr element -->
        <hr> 
        <!-- Flex  -->
        <div class="flex">
          <div class="left">
            <h2> <?php the_field('about_page_section_banner_subtitle'); ?></h2>
            <p><?php the_field('about_page_section_banner_description'); ?></p>
          </div>
          <div class="right" data-aos="zoom-out" data-aos-duration="3000" data-aos-delay="0"  style="background-image:url(<?php the_field('about_page_section_banner_flex_right_image'); ?>);"></div>
        </div>

        <!-- End flex -->
      </div>
    </section>
    <!-- End banner section -->  
    
<section class="service-section">
      <div class="container">
        <div class="service-heading">
          <h3><?php the_field('section_features_title'); ?></h3>
        
        </div>
        <div class="service-parent-grid">
          <div class="serviece-card" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="0">
            <div class="card-text"><?php the_field('section_feature_card-text_two'); ?></div>
            <p><?php the_field('section_card_description_one'); ?></p>
          </div>
          <div class="serviece-card" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="0">
            <div class="card-text"><?php the_field('section_feature_card-text_two'); ?></div>
            <p><?php the_field('section_card_description_two'); ?></p>
          </div>
          <div class="serviece-card" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="0">
            <div class="card-text"><?php the_field('section_feature_cardtext_three'); ?></div>
            <p><?php the_field('section_card_description_three'); ?></p>
          </div>
          <div class="serviece-card" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="0">
            <div class="card-text"><?php the_field('section_feature_cardtext_four'); ?></div>
            <p><?php the_field('section_card_description_four'); ?></p>
          </div>
        </div>
      </div>
    </section>

    <section class="learn-more">
      <div class="container">
        <div class="parents-flex">
          <div class="learn-more-text">
            <h2><?php the_field('section_learn_more'); ?></h2>
            <p><?php the_field('section_learn_more_text_area'); ?></p>
            <!-- <a class="btn-learn-more" href="#">Learn More</a> -->
            
            <h5> <?php the_field('section_learn_more_contact_info'); ?></h5>
          </div>
          <div class="learn-more-img" data-aos="flip-left" data-aos-duration="3000" data-aos-delay="0" style="background-image:url(<?php the_field('section_learn_more_image'); ?>);">></div>
        </div>
      </div>
    </section>


</main>

<?php get_footer(); ?>