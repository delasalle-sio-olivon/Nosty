<?php 
/*
Single Post Template: Bande
*/
?>
	
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
$src = substr($all, strpos($all,"src=")+5);
$src = substr($src, 0, strpos($src,"alt")-2);
$src = str_replace("http:", "", $src);
$src = str_replace("//", "/", $src);
$src = str_replace("/localhost", "", $src); //TODO : !MODIFIER LOCALHOST!
?>
<div class="row bande" style="background-image: url('<?php echo $src;?>');">
aaaaa
</div><!-- div row -->