<?php
require_once "CRUDConfig.php";
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
	<title>Requirements Page</title>
	<link href="style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<style>
		.wrapper {
			width: 600px;
			margin: 0 auto;
		}

		table tr td:last-child {
			width: 120px;
		}
	</style>
	<!-- <script>
		$(document).ready(function() {
			$('[data-toggle="tooltip"]').tooltip();
		});
	</script> -->
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
		<h2>Requirements Page</h2>
		<div>
			<h3>Documents to be Submitted:</h3>
			<br>1. Transcript of Records
			<br>2. Terminal Report Form
			<br>3. CRUD Registration Form
			<br>4. Gratitude Letter to the Foundation
		</div>
	</div>

	<div class="wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="mt-5 mb-3 clearfix">
						<h2 class="pull-left">Submissions</h2>

						<?php
						$sql1 = "SELECT id FROM transcript_of_records WHERE email='$_SESSION[name]'";
						$sql2 = "SELECT id FROM terminal_report_form WHERE email='$_SESSION[name]'";
						$sql3 = "SELECT id FROM registration_form WHERE email='$_SESSION[name]'";
						$sql4 = "SELECT id FROM gratitude_letter WHERE email='$_SESSION[name]'";

						if ($result1 = $mysqli->query($sql1)) {
							if ($result2 = $mysqli->query($sql2)) {
								if ($result3 = $mysqli->query($sql3)) {
									if ($result4 = $mysqli->query($sql4)) {
										if ($result4->num_rows > 0) {
										} else {
						?>
											<a href="CRUDCreate.php" class="btn btn-success pull-right">
												<i class="fa fa-plus"></i> Upload Requirements
											</a>
						<?php
										}
									}
								}
							}
						}
						?>

					</div>

					<div name="tor_pdf">
						<?php

						$sql = "SELECT * FROM transcript_of_records WHERE email = '$_SESSION[name]'";

						if ($result = $mysqli->query($sql)) {
							if ($result->num_rows > 0) {
						?>
								<table class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>Transcript of Records</th>
											<th>Status</th>
										</tr>
									</thead>
									<tbody>
										<?php
										if ($_SESSION['name']) {
											$row = $result->fetch_array(MYSQLI_ASSOC);
										?>
											<tr>
												<form action="CRUDRead.php" method="POST">
													<td>
														<?php echo $row['tor_pdf']; ?>
														<input type="hidden" name="torInput" class="form-control"><?php $row['tor_pdf']; ?></input>
													</td>
													<td>
														<?php echo $row['status']; ?>
														<input type="hidden" name="torStatus" class="form-control"><?php $row['status']; ?></input>
													</td>
													<td>
														<button type="submit" name="readTOR" style="border:0; background:none"><i class="fa fa-eye"></i></button>
													</td>
												</form>
												<form action="CRUDUpdateTOR.php" method="POST">
													<td>
														<input type="hidden" name="torInput" class="form-control"><?php $row['tor_pdf']; ?></input>
														<input type="hidden" name="torStatus" class="form-control"><?php $row['status']; ?></input>
														<button type="submit" name="updateTOR" style="border:0; background:none"><i class="fa fa-pencil"></i></button>
													</td>
												</form>
											</tr>
								<?php
											echo "</tbody>";
											echo "</table>";
										}
										// Free result set
										$result->free();
									} else {
										// echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
									}
								} else {
									echo "Oops! Something went wrong. Please try again later.";
								}
								?>
					</div>

					<div name="trf_pdf">
						<?php
						// Attempt select query execution
						$sql = "SELECT * FROM terminal_report_form WHERE email = '$_SESSION[name]'";
						if ($result = $mysqli->query($sql)) {
							if ($result->num_rows > 0) {
						?>
								<table class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>Terminal Report Form</th>
											<th>Status</th>
										</tr>
									</thead>
									<tbody>
										<?php
										if ($_SESSION['name']) {
											$row = $result->fetch_array(MYSQLI_ASSOC);
										?>
											<tr>
												<form action="CRUDRead.php" method="POST">
													<td>
														<?php echo $row['trf_pdf']; ?>
														<input type="hidden" name="trfInput" class="form-control"><?php $row['trf_pdf']; ?></input>
													</td>
													<td>
														<?php echo $row['status']; ?>
														<input type="hidden" name="trfStatus" class="form-control"><?php $row['status']; ?></input>
													</td>
													<td>
														<button type="submit" name="readTRF" style="border:0; background:none"><i class="fa fa-eye"></i></button>
													</td>
												</form>
												<form action="CRUDUpdateTRF.php" method="POST">
													<td>
														<input type="hidden" name="trfInput" class="form-control"><?php $row['trf_pdf']; ?></input>
														<input type="hidden" name="trfStatus" class="form-control"><?php $row['status']; ?></input>
														<button type="submit" name="updateTRF" style="border:0; background:none"><i class="fa fa-pencil"></i></button>
													</td>
												</form>
											</tr>
								<?php
											echo "</tbody>";
											echo "</table>";
										}
										// Free result set
										$result->free();
									} else {
										// echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
									}
								} else {
									echo "Oops! Something went wrong. Please try again later.";
								}
								?>
					</div>

					<div name="rf_pdf">
						<?php
						// Attempt select query execution
						$sql = "SELECT * FROM registration_form WHERE email = '$_SESSION[name]'";
						if ($result = $mysqli->query($sql)) {
							if ($result->num_rows > 0) {
						?>
								<table class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>Registration Form</th>
											<th>Status</th>
										</tr>
									</thead>
									<tbody>
										<?php
										if ($_SESSION['name']) {
											$row = $result->fetch_array(MYSQLI_ASSOC);
										?>
											<tr>
												<form action="CRUDRead.php" method="POST">
													<td>
														<?php echo $row['rf_pdf']; ?>
														<input type="hidden" name="rfInput" class="form-control"><?php $row['rf_pdf']; ?></input>
													</td>
													<td>
														<?php echo $row['status']; ?>
														<input type="hidden" name="rfStatus" class="form-control"><?php $row['status']; ?></input>
													</td>
													<td>
														<button type="submit" name="readRF" style="border:0; background:none"><i class="fa fa-eye"></i></button>
													</td>
												</form>
												<form action="CRUDUpdateRF.php" method="POST">
													<td>
														<input type="hidden" name="rfInput" class="form-control"><?php $row['rf_pdf']; ?></input>
														<input type="hidden" name="rfStatus" class="form-control"><?php $row['status']; ?></input>
														<button type="submit" name="updateRF" style="border:0; background:none"><i class="fa fa-pencil"></i></button>
													</td>
												</form>
											</tr>
								<?php
											echo "</tbody>";
											echo "</table>";
										}
										// Free result set
										$result->free();
									} else {
										// echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
									}
								} else {
									echo "Oops! Something went wrong. Please try again later.";
								}
								?>
					</div>

					<div name="gl_pdf">
						<?php
						// Attempt select query execution
						$sql = "SELECT * FROM gratitude_letter WHERE email = '$_SESSION[name]'";
						if ($result = $mysqli->query($sql)) {
							if ($result->num_rows > 0) {
						?>
								<table class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>Gratitude Letter</th>
											<th>Status</th>
										</tr>
									</thead>
									<tbody>
										<?php
										if ($_SESSION['name']) {
											$row = $result->fetch_array(MYSQLI_ASSOC);
										?>
											<tr>
												<form action="CRUDRead.php" method="POST">
													<td>
														<?php echo $row['gl_pdf']; ?>
														<input type="hidden" name="glInput" class="form-control"><?php $row['gl_pdf']; ?></input>
													</td>
													<td>
														<?php echo $row['status']; ?>
														<input type="hidden" name="glStatus" class="form-control"><?php $row['status']; ?></input>
													</td>
													<td>
														<button type="submit" name="readGL" style="border:0; background:none"><i class="fa fa-eye"></i></button>
													</td>
												</form>
												<form action="CRUDUpdateGL.php" method="POST">
													<td>
														<input type="hidden" name="glInput" class="form-control"><?php $row['gl_pdf']; ?></input>
														<input type="hidden" name="glStatus" class="form-control"><?php $row['status']; ?></input>
														<button type="submit" name="updateGL" style="border:0; background:none"><i class="fa fa-pencil"></i></button>
													</td>
												</form>
											</tr>
								<?php
											echo "</tbody>";
											echo "</table>";
										}
										// Free result set
										$result->free();
									} else {
										// echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
									}
								} else {
									echo "Oops! Something went wrong. Please try again later.";
								}
								// Close connection
								$mysqli->close();
								?>
					</div>
					<br><br><br>

				</div>
			</div>
		</div>
	</div>

</body>

</html>