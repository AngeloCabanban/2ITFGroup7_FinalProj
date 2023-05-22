<?php
require_once "CRUDConfig.php";
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: indexLogin.html');
	exit;
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Profile Page</title>
	<link href="style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="bootstrap/js/jquery-3.3.1.slim.min.js"></script>
	<script src="bootstrap/js/popper.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body class="loggedin">
	<nav class="navtop">
		<div>
			<img src="images/logo.png" alt="logo">
			<a href="profile.php">Profile</a>
			<a href="home.php">Home</a>
			<a href="scholarship.php">Scholarship</a>
			<a href="requirements.php">Requirements</a>
			<a href="news.php">News</a>
			<a href="about.php">About</a>
			<a href="logout.php">Logout</a>
		</div>
	</nav>

	<div class="content">
		<h2>Profile Page</h2>
		<div>
			<p>Account Details:</p>
			<table>

				<?php

				$select = "SELECT * FROM accounts WHERE email = '$_SESSION[name]'";

				if ($result = $mysqli->query($select)) {
					if ($result->num_rows > 0) {
						$row = $result->fetch_object();
						$name = $row->name;
						$email = $row->email;
					}
				}

				?>

				<tr>
					<td>Scholar Name:</td>
					<td><?php echo $name ?></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><?php echo $email ?></td>
				</tr>
			</table>
			<br><br>
			<form method="post" action="PWUpdate.html">
				<input type="submit" id="changePW" value="Change Password" />
			</form>
		</div>
	</div>
</body>

</html>