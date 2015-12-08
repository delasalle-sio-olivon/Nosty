<?php
/*
 Single Post Template: Button
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
$all = str_replace( '<p>', '', $all );
$all = str_replace( '</p>', '', $all );
$all = explode("[]",$all);
?>
<div class="row simple">
<div class="jumbotron jumbotronSimple">
      	<div class="container">
      	<br>
        <h1><?php echo $all[0];?></h1>
        <br>
        <p><?php echo $all[1];?></p>
        <br>
        <a class="btn btn-primary" href="#" role="button"><?php echo $all[2];?></a>
      	</div>
      </div>
</div><!-- div row -->