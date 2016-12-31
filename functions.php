<?php

function register_menus() {
	register_nav_menu( 'main-menu', __( 'Main Menu') );
}
add_action( 'init', 'register_menus' );

?>