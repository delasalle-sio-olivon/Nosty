<?php if ( have_posts() ): ?>
  <div class="posts">
    <?php while ( have_posts() ): the_post(); 
    
    $s = new Single_Post_Template_Plugin();
    $res = $s->get_post_template2(get_the_ID());
    switch ($res) {
    	case "singleThumbnails.php":
    		include 'singleThumbnails.php';
    	break;
    	
    	case "singleThumbnailsLess.php":
    		include 'singleThumbnailsLess.php';
    	break;
    	
    	case "singleBande.php":
    		include 'singleBande.php';
    	break;
    	
    	case "singleTitre.php":
    		include 'singleTitre.php';
    	break;
    	
    	
    	case "default":
    		include 'single.php';
    	break;
    	
    	default:
    		;
    	break;
    }
    ?>
        
    <?php endwhile; ?>
<?php endif; ?>
