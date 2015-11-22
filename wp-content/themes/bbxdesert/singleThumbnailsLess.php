<?php 
/*
Single Post Template: ThumbnailsSansBord
*/
?>
<div class="container container-small">
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
$col = 12/count($splited);
if(12%count($splited) ==0){

}else{
	$col = floor($col);
}
foreach($splited as $content){
	$exploded = explode('[]', $content);
	$src = $exploded[0];
	$src = substr($src, strpos($src,"src=")+5);
	$src = substr($src, 0, strpos($src,"alt")-2);
	$src = str_replace("http:", "", $src);
	$titre = $exploded[1];
	$text = $exploded[2];
?>
			<div class="col-sm-6 col-md-<?php echo $col;?>">
				<div class="thumbnail thumbnailEgal thumbnailLess">
					<img src="<?php echo $src;?>" alt="...">
					<div class="caption">
						<h2><?php echo $titre ;?></h2>
						<?php echo $text;?>
					</div>
				</div>
			</div>
<?php } ?>			
			
			
			
	</div> <!-- div row -->		
</div> <!-- div container -->
