
<?php 
    get_header();
  ?>
  <main class="main">
    <div class="wrapper">
    <div class="astra-nav">
          <ul class="list">
              <li class="item">
              <a href="" class="item-link">Tất cả</a>
              </li>
              <li class="item">
              <a href="" class="item-link active">Tin tức</a>
              </li>
              <li class="item">
              <a href="" class="item-link">Sự kiện</a>
              </li>
              <li class="item">
              <a href="" class="item-link">Blog</a>
              </li>
          </ul>
      </div>
      <?php 
            get_search_form();
        ?>
      <section class="list-bottom">
          <div class="list">
              <?php
                if (have_posts()) {
                  while(have_posts()) {
                    the_post();
                    get_template_part('template-parts/content', 'archive');
                    
                  }
                }
              ?>
          </div>
      </section>
    <?php 
        the_posts_pagination();
    ?>
    </div>

  </main>
    
  <?php 
    get_footer();
  ?>