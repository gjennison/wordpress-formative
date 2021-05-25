
<?php get_header();?>


<?php locate_template('template-parts/filter.php', true); ?>

<!-- start loop  -->
<?php if(have_posts()) : ?> 
    <div class="product">
        <?php while(have_posts()): the_post(); ?> 
        <div class="product-img">
            <?php the_post_thumbnail(); ?>
        </div> 
        <div class="product-content">
            <h2><?php the_title(); ?> </h2> 
            <p><?php the_excerpt(); ?></p>
    <?php the_content(); ?> 
 </div>
  
<?php endwhile; ?> 
</div>
<?php endif; ?> 
<!-- end loop -->


 <?php get_footer();?>