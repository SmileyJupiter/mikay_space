<?php

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    require_once 'database.php';

    userLogin($conn, $username, $password);
}
else {
    header("location: login.php");
    exit();
}
function usernameTaken($conn, $username) {
    $sql = "SELECT * FROM users WHERE Username = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}
function userLogin($conn, $username, $password) {
    $usernameTaken = usernameTaken($conn, $username);

    if ($usernameTaken === false) {
        header("location: login.php?error=wronglogin");
        exit();
    }

    $passwordhashed = $usernameTaken["Passwords"];
    $checkPassword = password_verify($password, $passwordhashed);

    if ($checkPassword === false) {
        header("location: login.php?error=wronglogin");
        exit();
    }
    else if ($checkPassword === true) {
        session_start();
        $_SESSION["id"] = $usernameTaken["ID"];
        $_SESSION["username"] = $usernameTaken["Username"];
        header("location: main_page.php");
        exit();
    }
}