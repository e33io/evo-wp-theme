<?php get_header(); ?>
<main id="content">
<article id="post-0" class="post not-found">
<header class="header">
<h2 class="entry-title"><?php esc_html_e( 'Error 404', 'evo' ); ?></h2>
</header>
<div class="entry-content">
<p class="search-error"><?php _e( 'Page not found — please try a new search, or select from the Menu or Archives', 'evo' ); ?></p>
<div id="search" class="error-search">
<?php get_search_form(); ?>
</div>
</div>
</article>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>