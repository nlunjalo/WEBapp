<?php
print '
<!DOCTYPE html>

<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>SynthWorks - Contact</title>
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta name="description" content="Projekt Web Aplikacija">
		<meta name="keywords" content="WEB, VVG, Projekt, SynthWorks">
		<meta name="author" content="Nikola Šamec">
		<link href="https://fonts.googleapis.com/css?family=Lemonada&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="../css/style.css">
	</head>

	<header>
	
		<nav>
	</header>
	
	<h1 class="post-title"> Contact </h1>
	<main>
	
		<div>
		<figure>
		<img src="../media/P1030751.png" alt="Our Location" title="Our Location">
		<figcaption>Our Location</figcaption>
		</figure>
		</div>
		<figure>
		<div class="article">
		<p>Working time:</p><p>MON-FRI:08-24</p><p>Our address:</p><p>Ul. Roberta Frangeša Mihanovića 9</p><p>10110, Zagreb</p>
		<p>Contact us on our e-mail:</p>
		<p>synthwave@synthworks.universe</p>
		</div>
		</figure>
			<div id="contact">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2781.7314276453644!2d15.909490315568611!3d45.79660807910619!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d14fae4f0b1d%3A0xff9aed7f52466c0c!2sUl.+Roberta+Frange%C5%A1a+Mihanovi%C4%87a+9%2C+10110%2C+Zagreb!5e0!3m2!1shr!2shr!4v1517073700970" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		
		<div class="container">
		<form action="action_page.php" id="contact_form" name="contact_form" method="POST">
		<center>

		<label for="fname">Ime *</label>
		<input type="text" id="fname" name="ime" placeholder="Vaše ime.." required>
		<label for="lname">Prezime *</label>
		<input type="text" id="lname" name="prezime" placeholder="Vaše prezime.." required>
			
		<label for="email">Vaš E-mail *</label>
		<input type="email" id="email" name="email" placeholder="Vaš E-mail.." required>

		<label for="country">Zemlja</label>
		<select id="country" name="country">
		  <option value="">Odaberite</option>
		  <option value="HR" selected>Hrvatska</option>
		  <option value="DE">Njemačka</option>
		  <option value="AU">Austrija</option>
		  <option value="HU">Mađarska</option>
		  <option value="RS">Srbija</option>
		</select>
		
		<label for="subject">Vaša poruka</label>
		<textarea id="subject" name="subject" placeholder="Napišite nam poruku.." style="height:200px; width:500px;"></textarea>
		<hr>
		<input type="submit" value="Pošalji">
		</hr>
		</center>
		</form>

	</div>

	<style>
input[type=text], select {
    width: 70%;
    padding: 12px 20px;
    margin: 8px 0;
    display: block;
	text-align: left;	
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 70%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=email], select {
    width: 70%;
    padding: 12px 20px;
    margin: 8px 0;
    display: block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

textarea, select {
    width: 70%;
    padding: 12px 20px;
    margin: 8px 0;
    display: block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div.container {
    display: block;
	text-align: left;	
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
	</style>
</body>
</html>

';
?>