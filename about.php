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
			<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item" role="presentation">
			<button class="nav-link active" id="Vision-tab" data-bs-toggle="tab" data-bs-target="#Vision-tab-pane" type="button" role="tab" aria-controls="Vision-tab-pane" aria-selected="true">Mandate, Vision, and Mission</button>
		</li>
		<li class="nav-item" role="presentation">
			<button class="nav-link" id="Privacy-tab" data-bs-toggle="tab" data-bs-target="#Privacy-tab-pane" type="button" role="tab" aria-controls="Privacy-tab-pane" aria-selected="false">Data Privacy</button>
		</li>
		<li class="nav-item" role="presentation">
			<button class="nav-link" id="Developers-tab" data-bs-toggle="tab" data-bs-target="#Developers-tab-pane" type="button" role="tab" aria-controls="Developers-tab-pane" aria-selected="false">About the Developers</button>
		</li>
		<li class="nav-item" role="presentation">
			<button class="nav-link" id="FAQ-tab" data-bs-toggle="tab" data-bs-target="#FAQ-tab-pane" type="button" role="tab" aria-controls="FAQ-tab-pane" aria-selected="false">FAQs</button>
		</li>
		<li class="nav-item" role="presentation">
			<button class="nav-link" id="Contact-tab" data-bs-toggle="tab" data-bs-target="#Contact-tab-pane" type="button" role="tab" aria-controls="Contact-tab-pane" aria-selected="false">Contact Us</button>
		</li>
		</ul>
		<div class="tab-content" id="myTabContent">
		<div class="tab-pane fade show active" id="Vision-tab-pane" role="tabpanel" aria-labelledby="Vision-tab" tabindex="0">
			<p>
				<b>Mandates (per EO 128)</b>
				<br>
				• Undertake science education and training; 
				<br>
				• Administer scholarships, awards and grants; 
				<br>
				• Undertake science and technology manpower development; and 
				<br>
				• Formulate plans and establish programs and projects for the promotion and development of science and technology education and training in coordination with DepEd, CHED and other institutions of learning. 
				<br><br>
				<b>Vision</b>
				<br>
				SEI shall have developed the Philippines’ human resource capacity in science and technology required to produce demand-driven outputs that meet global standards.
				<br><br>
				<b>Mission</b>
				<br>
				To accelerate the development of S&T human resources of the country by administering undergraduate and graduate scholarships and advanced specialized trainings; promote S&T culture and develop innovative science education innovative programs. 
				<br><br>
				<b>Program Thrusts </b>
				<br>
				The SEI shall continue to strengthen its capability to develop a critical mass of highly-trained S&T human resource by focusing on the following program thrusts:
				<br>
				1. Expand implementation of S&T undergraduate and graduate programs to achieve varied levels of S&T Innovation sophistication;
				<br>
				2. Pursue more vigorously promotion of S&T culture to stimulate interest and prepare adequate numbers of young people to pursue careers in S&T Innovation;
				<br>
				3. Develop and implement innovation approaches towards improving the delivery of science education; and
				<br>
				4. Pursue research activities and develop external linkages in S&T human resource development and science education as part of overall strategy for national policy development, local and external benchmarking and capacity building.
				<br><br>
				<b>Strategic Goals</b>
				<br>
				1. Accelerate the development of S&T human resource in the country by administering undergraduate and graduate scholarships and advanced specialized trainings.
				<br>
				2. Implement innovative science education programs.
				<br>
				3. Promote appreciation and interest in science among the citizenry.
				<br>
				4. Formulate policy recommendations toward improving the high-level training of future scientists and engineers.
				<br><br>
				<b>Organizational Chart</b>
				<br>
				<img src="images/OrgChart.png" class="rounded mx-auto d-block img-thumbnail">
			</div>

			<div class="tab-pane fade show" id="Privacy-tab-pane" role="tabpanel" aria-labelledby="Privacy-tab" tabindex="0">
					<p>
					We, at the Department of Science and Technology-Science Education Institute, are committed to provide you with prompt and reliable services for the development of the country’s science and technology (S&T) human resources, the implementation of STEM education and innovation programs, and the promotion of S&T among the youth, pursuant to Executive Order No. 128 while implementing safeguards to protect your privacy and keep your personal data safe and secure in accordance with RA 10173 or the Data Privacy Act (DPA) of 2012.
					<br><br>
					<b>Processing of Personal Data</b>
					<br>
					The personal information being collected by DOST-SEI are used for the purpose as specified in the various transaction systems and functional units of the organization.
					<br><br>
					<b>Data Protection</b>
					<br>
					The DOST-SEI, in compliance with RA 10173, shall implement reasonable and appropriate organizational, physical, and technical security measures for the protection of personal information collected.
					<br>
					Only authorized personnel are permitted to have access to the collected information. They shall be guided by the security measures provided in handling all personal information collected.
					<br>
					Personal information collected are processed, stored, and later on disposed of via shredding and permanently deleted in our electronic files in accordance to R.A No. 9470 otherwise known as the National Archive of the Philippines Act of 2007.
					<br>
					In case of data breach, DOST-SEI shall notify you and inform the National Privacy Commission (NPC) in accordance with NPC Circular 16-03 on Personal Data Breach Management.
					<br><br>
					<b>Rights of the Data Subject</b>
					<br>
					As the Data Subject, you have the right to be informed of the personal information being collected, processed, and stored by DOST-SEI as well as to access, object, rectify, and block the same.
					<br><br>
					<b>Contact Details of the DOST-SEI Data Privacy Officer (DPO)</b>
					<br>
					For questions or concerns, you may contact our Data Protection Officer through the following details:Direct Line: +63 2 8710 7462
					E-mail: dpo@sei.dost.gov.ph
					</p>
			</div>
			
			<div class="tab-pane fade show" id="Developers-tab-pane" role="tabpanel" aria-labelledby="Developers-tab" tabindex="0">
					
			</div>

			<div class="tab-pane fade show" id="FAQ-tab-pane" role="tabpanel" aria-labelledby="FAQ-tab" tabindex="0">
			
			</div>

			<div class="tab-pane fade show" id="Contact-tab-pane" role="tabpanel" aria-labelledby="Contact-tab" tabindex="0">
					<p>
						<b>Office of the Director</b>
						<br>
						Josette T. Biyo, Ph.D.
						<br>
						Director
						<br>
						Tel No.: 8775 9005
						<br>
						<em>Planning Unit</em>
						<br>
						Tel No.: 8542 4627
						<br><br>
						<b>Office of the Deputy Director</b>
						<br>
						Albert G. Mariño, MTM
						<br>
						Deputy Director
						<br>
						Tel No.: 8775 9003
						<br><br>
						<b>Science and Technology Scholarship Division</b>
						<br>
						Peter Gerry P. Gavina, MRM
						<br>
						Division Chief
						<br>
						Tel No.:8330 8876 /  8330 8826
						<br>
						<b>For specific concern, please use the appropriate email address found in this link: <a href="https://sei.dost.gov.ph/index.php/transparency?id=375">Click here</a></b>
						<br><br>
						<b>Science and Technology Manpower Education Research and Promotions Division</b>
						<br>
						Randolf S. Sasota, Ph.D.
						<br>
						Officer-In-Charge
						<br>
						Tel No.: 8710 7462
						<br><br>
						<b>Science Education Innovations Division</b>
						<br>
						Cynthia T. Gayya, MHE
						<br>
						Officer-In-Charge
						<br>
						Tel No.:8330 8912
						<br><br>
						<b>Finance Administrative Division</b>
						<br>
						Philip J. Bue, CPA, LLB
						<br>
						Division Chief
						<br>
						Tel No.: 8775 9043
						<br>
						<em>Records Unit</em>
						<br>
						Tel No.: 8330 8872
						<br>
						<em>General Services Unit</em>
						<br>
						Tel No.: 8775 9156
						<br><br>
						<b>Social Media Pages</b>
						<br>
						<a href="https://sei.dost.gov.ph/">Official DOST-SEI Website</a>
						<br>
						<a href="https://www.facebook.com/DOST.SEI/">DOST-SEI Facebook Page</a>
						<br>
						<a href="https://www.facebook.com/people/DOST-Scholarship/100063939799753/">DOST-Scholarship Facebook Page</a>
						<br>
					</p>
			</div>
		</div>
	</body>
</html>
