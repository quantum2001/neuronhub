<?php
	$title = "Profile";
	require_once "header.acc.php";
	include_once "includes/component/item.com.php";
?>

<div class="profile-container">
	<div class="profile-image">
		<img src="../images/group.jpeg" height="100%" width="100%">
	</div>
	<div class="profile-user-details">
		<h2><?php echo $_SESSION['username']?></h2>
		<div class="university">
			<div class="detail-icon"><i class="fa fa-university"></i></div><p><?php echo $_SESSION['university'] ?></p>
		</div>
		<div class="details-arrange">
			<div class="user-detail"><div class="detail-icon"><i class="fa fa-user"></i></div><p><?php echo $_SESSION['firstname'] . " " . $_SESSION['lastname']?></p></div>
			<div class="user-detail"><div class="detail-icon"><i class="fa fa-id-card"></i></div><p><?php echo $_SESSION['department'] ?></p></div>
		</div>
		<div class="details-arrange">
			<div class="user-detail"><div class="detail-icon"><i class="fa fa-vcard-o"></i></div><p><?php echo $_SESSION['address']?> </p></div>
			<div class="user-detail"><div class="detail-icon"><i class="fa fa-phone"></i></div><p>  <?php echo $_SESSION['phone_no']?></p></div>
		</div>
		<div class="details-arrange">
			<div class="user-detail"><div class="detail-icon"><i class="fa fa-envelope"></i></div><p><?php echo $_SESSION['email']?></p></div>
		</div>
	</div>
	<div class="edit-profile-container"><button class="edit-profile">Edit Profile <i class="fa fa-edit"></i></button></div>

	<h3 class="item-header">Items you want to sell</h3>
	<div class="profile-list-of-item">
		<?php 
		
		accountItem('University Physics Textbook', '../images/group.jpeg', '4500', 'New'); 
		accountItem('University Physics Textbook', '../images/group.jpeg', '4500', 'New');
		accountItem('University Physics Textbook', '../images/group.jpeg', '4500', 'New');
		
		?>
		
	</div>
	<div class="add-to-mart-container">
	<button class="add-item-to-mart">Sell an item <i class="fa fa-money"></i></button>
	</div>
</div>

<?php
	require_once "footer.acc.php";
?>