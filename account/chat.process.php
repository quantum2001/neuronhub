<?php 
	require_once "includes/dbh.acc.php";

	if(isset($_GET['message'])){
		$username = $_GET['name'];
		$image = $_GET['image'];
		$department = $_GET['department'];
        $university = $_GET['university'];
        $message = $_GET['message'];

		$sql = "INSERT INTO messages (
    		message_sender_username,
    		message_group,
			message_sender_image,
			message_type,
            message_content,
			university
		) VALUES (
			'$username',
			'$department',
			'$image',
			'text',
            '$message',
			'$university'
		)";
		
        if(mysqli_query($conn, $sql)){
            echo "sent";
        } else {
            echo "not sent";
        };
	}