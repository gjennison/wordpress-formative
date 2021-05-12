<!doctype html>
<html lang="en">

<head>
    <?php wp_head();?>
</head>

<body <?php body_class()?>>

    <header class="site-header">

        <nav class="menu-wrapper">
            <?php wp_nav_menu(array("menu" => "MainMenu", "container" => false));?>
        </nav>


    </header>