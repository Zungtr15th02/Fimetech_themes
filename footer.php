<?php 
    $theme_uri = get_stylesheet_directory_uri() . '/assets';
?>

<section class="contact wow animate__animated animate__delay-1s animate__zoomIn">
      <div class="contact-item">
        <img src="<?= $theme_uri ?>/images/contact-phone.png" alt="" />
        <div class="item-right">
          <p class="name">Liên hệ</p>
          <p class="content"><?php echo the_field('phone','options')?></p>
        </div>
      </div>
      <div class="contact-item">
        <img src="<?= $theme_uri ?>/images/contact-email.png" alt="" />
        <div class="item-right">
          <p class="name">Email</p>
          <p class="content"><?php echo the_field('email','options')?></p>
        </div>
      </div>
      <div class="contact-item">
        <img src="<?= $theme_uri ?>/images/contact-address.png" alt="" />
        <div class="item-right">
          <p class="name">Địa chỉ</p>
          <p class="content"><?php echo the_field('address','options')?></p>
        </div>
      </div>
</section>
<footer class="footer">
      <div class="wrap">
        <div class="footer-navbar">
          <img class="logo" src="<?=  $theme_uri ?>/images/logo-outline.png" alt="" />
          
          <!-- <div class="nav"> -->
            <?php 
              wp_nav_menu(
                array(
                  'menu' => 'primary',
                  'container' => '',
                  'theme_location' => 'primary',
                  'items_wrap' => '<ul class="list">%3$s</ul>'
                )
              );
            ?>
        </div>
        <div class="footer-content">
          <h2 class="heading"><?php echo get_field('company_name','options')?></h2>
          <div class="item">
            <p class="text">Mã số doanh nghiệp:</p>
            <p class="text"><?php echo get_field('code_company','options')?></p>
          </div>
          <div class="item">
            <p class="text">Đại diện doanh nghiệp:</p>
            <p class="text"><?php echo get_field('face_company','options')?></p>
          </div>
          <div class="item">
            <p class="text">Chức vụ:</p>
            <p class="text"><?php echo get_field('position_company','options')?></p>
          </div>
        </div>
        <div class="line"></div>
        <div class="footer-bottom">
          <p class="text">2020 Alright Reserved</p>
          <div class="list">
            <div class="item">
              <img src="<?=  $theme_uri ?>/images/footer-facebook.png" alt="" />
            </div>
            <div class="item">
              <img src="<?=  $theme_uri ?>/images/footer-instagram.png" alt="" />
            </div>
            <div class="item">
              <img src="<?=  $theme_uri ?>/images/footer-twitter.png" alt="" />
            </div>
          </div>
        </div>
      </div>

    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/progressbar.js/0.6.1/progressbar.min.js" integrity="sha512-7IoDEsIJGxz/gNyJY/0LRtS45wDSvPFXGPuC7Fo4YueWMNOmWKMAllEqo2Im3pgOjeEwsOoieyliRgdkZnY0ow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <script>
        new WOW().init();
       </script>
       <script>
        var bar = new ProgressBar.Line(liness, {
         strokeWidth: 4,
         easing: 'easeInOut',
         duration: 1000,  
         color: '#33CCFF',
         railColor: '#eee',
         trailWidth:4,
         svgStyle: {width: '50%', height: '50%'}
         });
          

         window.addEventListener('scroll', function() {
         if (document.documentElement.scrollTop > 1000) {
          bar.animate(1.0);
        }

      });


       </script>

  </body>
  <?php 
    wp_footer();
  ?>
</html>
