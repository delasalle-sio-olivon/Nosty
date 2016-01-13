<?php get_header(); ?>
<!-- Main hero unit for a primary marketing message or call to action -->
      <div class="jumbotron jumbotronTop">
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