<?php get_header(); ?>
<div class="main">
  <?php if ( is_category() ): ?>
<?php if ( have_posts() ): ?>
  <div class="posts">
    <?php while ( have_posts() ): the_post(); 
	    include 'switch.php';
    ?>
        
    <?php endwhile; ?>
<?php endif; ?>
<?php endif; ?>
</div>
<?php get_footer(); ?>