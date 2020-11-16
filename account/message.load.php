<?php 
	session_start();
	require_once "includes/dbh.acc.php";
	if (isset($_GET['lastmessage'])) {
    $department = $_SESSION['department'];
    $sql ="SELECT * FROM messages WHERE message_group = '$department'";
    $result = mysqli_query($conn, $sql);
    
    while ($message = mysqli_fetch_assoc($result)) {

		if($_SESSION['username'] == $message['message_sender_username']){
			if ($message['message_type'] == "text") {
            echo'
            <div class="sent-message">
				<div class="sent-message-content">
					<div class="sender">
						<div class="sender-image">
							<img src="'.$message['message_sender_image'].'" alt="sender" height="100%" width="100%">
						</div>
						<div class="sender-details">
							<div class="sender-name">
								<p>'.$message['message_sender_username'].'</p>
							</div>
							<div class="sender-school">
								<p>'.$message['university'].'</p>
							</div>
						</div>
					</div>
                    <div class="sender-message">
						<p>'.$message['message_content'].'</p>
						
					</div>
				</div>
                <div class="time"><span id="time-milli-'.$message['message_id'].'">0</span> <span id="rate-'.$message['message_id'].'">secs</span> ago</div>
                <script>
                    let time'.$message['message_id'].' = document.getElementById("time-milli-'.$message['message_id'].'");
                    let rate'.$message['message_id'].' = document.getElementById("rate-'.$message['message_id'].'");
                    let timeInMilli'.$message['message_id'].' = new Date().getTime() - new Date("'.$message['message_sent_time'].'").getTime();
                    console.log(timeInMilli'.$message['message_id'].')
                    let sec'.$message['message_id'].' = Math.floor(timeInMilli'.$message['message_id'].'/1000);
                    let min'.$message['message_id'].' = Math.floor(timeInMilli'.$message['message_id'].'/(1000*60));
                    let hrs'.$message['message_id'].' = Math.floor(timeInMilli'.$message['message_id'].'/(1000*60*60));
                    let days'.$message['message_id'].' = Math.floor(timeInMilli'.$message['message_id'].'/(1000*60*60*24));
                    if(sec'.$message['message_id'].' < 60){
						rate'.$message['message_id'].'.innerHTML = "secs"; 
                        time'.$message['message_id'].'.innerHTML = sec'.$message['message_id'].';
                    } else if(sec'.$message['message_id'].' > 60){
                        rate'.$message['message_id'].'.innerHTML = "mins"
                        time'.$message['message_id'].'.innerHTML = min'.$message['message_id'].';
                    } if (min'.$message['message_id'].' > 60) {
                        rate'.$message['message_id'].'.innerHTML = "hrs"; 
                        time'.$message['message_id'].'.innerHTML = hrs'.$message['message_id'].';
                    } if (hrs'.$message['message_id'].' > 24){
                        rate'.$message['message_id'].'.innerHTML = "days"; 
                        time'.$message['message_id'].'.innerHTML = days'.$message['message_id'].';
                    }


				</script>
				<input type="hidden" class="message-id" value="'.$message['message_id'].'">
			</div>
			';
			} else {
				echo'
            <div class="sent-message">
				<div class="sent-message-content">
					<div class="sender">
						<div class="sender-image">
							<img src="'.$message['message_sender_image'].'" alt="sender" height="100%" width="100%">
						</div>
						<div class="sender-details">
							<div class="sender-name">
								<p>'.$message['message_sender_username'].'</p>
							</div>
							<div class="sender-school">
								<p>'.$message['university'].'</p>
							</div>
						</div>
					</div>
                    <div class="sender-message sticker">
						<img src"'.$message['message_content'].'" height="100%" width="100%">
						
					</div>
				</div>
                <div class="time"><span id="time-milli-'.$message['message_id'].'">0</span> <span id="rate-'.$message['message_id'].'">secs</span> ago</div>
                <script>
                    let time'.$message['message_id'].' = document.getElementById("time-milli-'.$message['message_id'].'");
                    let rate'.$message['message_id'].' = document.getElementById("rate-'.$message['message_id'].'");
                    let timeInMilli'.$message['message_id'].' = new Date().getTime() - new Date("'.$message['message_sent_time'].'").getTime();
                    console.log(timeInMilli'.$message['message_id'].')
                    let sec'.$message['message_id'].' = Math.floor(timeInMilli'.$message['message_id'].'/1000);
                    let min'.$message['message_id'].' = Math.floor(timeInMilli'.$message['message_id'].'/(1000*60));
                    let hrs'.$message['message_id'].' = Math.floor(timeInMilli'.$message['message_id'].'/(1000*60*60));
                    let days'.$message['message_id'].' = Math.floor(timeInMilli'.$message['message_id'].'/(1000*60*60*24));
                    if(sec'.$message['message_id'].' < 60){
						rate'.$message['message_id'].'.innerHTML = "secs"; 
                        time'.$message['message_id'].'.innerHTML = sec'.$message['message_id'].';
                    } else if(sec'.$message['message_id'].' > 60){
                        rate'.$message['message_id'].'.innerHTML = "mins"
                        time'.$message['message_id'].'.innerHTML = min'.$message['message_id'].';
                    } if (min'.$message['message_id'].' > 60) {
                        rate'.$message['message_id'].'.innerHTML = "hrs"; 
                        time'.$message['message_id'].'.innerHTML = hrs'.$message['message_id'].';
                    } if (hrs'.$message['message_id'].' > 24){
                        rate'.$message['message_id'].'.innerHTML = "days"; 
                        time'.$message['message_id'].'.innerHTML = days'.$message['message_id'].';
                    }


				</script>
				<input type="hidden" class="message-id" value="'.$message['message_id'].'">
			</div>
			';
			}
        } else {
			if ($message['message_type'] == "text") {
			echo'
			<div class="received-message">
			<div class="received-message-content">
				<div class="received">
					<div class="received-image">
						<img src="'.$message['message_sender_image'].'" alt="" height="100%" width="100%">
					</div>
					<div class="received-details">
						<div class="received-name">
							<p>'.$message['message_sender_username'].'</p>
						</div>
						<div class="received-university">
							<p>'.$message['university'].'
							</p>
						</div>
					</div>
				</div>
				<div class="received-message-text">
				<p>'.$message['message_content'].'</p>
						
				</div>
			</div>
			<div class="time"><span id="time-milli-'.$message['message_id'].'">0</span> <span id="rate-'.$message['message_id'].'">secs</span> ago</div>
			<script>
				let time'.$message['message_id'].' = document.getElementById("time-milli-'.$message['message_id'].'");
				let rate'.$message['message_id'].' = document.getElementById("rate-'.$message['message_id'].'");
				let timeInMilli'.$message['message_id'].' = new Date().getTime() - new Date("'.$message['message_sent_time'].'").getTime();
				console.log(timeInMilli'.$message['message_id'].')
				let sec'.$message['message_id'].' = Math.floor(timeInMilli'.$message['message_id'].'/1000);
				let min'.$message['message_id'].' = Math.floor(timeInMilli'.$message['message_id'].'/(1000*60));
				let hrs'.$message['message_id'].' = Math.floor(timeInMilli'.$message['message_id'].'/(1000*60*60));
				let days'.$message['message_id'].' = Math.floor(timeInMilli'.$message['message_id'].'/(1000*60*60*24));
				if(sec'.$message['message_id'].' < 60){
					rate'.$message['message_id'].'.innerHTML = "secs"; 
					time'.$message['message_id'].'.innerHTML = sec'.$message['message_id'].';
				} else if(sec'.$message['message_id'].' > 60){
					rate'.$message['message_id'].'.innerHTML = "mins"
					time'.$message['message_id'].'.innerHTML = min'.$message['message_id'].';
				} if (min'.$message['message_id'].' > 60) {
					rate'.$message['message_id'].'.innerHTML = "hrs"; 
					time'.$message['message_id'].'.innerHTML = hrs'.$message['message_id'].';
				} if (hrs'.$message['message_id'].' > 24){
					rate'.$message['message_id'].'.innerHTML = "days"; 
					time'.$message['message_id'].'.innerHTML = days'.$message['message_id'].';
				}


			</script>
			<input type="hidden" class="message-id" value="'.$message['message_id'].'">
		</div>
			';
			} else {
				echo '
				<div class="received-message">
			<div class="received-message-content">
				<div class="received">
					<div class="received-image">
						<img src="'.$message['message_sender_image'].'" alt="" height="100%" width="100%">
					</div>
					<div class="received-details">
						<div class="received-name">
							<p>'.$message['message_sender_username'].'</p>
						</div>
						<div class="received-university">
							<p>'.$message['university'].'
							</p>
						</div>
					</div>
				</div>
				<div class="received-message-text sticker">
				<img src"'.$message['message_content'].'" height="100%" width="100%">
						
				</div>
			</div>
			<div class="time"><span id="time-milli-'.$message['message_id'].'">0</span> <span id="rate-'.$message['message_id'].'">secs</span> ago</div>
			<script>
				let time'.$message['message_id'].' = document.getElementById("time-milli-'.$message['message_id'].'");
				let rate'.$message['message_id'].' = document.getElementById("rate-'.$message['message_id'].'");
				let timeInMilli'.$message['message_id'].' = new Date().getTime() - new Date("'.$message['message_sent_time'].'").getTime();
				console.log(timeInMilli'.$message['message_id'].')
				let sec'.$message['message_id'].' = Math.floor(timeInMilli'.$message['message_id'].'/1000);
				let min'.$message['message_id'].' = Math.floor(timeInMilli'.$message['message_id'].'/(1000*60));
				let hrs'.$message['message_id'].' = Math.floor(timeInMilli'.$message['message_id'].'/(1000*60*60));
				let days'.$message['message_id'].' = Math.floor(timeInMilli'.$message['message_id'].'/(1000*60*60*24));
				if(sec'.$message['message_id'].' < 60){
					rate'.$message['message_id'].'.innerHTML = "secs"; 
					time'.$message['message_id'].'.innerHTML = sec'.$message['message_id'].';
				} else if(sec'.$message['message_id'].' > 60){
					rate'.$message['message_id'].'.innerHTML = "mins"
					time'.$message['message_id'].'.innerHTML = min'.$message['message_id'].';
				} if (min'.$message['message_id'].' > 60) {
					rate'.$message['message_id'].'.innerHTML = "hrs"; 
					time'.$message['message_id'].'.innerHTML = hrs'.$message['message_id'].';
				} if (hrs'.$message['message_id'].' > 24){
					rate'.$message['message_id'].'.innerHTML = "days"; 
					time'.$message['message_id'].'.innerHTML = days'.$message['message_id'].';
				}


			</script>
			<input type="hidden" class="message-id" value="'.$message['message_id'].'">
		</div>
				';
			}
		}	
    }
}
            
			


			


			
			
			?>