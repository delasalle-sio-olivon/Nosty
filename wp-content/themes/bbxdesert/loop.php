<?php if ( have_posts() ): ?>
  <div class="posts">
    <?php while ( have_posts() ): the_post(); 
    
    $s = new Single_Post_Template_Plugin();
    $res = $s->get_post_template2(get_the_ID());
    echo $res;
    switch ($res) {
    	case "singleThumbnails.php":
    		include 'singleThumbnails.php'
    	;
    	break;
    	
    	case "default":
    		include 'single.php'
    				;
    				break;
    	
    	default:
    		;
    	break;
    }
    echo $res;
    ?>
        
    <?php endwhile; ?>
<?php endif; ?>
