 <?php 
 	session_start();
 if(!isset($_SESSION['id'])){
	header('Location: ../login');
 }
 ?>

 <!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="#">
	<link rel="stylesheet" type="text/css" href="accountcss/account.css">
	<link rel="stylesheet" type="text/css" href="accountcss/chat.css">
	<link href="https://fonts.googleapis.com/css?family=ABeeZee" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
	<header>
		<div class="nav">
			<div class="nav-logo">
				N
			</div>
			<div class="nav-icon-list" id="nav-icon-list">
				<div class="nav-icon " title="Nigeria Student News">
					<a href="home.php" class="<?php if($title == "Home"){ echo "nav-icon-active";} else { echo "";} ?>"><i class="fa fa-newspaper-o"></i></a>
				</div>
				<div class="nav-icon" title="Profile">
					<a href="profile.php" class="<?php if($title == "Profile"){ echo "nav-icon-active";} else { echo "";} ?>"><i class="fa fa-user"></i></a>
				</div>
				<div class="nav-icon" title="Physics Chat">
					<a href="chat.php" class="<?php if($title == "Chat"){ echo "nav-icon-active";} else { echo "";} ?>"><i class="fa fa-comments-o"></i></a>
				</div>
				<div class="nav-icon" title="Mart">
					<a href="#" class="<?php if($title == "Mart"){ echo "nav-icon-active";} else { echo "";} ?>"><i class="fa fa-shopping-cart"></i></a>
				</div>
				<div class="nav-icon" title="Search">
					<a href="#" class="<?php if($title == "Search"){ echo "nav-icon-active";} else { echo "";} ?>"><i class="fa fa-search"></i></a>
				</div>
				<div class="nav-slide-button" title="Menu" >
					<i class="fa fa-navicon" onclick="toogleSlide()"></i>
				</div>
			</div>
		</div>

		<div class="slide-menu" id="slide-menu">
			<div class="slide-user">
				<div class="slide-profile-image">
					<img src="../images/buysell.jpg" height="100%" width="100%" >
				</div>
				<div class="slide-username">
					<p><?php echo $_SESSION["username"]; ?></p>
				</div>
				<div class="slide-department">
					<p><?php echo $_SESSION["department"]; ?></p>
				</div>

			</div>
			<div class="slide-actions">
				<div class="actions"><p>View Profile</p></div>
				<div class="actions"><p>Upload</p></div>
				<div class="actions"><p>Download</p></div>
				<div class="slide-logout">
					<form action="logout.php" method="post">
						<button type="submit" name="logout">Logout</button>
					</form>
				</div>
			</div>
		</div>

	</header>
	<script>
		function toogleSlide(){
			let nav = document.getElementById("slide-menu");

			if(nav.style.display == "block"){
				nav.style.display = "none";
			} else {
				nav.style.display = "block";
			}
		}
	</script>