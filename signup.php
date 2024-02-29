<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">
    <title>Register</title>
</head>
<body>
        <div class="wrapper">
         <form action="signup_function.php" method="post">
            <h1>Sign Up</h1>
            <div class="input-box">
                <div class="input-field">
                    <input name="email" type="email" placeholder="Email" autocomplete="off" required>
                    <i class="bx bxs-envelope"></i>
                </div>
            </div>
            <div class="input-box">
                <div class="input-field">
                    <input name="username" type="text" placeholder="Username" autocomplete="off" required>
                    <i class='bx bxs-user' ></i>
                </div>
            </div>

            <div class="input-box">
                <div class="input-field">
                    <input name="password" type="password" placeholder="Password" autocomplete="off" required>
                    <i class='bx bxs-lock-alt' ></i>
                </div>
                
            </div>

            <button name="submit" type="submit" class="btn">
            <a href="LogIn.php">Sign Up</a>
            </button>
            
                <div class="login">
                <p class="login">You already have an Account 
                <a href="LogIn.php">Log In</a>
                </p>
                </div>
                
            </form>
        </div>
      </div>
</body>
</html>