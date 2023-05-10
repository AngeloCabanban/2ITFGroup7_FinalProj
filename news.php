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
		<title>News Page</title>
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
			<h2>News Page</h2>
			<p>
                <br>(Per News Article; at least 8 - 10 articles, news, programs, or events)
                <br>- Feature Image
                <br>- Short Headline
                <br>- Brief Additional Info
                <br>- Button to redirect to Source Page
                <br>*News Articles to follow.
            </p>
		</div>
		<div class="album py-5 bg-body-tertiary">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
		  <a href="https://sei.dost.gov.ph/index.php/news-archive/423-philippines-oldest-regional-science-centrum-just-got-revamped-dost-sei-nulab-bus-joins-the-fun"><img src="images/album1.jpg" class="w-100" alt="image1"></a>
            <div class="card-body">
              <p class="card-text">Philippines’ oldest regional science centrum just got revamped, DOST-SEI NuLab bus joins the fun</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
				<a href="https://sei.dost.gov.ph/index.php/news-archive/423-philippines-oldest-regional-science-centrum-just-got-revamped-dost-sei-nulab-bus-joins-the-fun">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Read more</button>
				</a>
                </div>
                <small class="text-body-secondary">20 April 2023</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
		  <a href="https://sei.dost.gov.ph/index.php/news-archive/424-films-on-nationalism-community-development-highlighted-in-dost-sei-s-video-making-competition"><img src="images/album2.png" class="w-100" alt="image2"></a>
            <div class="card-body">
              <p class="card-text">Films on nationalism, community development highlighted in DOST-SEI's video-making competition</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
				<a href="https://sei.dost.gov.ph/index.php/news-archive/424-films-on-nationalism-community-development-highlighted-in-dost-sei-s-video-making-competition">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Read more</button>
				</a>
                </div>
                <small class="text-body-secondary">25 April 2023</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
		  <a href="https://sei.dost.gov.ph/index.php/news-archive/425-stem-teach-learning-the-basics-of-geogebra-as-a-tool-in-teaching-mathematics"><img src="images/album3.png" class="w-100" alt="image3"></a>
            <div class="card-body">
              <p class="card-text">STEM Teach: Learning the Basics of GeoGebra as a Tool in Teaching Mathematics</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
				<a href="https://sei.dost.gov.ph/index.php/news-archive/425-stem-teach-learning-the-basics-of-geogebra-as-a-tool-in-teaching-mathematics">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Read more</button>
				</a>
                </div>
                <small class="text-body-secondary">27 April 2023</small>
              </div>
            </div>
          </div>
        </div>
	</div>
	</body>
</html>
