<!-- <h4>Filter</h4> -->
<ul class="filter tablet">
    <li>
        <a href="<?php get_template_directory_uri()?>/wordpress/home">home</a>
    </li>
    <li>
        <a href="<?php get_template_directory_uri()?>/wordpress/products">all</a>
    </li>
    <?php
$args = array('taxonomy' => 'section', 'title_li' => '', 'show_count' => true);
wp_list_categories($args);
?>
</ul>

<ul class="filter mobile">
    <div class="icon">
        <img class="hamburger" style="display: none;" src="<?php get_template_directory_uri()?>/wordpress/wp-content/themes/wfh/hamburger.png" alt="">
        <img class="cancel" src="<?php get_template_directory_uri()?>/wordpress/wp-content/themes/wfh/cancel.png" alt="">
    </div>

    <div class="links">
        <li>
            <a href="<?php get_template_directory_uri()?>/wordpress/home">home</a>
        </li>

        <li>
            <a href="<?php get_template_directory_uri()?>/wordpress/products">products</a>
        </li>
        <?php
    $args = array('taxonomy' => 'section', 'title_li' => '', 'show_count' => true);
    wp_list_categories($args);
    ?>
    </div>
</ul>