<?php get_header(); 

?>
<!-- Main hero unit for a primary marketing message or call to action -->

<?php if ( have_posts() ): ?>
  <div class="posts">
    <?php while ( have_posts() ): the_post(); 
    $category = get_the_category();
    $cat = $category[0]->cat_name;
    if($cat == "fond"){
	    include 'singleImagePrincipal.php';
    }
    ?>
        
    <?php endwhile; ?>
<?php endif; ?>
      <div style="background-image: url('http://<?php echo $src;?>');background-position: center center; 
	background-position: center center;
	background-repeat: no-repeat; 
	background-attachment: fixed; 
	background-size: cover; 

	height : 600px;
	color : white;"class="jumbotron jumbotronTop">
      	<div class="container logo">
      	<br>
        <h1>Nosty, no stress!</h1>
        <br>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
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