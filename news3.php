<?php
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
		<title>Home Page</title>
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
                <a href="news.php"><i class="fa-solid fa-circle-arrow-left"></i>Back</a>
				<img src="images/logo.png" alt="logo">
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="home.php"><i class="fa-solid fa-house"></i>Home</a>
				<a href="scholarship.php"><i class="fa-solid fa-graduation-cap"></i>Scholarship</a>
				<a href="requirements.php"><i class="fa-brands fa-wpforms"></i>Requirements</a>
				<a href="news.php"><i class="fa-solid fa-bullhorn"></i>News</a>
				<a href="about.php"><i class="fa-solid fa-address-card"></i>About</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt "></i>Logout</a>
			</div>
		</nav>
		<div class="content">
            <h1>STEM Teach: Learning the Basics of GeoGebra as a Tool in Teaching Mathematics</h1>
			<p>
			<b>27 April 2023</b>
            <br><br>
            In partnership with the University of the Philippines - National Institute for Science and Mathematics Education Development (UP NISMED), the Department of Science and Technology – Science Education Institute held its third face-to-face training for science teachers this year in Panglao, Bohol, focusing on the basics of GeoGebra, an interactive geometry, algebra, statistics and calculus application used for teaching Mathematics
            <br><br>
            Fifty mathematics teachers from the Department of Education (DepEd) Division of Bohol participated in the three-day training, Learning the Basics of GeoGebra as a Tool in Teaching Mathematics. The teacher-participants were mentored by Dr. Allan M. Canonigo, Ms. Haidee P. Rosete, and Ms. Abigail B. Gonzales from the UP NISMED.
            <br><br>
            The training session is composed of three modules designed to enhance the proficiency of the teachers in using GeoGebra. Dr. Canonigo introduced the course by giving an overview of the GeoGebra software and demonstrating its basic functions and interface. After which, he discussed how to construct geometric figures using point, line, line segment, and circle tools. The teachers also investigated the properties of geometric objects using distance, angle, and slope tools, and modified properties of mathematical objects using the Setting and Style bars.
            <br><br>
			</p>
            <img src="images/news3.1.png" class="rounded mx-auto d-block img-thumbnail">
            <small> <center> Dr. Allan M. Canonigo explains the basic functions of GeoGebra. </small> </center>
            <br><br>
            <p>
            In the morning of the second day, Ms. Rosete led the discussion on using and modifying the number, angle, and integer sliders to construct dynamic objects. The teacher-participants were also able to use the input bar to plot points, graph circles, and perform calculations. The day continued with the discussion on graphs in GeoGebra. The teachers graphed different functions- from polynomial functions to piecewise functions. They also used the previously discussed tools to format the color, size, and style of the graphs and points. Applying the different tools, the teachers used sliders to investigate the effect of parameters of functions to its graphs.
            </p>
            <br><br>
            <img src="images/news3.2.png" class="rounded mx-auto d-block img-thumbnail">
            <small> <center> Ms. Abigail B. Gonzales assists the participants in graphing various functions. </small> </center>
            <br><br>
            <p>
            After the lecture sessions, the participants developed their GeoGebra applet while the resource persons helped them enhance their applets before the group presentation.
            </p>
            <br><br>
            <img src="images/news3.3.png" class="rounded mx-auto d-block img-thumbnail">
            <small> <center> Ms. Haidee P. Rosete facilitates peer-to-peer discussions among the participants. </small> </center>
            <p>
            All ten (10) groups presented their GeoGebra applets and from these, the experts identified three teams with the best GeoGebra applet. The team with the best applet focused on Trigonometric Ratio (click here), while the second applet centered on visualizing Tangent and Secant Functions (click here), and the third applet covered the properties of Parallel Lines.
            <br><br>
            At the end of the training, participants expressed their gratitude to the DOST-SEI and to the resource persons as this training gave them an opportunity to gain knowledge and skills in using GeoGebra. Deputy Director Engr. Albert G. Mariño, through his closing message, expressed his hopes that the teachers will be able to translate their learnings and apply them to their respective classes.
            <br><br>
            </p>
        </div>
</body>
</html>
