<?php
require_once "CRUDConfig.php";

if (isset($_POST['submit'])) {
    if ($_POST['newPW'] == $_POST['repeatNewPW']) {
        $password = $_POST['newPW'];

        $updatequery = "UPDATE accounts SET password='$password' WHERE email='$_SESSION[name]'";
        // Execute insert query
        $uquery = mysqli_query($mysqli, $updatequery);
        // }

        if ($uquery) {
            header("Location: profile.php");
        }
    } else {
        $pwNotMatched = "Passwords do not match!";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>

    <?php



    ?>
    <div class="login">
        <h1>Update Password</h1>
        <form method="post">
            <label for="newPW">
                <i class="fas fa-lock"></i>
            </label>
            <input type="password" name="password" placeholder="New Password" id="newPW" required>
            <label for="repeatNewPW">
                <i class="fas fa-lock"></i>
            </label>
            <input type="password" name="password" placeholder="Verify New Password" id="repeatNewPW" required>
            <input type="submit" value="Update Password">
        </form>
    </div>
</body>

</html>