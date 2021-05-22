

<?php get_header();?>


<!-- start loop  -->
<?php if(have_posts()) : ?> 
 
  
 
 <?php while(have_posts()): the_post(); ?> 
  
 
 <h3><?php the_title(); ?></h3> 
 
  
 
 <div class="my-content">	 
 
 <?php the_content(); ?> 
 
 </div> 
  
 
  <?php endwhile; ?> 
 
 <?php endif; ?> 
<!-- end loop -->

 <?php get_footer();?>