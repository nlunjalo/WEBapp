<?php

$str = '<?xml version="1.0" encoding="UTF-8"?><entrys></entrys>';
$xml = simplexml_load_string($str);

$fname = $_POST['ime'];
$lname = $_POST['prezime'];
$email = $_POST['email'];
$country = $_POST['country'];
$subject = $_POST['subject'];

$xml = new DOMDocument('1.0', 'utf-8');
$xml->formatOutput = true;
$xml->preserveWhiteSpace = false;
$xml->load('file.xml');

$element = $xml->getElementsByTagName('contact_form')->item(0);

$timestamp = $element->getElementsByTagName('timestamp')->item(0);
$fname = $element->getElementsByTagName('ime')->item(0);
$lname = $element->getElementsByTagName('prezime')->item(0);
$email = $element->getElementsByTagName('email')->item(0);
$country = $element->getElementsByTagName('country')->item(0);
$subject = $element->getElementsByTagName('subject')->item(0);

$newItem = $xml->createElement('contact_form');

$newItem->appendChild($xml->createElement('timestamp', date("F j, Y, g:i a",time())));;

$newItem->appendChild($xml->createElement('fname', $_POST['ime']));
$newItem->appendChild($xml->createElement('lname', $_POST['prezime']));
$newItem->appendChild($xml->createElement('email', $_POST['email']));
$newItem->appendChild($xml->createElement('country', $_POST['country']));
$newItem->appendChild($xml->createElement('subject', $_POST['subject']));

$xml->getElementsByTagName('entries')->item(0)->appendChild($newItem);

$xml->save('file.xml');

echo "Data has been written.";

?>
	
	