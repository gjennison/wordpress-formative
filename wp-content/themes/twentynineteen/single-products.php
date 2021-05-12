
<?php get_header();?>


<!-- start loop  -->
<?php if(have_posts()) : ?> 
<h2><?php the_title(); ?> </h2> 
<?php while(have_posts()): the_post(); ?> 
 <div class="my-content">	 
 <?php the_content(); ?> 
 </div> 
  
<?php endwhile; ?> 
<?php endif; ?> 
<!-- end loop -->



 <?php get_footer();?>