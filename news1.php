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
            <h1>Philippines’ oldest regional science centrum just got revamped, DOST-SEI NuLab bus joins the fun</h1>
			<p>
			<b>20 April 2023</b>
            <br><br>
            Saan aabot ang bente pesos mo?
            <br><br>
            For Bicolanos, their P20 can go a long way - transporting them to five different worlds in science, all packed into one place - the newly relaunched Bicol Science and Technology Centrum (BSTC) at the heart of Naga City.
            <br><br>
            The BSTC, the first science centrum outside Metro Manila, officially reopened its doors to the public on March 16, and the excitement was amplified with the visit of the NuLab:STEM in Motion bus, a mobile science learning facility by the Department of Science and Technology -Science Education Institute (DOST-SEI).
            <br><br>
            The first gallery of the museum welcomes visitors with robots, interactive screens and virtual reality activities that teach them physics, electricity, and magnetism.
            <br><br>
            In the next hall, museum-goers experience the wonders of being an astronaut with activities such as constellation light tracing and knowing their weight on other planets.
            <br><br>
            A few steps away from the universe gallery is a place that uncovers the secrets of the Earth’s surface. Kids enjoy the coal mining interactive display, miniature volcano, while kids-at-heart can explore the earthquake simulator that is meant to teach disaster preparedness.
            <br><br>
            From the Earth’s various landforms, a tunnel will lead to a gallery featuring a place teeming with marine life – a replica of a whale shark hung on the ceiling surrounded with displays of various sea creatures.
            <br><br>
            The last space in the centrum is dedicated to the rich flora and fauna of Bicolandia. Interactive games like the Mt. Mayon and Mt. Isarog lenticular wall tickle the mind of the not-so-young while children enjoy their time in the sand field area and playing with fake insects in the creepy crawlies.
			</p>
            <img src="images/news1.1.png" class="rounded mx-auto d-block img-thumbnail">
            <small> <center> Gallery 1 - Marvels of Physics: Electricity, Magnetism and Robotics </small> </center>
            <br><br>
            <img src="images/news1.2.jpg" class="rounded mx-auto d-block img-thumbnail">
            <small> <center> Gallery 2 – Mysteries of the Universe Explained: Solar System and Space Exploration </small> </center>
            <br><br>
            <img src="images/news1.3.jpg" class="rounded mx-auto d-block img-thumbnail">
            <small> <center> Gallery 3 – What Lies Beneath: Uncovering Earth’s Secret </small> </center>
            <br><br>
            <img src="images/news1.4.jpg" class="rounded mx-auto d-block img-thumbnail">
            <small> <center> Gallery 4 – Underwater Wonderland: Beneficial Yet Threatened Aquatic Ecosystems </small> </center>
            <br><br>
            <img src="images/news1.5.jpg" class="rounded mx-auto d-block img-thumbnail">
            <small> <center> Gallery 5 - Land Ecosystem Unfold: Discovering Mother Nature </small> </center>
            <p>
            At the end of the science tour, viewers were invited to board the NuLab bus. Scientists-facilitators from the University of the Philippines Los Baños conducted a STEM session on mathematics while researchers from DOST agencies led a short demonstration of NuLab’s instrumentation, data logging systems and other modern science laboratory equipment – that high school students can use to achieve a deeper level of understanding of STEM concepts.
            </p>
            <img src="images/news1.6.png" class="rounded mx-auto d-block img-thumbnail">
            <small> <center> (Left) Usual set-up inside the NuLab bus featuring modern science laboratory equipment such as wireless sensors during a STEM session on chemistry. </small> </center>
            <p>
            Dr. Renato U. Solidum, head of the country’s premier science and technology department personally graced the ceremonies. With a revitalized centrum, the DOST top official hopes to inspire a new generation of Bicolanos interested in science and technology.
            <br><br>
            “Ang pangunahing layunin ng ating Departamento ay mapagtuunan ng pansin ang ating well-being, magandang kalusugan, magandang edukasyon, access to clean water, green energy at syempre makabuo tayong isang malaking grupo ng mga Pilipino magmula sa kabataan at kahit hindi gaanong kabataan na mangunguna sa pagdevelop ng science, technology and innovation sa ating bansa” mentioned Dr. Solidum.
            <br><br>
            Local government officials also expressed their wishes for the science centrum to help boost science tourism in the region.
            <br><br>
            Entrance fee in the science museum is worth P20 for students, and P25 for non-students and adults. Meanwhile, teachers, persons with disabilities and senior citizens are free of charge.
            <br><br>
            NuLab spread love for STEM to Bicolano students
            <br><br>
            For the first time since it was launched in 2019, the NuLab bus toured the Bicol region to introduce various STEM careers to around 563 junior and senior high school students.
            </p>
            <img src="images/news1.7.jpg" class="rounded mx-auto d-block img-thumbnail">
            <small> <center> Camarines Sur National High School students pose for a group photo after attending the three-hour STEM session inside the NuLab bus. </small> </center>
            <p>
            The mobile science laboratory, which is equipped with a range of science equipment and resources, has traveled across three schools in two provinces - Sipocot National High School, Camarines Sur National High School, and Vinzons Pilot High School from March 14 to March 21.
            <br><br>
            Students were highly engaged with the activities and experiments that were part of the different modules – environmental science topics including water systems and volcanoes, chemistry, astronomy, and appreciation in mathematics. Aside from the fun learning and interaction with the scientists-facilitators, students were also offered an orientation of the scholarships offered by the Institute through the #Push4Science: Maging DOST Scholar Ka! Campaign.
            </p>
            <img src="images/news1.8.jpg" class="rounded mx-auto d-block img-thumbnail">
            <small> <center> Students from Vinzons Pilot High School proudly show their output from their activity on volcanic eruptions. </small> </center>
            <br><br>
            <img src="images/news1.9.jpg" class="rounded mx-auto d-block img-thumbnail">
            <small> <center> Mr. Warner Carag, a former DOST Scholar and a researcher from DOST-PHIVOLCS discusses his module on environmental science. </small> </center>
            <p>
            Each school was given copies of the Finding North: A STEM Career Guidebook, a new publication of the DOST-SEI that is meant to guide high school students on what specific courses in STEM they intend to take in the future. The guidebook allows the students to reflect on their personal strengths, characteristics, and skills which they can use to match with their preferred STEM course. It also includes study placements and available scholarship offerings from DOST-SEI.
            </p>  
            <img src="images/news1.10.jpg" class="rounded mx-auto d-block img-thumbnail">
            <small> <center> STEM students from the Naga City Science High School receive a copy of the STEM Career Guidebook during the orientation of undergraduate scholarships at the Bicol Science and Technology Centrum. </small> </center>
            <p>
        “Thankful po ako dito sa NuLab dahil mas nagkaroon pa po ako ng knowledge about STEM and let’s see po kung ito po talaga yung kukuhanin ko this coming senior high school journey ko,” Aizle Doctor, one of the Grade 10 students from Sipocot National High School who is still undecided of the strand she will be taking in senior high school.
        <br><br>
        The NuLab bus is designed to address the lack and insufficiency of science laboratory equipment in schools and at the same time, entice secondary level students to take courses in the fields of science, technology, engineering and mathematics.
        <br><br>
        Dr. Josette T. Biyo, director of DOST-SEI, the agency mandated to develop a critical mass of highly trained Filipino S&T human resource, said that the visit of the mobile laboratory bus was particularly significant for the many schools and communities in the region that may not have easy access to science education resources.
        <br><br>
        “By bringing the bus directly to these communities, the Institute hopes to extend its reach and inspire a new generation of young scientists and innovators,” Dr. Biyo remarked.
        <br><br>
        The NuLab: STEM in Motion bus is scheduled to visit more schools in the province of Bohol and other parts of Visayas this year. (30)
        <br><br>
        </p>
        </div>
</body>
</html>
