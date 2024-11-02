<?php

// page navigation 
function evo_page_navigation() {
	global $wp_query;
	if ( $wp_query->max_num_pages > 1 ) {
		echo '<nav id="nav-below" class="navigation" role="navigation">';
		echo '<ul><li class="nav-next" style="display: inline-block;">';
		previous_posts_link( '&#10094; Newer' );
		echo '</li><li class="nav-previous" style="display: inline-block;">';
		next_posts_link( 'Older &#10095;' );
		echo '</li></ul>';
		echo '</nav>';
	}
}

// add Open Graph and Twitter Card meta tags 
function evo_og_meta_tags() {
	global $post;
	if ( has_post_thumbnail( $post->ID ) ) {
		$img_src = get_the_post_thumbnail_url( $post->ID, 'large' );
	} else {
		$img_src = get_stylesheet_directory_uri() . '/assets/images/default-post-image.png';
	}
	$current_url = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	$current_uri = $_SERVER['REQUEST_URI'];
	if ( is_single() ) { ?>
		<meta name="twitter:card" content="summary_large_image" />
		<meta property="og:url" content="<?php the_permalink() ?>" />
		<meta property="og:title" content="<?php the_title(); ?>" />
		<meta property="og:description" content="<?php echo wp_strip_all_tags( get_the_excerpt() ); ?>" />
		<meta property="og:image" content="<?php echo $img_src; ?>" />
	<?php } elseif ( is_front_page() ) { ?>
		<meta name="twitter:card" content="summary" />
		<meta property="og:url" content="<?php echo get_home_url(); ?>" />
		<meta property="og:title" content="<?php bloginfo( 'name' ); ?>" />
		<meta property="og:description" content="<?php bloginfo( 'description' ); ?>" />
		<meta property="og:image" content="<?php site_icon_url() ?>" />
	<?php } else { ?>
		<meta name="twitter:card" content="summary" />
		<meta property="og:url" content="<?php echo $current_url; ?>" />
		<meta property="og:title" content="<?php bloginfo( 'name' ); ?>" />
		<meta property="og:description" content="<?php echo $current_uri; ?>" />
		<meta property="og:image" content="<?php site_icon_url() ?>" />
	<?php }
}
add_action( 'wp_head', 'evo_og_meta_tags', 99 );
