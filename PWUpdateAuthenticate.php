<?php
require_once "CRUDConfig.php";
session_start();
// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'dost';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    // If there is an error with the connection, stop the script and display the error.
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if (!isset($_POST['email'], $_POST['password'])) {
    // Could not get the data that should have been sent.
    exit('Please fill all the required fields!');
}

if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE email = ?')) {
    // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
    $stmt->bind_param('s', $_POST['email']);
    $stmt->execute();
    // Store the result so we can check if the account exists in the database.
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();
        // Account exists, now we verify the password.
        // Note: remember to use password_hash in your registration file to store the hashed passwords.
        if (MD5(password_verify($_POST['password'], $password))) {
            if ($_POST['newPW'] === $_POST['repeatNewPW']) {
                // Verification success! User has logged-in!
                // Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
                session_regenerate_id();
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['name'] = $_POST['email'];
                $_SESSION['id'] = $id;

                $updatequery = "UPDATE accounts SET password = '$_POST[newPW]' WHERE id='$id'";
                // Execute insert query
                $uquery = mysqli_query($mysqli, $updatequery);

                header('Location: profile.php');
            } else {
?>

                <div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog" id="modalSheet">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content rounded-4 shadow">
                            <div class="modal-header border-bottom-0">
                                <h1 class="modal-title fs-5">ERROR</h1>
                            </div>
                            <div class="modal-body py-0">
                                <p>New and Repeated Passwords do not match!</p>
                            </div>
                            <div class="modal-footer flex-column align-items-stretch w-100 gap-2 pb-3 border-top-0">
                                <a href="PWUpdate.html"> <button type="button" class="btn btn-lg btn-primary">Go back</button></a>
                            </div>
                        </div>
                    </div>
                </div>

        <?php
            }
        } else {
            // Incorrect password
            header('Location: ErrorPassword.php');
        }
    } else {
        // Incorrect username
        ?>

        <div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog" id="modalSheet">
            <div class="modal-dialog" role="document">
                <div class="modal-content rounded-4 shadow">
                    <div class="modal-header border-bottom-0">
                        <h1 class="modal-title fs-5">ERROR</h1>
                    </div>
                    <div class="modal-body py-0">
                        <p>Incorrect Username</p>
                    </div>
                    <div class="modal-footer flex-column align-items-stretch w-100 gap-2 pb-3 border-top-0">
                        <a href="indexLogin.html"> <button type="button" class="btn btn-lg btn-primary">Go back</button></a>
                    </div>
                </div>
            </div>
        </div>

<?php
    }

    $stmt->close();
}
