<?php
require_once "CRUDConfig.php";

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <title>Upload Documents</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

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
    
    <?php

            $select = "SELECT * FROM gratitude_letter WHERE email = '$_SESSION[name]'";

            if ($result = $mysqli->query($select)) {
                if ($result->num_rows > 0) {
                    $row = $result->fetch_object();
                    $pdf = $row->gl_pdf;
                    $path = $row->directory;
                    $file = $path . $pdf;
                }

                echo '<h1>Gratitude Letter to the Foundation</h1>';
                echo '<strong>File Name : </strong>' . $pdf;

            }

    ?>

    <br /><br />
    <iframe src="<?php echo $path . $pdf; ?>" width="90%" height="500px"></iframe>
    <p><a href="requirements.php" class="btn btn-primary">Return</a></p>
</body>

</html>