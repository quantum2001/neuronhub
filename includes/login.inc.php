<?php
session_start();
include_once ('dbh.php');

if(isset($_POST['login'])){
    $user = mysqli_real_escape_string($conn, $_POST['user']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM users WHERE user_display_name = '$user' OR user_email = '$user'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if($count < 0){
        header('Location: ../login?error=errorlogin');
        exit();
    } else {
        
        if($row = mysqli_fetch_assoc($result)){
            $hashedpassword = $row['user_password'];  
            $passwordCheck = password_verify($password, $hashedpassword);

            if ($passwordCheck == false) {
                header('Location: ../login?error=errorlogin');
                exit(); 
            } elseif($passwordCheck == true) {
                
                $_SESSION['id'] = $row['user_id'];
                $_SESSION['firstname'] = $row['user_firstname'];
                $_SESSION['lastname'] = $row['user_lastname'];
                $_SESSION['email'] = $row['user_email'];
                $_SESSION['image'] = $row['user_image'];
                $_SESSION['department'] = $row['user_department'];
                $_SESSION['university'] = $row['user_university'];
                $_SESSION['address'] = $row['user_address'];
                $_SESSION['username'] = $row['user_display_name'];
                $_SESSION['phone_no'] = $row['user_phone_no'];
                $_SESSION['last_message'] = $row['user_last_message'];

                header('Location: ../account/home.php');
            }

        } else {
            header('Location: ../login?error=errorlogin');
            exit(); 
        }
    }
}