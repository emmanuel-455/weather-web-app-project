<?php
    require_once 'includes/config_session.php';
    require_once 'includes/signup_view.php';
    require_once 'includes/login_view.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="welcome.css">
    <title>Welcome</title>
</head>
<body>
    <div class="body">
        <div class="welcome-body">
            <div class="welcome">
                <span>W</span>
            <span>E</span>
            <span>L</span>
            <span>C</span>
            <span>O</span>
            <span>M</span>
            <span>E</span>
            </div>
            <p>check the weather in your city</p>
        </div>
        
        <div class="contact">
            <div class="contact-content">
                <form action="">
                   <?php 
                   signup_inputs();
                   ?>
            </form>
            </div>
        </div>
    </div>
</body>
</html>