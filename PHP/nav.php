<?php
print '
<!DOCTYPE html>
<html>
		<head><link rel="stylesheet" href="css/style.css"></head>
<body>
<header>
<ul>
<nav>
	<li><a href="index.php?menu=0">Start</a></li>
	<li><a href="index.php?menu=1">AboutUs</a></li>
	<li><a href="index.php?menu=2">Contact</a></li>
	<li><a href="index.php?menu=3">Gallery</a></li>
    <li><a href="index.php?menu=4">News</a></li>
	<li><a href="index.php?menu=5">Stories</a></li>';
if (!isset($_SESSION['user']['valid']) || $_SESSION['user']['valid'] == 'false') {
print '
	<li><a href="index.php?menu=6">Register</a></li>
	<li><a href="index.php?menu=7">SignIn</a></li>';
}
else if ($_SESSION['user']['valid'] == 'true') {
print '
	<li><a href="index.php?menu=8">Admin</a></li>
	<li><a href="signout.php">Sign Out</a></li>';
}
print '
    
</nav>
</ul>
</header>
</body>
</html>
';
?>