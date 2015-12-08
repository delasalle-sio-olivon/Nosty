<?php 
/*
Single Post Template: ImageADroite
*/
?>
<div class="container container-small media-container">
<?php 
$all1 = get_the_content( $more_link_text, $strip_teaser );

/**
 * Filter the post content.
 *
 * @since 0.71
 *
 * @param string $content Content of the current post.
*/

$all1 = apply_filters( 'the_content', $all1 );
$all1 = str_replace( ']]>', ']]&gt;', $all1 );
$all1 = explode("{}",$all1);
foreach($all1 as $all ){
$all = explode("[]",$all);
$src = substr($all[0], strpos($all[0],"src=")+5);
$src = substr($src, 0, strpos($src,"alt")-2);
$src = str_replace("http:", "", $src);
$src = str_replace("//", "/", $src);
?>
<div class="media">
  
  <div class="media-body">
    <h4 class="media-heading"><?php echo $all[1] ;?></h4>
    <?php echo $all[2] ;?>
  </div>
  <div class="media-right">
    <a href="#">
      <img class="media-object" src="http:<?php echo $src ;?>" alt="">
    </a>
  </div>
</div>
<?php }?>
</div>



