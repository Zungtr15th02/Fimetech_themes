<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <title><?php echo get_bloginfo('name'); ?></title>

    <?php 
        wp_head();
        $theme_uri = get_stylesheet_directory_uri() . '/assets';
    ?>

  </head>
  <body>

    <header  class="header">
      <div class="wrapper">
        <label for="menu-input" class="menu-icon ">
          <img src="<?php echo $theme_uri; ?>/images/menu-icon.png" alt="" />
        </label>
        <input type="checkbox" hidden class="menu-input" id="menu-input" />
        <div class="nav-mobile">
          <div class="wrap">
            <div class="logo">
                <img src="<?php  echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt="" />
            </div>
            <label for="menu-input">
                <img src="<?php  echo get_stylesheet_directory_uri(); ?>/assets/images/close-icon.png" alt="" />
            </label>
          </div>
          <ul class="nav-mobile-list ">
              <?php 
                  wp_nav_menu(
                    array(
                      'menu' => 'primary',
                      'container' => '',
                      'theme_location' => 'primary',
                      'items_wrap' => '<ul class="nav-list">%3$s</ul>'
                    )
                  );
                ?>
          </ul>
        </div>
        <div class="logo">
          <?php 
            if (function_exists('the_custom_logo')) {
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id);
            }
          ?>
          <img src="<?= $theme_uri ?>/images/logo.png" alt="" /> 
        </div>

          

        <div class="nav">
          <?php 
              wp_nav_menu(
                array(
                  'menu' => 'primary',
                  'container' => '',
                  'theme_location' => 'primary',
                  'menu_class' => 'nav-list',
                )
              );
            ?>
        </div>
        <div class="language">
          <img class="language-flag" src="<?php echo $theme_uri;  ?>/images/vietnam-flag.png" alt="" />
          <span class="language-name">Vietnamese</span>
          <span
            ><svg
              width="7"
              height="5"
              viewBox="0 0 7 5"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M1 1.31472L3.68528 4L6.37056 1.31472"
                stroke="black"
                stroke-miterlimit="10"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
          </span>
        </div>
      </div>
    </header>