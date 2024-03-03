<?php
    session_start();
    include('server.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>meparking</title>
    <link rel="stylesheet" href="../css/login-registerstyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Prompt:wght@100&display=swap" rel="stylesheet">
    <script>
        function togglePassword() {
            var passwordField = document.getElementById("password");
            var passwordToggle = document.getElementById("password-toggle");

            if (passwordField.type === "password") {
                passwordField.type = "text";
                passwordToggle.innerText = "Hide";
                passwordToggle.style.color = "White"; // Set color to black when showing password
            } else {
                passwordField.type = "password";
                passwordToggle.innerText = "Show";
            }
        }
    </script>
</head>
<body>
    <div class="logo">
        <img src="logomep.png">
    </div>

    </div>
    
    <div class="header">
        <h2>Login</h2>
    </div>

    <form action="login_db.php" method="post">
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
    <label for="password">Password</label>
    <div class="password-container">
        <input type="password" name="password" id="password">
        <div class="show-hide-container">
            <button type="button" id="password-toggle" onclick="togglePassword()">Show</button>
        </div>
    </div>
</div>
        <div class="input-group1">
        <button type="submit" name="login_user" class="btn">Login</button>
        </div>
        <p class="sign-in">Don't have an account? <a href="register.php">Create your account</a></p>
    </form>

    
</body>
</html>