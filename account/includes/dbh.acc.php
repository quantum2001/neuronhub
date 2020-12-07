<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "neuron_hub";

$conn = mysqli_connect($hostname, $username, $password, $dbname);

$sql = "CREATE TABLE IF NOT EXISTS mart(
    item_id int(11) UNSIGNED PRIMARY KEY AUTO_INCREMENT  NOT NULL,
    item_name VARCHAR(256) NOT NULL,
    item_image VARCHAR(256) NOT NULL,
    item_price int(11) NOT NULL,
    item_owner VARCHAR(256) NOT NULL,
    item_availability enum('available', 'sold') NOT NULL,
    item_status enum('used', 'new') NOT NULL,
    item_owner_contact int(11) NOT NULL,
    item_owner_email VARCHAR(356) NOT NULL,
    item_owner_rating int(11) NOT NULL
)";

mysqli_query($conn, $sql);

$sql = "CREATE TABLE IF NOT EXISTS messages(
    message_id int(11) UNSIGNED PRIMARY KEY AUTO_INCREMENT  NOT NULL,
    message_content text NOT NULL,
    message_sender_username VARCHAR(256) NOT NULL,
    message_group VARCHAR(256) NOT NULL,
    message_sent_time timestamp DEFAULT CURRENT_TIMESTAMP NOT NULL,
    message_sender_image VARCHAR(256) NOT NULL,
    message_type enum('sticker', 'text') NOT NULL,
    university text NOT NULL

    
)";
mysqli_query($conn, $sql);


?>