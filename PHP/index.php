<?php
if(!isset($_GET['menu'])) {$_GET['menu']=0;}

	# DB Conn
	include ("dbconn.php");
	
	# Start
    session_start();
	
	# Variables MUST BE INT
    if(isset($_GET['menu'])) {$menu = (int)$_GET['menu'];}
	if(isset($_GET['action'])) {$action = (int)$_GET['action'];}
	
	# Variables MUST BE STRINGS A-Z
    if(!isset($_POST['_action_']))  { $_POST['_action_'] = FALSE;  }
	
	# Classes & Functions
    include_once("functions.php");

print '
<!DOCTYPE html>

<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>SynthWorks</title>
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta name="description" content="Projekt Web Aplikacija">
		<meta name="keywords" content="WEB, VVG, Projekt, SynthWorks">
		<meta name="author" content="Nikola Šamec">
		<link href="https://fonts.googleapis.com/css?family=Lemonada&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/style.css">
	</head>
	
	<body>
		<header>
		<img class="banner" src="media/banner.jpg" alt="banner">
<div';
//if ($_GET['menu'] > 0) { print ' class="banner-subimage"'; } else { print ' class="banner"'; }
print '></div>

		<nav>
';

include("nav.php");


print '
    </nav>
    </header>
	<main>

';


if($_GET['menu']==1) {
        include("html/onama.php");
}
else if ($_GET['menu']==2) {
        include("html/kontakt.php");
}
else if ($_GET['menu']==3) {
        include("html/galerija.php");
}
else if ($_GET['menu']==4) {
        include("news.php");
}		
else if ($_GET['menu']==5) {
        include("html/novosti.php");
}
else if ($_GET['menu']==6) { 
		include("reg.php"); 
}
else if ($_GET['menu']==7) { 
		include("sign.php"); 
}
else if ($_GET['menu']==8) { 
		include("admin.php"); 
}
else  include("html/html.php");
print '




	    
	</main>
	<footer>
	&copy; Copyright 2019. Nikola Samec
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
			<a href="https://twitter.com/nikolasamec" target="_blank" class="fa fa-twitter"></a>
			<a href="https://www.linkedin.com/in/nikolsamec/" target="_blank" class="fa fa-linkedin"></a>
			<a href="https://github.com/nlunjalo" target="_blank" class="fa fa-github"></a>
					
	</footer>
</body>
';
?>