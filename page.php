<?php 
    get_header();
  ?>
  <main class="main">
    <div class="wrapper">
      <div class="astra-nav wow animate__animated delay-0,5s animate__fadeInLeft">
          <ul class="list">
              <li class="item">
              <a href="" class="item-link active">Tất cả</a>
              </li>
              <li class="item">
              <a href="" class="item-link ">Tin tức</a>
              </li>
              <li class="item">
              <a href="" class="item-link">Sự kiện</a>
              </li>
              <li class="item">
              <a href="" class="item-link">Blog</a>
              </li>
          </ul>
     </div>
     <div class="list-bottom  wow animate__animated animate__delay-1s animate__fadeInUp">
        <div class="list">
            <?php
                // First query arguments. 
                $args1 = array(
                  'post_type' => 'post',
                  'posts_per_page' => '6'
                );
                // First custom query. 
                $query1 = new WP_Query( $args1 );
  
              if ($query1->have_posts()) {
                while($query1->have_posts()) {
                  $query1->the_post();
                  get_template_part('template-parts/content', 'archive');
                  get_the_date('d - m - Y');
                  ?>
                  <?php
                    
                }
              }
            ?>
        </div>
      </div>
  </main>
 
    
  <?php 
    get_footer();
  ?>
                