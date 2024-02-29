<?php

if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    require_once 'database.php';

    userSignup($conn, $email, $username, $password);
}
function userSignup($conn, $email, $username, $password) {
    $sql = "INSERT INTO users (Email, Username, Passwords) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: signup.php?error=stmtfailed");
        exit();
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss", $email, $username, $hashedPassword);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: login.php?error=none");
        exit();
}