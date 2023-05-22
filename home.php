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
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home Page</title>
	<link href="style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
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

	<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    	<div class="carousel-indicators">
      		<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
      		<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
      		<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
    	</div>

    	<div class="carousel-inner">
      		<div class="carousel-item active">
        	<img src="https://www.sei.dost.gov.ph/images/news/n458b.png" id="img1" class="d-block w-100" alt="Teacher on Laptops" width="300" height="600">
        	<div class="container">
          		<div class="carousel-caption text-start">
            		<h1>STEM Teach: Learning the Basics of GeoGebra as a Tool in Teaching Mathematics</h1>
            		<p>Some representative placeholder content for the first slide of the carousel.</p>
            		<p><a class="btn btn-lg btn-primary" href="https://www.sei.dost.gov.ph/index.php/news-archive/425-stem-teach-learning-the-basics-of-geogebra-as-a-tool-in-teaching-mathematics" target="_blank">Read More</a></p>
          		</div>
        	</div>
      	</div>
      	<div class="carousel-item">
        	<img src="https://www.sei.dost.gov.ph/images/news/n457.png" id="img2" class="d-block w-100" alt="Teacher on Laptops" width="300" height="600">
        	<div class="container">
          		<div class="carousel-caption text-start">
            		<h1>Films on nationalism, community development highlighted in DOST-SEI's video-making competition</h1>
            		<p>Some representative placeholder content for the first slide of the carousel.</p>
            		<p><a class="btn btn-lg btn-primary" href="https://www.sei.dost.gov.ph/index.php/news-archive/424-films-on-nationalism-community-development-highlighted-in-dost-sei-s-video-making-competition" target="_blank">Read More</a></p>
          		</div>
        	</div>
      	</div>
      	<div class="carousel-item">
        	<img src="https://www.sei.dost.gov.ph/images/news/n456a.jpg" id="img3" class="d-block w-100" alt="Teacher on Laptops" width="300" height="600">
        	<div class="container">
          		<div class="carousel-caption text-start">
            		<h1>Philippines’ oldest regional science centrum just got revamped, DOST-SEI NuLab bus joins the fun</a></h1>
            		<p>Some representative placeholder content for the first slide of the carousel.</p>
            		<p><a class="btn btn-lg btn-primary" href="https://www.sei.dost.gov.ph/index.php/news-archive/423-philippines-oldest-regional-science-centrum-just-got-revamped-dost-sei-nulab-bus-joins-the-fun" target="_blank">Read More</a></p>
          		</div>
        	</div>
      	</div>
    	<button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
      		<span class="visually-hidden">Previous</span>
    	</button>
    	<button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      		<span class="carousel-control-next-icon" aria-hidden="true"></span>
      		<span class="visually-hidden">Next</span>
    	</button>
  	</div>
			
	<div class="content">
		<br>
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

		<h2>Home Page</h2>
		<div id="wrapper">
			<div id="parent">
				<button class="btn btn-light rounded-pill px-3" type="button" id="tab1" value="first">
					Types of Scholarship
				</button>
				<button class="btn btn-light rounded-pill px-3" type="button" id="tab2" value="second">
					Merit
				</button>
				<button class="btn btn-light rounded-pill px-3" type="button" id="tab3" value="third">
					RA 7687
				</button>
				<div id="text-area">
					<h1 id="title" style="text-align: center">Types of Scholarship</h1>
					<p id="desc">The S&T Undergraduate Scholarships Program aims to stimulate and entice talented Filipino youths to pursue lifetime productive careers in science and technology and ensure a steady, adequate supply of qualified S&T human resources which can steer the country towards national progress.</p>
				</div>
			</div>
		</div>
		<script src="homepagetab.js"></script>
		
		
		<section id="cardSection" style="padding-bottom: 100px;">
		<br>
    		<div class="card" style="width: 18rem; float: right;">
      			<div class="card-body">
        			Navigate through these links:
        			<ul class="list-group list-group-flush">
          				<li class="list-group-item"><a href="requirements.php" class="card-link">Submit Requirements</a></li>
          				<li class="list-group-item"><a href="news.php" class="card-link">View Related News</a></li>
          				<li class="list-group-item"><a href="profile.php" class="card-link">Visit Your Profile</a></li>
        			</ul>
      			</div>
    		</div>
  		</section>
	</div>
</body>

</html>