<?php 
/*
Single Post Template: UneLigneEtCTout
*/
?>
<div class="container container-small lignectout">
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
?>			
			
<p><?php echo $all;?></p>			

</div> <!-- div container -->
