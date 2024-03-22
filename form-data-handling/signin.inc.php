<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $uname = htmlspecialchars($_POST["username-SI"], ENT_QUOTES, 'UTF-8');
        $pass = htmlspecialchars($_POST["password-SI"], ENT_QUOTES, 'UTF-8');

        // INSTANTIATE SignUpController class
        include "../classes/db-connect.php";
        include "../classes/signin-class.php";
        include "../classes/signin-controller.php";
        $signin = new SignInController($uname, $pass);

        $signin->SignInUser();

        header("location: ../index.php?error=none");
    }

?>