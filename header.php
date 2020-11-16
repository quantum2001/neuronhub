
<?php
session_start();

if (isset($_SESSION['user_id'])){
	echo "<h1>Can't Access this page</h1><br><h3>You are already signed in as". $_SESSION['user_display_name'] ."</h3>";
} else {
echo '
<!DOCTYPE html>
<html>
<head>
	<title>'.$title.'</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="icon" type="image/png" href="#">
	<link href="https://fonts.googleapis.com/css?family=ABeeZee" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="head">
		<div class="header-container" id="header">
			<div class="logo"><h2><a href="index.php" >NEURONHub<a></h2><small><p>Where students are connected...</p></small></div>
			<hr>
			<div class="header-nav">
				<p style="margin-left:10px;">Join Today</p>
				<div class="user-details">
					<div class="signing">
						<a href="login"><button class="login-button">Login</button></a>
						<a href="register"><button class="register-button">Register</button></a>
					</div>
				</div>
			</div>
		</div>


		<div class="nav" id="nav">
			<div class="header">
				<h3><a href="index.php">NEURONHub</a></h3>
			</div>
				<p style="margin-left:5px; color: #111;">Join Today</p>
			<div class="user-details">
				<div class="signing">
					<a href="login"><button class="login-button">Login</button></a>
					<a href="register"><button class="register-button">Register</button></a>
				</div>
			</div>
		</div>
	</div>';
	}
?>
