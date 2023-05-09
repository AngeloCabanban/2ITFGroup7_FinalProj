<?php
require_once "CRUDConfig.php";
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Update Registration Form</h2>
                    <p>Please type in your Email Address and upload your Registration Form in PDF file format.</p>

                    <form method="post" enctype="multipart/form-data">
                        <?php

                        if (isset($_POST['submit'])) {

                            $email = $_POST['emailreq'];

                            if ($stmt = $mysqli->prepare('SELECT id, password FROM accounts WHERE email = ?')) {
                                // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
                                $stmt->bind_param('s', $_POST['emailreq']);
                                $stmt->execute();
                                $stmt->store_result();  // Store the result so we can check if the account exists in the database.

                                if ($stmt->num_rows > 0) {

                                    $stmt->bind_result($id, $password);
                                    $stmt->fetch();

                                    $rf = $_FILES['rf_pdf']['type'];
                                    if (isset($_FILES['rf_pdf']['name']) && $rf == 'application/pdf') {

                                            $file_name = $_FILES['rf_pdf']['name'];
                                            $file_tmp = $_FILES['rf_pdf']['tmp_name'];
                                            // Move the uploaded pdf file into the pdf folder
                                            move_uploaded_file($file_tmp, "./registration_form/" . $file_name);
                                            // Insert the submitted data from the form into the table
                                            $insertquery = "UPDATE registration_form SET email='$email', directory='/2ITFGroup7_FinalProj/registration_form/', rf_pdf='$file_name', status='PENDING' WHERE id='$id'";
                                            // Execute insert query
                                            $iquery = mysqli_query($mysqli, $insertquery);
                                        // }

                                        if ($iquery) {
                                            header("Location: requirements.php");
                        ?>

                                        <?php

                                        } else {
                                        ?>
                                            <div class="alert alert-danger alert-dismissible fade show text-center">
                                                <a class="close" data-dismiss="alert" aria-label="close">
                                                    ×
                                                </a>
                                                <strong>Failed!</strong> Try Again!
                                            </div>
                                        <?php
                                        }
                                    } else {
                                        ?>
                                        <div class="alert alert-danger alert-dismissible fade show text-center">
                                            <a class="close" data-dismiss="alert" aria-label="close">
                                                ×
                                            </a>
                                            <strong>Upload Failed!</strong> Your Transcript of Records must be uploaded in PDF format!
                                        </div>
                                    <?php
                                    }
                                } else {
                                    ?>
                                    <div class="alert alert-danger alert-dismissible fade show text-center">
                                        <a class="close" data-dismiss="alert" aria-label="close">
                                            ×
                                        </a>
                                        <strong>No Match Found!</strong> Your Email Address does not match with any record!
                                    </div>
                        <?php
                                }
                            }
                        } // end if
                        ?>

                        <div class="form-input py-2">
                            <div class="form-group">
                                <strong>DOST-SEI Scholar Email Address</strong>
                                <input type="text" class="form-control" placeholder="Email" name="emailreq" required>
                            </div>
                            <strong>Upload Registration Form</strong>
                            <div class="form-group">
                                <input type="file" name="rf_pdf" class="form-control" accept=".pdf" required />
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btnRegister" name="submit" value="Submit">
                            </div>
                        </div>
                        <?php
                        // Close connection
                        // $stmt->close();
                        $mysqli->close();
                        ?>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- 
SQL Code - Reset Auto-Increment:
SET @autoid :=0;
UPDATE terminal_report_form set id = @autoid := (@autoid + 1);
ALTER TABLE terminal_report_form AUTO_INCREMENT = 1;  
-->

</body>

</html>