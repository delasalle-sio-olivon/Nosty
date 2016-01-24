<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="icon" type="image/png" href="/images/mafavicon.png" />
    <meta charset="utf-8">
    <title>Nosty no stress</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Nosty Web">
    <meta name="author" content="Adrien Olivon">

    <!-- Le styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
	<?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
    <script src="components/webcomponentsjs/webcomponents-lite.min.js"></script>

<!-- Import element -->
<link rel="import" href="components/google-map/google-map.html">

  </head>

  <body>
<div id="main-site">
<div id="main-container">
  <?php 
  $args = array(
  		'type'                     => 'post',
  		'child_of'                 => 0,
  		'parent'                   => '',
  		'orderby'                  => 'name',
  		'order'                    => 'ASC',
  		'hide_empty'               => 1,
  		'hierarchical'             => 1,
  		'exclude'                  => '',
  		'include'                  => '',
  		'number'                   => '',
  		'taxonomy'                 => 'category',
  		'pad_counts'               => false
  
  );
  
$categories = get_categories( $args );
?>
  <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Menu</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
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
      <a class="navbar-brand" href="<?php echo get_site_url()?>"><span><img alt="Brand" src="http://<?php echo $all[2];?>"></span></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      <?php 
      foreach ($categories as $cat){
      	$catname = $cat->cat_name;
      	if ($catname != "index" && $catname !="Non classé" && $catname !="fond"){
      		?>
      		
      		 <li><a href="<?php echo get_site_url()?>/index.php/nostress/<?php echo $catname; ?>/"><?php echo str_replace("interrogation", "?", str_replace("_", " ", $catname)); ?><span class="sr-only"></span></a></li>
      		<?php 
      	}
      }
      ?>
      </ul>
   
<!--       <ul class="nav navbar-nav navbar-right"> -->
<!--         <li><a href="#">Link</a></li> -->
<!--         <li class="dropdown"> -->
<!--           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a> -->
<!--           <ul class="dropdown-menu"> -->
<!--             <li><a href="#">Action</a></li> -->
<!--             <li><a href="#">Another action</a></li> -->
<!--             <li><a href="#">Something else here</a></li> -->
<!--             <li role="separator" class="divider"></li> -->
<!--             <li><a href="#">Separated link</a></li> -->
<!--           </ul> -->
<!--         </li> -->
<!--       </ul> -->
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


