<?php 
	require_once "includes/dbh.acc.php";

	if(isset($_GET['message'])){
		$username = mysqli_real_escape_string($conn, $_GET['name']);
		$image = mysqli_real_escape_string($conn, $_GET['image']);
		$department = mysqli_real_escape_string($conn, $_GET['department']);
        $university = mysqli_real_escape_string($conn, $_GET['university']);
        $message = mysqli_real_escape_string($conn, $_GET['message']);

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