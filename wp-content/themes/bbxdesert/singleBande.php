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
$all = explode("[]",$all);
$src = substr($all[0], strpos($all[0],"src=")+5);
$src = substr($src, 0, strpos($src,"alt")-2);
$src = str_replace("http:", "", $src);
$src = str_replace("//", "", $src);

?>
<div class="row bande" style="background-image: url('http://<?php echo $src;?>');">
<div class="jumbotron jumbotronBande">
      	<div class="container bandeMil">
      	<br>
        <h1><?php echo $all[1];?></h1>
        <br>
        <p><?php echo $all[2];?></p>
        <br>

      	</div>
      </div>
</div><!-- div row -->