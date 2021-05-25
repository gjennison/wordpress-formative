<?php get_header();?> 

<?php locate_template('template-parts/filter.php', true); ?>

<div class="products taxonomy">
<!-- start loop  --> 
<?php if (have_posts()): ?> 

<?php while (have_posts()): the_post();?> 
<div class="product">
<h3><?php the_title();?></h3> 
<div class="product-content"> 
    <?php the_post_thumbnail();?>
    <?php the_excerpt();?> 
    <a href="<?php echo the_permalink();?>" target="_self"><span>View more</span></a> 

</div> 
</div>
<?php endwhile;?> 

<?php endif;?> 

</div>

<!-- end loop --> 
<?php get_footer();?> 

 