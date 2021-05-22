<!-- <h4>Filter</h4> -->
<ul class="filter tablet">
    <li class="<?php echo ( add_query_arg( array(), $wp->request ) == 'home') ? 'current-page' : ''?>">
        <a href="<?php get_template_directory_uri()?>/wordpress/home">home</a>
    </li>
    <li class="<?php echo ( add_query_arg( array(), $wp->request ) == 'products') ? 'current-page' : ''?>">
        <a href="<?php get_template_directory_uri()?>/wordpress/products">all</a>
    </li>
    <?php
$args = array('taxonomy' => 'section', 'title_li' => '', 'show_count' => false);
wp_list_categories($args);
?>
    <li class="<?php echo ( add_query_arg( array(), $wp->request ) == 'contact-us') ? 'current-page' : ''?>">
        <a href="<?php get_template_directory_uri()?>/wordpress/contact-us">contact</a>
    </li>
</ul>

<ul class="filter mobile">
    <div class="icon">
        <img class="hamburger" style="display: none;" src="<?php echo get_template_directory_uri()?>/hamburger.png" alt="">
        <img class="cancel" src="<?php echo get_template_directory_uri()?>/cancel.png" alt="">
    </div>

    <div class="links">
        <li class="<?php echo ( add_query_arg( array(), $wp->request ) == 'home') ? 'current-page' : ''?>">
            <a href="<?php get_template_directory_uri()?>/wordpress/home">home</a>
        </li>

        <li class="<?php echo ( add_query_arg( array(), $wp->request ) == 'products') ? 'current-page' : ''?>">
            <a href="<?php get_template_directory_uri()?>/wordpress/products">products</a>
        </li>
        <?php
    $args = array('taxonomy' => 'section', 'title_li' => '', 'show_count' => false);
    wp_list_categories($args);
    ?>
        <li class="<?php echo ( add_query_arg( array(), $wp->request ) == 'contact-us') ? 'current-page' : ''?>">
            <a href="<?php get_template_directory_uri()?>/wordpress/contact-us">contact</a>
        </li>
    </div>
</ul>