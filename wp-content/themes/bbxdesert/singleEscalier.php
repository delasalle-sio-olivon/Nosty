<?php
/*
ss Single Post Template: Escaliers
*/
?>
<div class="container">
	<div class="row">
<?php 

$all = get_the_content( $more_link_text, $strip_teaser );

/**
 * Filter the post content.
 *
 * @since 0.71
 *
 * @param string $content Content of the current post.
*/

$all = apply_filters( 'the_content', $all );
$all = str_replace( ']]>', ']]&gt;', $all );
$splited = explode('{}', $all);
foreach($splited as $content){
	$exploded = explode('[]', $content);
	$src = $exploded[0];
	$src = substr($src, strpos($src,"src=")+5);
	$src = substr($src, 0, strpos($src,"alt")-2);
	$src = str_replace("http:", "", $src);
	$titre = $exploded[1];
	$text = $exploded[2];
?>

<?php } ?>			
			
			
			
	</div> <!-- div row -->		
</div> <!-- div container -->
