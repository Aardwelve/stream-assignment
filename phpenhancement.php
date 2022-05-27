<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="description" content="Enhancement Page" />
	<meta name="keywords" 	 content="HTML, CSS" />
	<meta name="author" 	 content="Stream"/>
	<title>PHP Enhancement</title>
	<link href = "styles/style.css" rel="stylesheet">
</head>

<body>
<?php
	include('header.inc');
?>
<?php
	include('menu.inc');
?>
<h2>Enhancement 1</h2>
<h3>Login requirement for manage.php</h3>
<p>The implemented login section for the manage.php requires the user to insert a valid username and password. This username and password is compared to the local database which sees the user (if successful) move onto the manage.php segment of the webpage. This will prevent any unwanted guests from accessing your manage.php and inserts a bit of security to the webpage. It also has a function which prevents access to the manage.php from the searchbar if the login is not completed previously; if it is not completed it will send the user back to the login page to insert a password to continue. It also has error handling, if a username is not implemented it will display a message declaring that a username must be implemented, to compliment this it is the exact same for the password. If the user does not insert the correct credentials into the login it will prompt them that they are incorrect and prevent them from moving forward (but for the sake of this project the username and password are prompted through the placeholder function). 
<?php
	require('footer.inc');
?>
</body>
</html>
