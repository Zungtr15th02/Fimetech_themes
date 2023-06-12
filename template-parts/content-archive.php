
<?php 
    $fimetech_value_desc = get_post_meta(get_the_ID(), 'fimetech_field_desc', true);
?>

<div class="item">
    <a href="<?php the_permalink(); ?>">
        <img class="img" height="200" src="<?php the_post_thumbnail_url(''); ?>" alt="" />
    </a>
    <div class="name green" style="display: inline-block;"><?php echo the_category(); ?></div>
    <h2 class="title">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h2>
    <p class="desc">
        <?php echo $fimetech_value_desc;  ?>
    </p>
    <div class="line"></div>
</div>
