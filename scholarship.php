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
			<h2>Scholarship Page</h2>
			<div class="tab">
      <button class="tablinks" onclick="openCity(event, 'programs')" id="default">Priority S&T Programs and Study Placement</button>
      <button class="tablinks" onclick="openCity(event, 'schopriv')">Scholarship Privileges</button>
      <button class="tablinks" onclick="openCity(event, 'qualifications')">Qualifications</button>
      <button class="tablinks" onclick="openCity(event, 'appreq')">Application Requirements</button>
      <button class="tablinks" onclick="openCity(event, 'appper')">Application Period</button>
    </div>
    
    <div id="programs" class="tabcontent">
      <h3>Programs Covered by the DOST-SEI Undergraduate Scholarships</h3>
      <p>
        <ul>
          <li>
            Bachelor in Mathematics Education
          </li>
          <li>
            Bachelor in Technology and Livelihood Education with Specialization in Information and Communications
          </li>
          <li>
            Bachelor of Library and Information Science
          </li>
          <li>
            BS Aeronautical Engineering
          </li>
          <li>
            BS Aerospace Engineering
          </li>
          <li>
            BS Agribusiness
          </li>
          <li>
            BS Agribusiness Management
          </li>
          <li>
            BS Agribusiness Management and Entrepreneurship
          </li>
          <li>
            BS Agricultural and Biosystems Engineering
          </li>
          <li>
            BS Agricultural Biotechnology<sup>1</sup>
          </li>
          <li>
            BS Agricultural Chemistry
          </li>
          <li>
            BS Agricultural Economics
          </li>
          <li>
            BS Agricultural Engineering
          </li>
          <li>
            BS Agricultural Technology
          </li>
          <li>
            BS Agriculture
          </li>
          <li>
            BS Animal Husbandry
          </li>
          <li>
            BS Animal Science
          </li>
          <li>
            BS Applied Mathematics
          </li>
          <li>
            BS Applied Mathematics major in Mathematical Finance<sup>2</sup>
          </li>
          <li>
            BS Applied Physics
          </li>
          <li>
            BS Applied Physics with Applied Computer System
          </li>
          <li>
            BS Applied Physics with Materials Science and Engineering<sup>2</sup>
          </li>
          <li>
            BS Applied Statistics
          </li>
          <li>
            BS Architecture
          </li>
          <li>
            BS Astronomy
          </li>
          <li>
            BS Astronomy Technology
          </li>
          <li>
            BS Basic Medical Sciences
          </li>
          <li>
            BS Biochemistry
          </li>
          <li>
            BS Biology
          </li>
          <li>
            BS Biology for Teachers
          </li>
          <li>
            BS Biotechnology
          </li>
          <li>
            BS Ceramics Engineering
          </li>
          <li>
            BS Chemical Engineering
          </li>
          <li>
            BS Chemistry
          </li>
          <li>
            BS Chemistry Major in Business<sup>3</sup>
          </li>
          <li>
            BS Chemistry for Teachers
          </li>
          <li>
            BS Chemistry with Applied Computer Systems
          </li>
          <li>
            BS Chemistry with Materials Science and Engineering<sup>2</sup>
          </li>
          <li>
            BS Civil Engineering
          </li>
          <li>
            BS Clothing Technology
          </li>
          <li>
            BS Community Nutrition
          </li>
          <li>
            BS Computer Engineering
          </li>
          <li>
            BS Computer Science
          </li>
          <li>
            BS Electrical Engineering
          </li>
          <li>
            BS Electronics and Communications Engineering
          </li>
          <li>
            BS Environmental Engineering
          </li>
          <li>
            BS Electronics Engineering
          </li>
          <li>
            BS Environmental Science
          </li>
          <li>
            BS Fine Arts Major in Industrial Design
          </li>
          <li>
            BS Fisheries
          </li>
          <li>
            BS Food Science and Technology
          </li>
          <li>
            BS Food Technology
          </li>
          <li>
            BS Forestry
          </li>
          <li>
            BS Geodetic Engineering
          </li>
          <li>
            BS Geography
          </li>
          <li>
            BS Geology
          </li>
          <li>
            BS Geothermal Engineering
          </li>
          <li>
            BS Health Science
          </li>
          <li>
            BS Human Biology
          </li>
          <li>
            BS Industrial Design
          </li>
          <li>
            BS Industrial Engineering
          </li>
          <li>
            BS Industrial Management Engineering-Information Technology<sup>3</sup>
          </li>
          <li>
            BS Industrial Pharmacy
          </li>
          <li>
            BS Information and Communications Technology
          </li>
          <li>
            BS Information System
          </li>
          <li>
            BS Information Technology
          </li>
          <li>
            BS Information Technology Systems
          </li>
          <li>
            BS Instrumentation and Control Engineering
          </li>
          <li>
            BS Life Sciences
          </li>
          <li>
            BS Management Information Systems<sup>2</sup>
          </li>
          <li>
            BS Manufacturing Engineering
          </li>
          <li>
            BS Manufacturing Engineering-Management-Biomedical Engineering<sup>3</sup>
          </li>
          <li>
            BS Manufacturing Engineering-Management-Mechatronics and Robotics<sup>3</sup>
          </li>
          <li>
            BS Marine Biology
          </li>
          <li>
            BS Marine Science
          </li>
          <li>
            BS Materials Engineering
          </li>
          <li>
            BS Mathematics
          </li>
          <li>
            BS Mathematics and Science Teaching
          </li>
          <li>
            BS BS Mathematics for Teachers
          </li>
          <li>
            BS Mechanical Engineering
          </li>
          <li>
            BS Mechatronics Engineering
          </li>
          <li>
            BS Medical Laboratory Science
          </li>
          <li>
            BS Medical Technology
          </li>
          <li>
            BS Metallurgical Engineering
          </li>
          <li>
            BS Meteorology
          </li>
          <li>
            BS Microbiology
          </li>
          <li>
            BS Mining Engineering
          </li>
          <li>
            BS Molecular Biology and Biotechnology
          </li>
          <li>
            BS Nutrition
          </li>
          <li>
            BS Nutrition and Dietetics
          </li>
          <li>
            BS Packaging Engineering
          </li>
          <li>
            BS Petroleum Engineering
          </li>
          <li>
            BS Pharmaceutical Sciences
          </li>
          <li>
            BS Pharmacy (4-year program)
          </li>
          <li>
            BS Pharmacy major in Clinical Pharmacy (5-year program)
          </li>
          <li>
            BS Physics
          </li>
          <li>
            BS Physics for Teachers
          </li>
          <li>
            BS Psychology
          </li>
          <li>
            BS Public Health
          </li>
          <li>
            BS Speech Pathology
          </li>
          <li>
            BS Statistics
          </li>
          <li>
            BSE Biological Sciences
          </li>
          <li>
            BSE Biology
          </li>
          <li>
            BSE Biology-Chemistry
          </li>
          <li>
            BSE Chemistry
          </li>
          <li>
            BSE General Sciences
          </li>
          <li>
            BSE Mathematics
          </li>
          <li>
            BSE Physical Sciences
          </li>
          <li>
            BSE Physics
          </li>
          <li>
            BSE Physics-Chemistry
          </li>
          <li>
            BSE Physics-Mathematics
          </li>
          <li>
            BSE Science
          </li>
          <li>
            Doctor of Veterinary Medicine
          </li>
        </ul>
      </p>

      <section id="cardSection" style="padding-right: 100px; padding-bottom: 100px;">
        <div class="card" style="width: 18rem; float: right;">
          <div class="card-body">
			<h4>Note</h4>
            <p>1 UP System only <br>
              2 4yrs, ADMU only <br>
              3 DLSU-Manila only <br>
              4 4yrs, USC only <br>
              5 3yrs, DLSU-Manila only <br>
              6 4 yrs, UPM only <br>
			</p>
          </div>
        </div>
      </section>
      
      <h4>
        Study Placements
      </h4>
      <p>University of the Philippines</p>
      <p>State Universities and Colleges</p>
      <p>Private Institutions that are recognized by CHED as Centers of Excellence or Centers of Development or has FAAP Level III accreditation for the priority S&T programs of study</p>
    </div>
    <!-- end of programs -->
    
    <div id="schopriv" class="tabcontent">
      <h3>Scholarship Privileges</h3>
      <p>
        <table>
          <tr>
            <th>A. Regular Academic Year</th>
            <th></th>
          </tr>
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
            <td>Transportation Allowance
              <br>
              (for those studying outside of home province)
            </td>
            <td>1 economy-class roundtrip fare</td>
          </tr>
          <tr>
            <td>Group Accident and Health  Insurance</td>
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
            <th>B. Mid-Year Term1 Allowance (if required in the curriculum)</th>
            <th></th>
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
        </table>
      </p> 
    </div>
    <!-- end of privileges -->
    
    <div id="qualifications" class="tabcontent">
      <h3>Qualifications</h3>
      <table>
        <tr>
          <th>Criteria of Eligibility</th>
          <th>MERIT</th>
          <th>RA 7687</th>
        </tr>
        <tr>
          <td>1. Natural-born Filipino citizen</td>
          <td>✓</td>
          <td>✓</td>
        </tr>
        <tr>
          <td>2. Poor, talented and deserving student who belongs to a family whose socio-economic status <br>
            does not exceed the set values of certain indicators</td>
          <td>✗</td>
          <td>✓</td>
        </tr>
        <tr>
          <td>3.1. Graduating Grade 12 male and female students in SY 2022-2023:
            <br>
            a. STEM STRAND: All students belonging to the STEM class
            <br>
            b. NON-STEM STRAND: Must be in the top 5% of the class based on Grade 11 ranking
            <br>
            <strong>OR</strong>
            <br>
            3.2. Graduate of Grade 12 before SY 2022-2023 and did not enroll in college yet:
            <br>
            a. STEM STRAND: All students belonging to the STEM class
            <br>
            b. NON-STEM STRAND: Must be in the top 5% of the graduating class
            <br>
            <strong>OR</strong>
            <br>
            3.3. Graduate of high school before the K-12 Program. Must belong to the top 5% of the graduating class
          </td>
          <td>✓</td>
          <td>✓</td>
        </tr>
        <tr>
          <td>4. Resident of the municipality as attested by the barangay for at least  four (4) years</td>
          <td>✗</td>
          <td>✓</td>
        </tr>
        <tr>
          <td>5. Of good moral character and in good health</td>
          <td>✓</td>
          <td>✓</td>
        </tr>
        <tr>
          <td>6.Do not have earned any college units
            <br>
            <strong>AND</strong>
            <br>
            Do not have any post-high school vocational units
          </td>
          <td>✓</td>
          <td>✓</td>
        </tr>
        <tr>
          <td>7.1. Have not taken any previous DOST-SEI examination
            <br>
            <strong>OR</strong>
            <br>
            7.2. Have taken the DOST-SEI Undergraduate Examination but did not qualify for the scholarship
            <br>
            <strong>OR</strong>
            <br>
            7.3. Have qualified for the DOST-SEI Undergraduate Scholarship but did not avail of the award
            <br>
            <strong>OR</strong>
            <br>
            7.4. Have not taken any DOST-SEI Undergraduate Scholarship Examination
          </td>
          <td>✓</td>
          <td>✓</td>
        </tr>
      </table>
    </div>
    <!-- end of qualifications -->

    <div id="appreq" class="tabcontent">
      <table class="apptable">
        <tr>
          <th colspan="2"><center>DOCUMENT</center></th>
          <th></th>
          <th><center>FORM</center></th>
          <th colspan="2"><center>SPECIAL INSTRUCTIONS</center></th>
        </tr>
        <tr>
          <td colspan="3"><center>Certificate of Good Moral Character</center></td>
          <td style="text-align: center;">C</td>
          <td rowspan="12">1. Download Forms C-J <a href="https://www.science-scholarships.ph/#/home" target="_blank">here</a>
            <br><br>
            2. Print each form in an <u>A4 size bond paper</u>
            <br><br>
            3. Have these forms accomplished by the proper authorities/officials/persons<br> as indicated in each form
            <br><br>
            4. Make sure that each form is completely signed
            <br><br>
            5. Scan or take picture of each accomplished form and save file
            <br><br>
            6. Name each file: <strong>(Surname-Form __)</strong> when saving it
            <br><br>
            7. Submit each form using the Upload Module in the E-Application System. Use the appropriate upload field for each file
            <br><br>
            8. Ensure that the files uploaded are correct and complete</td>
        </tr>
        <tr>
          <td colspan="3"><center>Certificate of Good Health</center></td>
          <td style="text-align: center;">D</td>
        </tr>
        <tr>
          <td rowspan="5" style="text-align: center;">Principal’s Certification</td>
          <td colspan="2" style="text-align: justify;">Applicant who is Grade 12 Graduating/Graduated student in the STEM strand</td>
          <td><div style="width: 50px; text-align: center;">E1</div></td>
        <tr>
          <td colspan="2" style="text-align: justify;">Applicant who is Grade 12 Graduating/Graduated student in NON-STEM strand and belongs to the upper 5% of the class</td>
          <td><div style="width: 50px; text-align: center;">E2</div></td>
        </tr>  
        <tr>
          <td colspan="2" style="text-align: justify;">Applicant who is attending homeschool</td>
          <td><div style="width: 50px; text-align: center;">E3</div></td>
        </tr>
        <tr>  
          <td colspan="2" style="text-align: justify;">Applicant who is  under the Alternative Learning System</td>
          <td><div style="width: 50px; text-align: center;">E4</div></td>
        </tr>
        <tr>
          <td colspan="2" style="text-align: justify;">Applicant who graduated in High School before the K-12 program and belongs to the upper 5% of the graduating class</td>
          <td><div style="width: 50px; text-align: center;">E5</div></td>
        </tr>
          <td colspan="3"><center>Certificate of Residency</center></td>
          <td style="text-align: center;">F</td>
        </tr>
        <tr>
          <td colspan="3"><center>Parent's Certification – Applicant has no pending immigration application to another country</center></td>
          <td style="text-align: center;">G</td>
        </tr>
        <tr>
          <td colspan="3"><center>DOST-SEI Scholarship Examination/Award</center></td>
          <td style="text-align: center;">H</td>
        </tr>
        <tr>
          <td colspan="3"><center>Applicant’s Certification of No Post-Secondary Units</center></td>
          <td style="text-align: center;">I</td>
        </tr>
        <tr>
          <td colspan="3"><center>Signed Declaration of Applicant and the Parent/Legal Guardian</center></td>
          <td style="text-align: center;">J</td>
        </tr>
        <tr>
          <td colspan="3"><center>Certified Copy of Permanent Student Record (Form 137) or Report Card 
            (Form 138) for Grades 9, 10 and 11
            <strong>OR</strong></center></td>
          <td></td>
          <td>Must be duly signed by the School Principal/University Registrar</td>
        </tr>
        <tr>
          <td colspan="3"><center>Philippine Equivalency Placement Test Certificate of Rating
            <strong>OR</strong></center></td>
          <td></td>
          <td>Must be submitted by applicant who skipped a Grade Level by taking PEPT</td>
        </tr>
        <tr>
          <td colspan="3"><center>For Grades 9 and 11: Accreditation and Equivalency Test Certificate of Rating
            <br>
            <strong>OR</strong>
            <br>
            Presentation Portfolio Assessment
            Certificate of Completion
            <br>
            <br>
            For Grade 10:
            Certificate of Completion from ALS teacher</center></td>
          <td></td>
          <td>Must be submitted by applicant who is an ALS completer</td>
        </tr>
        <tr>
          <td colspan="3"><center>Recent picture, passport size (4.5 cm x 3.5 cm or 1.8 inches x 1.4 inches)</center></td>
          <td></td>
          <td>1. Must show face of the Applicant, 80% of the picture
            <br><br>
            2. Must be colored, with white background
            <br><br>
            3. With the name tag (approximately positioned 1 inch or 2.54 cm below the chin): Full name, handwritten- First Name, Middle Initial, Last Name, and Extension Name, if any (e.g. JUAN C. DELA CRUZ, JR.), and signature over printed name
            <br><br>
            4. Taken within the last three (3) months prior to filing of application
          </td>
        </tr>
        <tr>
          <td colspan="3"><center>Birth Certificate</center></td>
          <td></td>
          <td>Readable copy. May be issued by the PSA, NSO or the Municipal Registry Office</td>
        </tr>
        <tr>
          <td colspan="3" rowspan="3"><center>Parent/s or Legal Guardian’s 2021 Income Tax Return/<br>BIR Form 1701/<br>Employment Contract for OFW/<br>BIR Certificate of Exemption from Filing of ITR/<br>Certificate of Indigency/<br>Certificate of Employment with Compensation/<br>Proof of Pension</center></td>
          <td></td>
          <td>Clear, signed copy</td>
          <tr>
            <td></td>
            <td>Annual Gross Income must be clearly indicated in the document</td>
          </tr>
          <tr>
            <td></td>
            <td>The particular document depends on the parent's class of the worker</td>
          </tr>
        </tr>
        <tr>
          <td colspan="3"><center>Notarized Affidavit of Guardianship</center></td>
          <td></td>
          <td>Must be submitted if the applicant is not living together with either of the parents</td>
        </tr>
      </table>
    </div>
    <!-- end of requirements -->

    <div id="appper" class="tabcontent">
      <table>
        <tr>
          <th>Start of Online Application Period</th>
          <td><div style="width: 100px; text-align: center;">TBA</div></td>
        </tr>
        <tr>
          <th>Last Day of Registration</th>
          <td><div style="width: 100px; text-align: center;">TBA</div></td>
        </tr>
        <tr>
          <th>Last Day of Online Application and Uploading of Requirements</th>
          <td><div style="width: 100px; text-align: center;">TBA</div></td>
        </tr>
        <tr>
          <th>Qualifying Examinations</th>
          <td><div style="width: 100px; text-align: center;">TBA</div></td>
        </tr>
      </table>
      <br><br>
      <p style="text-align: justify">If and when the COVID 19 alert level will be heightened at around the time of the examination per advisory from Inter-Agency Task Force for the Management of Emerging Infectious Diseases, the conduct of the pen and paper examination may be cancelled. In this event, proper communication will be sent to the Applicant's registered email address.</p>
      
      <script>
		  function openCity(evt, programs) {
          var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
              for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
              }
                tablinks = document.getElementsByClassName("tablinks");
              for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
              }
              document.getElementById(programs).style.display = "block";
              evt.currentTarget.className += " active";
            } 

			function openCity(evt, schopriv) {
          var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
              for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
              }
                tablinks = document.getElementsByClassName("tablinks");
              for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
              }
              document.getElementById(schopriv).style.display = "block";
              evt.currentTarget.className += " active";
            } 
            
      function openCity(evt, qualifications) {
          var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
              for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
              }
                tablinks = document.getElementsByClassName("tablinks");
              for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
              }
              document.getElementById(qualifications).style.display = "block";
              evt.currentTarget.className += " active";
            }       

			function openCity(evt, appreq) {
          var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
              for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
              }
                tablinks = document.getElementsByClassName("tablinks");
              for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
              }
              document.getElementById(appreq).style.display = "block";
              evt.currentTarget.className += " active";
            } 

			function openCity(evt, appper) {
          var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
              for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
              }
                tablinks = document.getElementsByClassName("tablinks");
              for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
              }
              document.getElementById(appper).style.display = "block";
              evt.currentTarget.className += " active";
            } 

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("default").click();
	  </script>
    </div>
	</body>
</html>
