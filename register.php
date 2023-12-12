<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link href="css/login_register.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/f5b71e78d1.js" crossorigin="anonymous"></script>


</head>

<body>
    <a href="index.php">Back to Home</a>
    <div class="register">
        <div class="card">
            <div class="content">
                <h1>Registration</h1>
                <div class="wrapper">
                    <div class="username-input">
                        <form action="" method="post">
                            <input type="text" name="username" placeholder="Username" id="username" required>
                            <i class="fa fa-user"></i>
                    </div>
                    <div class="email-input">
                            <input type="text" name="email" placeholder="Email" id="email" required>
                            <i class="fa fa-envelope"></i>
                    </div>
                    <div class="password-input">
                        <input type="password" name="password" placeholder="Password" id="password" required>
                        <i class="fa fa-lock"></i>
                    </div>
                    <div class="confirm-password-input">
                        <input type="password" name="confirm_password" placeholder="Confirm Password"
                            id="confirm_password" required>
                        <i class="fa fa-lock"></i>
                    </div>
                </div>

                <button class="button" type="submit" name="login"><span>Register now</span></button>

                <div class="login-link">
                    <p>Already part of the crew? <a href="register.php">Login</a></p>
                </div>
                </form>
            </div>
        </div>
    </div>
    <?php
    session_start();
    include("connection/db_conn.php");
    if (isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $email = $_POST["email"];
        $confirm_password = $_POST["confirm_password"];

        $query = "INSERT INTO users(email, username, password) VALUES('$email', '$username', '$password')";
        $result = mysqli_query($conn, $query);
        
        if ($result) {
            $_SESSION["username"] = $username;
            header("Location: index.php");
            exit();
        } else {
            header("Location: register.php");
            exit();
        }
    }
    ?>

</body>

</html>