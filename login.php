<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/login_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> HiFidelity - Login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form action = "includes/login.inc.php" method = "post">
        <h3>Login Here</h3>

        <label for="username">Username</label>
        <input type="text" name = "username" placeholder="Username" id="username">

        <label for="password">Password</label>
        <input type="password" name = "pwd" placeholder="Password" id="password">

        <button>Log In</button>
        <div class="social">
            <div class="go"><i class="fab fa-google"></i>  Google</div>
            <div class="fb"><i class="fab fa-facebook"></i>  Facebook</div>
        </div>
        <a class = "signup" href = "index.php">
            New account?
        </a>
    </form>
    
    <?php
    check_login_errors();
    ?>

</body>
</html>