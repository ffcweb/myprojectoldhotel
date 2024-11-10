
<?php get_header(); ?>

<!-- START THE WP LOOP HERE -->
 <?php 
  if ( have_posts() ){
    while ( have_posts() ){ 
      the_post();
  ?>

<main class="single-page">

<div class="singel-blog">
  <div class="container">

   <!-- leading image -->
  <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID),'thumbnail'); ?>
  <section class="single-hero" style="background-image:url('<?php echo $url; ?>'); "></section>


    <section class="single-full-article">
      <div class="contanier">
        <h1 class="title"> <?php the_title(); ?> </h1>
        <P class="author">Author:<?php the_author(); ?></P>
        <p class="pubulished">Published on :<?php the_time('F j, Y'); ?> </h4>
        <br>
        <br>
        <div class="text-editor-content"><?php the_content(); ?></div>
      </div>
    </section>

  
      <!-- Navigation to Previous/Next Posts -->
      <section class="post-nav">
        <div class="container">
          <div class="nav-links">
            <div class="nav-previous">
              <?php previous_post_link('%link', '← Previous Post'); ?>
            </div>
            <div class="nav-next">
              <?php next_post_link('%link', 'Next Post →'); ?>
            </div>
          </div>
        </div>
      </section>
    

    <!-- Comments area for your to post messages-->
      <section class="comments-section">
        <div class="container">
          <?php 
          // If comments are open or we have at least one comment, load up the comment template
          if ( comments_open() || get_comments_number() ) {
            comments_template(); // Load the comments template
          }
          ?>
        </div>
      </section>
      

    </div>
  </div>
  
</main>

 <?php 
    } // END WHILE
  } // END IF 
  ?>  <!-- END THE WP LOOP HERE -->


<?php get_footer(); ?>