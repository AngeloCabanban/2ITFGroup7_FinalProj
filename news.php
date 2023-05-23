<?php
session_start();
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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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

  <div class="content" id="newscontent">
    <h2>Recent News and Current Events</h2>

    <div class="container" id="news" style="padding-top: 230px; padding-bottom: 1520px">

      <div class="row" style="padding-top: 1283px">
        <div class="col-4">

          <div class="fancy_card" id="f1"><a href="https://www.sei.dost.gov.ph/index.php/news-archive/425-stem-teach-learning-the-basics-of-geogebra-as-a-tool-in-teaching-mathematics" target="_blank">
              <img src="https://www.sei.dost.gov.ph/images/news/n458b.png" class="card_image">
              <div class="card_text">
                <h2 class="title">STEM Teach: Learning the Basics of GeoGebra as a Tool in Teaching Mathematics</h2>
                <div class="summary">
                  In partnership with the University of the Philippines - National Institute for Science and Mathematics Education Development (UP NISMED), the Department of Science...
                </div>
              </div>
              <div class="card_footer">
                <a href="https://nestedsoftware.com"></a>
                <div class="reading_time">
                  27 April 2023
                </div>
              </div>
            </a></div>

          <div style="padding-top: 5px">
            <div class="fancy_card" id="f2"><a href="https://www.sei.dost.gov.ph/index.php/news-archive/422-dost-sei-launches-work-immersion-partnership-with-upper-bicutan-national-high-school" target="_blank">
                <img src="https://www.sei.dost.gov.ph/images/news/n455a.png" class="card_image">
                <div class="card_text">
                  <h2 class="title"> DOST-SEI launches Work Immersion Partnership with Upper Bicutan National High School</h2>
                  <div class="summary">
                    Upper Bicutan National High School represented by Dr. Gil M. Teodoro and the Department of Science and Technology represented by Dr. Josette T. Biyo inks a partnership...
                  </div>
                </div>
                <div class="card_footer">
                  <a href="https://nestedsoftware.com"></a>
                  <div class="reading_time">
                    20 April 2023
                  </div>
                </div>
            </div>
            </a>
          </div>

          <div style="padding-top: 5px">
            <div class="fancy_card" id="f3"><a href="https://www.sei.dost.gov.ph/index.php/news-archive/418-dost-sei-mobile-lab-makes-science-lessons-exciting-for-bulacan-students" target="_blank">
                <img src="https://www.sei.dost.gov.ph/images/news/n452.png" class="card_image">
                <div class="card_text">
                  <h2 class="title"> DOST-SEI mobile lab makes science lessons exciting for Bulacan students</h2>
                  <div class="summary">
                    When the NuLab:STEM in Motion bus of the Department of Science and Technology - Science Education Institute arrived in the rural town of San Rafael, Bulacan last February 27...
                  </div>
                </div>
                <div class="card_footer">
                  <a href="https://nestedsoftware.com"></a>
                  <div class="reading_time">
                    16 March 2023
                  </div>
                </div>
              </a></div>
          </div>
        </div>
      </div>


      <div class="row" style="padding-top: 1370px">
        <div class="col-4">

          <div class="fancy_card" id="f4"><a href="https://www.sei.dost.gov.ph/index.php/news-archive/424-films-on-nationalism-community-development-highlighted-in-dost-sei-s-video-making-competition" target="_blank">
              <img src="https://www.sei.dost.gov.ph/images/news/n457.png" class="card_image">
              <div class="card_text">
                <h2 class="title"> Films on nationalism, community development highlighted in DOST-SEI's video-making competition</h2>
                <div class="summary">
                  In the hopes of showcasing the creativity and ingenuity of the Department of Science and Technology (DOST) scholars in filmmaking and furthering...
                </div>
              </div>
              <div class="card_footer">
                <a href="https://nestedsoftware.com"></a>
                <div class="reading_time">
                  25 April 2023
                </div>
              </div>
            </a></div>

          <div style="padding-top: 37px">

            <div class="fancy_card" id="f5"><a href="https://www.sei.dost.gov.ph/index.php/news-archive/421-young-filipino-girls-take-the-spotlight-on-the-stage-of-robotics" target="_blank">
                <img src="https://www.sei.dost.gov.ph/images/news/n454b.jpeg" class="card_image">
                <div class="card_text">
                  <h2 class="title"> Young Filipino girls take the spotlight on the stage of robotics</h2>
                  <div class="summary">
                    Female Junior high school students prove that they are ready to break the long-standing gender biases of society and proudly wave the banner of women in Science, Technology...
                  </div>
                </div>
                <div class="card_footer">
                  <a href="https://nestedsoftware.com"></a>
                  <div class="reading_time">
                    13 April 2023
                  </div>
                </div>
              </a></div>
          </div>

          <div style="padding-top: 12px; padding-bottom: 77px">

            <div class="fancy_card" id="f6"><a href="https://www.sei.dost.gov.ph/index.php/news-archive/417-honda-c-e-publishing-gbf-invest-in-young-filipino-innovators-through-dost-sei-s-6th-imake-wemake" target="_blank">
                <img src="https://www.sei.dost.gov.ph/images/news/n451a.png" class="card_image">
                <div class="card_text">
                  <h2 class="title"> Honda, C&E Publishing, GBF invest in Young Filipino Innovators</h2>
                  <div class="summary">
                    Innovators will see more support from big players in the field of science, technology, and innovation as the Department of Science and Technology – Science Education...
                  </div>
                </div>
                <div class="card_footer">
                  <a href="https://nestedsoftware.com"></a>
                  <div class="reading_time">
                    14 March 2023
                  </div>
                </div>
              </a></div>
          </div>
        </div>
      </div>

      <div class="row" style="padding-top: 1247px">
        <div class="col-4">

          <div class="fancy_card" id="f7"><a href="https://www.sei.dost.gov.ph/index.php/news-archive/423-philippines-oldest-regional-science-centrum-just-got-revamped-dost-sei-nulab-bus-joins-the-fun" target="_blank">
              <img src="https://www.sei.dost.gov.ph/images/news/n456j.png" class="card_image">
              <div class="card_text">
                <h2 class="title"> Philippines’ oldest regional science centrum just got revamped, DOST-SEI NuLab bus joins the fun</h2>
                <div class="summary">
                  The BSTC, the first science centrum outside Metro Manila, officially reopened its doors to the public on March 16, and the excitement was amplified with the visit of the...
                </div>
              </div>
              <div class="card_footer">
                <a href="https://nestedsoftware.com"></a>
                <div class="reading_time">
                  20 April 2023
                </div>
              </div>
            </a></div>

          <div class="fancy_card" id="f8" style="padding-top: 50px"><a href="https://www.sei.dost.gov.ph/index.php/news-archive/419-a-package-of-hope-dost-s-bangon-marawi-scholarship-program" target="_blank">
              <img src="https://www.sei.dost.gov.ph/images/news/n453.jpg" class="card_image">
              <div class="card_text">
                <h2 class="title"> A Package of Hope: DOST’s Bangon Marawi Scholarship Program</h2>
                <div class="summary">
                  THE ROAD TO MARAWI isn’t filled with product advertisements or political posters, but with an unusual number of banners congratulating graduates and board passers. Even...
                </div>
              </div>
              <div class="card_footer">
                <a href="https://nestedsoftware.com"></a>
                <div class="reading_time">
                  12 April 2023
                </div>
              </div>
            </a></div>

          <div class="fancy_card" id="f9"><a href="https://www.sei.dost.gov.ph/index.php/news-archive/416-85-636-hopefuls-set-to-take-the-2023-dost-sei-scholarship-exam" target="_blank">
              <img src="https://www.sei.dost.gov.ph/images/news/n448.png" class="card_image">
              <div class="card_text">
                <h2 class="title">85,636 hopefuls set to take the 2023 DOST-SEI Scholarship Exam</h2>
                <div class="summary">
                  Some 85,636 incoming first-year college students by the Academic Year 2023-2024 hope to enter colleges and universities as scholars of the Department of Science and...
                </div>
              </div>
              <div class="card_footer">
                <a href="https://nestedsoftware.com"></a>
                <div class="reading_time">
                  12 April 2023
                </div>
              </div>
            </a></div>
        </div>
      </div>
    </div>
</body>

</html>