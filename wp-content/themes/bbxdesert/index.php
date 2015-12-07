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
		<i class="fa fa-facebook fa-3x iconInfo"></i>
		<i class="fa fa-twitter fa-3x iconInfo"></i>
	</div>      
</div>
 <?php
            /* Boucle pour afficher les posts du blog */
             get_template_part( 'loop', 'index' );
?>
		
<?php get_footer(); ?>