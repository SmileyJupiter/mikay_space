<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
    <link rel="stylesheet" href="signup.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <form action="login_function.php" method="post">
            <h1>Log In</h1>
            <div class="input-box">
                <div class="input-field">
                    <input name="username" type="text" placeholder="Username" required>
                    <i class='bx bxs-user' ></i>
                </div>
            </div>
            <div class="input-box">
                <div class="input-field">
                    <input name="password" type="password" placeholder="Password" required>
                    <i class='bx bxs-lock-alt' ></i>
                </div>
            </div>
            <button name="submit" type="submit" class="btn">
                
                <a href="Sign Up">Log In</a>
                
            </button>

            <div class="register">
            <p >
                    Don't have an Account?
            <a href="SignUp.php">Sign Up</a>
            </p>
            </div>
        </form>
    </div>

</body>
</html>