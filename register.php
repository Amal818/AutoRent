<?php
include_once("connection.php");
include_once("main.php");

if (isset($_POST['submit'])) {
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $cpassword = isset($_POST['confpass']) ? $_POST['confpass'] : '';

    // Check if the username or email already exists
   /*  $stmtUser = $connect->prepare("SELECT * FROM user WHERE username = :username");
    $stmtUser->bindParam(':username', $username);
    $stmtUser->execute();
    $count_user = $stmtUser->rowCount(); */

    $stmtEmail = $connect->prepare("SELECT * FROM user WHERE email = :email");
    $stmtEmail->bindParam(':email', $email);
    $stmtEmail->execute();
    $count_email = $stmtEmail->rowCount();

    if ($count_user == 0 && $count_email == 0) {
        if ($password === $cpassword) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $stmtInsert = $connect->prepare("INSERT INTO user (username, email, password) VALUES (:username, :email, :hash)");
            $stmtInsert->bindParam(':username', $username);
            $stmtInsert->bindParam(':email', $email);
            $stmtInsert->bindParam(':hash', $hash);
            $result = $stmtInsert->execute();

            if ($result) {
                header("Location: hero.php");
                exit();
            } else {
                echo '<script>alert("Registration failed. Please try again.");</script>';
            }
        } else {
            echo '<script>alert("Passwords do not match!");</script>';
        }
    } else {
        if ($count_user > 0) {
            echo '<script>alert("Username already exists!");</script>';
        }
        if ($count_email > 0) {
            echo '<script>alert("Email already exists!");</script>';
        }
    }
}
?>
