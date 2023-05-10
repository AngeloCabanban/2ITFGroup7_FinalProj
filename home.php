<?php
include_once "CRUDConfig.php";
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
	<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>
				<div class="carousel-item active">
				<a href="news1.php"><img src="images/carousel1.jpg" class="d-block w-100" alt="image1"></a>
					<div class="carousel-caption d-none d-md-block">
						<h1>Philippines’ oldest regional science centrum just got revamped, DOST-SEI NuLab bus joins the fun</h1>
					</div>
				</div>
				<div class="carousel-item">
				<a href="news2.php"><img src="images/carousel2.png" class="d-block w-100" alt="image2"></a>
				<div class="carousel-caption d-none d-md-block">
						<h1>Films on nationalism, community development highlighted in DOST-SEI's video-making competition</h1>
					</div>
				</div>
				<div class="carousel-item">
				<a href="news3.php"><img src="images/carousel3.png" class="d-block w-100" alt="image3"></a>
				<div class="carousel-caption d-none d-md-block">
						<h1>STEM Teach: Learning the Basics of GeoGebra as a Tool in Teaching Mathematics</h1>
					</div>
				</div>
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
			</div>
	<div class="content">
		<h2>Home Page</h2>
		<p>
			<br>( https://www.sei.dost.gov.ph/index.php/programs-and-projects/scholarships/undergraduate-scholarships#s-t-undergraduate-scholarships )
			<br>- Preview of News (Carousel, at least 3-5 featured articles)
			<br>- Welcome Text (Use Information from Login Database)
			<br>- Brief Info about S&T Undergraduate Scholarships
			<br>(See text under S&T Undergraduate Scholarships)
			<br>- Two Types of Scholarship including a Short Description for each type (See text under Types of Scholarship)
			<br><br>
			<b>S&T Undergraduate Scholarships</b>
			<br><br>
			The S&T Undergraduate Scholarships Program aims to stimulate and entice talented Filipino youths to pursue lifetime productive careers in science and technology and ensure a steady, adequate supply of qualified S&T human resources which can steer the country towards national progress.
			<br><br>
			<b>Types of Scholarship:</b>
			<br>
			<b> MERIT </b>
			<br>
			The DOST-SEI Merit Scholarship Program, formerly known as the NSDB or NSTA Scholarship under RA No. 2067, is awarded to students with high aptitude in science and mathematics and are willing to pursue careers in the fields of science and technology.
			<br><br>
			<b>RA 7687 </b>
			<br>
			Republic Act No. 7687, also known as the “Science and Technology Scholarship Act of 1994”, provides for scholarships to talented and deserving students whose families’ socio-economic status does not exceed the set cut-off values of certain indicators. Qualifiers must pursue priority fields of study in the basic sciences, engineering, other applied sciences, and science and mathematics teaching.
			<br><br>
		</p>
		<?php

		$select = "SELECT name FROM accounts WHERE email = '$_SESSION[name]'";

		if ($result = $mysqli->query($select)) {
			if ($result->num_rows > 0) {
				$row = $result->fetch_object();
				$name = $row->name;
			}

			echo "<h4>Welcome User $name!</h4>";
		}

		?>
		
	</div>
</body>

</html>