<?php
$s = new Single_Post_Template_Plugin();
$res = $s->get_post_template2(get_the_ID());
switch ($res) {
	case "singleThumbnails.php":
		include 'singleThumbnails.php';
		break;

	case "singleThumbnailsLess.php":
		include 'singleThumbnailsLess.php';
		break;

	case "singleBande.php":
		include 'singleBande.php';
		break;

	case "singleTitre.php":
		include 'singleTitre.php';
		break;

	case "singleSimple.php":
		include 'singleSimple.php';
		break;

	case "singleMedia.php":
		include 'singleMedia.php';
		break;

	case "singleMedia2.php":
		include 'singleMedia2.php';
		break;

	case "singleMedia3.php":
		include 'singleMedia3.php';
		break;

	case "singleLigne.php":
		include 'singleLigne.php';
		break;

	case "singleContact.php":
		include 'singleContact.php';
		break;
		
	case "singleEscalier.php":
		include 'singleEscalier.php';
		break;
	case "singleButton.php":
		include 'singleButton.php';
		break;

	case "default":
		include 'single.php';
		break;

	default:
		;
		break;
}