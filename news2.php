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
            <h1>Films on nationalism, community development highlighted in DOST-SEI's video-making competition</h1>
			<p>
			<b>25 April 2023</b>
            <br><br>
            In the hopes of showcasing the creativity and ingenuity of the Department of Science and Technology (DOST) scholars in filmmaking and furthering advocacies to empower the youth in various scientific and societal pursuits, the DOST-Science Education Institute (SEI) through its The Filipino Patriot Scholars Project held its first Video-Making Contest featuring films on patriotism and volunteerism for community development.
            <br><br>
            With the theme, “Malasakit ng Kabataan Para Sa Bayan,” the scholars, through their films, tackled a wide range of entries from music videos, vlog-like outputs, short films, documentaries, and experimental movies on climate change, education, agriculture and livelihood, and social justice.
			</p>
            <img src="images/news2.1.png" class="rounded mx-auto d-block img-thumbnail">
            <small> <center> A virtual film showing and awarding ceremonies were held by the Filipino Patriot Scholars Project team last April 14, 2023 via Zoom and Facebook Live to culminate the event. </small> </center>
            <p>
            The competition, which began with the submission of entries last June 27, 2022 until April 3 of this year, culminated in a virtual Film Showing and Awarding of Winners last April 14, 2023, via Zoom and Facebook Live.
            <br><br>
            DOST-SEI Director Dr. Josette T. Biyo welcomed everyone by thanking those who joined the competition. “Through [their] craft, we can say that [they] have embodied the core values of a Patriot scholar and understood [their] role as change-makers in society—an imprint of a true DOST scholar,” Dr. Biyo affirmed.
            <br><br>
            Hijo, Hija, a film by a group of DOST scholars from the Pamantasan ng Lungsod ng Maynila (PLM) led by Julius Calleja centering on the role of the youth in nation building, particularly in terms of voicing out their concerns regarding the country’s current state was recognized as the champion of the competition and received a PHP50,000.00 cash prize.
            <br><br>
            Bugsay: Stronghold of Change, Maneuvers of a Better Future, a film made by scholars from Region IX about the organization-led initiative to empower island communities in Dapitan City, Zamboanga del Norte addressing locale’s pressing issues through collective action, was awarded the second-best film with a cash prize of PHP40,000.00. On the other hand, Lakaw, a film by scholars from Region VII, which narrated the journey of DOST scholar alumnus Junel Cayetano who chose to serve as a teacher in his hometown in Negros Oriental despite obtaining a plantilla position at the Department of Education (DepEd), was recognized as the third-best film, receiving a cash prize of PHP30,000.00.
            <br><br>
            Other entries were also given consolation prizes.
            <br><br>
            The winning movies were determined through a set of criteria, which include 1) relevance to the theme, 2) creativity and originality, 3) visual impact, and 4) the number of heart reactions on the posted output.
            <br><br>
            These were judged by a panel consisting of DOST-SEI Science and Technology Scholarships Division Chief Peter Gerry P. Gavina, Central Philippine University Associate Professor Engr. Bernie C. Cangrejo, Mindanao State University Main Campus Department of Mathematics Chairperson Dr. Nestor G. Acala, and Accenture Instructor Analyst Ms. Rosejelynn C. Bulante.
            <br><br>
            Engr. Cangrejo applauded the participants’ presentation, conceptualization, creativity, format, style, and technique, as well as their ability to interpret and connect their outputs to the theme.
            <br><br>
            “Malasakit” was also a resounding theme for all the videos, according to Ms. Bulante. She was impressed seeing that all outputs committed to showing such a theme in their visual medium. “In all the videos we saw, isa lang pinakita niyo: respect and love,” she affirmed.
            <br><br>
            </p>
            <img src="images/news2.2.png" class="rounded mx-auto d-block img-thumbnail">
            <small> <center> Taking the highest placement in the contest is “Hijo, Hija” from the Pamantasan ng Lungsod ng Maynila, followed by “Bugsay: Stronghold of Change, Maneuvers of a Better Future” from undergraduate scholars from Region VIII, and “Lakaw” from Region VII’s undergraduate scholars. </small> </center>
            <p>
            Concluding the event, DOST-SEI Deputy Director Engr. Albert G. Mariño emphasized the value and significance of participating in the video-making competition. “Remember that this contest was not just about winning or losing, but about pursuing growth and excellence. May this contest serve also as a reminder of the incredible potential that you all possess to create something meaningful and impactful.”
            <br><br>
            The DOST-SEI The Filipino Patriot Scholar Project’s Facebook page’s event stream can be replayed at <a href="https://www.facebook.com/watch/live/?ref=watch_permalink&v=183505237892713"> click here</a>
            </p>
            <br><br>
        </div>
</body>
</html>
