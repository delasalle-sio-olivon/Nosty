<?php get_header(); 

?>
<!-- Main hero unit for a primary marketing message or call to action -->

<?php if ( have_posts() ): ?>
    <?php while ( have_posts() ): the_post(); 
    $category = get_the_category();

		foreach ($category as $cat){
		    if($cat->cat_name == "fond"){
			    include 'singleImagePrincipal.php';
		    }
		}
    ?>
        
    <?php endwhile; ?>
<?php endif; ?>
      <div style="background-image: url('http://<?php echo $all[0];?>');background-position: center center; 
	background-position: center center;
	background-repeat: no-repeat; 
	background-attachment: fixed; 
	background-size: cover; 

	height : 460px;
	color : blue;"class="jumbotron jumbotronTop">
      	<div class="container logo" style="background-image: url('http://<?php echo $all[1];?>'); background-height : 130px;
	background-position : center 0px;
	background-repeat:no-repeat;');">
      	<br>
        <h1><?php echo $all[3];?></h1>
        <br>
        <p><?php echo $all[4];?></p>
        <br>
      	</div>
      </div>
<div class="info">
	<div class="container container-small">
		<a href="https://www.facebook.com/Nosty-987902074600378/?fref=ts"><i class="fa fa-facebook fa-3x iconInfo"></i></a>
		<a href="https://twitter.com/Nosty_fr"><i class="fa fa-twitter fa-3x iconInfo"></i></a>
	</div>      
</div>
 <?php
            /* Boucle pour afficher les posts du blog */
             get_template_part( 'loop', 'index' );
?>
		
<?php get_footer(); ?>
