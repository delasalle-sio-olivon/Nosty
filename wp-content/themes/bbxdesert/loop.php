<?php
query_posts( array ('posts_per_page' => -1 ) );
if ( have_posts() ): ?>
  <div class="posts">
    <?php while ( have_posts() ): the_post(); 
    $category = get_the_category();
    $cat = $category[0]->cat_name;
    if($cat == "index"){
	    include 'switch.php';
    }
    ?>
        
    <?php endwhile; ?>
<?php endif; ?>
