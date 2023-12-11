<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="css/login.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/f5b71e78d1.js" crossorigin="anonymous"></script>


</head>

<body>
    <a href="index.php">Back to Home</a>
    <div class="login">
        <div class="card">
            <div class="content">
                <h1>Login</h1>
                <div class="wrapper">
                <div class="username-input">
                    <form action="login.php" method="post">
                        <input type="text" name="username" placeholder="Username" id="username" required>
                        <i class="fa fa-user"></i>
                </div>
                <div class="password-input">
                    <input type="password" name="password" placeholder="Password" id="password" required>
                    <i class="fa fa-lock"></i>
                </div>
                </div>
                <div class="remember-forgot">
                    <label>
                    <input class="remember" type="checkbox" name="remember" id="remember">
                    Remember me
                    </label>
                    <a href="#">Forgot Password?</a>
                </div>

                    <button class="button" type="submit" name="login"><span>Login</span></button>

                <div class="register-link">
                    <p>Don't have an account? <a href="register.php">Register</a></p>
                </div>
                </form>
            </div>
        </div>

    </div>
</body>

</html>