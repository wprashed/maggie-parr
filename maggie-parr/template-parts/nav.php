<?php
    $maggie_menu = wp_nav_menu( array(
        'theme_location' => 'mainmenu',
        'menu_id'        => 'nav',
        'menu_class'     => 'mx-auto nav navbar-nav',
        'depth'          => 4,
        'echo'           => false
    ) );
    $maggie_menu = str_replace("menu-item-has-children","menu-item-has-children dropdown",$maggie_menu);
    echo wp_kses_post($maggie_menu);
?>