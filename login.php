<?php
include_once("connection.php");
include_once("main.php");

if (isset($_POST['submit'])) {
    $emailOrUsername = isset($_POST['emailOrUsernameL']) ? trim($_POST['emailOrUsernameL']) : '';
    $password = isset($_POST['passwordL']) ? $_POST['passwordL'] : '';

    if (!empty($emailOrUsername) && !empty($password)) {
        // Check if the username is "admin" and the password is "01230"
        if ($emailOrUsername === "admin" && $password === "01230") {
            session_start();
            $_SESSION['email'] = "admin";
            $_SESSION['loggedin'] = true;
            header("Location: form.php");
            exit();
        }

        // Determine if the input is an email or username
        if (filter_var($emailOrUsername, FILTER_VALIDATE_EMAIL)) {
            $stmt = $connect->prepare("SELECT * FROM user WHERE email = :emailOrUsername");
        } else {
            $stmt = $connect->prepare("SELECT * FROM user WHERE username = :emailOrUsername");
        }

        $stmt->bindParam(':emailOrUsername', $emailOrUsername);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            if (password_verify($password, $result["password"])) {
                session_start();
                $_SESSION['email'] = $result['email'];
                $_SESSION['loggedin'] = true;
                header("Location: hero.php");
                exit();
            } else {
                echo '<script>alert("Invalid password!");</script>';
            }
        } else {
            echo '<script>alert("Invalid username or email!");</script>';
        }

        $stmt->closeCursor();
    } else {
        echo '<script>alert("Please fill in all fields!");</script>';
    }
}
?>
