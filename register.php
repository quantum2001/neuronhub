
<?php 
	include_once "includes/dbh.php";

	$title = "Register";

	$firstname = "";
	$lastname = "";
	$username= "";
	$email = "";
	$university = "";
	$phoneno = "";
	$address = "";

	require_once "header.php";

if (isset($_SESSION['user_id'])) {
	echo "";
} else {

	if (isset($_GET['error'])) {
		if($_GET['error'] == "usernametaken"){
			echo '<h2 style="color:red; text-align:center;">Username Taken</h2>';
		} else if($_GET['error'] == "passworddoesnotmatch") {
			echo '<h2 style="color:red; text-align:center;">Password Does Not Match</h2>';
		} else {
			echo '<h2 style="color:red; text-align:center;">Email Taken</h2>';
		}
	}

	echo '

 
<div class="form">
	<form action="includes/register.inc.php" method="post">
		<h3 style="text-align: center; color: black;">Registration</h3>
		<br>
		
		<div class="reg-input-list">
		<label>Firstname</label><br>
		<input onkeyup="checkInput(this)" type="text" name="firstname" class="register-input" value="'.$firstname .'" placeholder="Firstname" pattern="^[a-zA-Z]{2,}$" required>
		<label id="firstname" style="color: red; font-size: 12px;"></label>
		</div>

		<div class="reg-input-list">
		<label>Lastname</label><br>
		<input onkeyup="checkInput(this)" type="text" name="lastname" class="register-input" value="' . $lastname . '" placeholder="Lastname" pattern="^[a-zA-Z]{2,}$" required>
		<label id="lastname" style="color: red; font-size: 12px;"></label>
		</div>

		<div class="reg-input-list">
		<label>Username</label><br>
		<input onkeyup="checkInput(this)" type="text" name="username" class="register-input" value="' . $username . '" placeholder="Username" pattern="^[a-zA-Z0-9]{2,}$" title="Username should be atleast 2" required>
		<label id="username" style="color: red; font-size: 12px;">
		</div>

		<div class="reg-input-list">
		<label>Email</label><br>
		<input onkeyup="checkInput(this)" type="email" name="email" class="register-input" value="' . $email . '" placeholder="Email" required>
		<label id="email" style="color: red; font-size: 12px;">
		</div>

		<div class="reg-input-list">
		<label>University</label><br>
		<input onkeyup="checkInput(this)" type="text" name="university" class="register-input" value="' . $university . '" placeholder="University" pattern="^[a-zA-Z,.\s]{2,}$" required>
		<label id="university" style="color: red; font-size: 12px;">
		</div>

		<div class="reg-input-list">
		<label>Department</label><br>
		<select name="department" class="register-input">
		<option value="Physics">Physics</option>
		<option value="Mathematics">Mathematics</option>
		<option value="Chemistry">Chemistry</option>
		<option value="Biology">Biology</option>
		<option value="Biochem">Biochem</option>
		<option value="Mechanical Eng.">Mechanical Eng.</option>
		<option value="Chemical Eng.">Chemical Eng.</option>
		<option value="Architechure">Architechure</option>
		<option value="Medicine and Surgery">Medicine and Surgery</option>
		<option value="ITE">ITE</option>
		<option value="Geography">Geography</option>
		<option value="Geology">Geology</option>
		<option value="Computer Eng.">Computer Eng.</option>
		<option value="Civil Eng.">Civil Eng.</option>
		<option value="Software Eng.">Software Eng.</option>
		<option value="Law">Law</option>
		<option value="Accounting">Accounting</option>
		<option value="Marine Eng.">Marine Eng.</option>
		<option value="Telecom Eng.">Telecom Eng.</option>
		<option value="Elect Elect">Elect Elect</option>
		<option value="Cyber Security">Cyber Security</option>
		</select>
		</div>

		<div class="reg-input-list">
		<label>Phone No</label><br>
		<input onkeyup="checkInput(this)" type="text" name="phone" class="register-input" value="' . $phoneno . '" placeholder="Phone No" pattern="^[\d]{11,}$" title="Phone no should have atleast 11 characters.  Numbers only" required>
		<label id="phone" style="color: red; font-size: 12px;"></label>
		</div>

		<div class="reg-input-list">
		<label>Address</label><br>
		<input onkeyup="checkInput(this)" type="text" name="address" class="register-input" value="' . $address . '" placeholder="Address" pattern="^[a-zA-Z\d\s\.\,]{11,}$" title="" required>
		<label id="phone" style="color: red; font-size: 12px;"></label>
		</div>

		<div class="reg-input-list">
		<label>Password</label><br>
		<input type="password" name="password" id="password" class="register-input" placeholder="Password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$" onkeyup="checkPassword()" required>
		<label id="passerror" style="color: red; font-size: 12px;"></label>
		<label id="passok" style="color: green; font-size: 12px;"></label><br>
		<label style="color: green; font-size: 12px;">Password must: <br>be atleast 8 characters <br>have atleast 1 uppercase <br>have atleast 1 lowercase </label>
		</div>

		<div class="reg-input-list">
		<label> Confirm Password</label><br>
		<input type="password" name="confirm-password" id="confirm-password" class="register-input" placeholder="Confirm Password" required>
		<label id="pass-match" style="color: red; font-size: 12px;"></label>
		<label id="pass-match-ok" style="color: green; font-size: 12px;"></label>
		</div>
		<button type="submit" name="register">Register</button>

		<p style="color: #222; text-align: center; margin-top: 20px"><small>Already have an account click <a href="login" style="color: #777;">here</a></small></p>
	
	</form>
</div>
<script>
	function checkPassword(){
	var password = document.getElementById("password");
	if (!password.checkValidity()) {
		document.getElementById("passok").innerHTML = "";
		document.getElementById("passerror").innerHTML = "&#x2718; " + password.validationMessage;
	} else {
		document.getElementById("passerror").innerHTML = "";
		document.getElementById("passok").innerHTML = "&#x2714; Password OK";
	}
}
/* password 

confirmation

*/
var firstPassword = document.getElementById("password");
var secondPassword = document.getElementById("confirm-password");


secondPassword.addEventListener("keyup", function (){

	if (firstPassword.value != secondPassword.value){
		document.getElementById("pass-match-ok").innerHTML = "";
		document.getElementById("pass-match").innerHTML = "&#x2718; Password does not match";
	} else {
		document.getElementById("pass-match-ok").innerHTML = "&#x2714; Password match";
		document.getElementById("pass-match").innerHTML = "";
	}
})

</script>';

	require_once "footer.php";
}

?>