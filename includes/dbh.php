<?php 
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "neuron_hub";

$conn = mysqli_connect($hostname, $username, $password);

$sql = "
CREATE DATABASE IF NOT EXISTS $dbname";
if(mysqli_query($conn, $sql)){
	$conn = mysqli_connect($hostname, $username, $password, $dbname);

	$sql = "CREATE TABLE IF NOT EXISTS users (
	user_id int(11) UNSIGNED PRIMARY KEY AUTO_INCREMENT  NOT NULL,
	user_firstname varchar(256) NOT NULL,
	user_lastname varchar(256) NOT NULL,
	user_display_name varchar(256) NOT NULL,
	user_password varchar(256) NOT NULL,
	user_status enum('offline', 'online') NOT NULL,
	user_email varchar(256) NOT NULL,
	user_phone_no varchar(100) NOT NULL,
	user_department varchar(256) NOT NULL,
	user_university varchar(256) NOT NULL,
	user_address text NOT NULL,
	user_verification enum('not verified', 'verified') NOT NULL,
	user_image varchar(256) NOT NULL,
	user_verification_code varchar(256),
	user_last_message int(30)
	)";
	if(mysqli_query($conn, $sql)){
		echo "";
	} else {
		echo "Table not created:" . mysqli_error($conn);
		location('header: login');
		exit();
	}
} else {
	echo "Database not created:" . mysqli_error($conn);
	location('header: login');
	exit();
}


