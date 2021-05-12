<?php /* Template Name: Products-Page */?> 

<?php get_header();?>


<!-- start loop  -->
<?php if(have_posts()) : ?> 
<h2>All Products</h2> 
<?php while(have_posts()): the_post(); ?> 

 <div class="my-content">	 
 <?php the_content(); ?> 
 </div> 
  
<?php endwhile; ?> 
<?php endif; ?> 
<!-- end loop -->


<?php
 
 
$args = array(
    'post_type' => 'products',
    'post_status' => 'publish',
    'posts_per_page' => -1, 
    'order' => 'ASC', 
);
$query = new WP_Query($args);
// var_dump($query)
?>


<section class="section term-collection-wrap"> 

 
<?php if ( $query->have_posts() ) : ?> 

<?php while ( $query->have_posts() ):  $query->the_post(); ?> 

<div class="term-collection"> 

<h2><?php the_title(); ?></h2> 

<div>
 <?php the_post_thumbnail();?>
</div>

<div><?php the_excerpt(); ?></div> 
<a href="<?php echo the_permalink();?>" target="_self"><span>View more</span></a> 
<hr />

</div> 

<?php endwhile; ?> 

<?php endif; ?> 

 

<?php wp_reset_postdata(); ?> 

 
 
 

</section> 






 <?php get_footer();?>