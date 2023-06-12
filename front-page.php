
<?php 
    get_header();
    $theme_uri = get_stylesheet_directory_uri() . '/assets';
  ?>
  <main class="main ">
    <section  class="hero  " >
      <div  class="hero-content animate__animated animate__delay-0,5s  animate__fadeInDown ">
        <h1 class="heading ">
        <?php echo get_field('header_title')?>
        </h1>
        <p class="description">
        <?php echo get_field('header_content')?>
        </p>
        <a href="" class="link">TÌm hiểu thêm</a>
        <a href="" class="link-arrow">
          <svg
            width="16"
            height="19"
            viewBox="0 0 16 19"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M7.29289 18.7071C7.68342 19.0976 8.31658 19.0976 8.70711 18.7071L15.0711 12.3431C15.4616 11.9526 15.4616 11.3195 15.0711 10.9289C14.6805 10.5384 14.0474 10.5384 13.6569 10.9289L8 16.5858L2.34315 10.9289C1.95262 10.5384 1.31946 10.5384 0.928933 10.9289C0.538408 11.3195 0.538408 11.9526 0.928933 12.3431L7.29289 18.7071ZM7 4.37114e-08L7 18L9 18L9 -4.37114e-08L7 4.37114e-08Z"
              fill="white"
            />
          </svg>
        </a>
      </div>
      <div class="hero-img wow animate__animated animate__delay-1s animate__fadeInRight">
        <img src="<?php echo get_field('header_image') ['sizes'] ['large'] ?>" alt="" />
      </div>
    </section>
    <section class="about wow animate__animated animate__delay-2s animate__fadeInUp ">
      <div class="about-img ">
        <img src="<?php  echo get_field('Intro_img','options') ['sizes'] ['large'] ?>" alt="" />
      </div>
      <div class="about-content ">
        <h2 class="slogan"><?php echo get_field('Intro_title','options')?></h2>
        <div class="wrap">
          <h2 class="heading"><?php echo get_field('intro_item','options')?></h2>
          <?php
     if (have_rows ('intro_content')):
      while (have_rows('intro_content')):
           the_row();
           $intro_head = get_sub_field('intro_head');
           $intro_description = get_sub_field('intro_description');
           ?> 

          <div class="content-item">
            <h2 class="title"><?php echo  $intro_head ?> </h2>
            <p class="description">
            <?php echo $intro_description?>
            </p>
          </div>

          <?php
          endwhile;
          endif;
         ?>
        </div>
      </div>
    </section>
    <section class="activity">
      <div class="circle">
        <img src="<?php echo $theme_uri; ?>/images/activity-circle.png" alt="" />
      </div>
      <div class="line-first">
        <img src="<?php echo $theme_uri; ?>/images/activity-line-first.png" alt="" />
      </div>
      <div class="line-second">
        <img src="<?php echo $theme_uri; ?>/images/activity-line-second.png" alt="" />
      </div>
      <h2 class="title"><?php echo get_field('action_title')?></h2>
      <h1 class="heading"><?php echo get_field('action_content')?></h1>
      <div class="activity-list">

      <?php
      if (have_rows ('service_item')):
        while (have_rows('service_item' )):
           the_row();
           $service_icon = get_sub_field('service_icon');
           $service_title = get_sub_field('service_title');
           $service_description = get_sub_field('service_description');
           ?>
        <div class="activity-item wow animate__animated animate__delay-1s animate__fadeInDown">
          <div class="wrapper">
            <div class="item-top">
              <img src="<?php echo $service_icon ['sizes'] ['large'] ?>" alt="" />
              <div class="wrap">
               <?php echo  $service_title ?>
              </div>
            </div>
            <div class="item-bottom">
              <p class="desc">
               <?php echo  $service_description?>
              </p>
            </div>
          </div>
        </div>
        <?php
        endwhile;
      endif;
         ?>
      </div>
    </section>
    <section class="news ">
      <h2 class="title "><?php echo get_field('title_news')?></h2>
      <div class="heading"><?php echo get_field('news_content')?> <div id="liness"></div> </div>
     
      <div class="list-bottom wow animate__animated animate__delay-1s animate__fadeInDown">
        <div class="list ">
            <?php
                // First query arguments. 
                $args1 = array(
                  'post_type' => 'post',
                  'posts_per_page' => '3'
                );
                // First custom query. 
                $query1 = new WP_Query( $args1 );
  
              if ($query1->have_posts()) {
                while($query1->have_posts()) {
                  $query1->the_post();
                  get_template_part('template-parts/content', 'archive');
                  
                  ?>
                  <?php
                }
              }
            ?>
        </div>
      </div>
      <div class="see-more wow animate__animated animate__delay-1s animate__fadeInUp  ">
        <a href="bai-viet" class="link">Xem thêm</a>
      </div>
    </section>
  </main>
    
  <?php 
    get_footer();
  ?>