<?php 
include_once "includes/dbh.php";

$title = "NeuronHub";

require_once "header.php";

if (isset($_SESSION['user_id'])) {
	echo "";
} else {

	echo '
 <div class="intro-1">
 	<div class="intro-content"><p>This is a place where you meet other students, share ideas, discuss etc. You will always be connected using this platform.</p></div>
 	<div class="intro-content-img"><img src="images/meet.jpg" height="100%" width="100%"></div>
 </div>

 <div class="intro-2">
 	<div class="intro-content-img"><img src="images/buysell.jpg" height="100%" width="100%"></div>
 	<div class="intro-content"><p>You can also buy and sell any school material such as handout and used textbook. you can also sell phones, shoes, clothes and so on.</p></div>
 </div>

 <div class="intro-1">
 	<div class="intro-content"><p>Uploading soft copy of school materials to support other student like you and downloading school materials uploaded by other student that are useful to you. </p></div>
 	<div class="intro-content-img"><img src="images/downupload.png" height="100%" width="100%"></div>
 </div>

 <div class="intro-2">
 	<div class="intro-content-img"><img src="images/group.jpeg" height="100%" width="100%"></div>
 	<div class="intro-content"><p>There are groups for each department in your school, where you pass latest information and update.</p></div>
 </div>

<a href="register"><button class="get-started">
	Get Started <span><i class="fa fa-arrow-right"></i></span>
</button></a>';
	require_once "footer.php";
}
 ?>