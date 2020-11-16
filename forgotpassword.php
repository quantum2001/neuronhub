
<?php 
	include_once "includes/dbh.php";

	$title = "Forgot Password";

    require_once "header.php";

if (isset($_SESSION['user_id'])) {
    echo "";
} else {
    echo bin2hex(random_bytes(16));

	echo '
<div class="form">
	<form action="forgotpassword.inc.php" method="post">
		<h3 style="text-align: center; color: black;">Forgot Password</h3>
		<br>
		
		<div class="reg-input-list">
		<label>Username/Email</label><br>
		<input onkeyup="checkInput(this)" type="text" name="username" class="register-input" placeholder="Username/Email" required>
		<label id="username" style="color: red; font-size: 12px;"></label>
		</div>

		<button type="submit" name="send">Send</button>

		<p style="color: #222; text-align: center; margin-top: 20px"><small>Don\'t have an account yet? Click <a href="register" style="color: #777;">here</a></small></p>
	
	</form>
</div>';

	require_once "footer.php";
}
?>