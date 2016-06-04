<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<?php if ( !is_front_page() ) : ?>
    </div>
  </div>
  <?php endif; ?>
	<!--////////////////////////////////////Footer-->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-4 col-footer-1">
          <div class="wrap-col">
            <h3>About Us</h3>
            <p>Saringo website used to publish articles in following titles: Thought of the day, Meme of the day, Employment News, Sports, Events, Advertisement, Question of the day, Facebook page posts | saringo.com</p>
            
          </div>
        </div>
        <div class="col-sm-4 col-footer-2">
          <div class="wrap-col">
            <h3>Categories</h3>
            <?php if ( has_nav_menu( 'primary' ) ) : ?>
                  <?php
                // Primary navigation menu.
                wp_nav_menu( array(
                  'menu_class'     => 'footer-list',
                  'theme_location' => 'primary',
                ) );
              ?>
                <?php endif; ?> 
          </div>
        </div>
        <div class="col-sm-4 col-footer-4">
          <div class="wrap-col">
            <h3>Contact</h3>
            <ul class="contact-link">
              <li>
                <a href="mailto:support@saringo.com">
                  <i class="fa fa-envelope"></i>support@saringo.com
                </a>
              </li>
              <li>
                <a href="tel:99999999" class="hide">
                  <i class="fa fa-phone"></i> 9999999999
                </a>
              </li>
              <li><i class="fa fa-map-marker"></i> Chennai, India.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <div class="copyright">
    <div class="container wrapper">
      <div class="col-sm-8">
        Copyright @ saringo.com
      </div>
      <div class="col-sm-4">
        <ul class="quick-link">
          <li><a href="/">Privacy Policy</a></li>
          <li><a href="/">Terms of Use</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- .site-footer -->


     
	</div><!-- .site-inner -->
 <script>
      $(window).scroll(function(){
        if ($(window).scrollTop() >= 70) { 
          $('#logo-outer').addClass('fixed-header');      
        }
        else {
          $('#logo-outer').removeClass('fixed-header');
        }
      });
      // $('.carousel').carousel();
    </script>
<?php wp_footer(); ?>
</body>
</html>
