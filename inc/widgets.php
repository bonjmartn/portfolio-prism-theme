<?php

function create_widget( $name, $id, $description ) {

	register_sidebar(array(
		'name' => sprintf( $name ),	 
		'id' => $id, 
		'description' => sprintf( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
}

// Create Widget Areas for Sidebars

create_widget( 'Blog Sidebar', 'blog', 'Displays on the right of blog posts' );

?>