<?php

	
error_reporting(E_ALL);
ini_set('display_errors', '1');

session_start();
require  $_SERVER['DOCUMENT_ROOT'] .'/wp-load.php';

$conNom 	= $_POST['conNom'];
$conApe 	= $_POST['conApe'];	
$conMail 	= $_POST['conMail'];	
$conTxt 	= $_POST['conTxt'];

$data = 	array( 
		'conNom' 	=> $conNom,
		'conApe' 	=> $conApe,	
		'conMail' 	=> $conMail,								
		'conTxt'	=> $conTxt
	);
	
print_r($data);

$wpdb->insert( 
	'wp_4ckt1b_contacto', $data

);	

	$to 	 = 'contacto@acktib.com';
	$message = '<html><body>';
	$message .= '<div>';
	$message .= "<p>De:  <strong>".$conNom." ".$conApe." </strong></p>";  
	$message .= "<p>Correo: <strong>".$conMail." </strong></p>";  
	$message .= "<p>Mensaje:</p>"; 
	$message .= "<p> <strong>".$conTxt." </strong></p>";  
	$message .= "</div>";
	$message .= "</body></html>";
	$headers = array('Content-Type: text/html; charset=UTF-8');
	
	
	$subject = 'Contacto Acktib';
	$headers = "From: " . "<no-reply@acktib.com> Web Acktib" . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	
	mail($to, $subject, $message, $headers);


	echo 'ok';

?>