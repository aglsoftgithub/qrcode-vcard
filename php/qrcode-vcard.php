<?php

// inclusion gestionnaire QR Code
require_once dirname(__FILE__).'/../vendor/phpqrcode/qrlib.php';

// configuration minimale pour QR Code
$codesDir = dirname(__FILE__).'/../img/qrcodes/';

var_dump($_POST);

if(isset($_POST["name"])){

	$vcard = "BEGIN:VCARD\nVERSION:3.0\nFN:".$_POST['name']."\nORG:GIS Sarl\nTEL;TYPE=WORK,MSG:+237".$_POST['phone_work']."\nTEL;TYPE=HOME,MSG:+237".$_POST['phone_home']."\nEMAIL;TYPE=INTERNET:".$_POST['email']."\nADR;TYPE=WORK:".$_POST['localization']."\nEND:VCARD";

	// generation du QR Code
	QRcode::png($vcard, $codesDir."vcard.png", QR_ECLEVEL_L, 3);

	// retour au formulaire
	header("Location:../index.html");
}


?>