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
		<h4><?php echo $_SESSION['name']; ?></h4>
		<p>
			<br>- Forms
			<br>- Requires Database Connection*
			<br>- CRUD Integration
			<br>
			<br>*Create corresponding Database (Document steps of Database Creation, including Structure, etc.)
		</p>
	</div>

	<form method="POST">
		<div class="wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="mt-5 mb-3 clearfix">
							<h2 class="pull-left">Submissions</h2>

							<?php
							$sql1 = "SELECT id FROM transcript_of_records";
							$sql2 = "SELECT id FROM terminal_report_form";
							$sql3 = "SELECT id FROM registration_form";
							$sql4 = "SELECT id FROM gratitude_letter";

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
													<?php
													echo "<td>" . $row['tor_pdf'] . "</td>";
													echo "<td>" . $row['status'] . "</td>";
													?>
													<td>
														<?php
														echo '<a href="CRUDReadTOR.php?id=' . $row['tor_pdf'] . '" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
														echo '<a href="CRUDUpdateTOR.php?id=' . $row['id'] . '" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
														?>
													</td>
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
											$row = $result->fetch_array()
											?>
											<tr>
												<?php
												echo "<td>" . $row['trf_pdf'] . "</td>";
												echo "<td>" . $row['status'] . "</td>";
												?>
												<td>
													<?php
													echo '<a href="CRUDReadTRF.php?id=' . $row['id'] . '" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
													echo '<a href="CRUDUpdateTRF.php?id=' . $row['id'] . '" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
													?>
												</td>
											</tr>
									<?php
									echo "</tbody>";
									echo "</table>";
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
											$row = $result->fetch_array()
											?>
											<tr>
												<?php
												echo "<td>" . $row['rf_pdf'] . "</td>";
												echo "<td>" . $row['status'] . "</td>";
												?>
												<td>
													<?php
													echo '<a href="CRUDReadRF.php?id=' . $row['id'] . '" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
													echo '<a href="CRUDUpdateRF.php?id=' . $row['id'] . '" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
													?>
												</td>
											</tr>
									<?php
									echo "</tbody>";
									echo "</table>";
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
											$row = $result->fetch_array()
											?>
											<tr>
												<?php
												echo "<td>" . $row['gl_pdf'] . "</td>";
												echo "<td>" . $row['status'] . "</td>";
												?>
												<td>
													<?php
													echo '<a href="CRUDReadGL.php?id=' . $row['id'] . '" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
													echo '<a href="CRUDUpdateGL.php?id=' . $row['id'] . '" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
													?>
												</td>
											</tr>
									<?php
									echo "</tbody>";
									echo "</table>";
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

					</div>
				</div>
			</div>
		</div>
	</form>

</body>

</html>