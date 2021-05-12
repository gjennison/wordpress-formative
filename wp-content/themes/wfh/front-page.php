<?php /* Template Name: FrontPage */?> 

<?php get_header();?>

<?php if (have_posts()) :  ?>

    <div class="hero" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
        <h2><?php the_title(); ?></h2>
    </div>
    
    <?php while (have_posts()) :  the_post(); ?>
        <?php the_content(); ?> 
    <?php endwhile; ?>
  
<?php endif; ?> 




<?php get_footer();?>