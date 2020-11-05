<?php
    $maggie_menu = wp_nav_menu( array(
        'theme_location' => 'footermenu',
        'menu_id'        => 'nav',
        'menu_class'     => 'footer-menu float-right',
        'echo'           => false
    ) );
    echo wp_kses_post($maggie_menu);
?>