<?php
require_once "CRUDConfig.php";
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: indexLogin.html');
	exit;
}
// $DATABASE_HOST = 'localhost';
// $DATABASE_USER = 'root';
// $DATABASE_PASS = '';
// $DATABASE_NAME = 'dost';
// $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
// if (mysqli_connect_errno()) {
// 	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
// }
// // We don't have the password or email info stored in sessions, so instead, we can get the results from the database.
// $stmt = $con->prepare('SELECT password, email, name FROM accounts WHERE id = ?');
// // In this case we can use the account ID to get the account info.
// $stmt->bind_param('i', $_SESSION['id']);
// $stmt->execute();
// $stmt->bind_result($password, $email);
// $stmt->fetch();
// $stmt->close();
?>
<!DOCTYPE html>
<html>
<<<<<<< HEAD

<head>
	<meta charset="utf-8">
	<title>Profile Page</title>
	<link href="style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>

<body class="loggedin">
	<nav class="navtop">
		<div>
			<img src="images/logo.png" alt="logo">
			<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
			<a href="home.php"><i class="fa-solid fa-house"></i>Home</a>
			<a href="scholarship.php"><i class="fa-solid fa-graduation-cap"></i>Scholarship</a>
			<a href="requirements.php"><i class="fa-brands fa-wpforms"></i>Requirements</a>
			<a href="news.php"><i class="fa-solid fa-bullhorn"></i>News</a>
			<a href="about.php"><i class="fa-solid fa-address-card"></i>About</a>
			<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
=======
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
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="home.php"><i class="fa-solid fa-house"></i>Home</a>
				<a href="scholarship.php"><i class="fa-solid fa-graduation-cap"></i>Scholarship</a>
				<a href="requirements.php"><i class="fa-brands fa-wpforms"></i>Requirements</a>
				<a href="news.php"><i class="fa-solid fa-bullhorn"></i>News</a>
				<a href="about.php"><i class="fa-solid fa-address-card"></i>About</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="content">
			<h2>Profile Page</h2>
			<div>
				<p>Your account details are below:</p>
				<table>
					<tr>
						<td>Email:</td>
						<td><?=$_SESSION['name']?></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><?=$password?></td>
					</tr>
				</table>
			</div>
>>>>>>> 7278ee5ce034b896e9f3ff9557c179d027025a3d
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
				<!-- <tr>
					<td>Password:</td>
					<td><?php $password ?></td>
				</tr> -->
			</table>
			<br><br>
			<form method="post" action="VerifyUserPWUpdate.html">
				<input type="submit" id="changePW" value="Change Password" />
			</form>
		</div>
	</div>
</body>

</html>