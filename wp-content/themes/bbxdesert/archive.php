<?php get_header();
query_posts( array ('posts_per_page' => -1 ) ); ?>
<div class="main">
  <?php if ( is_category() ): ?>
<?php if ( have_posts() ): 
?>
  <div class="posts">
    <?php while ( have_posts() ): the_post(); 
	    include 'switch.php';
    ?>
        
    <?php endwhile; ?>
<?php endif; ?>
<?php endif; ?>
</div>
<?php get_footer(); ?>