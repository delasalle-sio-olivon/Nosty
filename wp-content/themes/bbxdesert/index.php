<?php get_header(); ?>
<!-- Main hero unit for a primary marketing message or call to action -->
      <div class="jumbotron">
      	<div class="container logo">
      	<br>
        <h1>Nosty, no stress!</h1>
        <br>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <br>
        <p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p>
      	</div>
      </div>
<div class="info"></div>      

<!-- 		<div class="media"> -->
<!--  			<div class="media-left"> -->
<!--    				 <a href="#"> -->
<!--      				 <img class="media-object" src="..." alt="..."> -->
<!--    				 </a> -->
<!--   			</div> -->
<!--   			<div class="media-body"> -->
<!--    				<h4 class="media-heading">Media heading</h4> -->
<!--     			... -->
<!--   			</div> -->
<!-- 		</div> -->
 <?php
            /* Boucle pour afficher les posts du blog */
             get_template_part( 'loop', 'index' );
?>
		
<?php get_footer(); ?>