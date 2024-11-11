
<section class="bottom-image" data-aos="fade-left" data-aos-duration="3000" data-aos-delay="0"
      style="background-image: url(https://images.unsplash.com/photo-1566073771259-6a8506099945?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);">
      <div class="container">
        <div class="bottom-image-text">
          <h2><?php the_field('section_footer_big_title'); ?></h1>
          <p><?php the_field('_section_footer_small_title'); ?></p>
          <h3><?php the_field('_section_footer_mid_title'); ?></h3>
        </div>
      </div>
    </section>

    <footer class="footer-section">
      <div class="container">
        <div class="footer-grid">

          <div class="footer-text">
            <a href="">policy</a>
          </div>

          <div class="footer-text">
            <a href="">services</a>
          </div>

          <div class="footer-text">
            <a href="">contact us</a>
          </div>

          <div class="footer-text">
            <a href="">our locations</a>
          </div>

          <div class="footer-text">
            <a href="">VIP services</a>
          </div>
        </div>

        <div class="footer-grid-2">
          <div class="container">
            <div class="footer-text">
              <a href=""> <h6>Copyright @2024 All rights reserved</h6></a>
            </div>
          </div>
        </div>

      </div>
    </footer>

        
<!--link jquery-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
  integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!---AOS JS Link -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


<script>
    AOS.init({
      once: true,
    });
 </script>
 


    <?php wp_footer(); ?>

  </body>
</html>