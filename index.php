<?php get_header(); ?>
<main id="content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry-summary' ); ?>
<?php endwhile; endif; ?>
<?php evo_page_navigation(); ?>
</main>
<?php get_footer(); ?>