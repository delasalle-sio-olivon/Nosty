<?php 
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
function isValid($code, $ip = null)
{
	if (empty($code)) {
		return false; // Si aucun code n'est entré, on ne cherche pas plus loin
	}
	$params = [
			'secret'    => "6LcfLRUTAAAAABXnt9kT_4CHQoKxP60aMh2zbpTG",
			'response'  => $code
	];
	if( $ip ){
		$params['remoteip'] = $ip;
	}
	$url = "https://www.google.com/recaptcha/api/siteverify?" . http_build_query($params);
	if (function_exists('curl_version')) {
		$curl = curl_init($url);
		curl_setopt($curl, CURLOPT_HEADER, false);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_TIMEOUT, 1);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); // Evite les problèmes, si le ser
		$response = curl_exec($curl);
	} else {
		// Si curl n'est pas dispo, un bon vieux file_get_contents
		$response = file_get_contents($url);
	}

	if (empty($response) || is_null($response)) {
		return false;
	}

	$json = json_decode($response);
	return $json->success;
}

if (isValid($_POST["g-recaptcha-response"])){
	//mail('contact.nosty@gmail.com' , $_POST["sujet"], "Un mail a été envoyer de " . $_POST["from"] .$_POST["body"]);
	header("Location: " . get_site_url() .'/index.php?action="Send"');
}else{
	header("Location: " . get_site_url() . '/index.php?action="ErrorSend"');
}