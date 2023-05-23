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
	<style>
        table {
          border-collapse: collapse;
        }
        tr { 
          border: solid;
          border-width: 1px 0;
        }
        tr:first-child {
        border-top: none;
        }
        tr:last-child {
        border-bottom: none;
        }
        td{
          border: none;
        }
        </style>
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
			<h2>About Page</h2>

			<div class="tab">
      		<button class="tablinks" onclick="openCity(event, 'mvm')" id="defaultOpen">Mandate, Vision, and Mission</button>
      		<button class="tablinks" onclick="openCity(event, 'datap')">Data Privacy</button>
      		<button class="tablinks" onclick="openCity(event, 'aboutdev')">About the Developers</button>
      		<button class="tablinks" onclick="openCity(event, 'faqs')">FAQs</button>
      		<button class="tablinks" onclick="openCity(event, 'contact')">Contact Us</button>
    	</div>
		
			<div id="mvm" class="tabcontent" style="text-align:justify">
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
				</p>
				<img src="images/OrgChart.png" class="rounded mx-auto d-block img-thumbnail">
			</div>

			<div id="datap" class="tabcontent" style="text-align: justify">
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
			
			<div id="aboutdev" class="tabcontent" style="text-align: justify">
					<p>
						The developers of the website are sophomore college students of University of Santo Tomas Manila. They are currently
						enrolled in the Information Technology program of the institution and developed this website in partial fulfillment of 
						the course.
			</div>

			<div id="faqs" class="tabcontent">
				<h3>Frequently Asked Questions about the DOST-SEI S&T Undergraduate Scholarships</h3>
				<br>
					<h4>Nature and Duration</h4>
						<h5>Question 1</h5>
							<h6>
								Will the DOST-SEI support my studies until I graduate from my chosen degree course?
							</h6>
							<p style="text-align: justify">
								For as long as you comply with the scholarship policies and meet the grade requirements, 
								the DOST-SEI will support your studies until the completion of your chosen degree course, 
								depending on the period as stated in your approved Program of Study (POS); that is, full
						 		four or five years for 4- or 5-year degree courses, respectively, except for degree courses 
						 		whose support duration has been indicated in our announcement materials i.e, 4 yrs only for
						  		Applied Mathematics major in Mathematical Finance, etc.
							</p>
						<h5>Question 2</h5>
							<h6>
								What if I decide to shift from my current degree course to another degree course, how will it
							 	affect the duration of my scholarship?
							</h6>
							<p style="text-align: justify">
								You may shift to another DOST-SEI approved course at the latest 2nd sem in your 2nd year. If you
							 	shift from a 4-year course to a 5-year course, the duration of your scholarship will be adjusted
							  	to 5 years inclusive of the period you spent in your first course; conversely, if you shift from
							   	a 5-year course to a 4-year course, the duration will be adjusted to 4 years inclusive of the
							    period spent in your first course. If you do not get to graduate at the end of the duration of
								your scholarship but you continue to meet the scholarship requirements, you may still be considered
								a DOST-SEI scholar but you are no longer entitled to any financial assistance. You are still
							 	required though to submit report of grades for the extended period for record purposes.
							</p>
						<h5>Question 3</h5>
							<h6>
								I got accepted in a straight BS-MS degree course. Will the scholarship cover until the completion of my degree?
							</h6>
							<p style="text-align: justify">
								The scholarship will only cover until the completion of your BS degree. You will have to shoulder the expenses
								after your BS degree to complete your MS degree.
							</p>
							<br><br>
					<h4>Study Placement</h4>
						<h5>Question 1</h5>
							<h6>
								Is (name of school) a CHED Center of Excellence (COE) or a Center of Development (COD) or has at least Level III 
								FAAP Accreditation for the (name of degree course)?
							</h6>
							<p style="text-align: justify">
								Kindly click <a href="http://sei.dost.gov.ph/index.php/programs-and-projects/scholarships/undergraduate-scholarships#s-amp-t-undergraduate-scholarships"> 
								HERE</a> for the lists of schools that satisfies our study placement requirements for the particular
								S&T priority degree courses. We try to keep our database updated, but we recognize that sometimes,
								that is not the case. If your dream school is not in our database, it is best that you ask the school
								directly if it is recognized as CHED COE/COD or if it has at least Level III FAAP Accreditation for the
								S&T degree course you want to pursue. If it has, request for a supporting document, then submit it
								to us so we can update our database. Otherwise, you cannot study there if you wish to avail the
								scholarship.
							</p>
						<h5>Question 2</h5>
							<h6>
								I am a DOST-SEI scholarship qualifier but was unable to secure enrollment in an approved degree course/university.
								Can I still avail the scholarship?
							</h6>
							<p style="text-align: justify">
								Unfortunately, you cannot avail the scholarship award if you fail to seek enrollment in an approved degree
							 	course and university.
							</p>
							<br><br>
					<h4>Scholarship Privileges</h4>
						<h5>Question 1</h5>
							<h6>
								I will enroll in a private university wherein the tuition fee and other school fees ranges from P50,000 to P75,000
							 	per academic year, how will SEI settle the payment for my tuition fee?
							</h6>
							<p style="text-align: justify">
								SEI will provide you a Letter for Enrolment (LOE) every semester/term which you have to present to the Office 
								of the University Registrar to automatically deduct from your tuition fee the amount of P40,000 per academic year.
								Any exceeding amount shall be borne by your parents.
							</p>
						<h5>Question 2</h5>
							<h6>
								When will be the expected release of my financial assistance and what entitlements will it cover?
							</h6>
							<p style="text-align: justify">
								It is released sometime in either the first month or the 2nd month of the semester at the latest. It covers stipend, book 
								allowance for the First Semester, and uniform allowance.  that the next months' stipends may be released in 1 or 2
								tranches within the semester.
							</p>
						<h5>Question 3</h5>
							<h6>
								If my POS requires me to enroll 6 units in the Summer/Mid-year Term but the school only offers 3 units, will I still receive
								full financial assistance for that term?
							</h6>
							<p style="text-align: justify">
								Yes, SEI will provide you with full financial assistance.
							</p>
						<h5>Question 4</h5>
							<h6>
								My POS does not require me to enroll during Summer/Mid-year Term; however, I would like to take advance subjects to make use
								of such idle period. Will I be entitled to financial assistance?
							</h6>
							<p style="text-align: justify">
								No, you will only receive financial assistance during Summer/Mid-year Term if it is prescribed in your approved POS. If you
								wish to take advance subjects or re-enroll failed subjects, you shall not be entitled to financial assistance.
							</p>
						<h4>For more concerns, please refer <a href=https://www.sei.dost.gov.ph/images/stsd/ugradFAQ.pdf target="_blank">here</a> or refer to the contact tab</a></h4>
			</div>

			<div id="contact" class="tabcontent"><a id="contactlink"></a>
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
						<b>For specific concern, please use the appropriate email address found in this link: <a href="https://sei.dost.gov.ph/index.php/transparency?id=375" target="_blank">Click here</a></b>
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
						<a href="https://sei.dost.gov.ph/" target="_blank">Official DOST-SEI Website</a>
						<br>
						<a href="https://www.facebook.com/DOST.SEI/" target="_blank">DOST-SEI Facebook Page</a>
						<br>
						<a href="https://www.facebook.com/people/DOST-Scholarship/100063939799753/" target="_blank">DOST-Scholarship Facebook Page</a>
						<br>
					</p>
			</div>
		</div>
		<script>
		  function openCity(evt, mvm) {
          var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
              for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
              }
                tablinks = document.getElementsByClassName("tablinks");
              for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
              }
              document.getElementById(mvm).style.display = "block";
              evt.currentTarget.className += " active";
            } 

			function openCity(evt, datap) {
          var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
              for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
              }
                tablinks = document.getElementsByClassName("tablinks");
              for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
              }
              document.getElementById(datap).style.display = "block";
              evt.currentTarget.className += " active";
            } 
            
      function openCity(evt, aboutdev) {
          var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
              for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
              }
                tablinks = document.getElementsByClassName("tablinks");
              for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
              }
              document.getElementById(aboutdev).style.display = "block";
              evt.currentTarget.className += " active";
            }       

			function openCity(evt, faqs) {
          var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
              for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
              }
                tablinks = document.getElementsByClassName("tablinks");
              for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
              }
              document.getElementById(faqs).style.display = "block";
              evt.currentTarget.className += " active";
            } 

			function openCity(evt, contact) {
          var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
              for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
              }
                tablinks = document.getElementsByClassName("tablinks");
              for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
              }
              document.getElementById(contact).style.display = "block";
              evt.currentTarget.className += " active";
            } 

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
	  </script>
	</body>
</html>
