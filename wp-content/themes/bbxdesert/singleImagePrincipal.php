<?php 
/*
Single Post Template: Principal
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
$all = explode("[]", $all);
$src = $all[0];
$src = substr($src, strpos($src,"src=")+5);
$src = substr($src, 0, strpos($src,"alt")-2);
$src = str_replace("http:", "", $src);
$src = str_replace("//", "", $src);

$src2 = $all[1];
$src2 = substr($src2, strpos($src2,"src=")+5);
$src2 = substr($src2, 0, strpos($src2,"alt")-2);
$src2 = str_replace("http:", "", $src2);
$src2 = str_replace("//", "", $src2);

$src3 = $all[2];
$src3 = substr($src3, strpos($src3,"src=")+5);
$src3 = substr($src3, 0, strpos($src3,"alt")-2);
$src3 = str_replace("http:", "", $src3);
$src3 = str_replace("//", "", $src3);

$all[0] = $src;
$all[1] = $src2;
$all[2] = $src3;
?>			
