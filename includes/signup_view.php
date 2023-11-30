<?php

function signup_inputs(){
    
    

    if(isset($_SESSION["signup_data"]["username"]) && !isset($_SESSION["errors_signup"]["username_taken"])){
        echo '<input type="text" name="username" placeholder="username" value="' . $_SESSION["signup_data"]["username"] . '">';
    }else {
        echo '<input type="text" name="username" placeholder="Username..."><br>';
    }

    echo '<input type="password" name="pwd" placeholder="password..."><br>';

    if(isset($_SESSION["signup_data"]["email"]) && !isset($_SESSION["errors_signup"]["email_used"]) && !isset($_SESSION["errors_signup"]["invalid_email"])){
        echo '<input type="text" name="email" placeholder="Email..." value="' . $_SESSION["signup_data"]["email"] . '"><br>';
    }else {
        echo '<input type="text" name="email" placeholder="Email...">';
    }
}

function check_signup_errors() {
    if (isset($_SESSION["errors_signup"])) {
        $errors = $_SESSION["errors_signup"];
        echo "<br>";
        foreach ($errors as $error){
            echo '<p class="form-error">' . $error . '</p>';
        }

        unset($_SESSION["errors_signup"]);
    } else if (isset($_GET["signup"]) && $_GET["signup"] === "success") {
        echo "<br>";
        echo '<p class="form-success">Signup success!</p>';
    }
}