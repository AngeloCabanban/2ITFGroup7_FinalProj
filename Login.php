<?php

$is_invalid = false;

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $mysqli = require __DIR__ . "/Group6_Connect.php";

    $sql = sprintf("SELECT * FROM users WHERE email = '%s'",
            $mysqli->real_escape_string($_POST['email']));
            $result = $mysqli->query($sql);
            $user = $result->fetch_assoc();
            
            if($user){
                
                if(password_verify($_POST['password'], $user['hash_password'])){
                    
                    session_start();   
                    
                    session_regenerate_id();
                    
                    $_SESSION['id'] = $user['id'];

                    header("Location: Group6_Home.php");
                    exit;
                }

            }

            $is_invalid = true;

}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Wavefarers - Sign in</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
        <style type = "text/css">
            .form-floating {margin: 0 auto; float: none;}
        </style>

    </head>

    <body class="text-center">
    
        <div class="container-fluid">
            <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
                <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                    <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                    <span class="fs-4" style = "font: Ebrima;"><img src = "images/Wavefarers_Logo.png" alt="WFLogo" width="50" height="50"></span>
                    <span class="fs-4" style = "font: Ebrima;"><img src = "images/Wavefarers_Name.png" alt="WFName" width="300" height="50"></span>
                </a>
            </header>
        </div>

        <main class="form-signin w-100 m-auto">
            <!-- <form method = "POST" action = "<?php echo $_SERVER['PHP_SELF']; ?>"> -->
            <form method = "post">
                <img class="mb-4" src="images/Wavefarers_logo.png" alt="" width="75" height="75">
                <h1 class="h3 mb-3 fw-normal">SIGN IN</h1>

                <?php if($is_invalid): ?>
                    <p style = "color: red"><em>Invalid Sign in attempt.</em></p>
                <?php endif; ?>

                <div class="form-floating col-md-3 col-md-offset-3">
                    <input type="text" name = "username" class="form-control" id="floatingInput" placeholder="name@example.com" value = "<?= htmlspecialchars($_POST["username"] ?? "") ?>">
                    <label for="floatingInput">Username</label>
                </div>

                <div class="form-floating col-md-3 col-md-offset-3">
                    <input type="email" name = "email" class="form-control" id="floatingInput" placeholder="name@example.com" value = "<?= htmlspecialchars($_POST["email"] ?? "") ?>">
                    <label for="floatingInput">Email address</label>
                </div>

                <div class="form-floating col-md-3">
                    <input type="password" name = "password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>

                <?php if($is_invalid): ?>
                    <br><p style = "color: red; font-size: x-small"><em>Check if the information you have provided is correct.</em></p>
                <?php endif; ?>

                <div class="checkbox mb-3">
                </div>

                <button class="w-25 btn btn-lg btn-primary" name = "submit" type="submit">Sign in</button>
                <p class="mt-5 mb-3 text-muted">© 2022 - 2023</p>
            </form>
        </main>
    </body>
</html>