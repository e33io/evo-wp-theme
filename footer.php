<div class="clear"></div>
</div>
<footer id="footer">
<div id="search">
<?php get_search_form(); ?>
</div>
<div id="copyright">
<?php echo date( "Y" ); ?> &copy; <?php bloginfo( 'name' ); ?><span class="post-count"> - <?php $count_posts = wp_count_posts(); $total_posts = $count_posts->publish; echo $total_posts . ' posts'; ?></span>
</div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>