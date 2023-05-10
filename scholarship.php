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
		<title>Scholarship Page</title>
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
			<h2>Scholarship Page</h2>
			<p>
                <br>(https://www.sei.dost.gov.ph/index.php/programs-and-projects/scholarships/undergraduate-scholarships#s-t-undergraduate-scholarships )
                <br>Sub Tabs:
                <br>1. Priority S&T Programs and Study Placements
                <br>2. Scholarship Privileges
                <br>3. Qualifications
                <br>4. Application Requirements
                <br>5. Application Period

					<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item" role="presentation">
    <button class="nav-link active" id="Priority-tab" data-bs-toggle="tab" data-bs-target="#Priority-tab-pane" type="button" role="tab" aria-controls="Priority-tab-pane" aria-selected="true">Priority S&T Programs and Study Placements</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="Scholarship-tab" data-bs-toggle="tab" data-bs-target="#Scholarship-tab-pane" type="button" role="tab" aria-controls="Scholarship-tab-pane" aria-selected="false">Scholarship Privileges</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="Qualifications-tab" data-bs-toggle="tab" data-bs-target="#Qualifications-tab-pane" type="button" role="tab" aria-controls="Qualifications-tab-pane" aria-selected="false">Qualifications</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="Requirements-tab" data-bs-toggle="tab" data-bs-target="#Requirements-tab-pane" type="button" role="tab" aria-controls="Requirements-tab-pane" aria-selected="false">Application Requirements</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="Period-tab" data-bs-toggle="tab" data-bs-target="#Period-tab-pane" type="button" role="tab" aria-controls="Period-tab-pane" aria-selected="false">Application Period</button>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="Priority-tab-pane" role="tabpanel" aria-labelledby="Priority-tab" tabindex="0">
			<b>Programs Covered by the DOST-SEI Undergraduate Scholarships</b>
			<br><br>
			Bachelor in Mathematics Education<br>
			Bachelor in Technology and Livelihood Education with Specialization in Information and Communications<br>
			Bachelor of Library and Information Science<br>
			BS Aeronautical Engineering<br>
			BS Aerospace Engineering<br>
			BS Agribusiness<br>
			BS Agribusiness Management<br>
			BS Agribusiness Management and Entrepreneurship<br>
			BS Agricultural and Biosystems Engineering<br>
			BS Agricultural Biotechnology<sup>1</sup><br>
			BS Agricultural Chemistry<br>
			BS Agricultural Economics<br>
			BS Agricultural Engineering<br>
			BS Agricultural Technology<br>
			BS Agriculture<br>
			BS Animal Husbandry<br>
			BS Animal Science<br>
			BS Applied Mathematics<br>
			BS Applied Mathematics major in Mathematical Finance<sup>2</sup><br>
			BS Applied Physics<br>
			BS Applied Physics with Applied Computer System<br>
			BS Applied Physics with Materials Science and Engineering<sup>2</sup><br>
			BS Applied Statistics<br>
			BS Architecture<br>
			BS Astronomy<br>
			BS Astronomy Technology<br>
			BS Basic Medical Sciences<sup>6</sup><br>
			BS Biochemistry<br>
			BS Biology<br>
			BS Biology for Teachers<br>
			BS Biotechnology<br>
			BS Ceramics Engineering<br>
			BS Chemical Engineering<br>
			BS Chemistry<br>
			BS Chemistry Major in Business<sup>3</sup><br>
			BS Chemistry for Teachers<br>
			BS Chemistry with Applied Computer Systems<br>
			BS Chemistry with Materials Science and Engineering<sup>2</sup><br>
			BS Civil Engineering<br>
			BS Clothing Technology<br>
			BS Community Nutrition<br>
			BS Computer Engineering<br>
			BS Computer Science<br>
			BS Electrical Engineering<br>
			BS Electronics and Communications Engineering<br>
			BS Environmental Engineering<br>
			BS Electronics Engineering<br>
			BS Environmental Science<br>
			BS Fine Arts Major in Industrial Design<br>
			BS Fisheries<br>
			BS Food Science and Technology<br>
			BS Food Technology<br>
			BS Forestry<br>
			BS Geodetic Engineering<br>
			BS Geography<br>
			BS Geology<br>
			BS Geothermal Engineering<br>
			BS Health Science<br>
			BS Human Biology<sup>5</sup><br>
			BS Industrial Design<br>
			BS Industrial Engineering<br>
			BS Industrial Management Engineering-Information Technology<sup>3</sup><br>
			BS Industrial Pharmacy<br>
			BS Information and Communications Technology<br>
			BS Information System<br>
			BS Information Technology<br>
			BS Information Technology Systems<br>
			BS Instrumentation and Control Engineering<br>
			BS Life Sciences<br>
			BS Management Information Systems<sup>2</sup><br>
			BS Manufacturing Engineering<br>
			BS Manufacturing Engineering-Management-Biomedical Engineering<sup>3</sup><br>
			BS Manufacturing Engineering-Management-Mechatronics and Robotics<sup>3</sup><br>
			BS Marine Biology<br>
			BS Marine Science<br>
			BS Materials Engineering<br>
			BS Mathematics<br>
			BS Mathematics and Science Teaching<br>
			BS Mathematics for Teachers<br>
			BS Mechanical Engineering<br>
			BS Mechatronics Engineering<br>
			BS Medical Laboratory Science<br>
			BS Medical Technology<br>
			BS Metallurgical Engineering<br>
			BS Meteorology<br>
			BS Microbiology<br>
			BS Mining Engineering<br>
			BS Molecular Biology and Biotechnology<br>
			BS Nutrition<br>
			BS Nutrition and Dietetics<br>
			BS Packaging Engineering<br>
			BS Petroleum Engineering<br>
			BS Pharmaceutical Sciences<br>
			BS Pharmacy (4-year program)<br>
			BS Pharmacy major in Clinical Pharmacy (5-year program)<br>
			BS Physics<br>
			BS Physics for Teachers<br>
			BS Psychology<br>
			BS Public Health<br>
			BS Speech Pathology<br>
			BS Statistics<br>
			BSE Biological Sciences<br>
			BSE Biology<br>
			BSE Biology-Chemistry<sup>4</sup><br>
			BSE Chemistry<br>
			BSE General Sciences<br>
			BSE Mathematics<br>
			BSE Physical Sciences<br>
			BSE Physics<br>
			BSE Physics-Chemistry<sup>4</sup><br>
			BSE Physics-Mathematics<sup>4</sup><br>
			BSE Science<br>
			Doctor of Veterinary Medicine<br>
			<br>
			<sup>1</sup> UP System only<br>
			<sup>2</sup> 4yrs, ADMU only<br>
			<sup>3</sup> DLSU-Manila only<br>
			<sup>4</sup> 4yrs, USC only<br>
			<sup>5</sup> 3yrs, DLSU-Manila only<br>
			<sup>6</sup> 4 yrs, UPM only<br>
			<br>
			STUDY PLACEMENTS 
			<br>
			University of the Philippines
			<br>
			State Universities and Colleges
			<br>
			Private Institutions that are recognized by CHED as Centers of Excellence or Centers of Development or has FAAP Level III accreditation for the priority S&T programs of study
			<br>
		</div>
  <div class="tab-pane fade" id="Scholarship-tab-pane" role="tabpanel" aria-labelledby="Scholarship-tab" tabindex="0">
  	<table class="table table-striped">
		<thead>
		<tr>
			<th colspan="2">A. Regular Academic Year</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td>Tuition and other school fees (for scholars enrolled in private HEIs)</td>
			<td>Actual fees up to ₱40,000.00 /AY</td>
		</tr>
		<tr>
			<td>Learning Materials and/or Connectivity Allowance</td>
			<td>₱10,000.00 /AY</td>
		</tr>
		<tr>
			<td>Monthly Living Allowance</td>
			<td>₱7,000.00 / month</td>
		</tr>
		<tr>
			<td>Clothing Allowance</td>
			<td>₱1,000 (1st Sem of 1st Year only)</td>
		</tr>
		<tr>
			<td>Transportation Allowance</td>
			<td rowspan="2">1 economy-class roundtrip fare</td>
		</tr>
		<tr>
			<td>(for those studying outside of home province)</td>
		</tr>
		<tr>
			<td>Group Accident and Health Insurance</td>
			<td>Premium</td>
		</tr>
		<tr>
			<td>Thesis Allowance</td>
			<td>₱10,000.00</td>
		</tr>
		<tr>
			<td>Graduation Allowance</td>
			<td>₱1,000.00</td>
		</tr>
		<tr>
			<th  colspan="2">B. Mid-Year Term1 Allowance (if required in the curriculum)</th>
		</tr>
		<tr>
			<td>Tuition and other school fees</td>
			<td>Actual fees up to ₱10,000.00</td>
		</tr>
		<tr>
			<td>Learning Materials and/or Connectivity Allowance</td>
			<td>₱2,000.00</td>
		</tr>
		<tr>
			<td>Monthly Living Allowance</td>
			<td>₱7,000.00 / month for two months</td>
		</tr>
		</tbody>
	</table>
	<small> 1 Same as Summer Term/Intersession  </small>
  </div>
  <div class="tab-pane fade" id="Qualifications-tab-pane" role="tabpanel" aria-labelledby="Qualifications-tab" tabindex="0">
  <table class="table table-striped table-bordered border-black">
  <thead>
  <tr>
    <th class="align-middle">CRITERIA OF ELIGIBILITY</th>
	<th class="align-middle"><center>MERIT</center></th>
    <th class="align-middle"><center>RA 7687</center></th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>1. Natural-born Filipino citizen;</td>
    <td class="align-middle"><center>✓</center></td>
    <td class="align-middle"><center>✓</center></td>
  </tr>
  <tr>
    <td>2. Poor, talented and deserving student who belongs to a family whose socio-economic status does not exceed the set values of certain indicators;</td>
	<td class="align-middle"><center>✗</center></td>
    <td class="align-middle"><center>✓</center></td>
  </tr>
  <tr>
    <td>3.1. Graduating Grade 12 male and female students in SY 2022-2023:<br><br>a. STEM STRAND: All students belonging to the STEM class<br><br>b. NON-STEM STRAND: Must be in the top 5% of the class based on Grade 11 ranking<br><br><b>OR</b><br><br>3.2. Graduate of Grade 12 before SY 2022-2023 and did not enroll in college yet:<br><br>a. STEM STRAND: All students belonging to the STEM class<br><br>b. NON-STEM STRAND: Must be in the top 5% of the graduating class<br><br><b>OR</b><br><br>3.3. Graduate of high school before the K-12 Program. Must belong to the top 5% of the graduating class.</td>
	<td class="align-middle"><center>✓</center></td>
    <td class="align-middle"><center>✓</center></td>
  </tr>
  <tr>
    <td>4. Resident of the municipality as attested by the barangay for at least four (4) years</td>
	<td class="align-middle"><center>✗</center></td>
    <td class="align-middle"><center>✓</center></td>
  </tr>
  <tr>
    <td>5. Of good moral character and in good health;</td>
    <td class="align-middle"><center>✓</center></td>
    <td class="align-middle"><center>✓</center></td>
  </tr>
  <tr>
    <td>6.Do not have earned any college units<br><b>AND</b><br>Do not have any post-high school vocational units</td>
	<td class="align-middle"><center>✓</center></td>
    <td class="align-middle"><center>✓</center></td>
  </tr>
  <tr>
    <td>7.1. Have not taken any previous DOST-SEI examination;<br><b>OR</b><br>7.2. Have taken the DOST-SEI Undergraduate Examination but did not qualify for the scholarship;<br><b>OR</b><br>7.3. Have qualified for the DOST-SEI Undergraduate Scholarship but did not avail of the award.<br><b>OR</b><br>7.4. Have not taken any DOST-SEI Undergraduate Scholarship Examination.</td>
	<td class="align-middle"><center>✓</center></td>
    <td class="align-middle"><center>✓</center></td>
  </tr>
</tbody>
</table>
  </div>
  <div class="tab-pane fade" id="Requirements-tab-pane" role="tabpanel" aria-labelledby="Requirements-tab" tabindex="0">
  <table class="table table-striped table-bordered border-black">
  <thead>
  <tr>
    <th class="align-middle"></th>
    <th class="align-middle" colspan="2"><center>DOCUMENT</center></th>
    <th class="align-middle"><center>FORM</center></th>
    <th class="align-middle"><center>SPECIAL INSTRUCTIONS</center></th>
  </tr>
</thead>
<tbody>
  <tr>
    <td><center>1</center></td>
    <td class="align-middle" colspan="2">Certificate of Good Moral Character</td>
    <td class="align-middle"><center>C</center></td>
    <td class="align-middle" rowspan="12">1. Download Forms C-J <a href="https://www.science-scholarships.ph/#/home">here.</a><br><br>2. Print each form in an A4 size bond paper.<br><br>3. Have these forms accomplished by the proper authorities/ officials/ persons as indicated in each form.<br><br>4. Make sure that each form is completely signed.<br><br>5. Scan or take picture of each accomplished form and save file.<br><br>6. Name each file: (Surname-Form __) when saving it.<br><br>7. Submit each form using the Upload Module in the E-Application System. Use the appropriate upload field for each file.<br><br>8. Ensure that the files uploaded are correct and complete.</td>
  </tr>
  <tr>
    <td class="align-middle"><center>2</center></td>
    <td class="align-middle"colspan="2">Certificate of Good Health</td>
    <td class="align-middle"><center>D</center></td>
  </tr>
  <tr>
    <td class="align-middle" rowspan="5"><center>3</center></td>
    <td class="align-middle" rowspan="5">Principal’s Certification</td>
    <td class="align-middle">Applicant who is Grade 12 Graduating/Graduated student in the STEM strand</td>
    <td class="align-middle"><center>E1</center></td>
  </tr>
  <tr>
    <td class="align-middle">Applicant who is Grade 12 Graduating/Graduated student in NON-STEM strand and belongs to the upper 5% of the class</td>
    <td class="align-middle"><center>E2</center></td>
  </tr>
  <tr>
    <td class="align-middle">Applicant who is attending homeschool</td>
    <td class="align-middle"><center>E3</center></td>
  </tr>
  <tr>
    <td class="align-middle">Applicant who is under the Alternative Learning System</td>
    <td class="align-middle"><center>E4</center></td>
  </tr>
  <tr>
    <td class="align-middle">Applicant who graduated in High School before the K-12 program and belongs to the upper 5% of the graduating class</td>
    <td class="align-middle"><center>E5</center></td>
  </tr>
  <tr>
    <td class="align-middle"><center>4</center></td>
    <td class="align-middle" colspan="2">Certificate of Residency</td>
    <td class="align-middle"><center>F</center></td>
  </tr>
  <tr>
    <td class="align-middle"><center>5</center></td>
    <td class="align-middle" colspan="2">Parent’s Certification – Applicant has no pending immigration application to another country</td>
    <td class="align-middle"><center>G</center></td>
  </tr>
  <tr>
    <td class="align-middle"><center>6</center></td>
    <td class="align-middle" colspan="2">DOST-SEI Scholarship Examination/Award</td>
    <td class="align-middle"><center>H</center></td>
  </tr>
  <tr>
    <td class="align-middle"<center>7</center></td>
    <td class="align-middle" colspan="2">Applicant’s Certification of No Post-Secondary Units</td>
    <td class="align-middle"><center>I</center></td>
  </tr>
  <tr>
    <td class="align-middle"><center>8</center></td>
    <td class="align-middle" colspan="2">Signed Declaration of Applicant and the Parent/Legal Guardian</td>
    <td class="align-middle"><center>J</center></td>
  </tr>
  <tr>
    <td class="align-middle" rowspan="3"><center>9</center></td>
    <td class="align-middle" colspan="2">Certified Copy of Permanent Student Record (Form 137) or Report Card (Form 138) for Grades 9, 10 and 11<br><b>OR</b></td>
    <td class="align-middle"></td>
    <td class="align-middle">Must be duly signed by the School Principal/University Registrar.</td>
  </tr>
  <tr>
    <td class="align-middle" colspan="2">Philippine Equivalency Placement Test Certificate of Rating<br><b>OR</b></td>
    <td class="align-middle"></td>
    <td class="align-middle">Must be submitted by applicant who skipped a Grade Level by taking PEPT.</td>
  </tr>
  <tr>
    <td class="align-middle" colspan="2">For Grades 9 and 11:<br>Accreditation and Equivalency Test Certificate of Rating <br><br><b>OR</b><br><br>Presentation Portfolio Assessment<br>Certificate of Completion<br><br>For Grade 10:<br>Certificate of Completion from ALS teacher<br></td>
    <td class="align-middle"></td>
    <td class="align-middle">Must be submitted by applicant who is an ALS completer.</td>
  </tr>
  <tr>
    <td class="align-middle"><center>10</center></td>
    <td class="align-middle" colspan="2">Recent picture, passport size (4.5 cm x 3.5 cm or 1.8 inches x 1.4 inches)<sup>1</sup></td>
    <td class="align-middle"></td>
    <td class="align-middle">1. Must show face of the Applicant, 80% of the picture.<br><br>2. Must be colored, with white background.<br><br>3. With the name tag (approximately positioned 1 inch or 2.54 cm below the chin): Full name, handwritten- First Name, Middle Initial, Last Name, and Extension Name, if any (e.g. JUAN C. DELA CRUZ, JR.), and signature over printed name.<br><br>4. Taken within the last three (3) months prior to filing of application.</td>
  </tr>
  <tr>
    <td class="align-middle"><center>11</center></td>
    <td class="align-middle" colspan="2">Birth Certificate</td>
    <td class="align-middle"></td>
    <td class="align-middle">Readable copy. May be issued by the PSA, NSO or the Municipal Registry Office.</td>
  </tr>
  <tr>
    <td class="align-middle" rowspan="3"><center>12</center></td>
    <td class="align-middle" colspan="2">Recent picture, passport size (4.5 cm x 3.5 cm or 1.8 inches x 1.4 inches)<sup>1</sup></td>
    <td class="align-middle"></td>
    <td class="align-middle">Clear, signed copy.</td>
  </tr>
  <tr>
    <td class="align-middle" colspan="2">Birth Certificate</td>
    <td class="align-middle"></td>
    <td class="align-middle">Annual Gross Income must be clearly indicated in the document.<sup>2</sup></td>
  </tr>
  <tr>
    <td class="align-middle" colspan="2">Parent/s or Legal Guardian’s 2021 Income Tax Return / BIR Form 1701 / Employment Contract for OFW / BIR Certificate of Exemption from Filing of ITR / Certificate of Indigency / Certificate of Employment with Compensation / Proof of Pension</td>
    <td class="align-middle"></td>
    <td class="align-middle">The particular document depends on the parent's class of worker.3</td>
  </tr>
  <tr>
    <td class="align-middle"><center>13</center></td>
    <td class="align-middle" colspan="2">Notarized Affidavit of Guardianship</td>
    <td class="align-middle"></td>
    <td class="align-middle">Must be submitted if the applicant is not living together with either of the parents.</td>
  </tr>
</tbody>
</table>

<a href="https://sei.dost.gov.ph/index.php?option=com_content&view=article&id=393"><sup>1</sup>Sample Picture</a>
<br>
<a href="https://sei.dost.gov.ph/index.php?option=com_content&view=article&id=352"><sup>2</sup>Sample ITR</a>
<br>
<a href="https://sei.dost.gov.ph/index.php?option=com_content&view=article&id=357"><sup>3</sup>Class of Worker and Corresponding Proof of Income
For a certain class of worker, any one proof of income with (✓) may be submitted.</a>
<br>
  </div>
  <div class="tab-pane fade" id="Period-tab-pane" role="tabpanel" aria-labelledby="Period-tab" tabindex="0">
  <table class="table table-striped">
<thead>
  <tr>
    <th>Start of Online Application Period</th>
    <th><b>September 19, 2022</b></th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>Last Day of Registration</td>
    <td><b>December 2, 2022</b></td>
  </tr>
  <tr>
    <td>Last Day of Online Application and Uploading of Requirements</td>
    <td><b>December 16, 2022</b></td>
  </tr>
  <tr>
    <td>Qualifying Examination1</td>
    <td><b>March 11 and 12, 2023</b></td>
  </tr>
</tbody>
</table>
<sup>1</sup>If and when the COVID 19 alert level will be heightened at around the time of the examination per advisory from Inter-Agency Task Force for the Management of Emerging Infectious Diseases, the conduct of the pen and paper examination may be cancelled. In this event, proper communication will be sent to the Applicant's registered email address.
  </div>
</div>
		</div>
	</body>
</html>
