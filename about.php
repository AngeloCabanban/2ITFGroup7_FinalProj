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
		<title>About Page</title>
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
			</div>
		</nav>
		<div class="content">
			<h2>About Page</h2>
			<p>
                <br>Sub Tabs:
				<br><br>1. About DOST-SEI
				<br>- Mandate, Vision, and Mission
				<br>( https://www.sei.dost.gov.ph/index.php/about-dost-sei/mandate-vision-and-mission )
                <br>- Data Privacy
				<br>( https://www.sei.dost.gov.ph/index.php/about-dost-sei/data-privacy-notice )
                <br><br>2. About the Developers
                <br>- Photo of each Member
                <br>- Brief Information (Name, School, etc.)
                <br>- Quote
				<br><br>FAQs Page:
				<br>- FAQs about Undergraduate Scholarships
				<br>( https://www.sei.dost.gov.ph/images/stsd/ugradFAQ.pdf )
				<br>- How to open a Landbank Account
				<br>( https://www.sei.dost.gov.ph/images/others/lbpopen.jpg )
				<br>*Get the necessary information from the files.
				<br><br>Contact Us:
				<br>- Email API Integration (to follow)
				<br>- Contact Details
				<br>Email Addresses, Social Media Links, Phone Numbers
				<br>*Check For Further Inquiries & Contact Us Page.
				<br>*Social Media Pages to follow.
				<br><br>Social Media Pages + Official DOST-SEI Website  
				<br> - https://sei.dost.gov.ph/ + Facebook Page
				<br> - https://www.facebook.com/DOST.SEI/ + Facebook Group
				<br> - https://www.facebook.com/people/DOST-Scholarship/100063939799753/
            </p>
		</div>
	</body>
</html>
