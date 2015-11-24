<?php get_header(); ?>
<div class="main">
  <?php if ( is_category() ): ?>
  <?php endif; ?>
  <?php get_template_part( 'loop' ); ?>
</div>
<?php get_footer(); ?>