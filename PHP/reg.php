<?php 
	print '
	<h1>Registracija</h1>
	<div id="register">
	<center>
	<link rel="stylesheet" href="css/style.css">
	';
	
	if ($_POST['_action_'] == FALSE) {
		print '
		<form action="" id="registration_form" name="registration_form" method="POST">
			<input type="hidden" id="_action_" name="_action_" value="TRUE">
			
			<label for="fname">First Name *</label>
			<input type="text" id="fname" name="firstname" placeholder="Your name.." required>

			<label for="lname">Last Name *</label>
			<input type="text" id="lname" name="lastname" placeholder="Your last name.." required>
				
			<label for="email">Your E-mail *</label>
			<input type="email" id="email" name="email" placeholder="Your e-mail.." required>
			
			<label for="username">Username:* <small>(Username must have min 6 and max 12 char)</small></label>
			<input type="text" id="username" name="username" pattern=".{6,12}" placeholder="Username.." required><br>
			
									
			<label for="password">Password:* <small>(Password must have min 8 char)</small></label>
			<input type="password" id="password" name="password" placeholder="Password.." pattern=".{8,}" required>

			<label for="country">Country:</label>
			<select name="country" id="country">
				<option value="">molimo odaberite</option>';
				#Select all countries from database webprog, table countries
				$query  = "SELECT * FROM countries";
				$result = @mysqli_query($MySQL, $query);
				while($row = @mysqli_fetch_array($result)) {
					print '<option value="' . $row['country_code'] . '">' . $row['country_name'] . '</option>';
				}
			print '
			</select>

			<input type="submit" value="Submit">
		</form>';
	}
	else if ($_POST['_action_'] == TRUE) {
		
		$query  = "SELECT * FROM contact";
		$query .= " WHERE email='" .  $_POST['email'] . "'";
		$query .= " OR username='" .  $_POST['username'] . "'";
		$result = @mysqli_query($MySQL, $query);
		$row = @mysqli_fetch_array($result, MYSQLI_ASSOC);
		
		if ($row['email'] == '' || $row['username'] == '') {
			# password_hash https://secure.php.net/manual/en/function.password-hash.php
			# password_hash() creates a new password hash using a strong one-way hashing algorithm
			$pass_hash = password_hash($_POST['password'], PASSWORD_DEFAULT, ['cost' => 12]);
			
			$query  = "INSERT INTO contact (firstname, lastname, email, username, password, country)";
			$query .= " VALUES ('" . $_POST['firstname'] . "', '" . $_POST['lastname'] . "', '" . $_POST['email'] . "', '" . $_POST['username'] . "', '" . $pass_hash . "', '" . $_POST['country'] . "')";
			$result = @mysqli_query($MySQL, $query);
			
			# ucfirst() — Make a string's first character uppercase
			# strtolower() - Make a string lowercase
			echo '<p>' . ucfirst(strtolower($_POST['firstname'])) . ' ' .  ucfirst(strtolower($_POST['lastname'])) . ', thank you for registration </p>
			<hr>';
		}
		else {
			echo '<p>User with this email or username already exist!</p>';
		}
	}
	print '
	</center>
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

input[type=password], select {
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

div.register {
    display: block;
	text-align: left;	
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

</style>
';
?>