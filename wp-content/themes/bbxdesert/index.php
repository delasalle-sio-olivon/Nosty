<?php get_header(); ?>
<!-- Main hero unit for a primary marketing message or call to action -->
      <div class="jumbotron">
      	<div class="container">
      	<br>
        <h1>Hello, world!</h1>
        <br>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <br>
        <p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p>
      	</div>
      </div>
<div class="info"></div>      
	<div class="container">
<!-- 		<div class="row"> -->
<!-- 			<div class="col-sm-6 col-md-4"> -->
<!-- 				<div class="thumbnail"> -->
<!-- 					<img src="..." alt="..."> -->
<!-- 					<div class="caption"> -->
<!-- 						<h3>Thumbnail label</h3> -->
<!-- 						<p>...</p> -->
<!-- 						<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p> -->
<!-- 					</div> -->
<!-- 				</div> -->
<!-- 			</div> -->
<!-- 			<div class="col-sm-6 col-md-4"> -->
<!-- 				<div class="thumbnail"> -->
<!-- 					<img src="..." alt="..."> -->
<!-- 					<div class="caption"> -->
<!-- 						<h3>Thumbnail label</h3> -->
<!-- 						<p>...</p> -->
<!-- 						<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p> -->
<!-- 					</div> -->
<!-- 				</div> -->
<!-- 			</div> -->
<!-- 			<div class="col-sm-6 col-md-4"> -->
<!-- 				<div class="thumbnail"> -->
<!-- 					<img src="..." alt="..."> -->
<!-- 					<div class="caption"> -->
<!-- 						<h3>Thumbnail label</h3> -->
<!-- 						<p>...</p> -->
<!-- 						<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p> -->
<!-- 					</div> -->
<!-- 				</div> -->
<!-- 			</div> -->
		</div> <!-- div row -->
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