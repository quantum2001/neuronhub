<?php
	$title = "Chat";
	require_once "header.acc.php";
	require_once "includes/dbh.acc.php";

?>
<div class="sent">sent</div>
<div class="not-sent">not sent</div>

<div class="chat-container">
	<div class="chat-messages" id="chat-messages">

		<div class="chat-heading">
			<h3><span>Physics</span> Students Nigeria</h3>
		</div>

		<div id="message-container">

			//
			//

		</div>

		
	</div>
</div>


	<div class="message-opener" onclick="showMessage()">
		<i class="fa fa-comment"></i>
	</div>

		<!-- message container -->

	<div class="send-message">
		<form method="post" >
			<div class="message-container">
				<div class="message-box">
					<input type="text" name="message" autocomplete="off" onkeyup="showSend()" placeholder="Message" id="chat-message-box">
				</div>
				<div class="emoji" onclick="showEmoji()">
					<i class="fa fa-smile-o"></i>
				</div>
				<input type="hidden" name="name" value="<?php echo $_SESSION['username'] ?>">
				<input type="hidden" name="university" value="<?php echo $_SESSION['university'] ?>">
				<input type="hidden" name="image" value="<?php echo $_SESSION['image'] ?>">
				<input type="hidden" name="department" value="<?php echo $_SESSION['department'] ?>">
				
				<div class="send">
					<button type="button" id="send-button" onclick="sendMessage()">
						<i class="fa fa-send"></i>
					</button>
				</div>
			</div>
		</form>
		<div class="return-message-box" onclick="hideMessage()">
			<i class="fa fa-chevron-down"></i>
		</div>
	</div>

	<!-- Emoji container -->

	<div class="emoji-container">
		<div class="emojis">
			<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
				<div class="emo-container">
					<button class="emo" type="submit" name="like"><div class="emo-anime"><img src="../emoji/like.jpg" height="100%" width="100%"></div></button>
					<div class="emo-text">Like</div>
				</div>

				<div class="emo-container">
					<button class="emo" type="submit" name="happy"><div class="emo-anime"><img src="../emoji/happy.jpg" height="100%" width="100%"></div></button>
					<div class="emo-text">Happy</div>
				</div>

				<div class="emo-container">
					<button class="emo" type="submit" name="angry"><div class="emo-anime"><img src="../emoji/angry.jpg" height="100%" width="100%"></div></button>
					<div class="emo-text">Angry</div>
				</div>

				<div class="emo-container">
					<button class="emo" type="submit" name="wow"><div class="emo-anime"><img src="../emoji/wow.jpg" height="100%" width="100%"></div></button>
					<div class="emo-text">Wow</div>
				</div>

				<div class="emo-container">
					<button class="emo" type="submit" name="panic"><div class="emo-anime"><img src="../emoji/panic.jpg" height="100%" width="100%"></div></button>
					<div class="emo-text">Panic</div>
				</div>

				<div class="emo-container">
					<button class="emo" type="submit" name="headache"><div class="emo-anime"><img src="../emoji/headache.jpg" height="100%" width="100%"></div></button>
					<div class="emo-text">Headache</div>
				</div>

			</form>
		</div>
	
	</div>

<script src="accountjs/chat.js"></script>

<?php
	require_once "footer.acc.php";
 ?>