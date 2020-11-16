

<?php 
	include_once "includes/dbh.php";

	$title = "Login";

	require_once "header.php";

if (isset($_SESSION['user_id'])) {
	echo "";
} else {
	if (isset($_GET['error'])) {
		if($_GET['error'] == "errorlogin"){
			echo '<h2 style="color:red; text-align:center;">Error Logging in</h2>';
		} 
	}

	echo '
<div class="form">
	<form action="includes/login.inc.php" method="POST">
		<h3 style="text-align: center; color: black;">Login</h3>
		<br>
		
		<div class="reg-input-list">
		<label>Username/Email</label><br>
		<input onkeyup="checkInput(this)" type="text" name="user" class="register-input" placeholder="Username/Email" required>
		<label id="username" style="color: red; font-size: 12px;"></label>
		</div>

		<div class="reg-input-list">
		<label>Password</label><br>
		<input onkeyup="checkInput(this)" type="password" name="password" class="register-input" placeholder="Password" required>
		<label id="password" style="color: red; font-size: 12px;"></label>
		</div>
		<p style="color: #222; margin: 20px 0"><small>Forgot Password? Click <a href="forgotpassword" style="color: #777;">here</a></small></p>

		<button type="submit" name="login">Sign in</button>

		<p style="color: #222; text-align: center; margin-top: 20px"><small>Don\'t have an account yet? Click <a href="register" style="color: #777;">here</a></small></p>
	
	</form>
</div>';

	require_once "footer.php";
}
?>