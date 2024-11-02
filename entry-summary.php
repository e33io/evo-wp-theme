<div class="entry-summary">
<a href="<?php the_permalink(); ?>" rel="bookmark">
<?php the_title( '<h2 class="entry-title-summary">', '</h2>' ); ?>
<div class="entry-meta">
<span class="entry-date">
<?php the_time( get_option( 'date_format' ) ); ?>
<?php $u_time = get_the_time('U'); 
$u_modified_time = get_the_modified_time('U'); 
if ($u_modified_time >= $u_time + 86400) { 
echo ", Updated: "; 
the_modified_time( get_option( 'date_format' ) ); } ?>
</span>
</div>
</a>
</div>