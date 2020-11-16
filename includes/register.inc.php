<?php 
session_start();
include_once ("dbh.php");

if(isset($_POST['register'])){
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $university = mysqli_real_escape_string($conn, $_POST['university']);
    $department = mysqli_real_escape_string($conn, $_POST['department']);
    $phoneno = mysqli_real_escape_string($conn, $_POST['phone']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $password = mysqli_real_escape_string($conn, $_POST['confirm-password']);

    $sql = "SELECT * FROM users WHERE user_display_name = '$username'";
    $result = mysqli_query($conn, $sql);
    $numrow = mysqli_num_rows($result);
    if($numrow > 0){
        header("Location: ../register.php?error=usernametaken");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE user_email = '$email'";
        $result = mysqli_query($conn, $sql);
        $numrow = mysqli_num_rows($result);
        if($numrow > 0){
            header("Location: register.php?error=emailtaken");
            exit();
        } else {
            $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
            $verification_code = bin2hex(random_bytes(16));
            $sql = "INSERT INTO users(
                user_firstname,
                user_lastname,
                user_display_name,
                user_password ,
                user_email,
                user_phone_no,
                user_department,
                user_university,
                user_address,
                user_verification,
                user_image,
                user_verification_code,
                user_status
                 ) 
                VALUES (
                '$firstname',
                '$lastname',
                '$username',
                '$hashedpassword',
                '$email',
                '$phoneno',
                '$department',
                '$university',
                '$address',
                'not verified',
                '../images/buysell.jpg',
                '$verification_code',
                'online'
                )";
            $result = mysqli_query($conn, $sql);
            if($result){
                $sql = " SELECT * FROM users WHERE user_display_name = '$username'
                ";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                if($row){
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

                    header('Location: ../account/home.php');

                }

            } else {
                header('Location: ../register.php?error=unsuccessful');
            }
            


        }
    }

    
} else {
    echo "<h2 style='color:red; text-align:center'>Invalid Gateway</h2>";
}
?>