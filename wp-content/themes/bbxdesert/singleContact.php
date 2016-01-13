<?php 
/*
Single Post Template: Contact
*/
?>
	
<?php 

?><script src='https://www.google.com/recaptcha/api.js'></script>
<form action="<?php echo get_site_url()?>/contact.php" method="post">
<div class="container container-small contact">
	<h1 class="auto">Contactez-nous</h1>
	<br>
	<div class="input-group">
	  <span class="input-group-addon" id="basic-addon1">@</span>
	  <input type="text" name="from" class="form-control" placeholder="mail@mail.com" aria-describedby="basic-addon1">
	</div> <br>
	<div class="input-group">
  		<span class="input-group-addon" id="basic-addon3">Sujet</span>
  		<input type="text" name="subjet" class="form-control" id="basic-url" aria-describedby="basic-addon3">
	</div>
<br>
	<div class="form-group">
  		<label for="comment">Contenu :</label>
  		<textarea class="form-control" rows="5" name="body" id="comment"></textarea>
  		
	</div>
	<div class="g-recaptcha" data-sitekey="6LcfLRUTAAAAAC9t_rV-kx2NieSYcjzuTjQW1v7U"></div>
	<div class="auto"><button type="submit" class="btn btn-default">Envoyer</button></div>
</div>
</form>