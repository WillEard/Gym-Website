<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $fullName = htmlspecialchars($_POST["fullName-SU"], ENT_QUOTES, 'UTF-8');
        $email = htmlspecialchars($_POST["email-SU"], ENT_QUOTES, 'UTF-8');
        $uname = htmlspecialchars($_POST["username-SU"], ENT_QUOTES, 'UTF-8');
        $password = htmlspecialchars($_POST["password-SU"], ENT_QUOTES, 'UTF-8');
        $confirmPass = htmlspecialchars($_POST["passwordConfirm-SU"], ENT_QUOTES, 'UTF-8');

        $_SESSION['username-SU'] = $_POST['username-SU'];

        // INSTANTIATE SignUpController class
        include "../classes/db-connect.php";
        include "../classes/signup-class.php";
        include "../classes/signup-controller.php";
        $signup = new SignUpController($fullName, $uname, $email, $password, $confirmPass);

        $signup->SignUpUser();

        //$userId = $signup->FetchUserID($uname);

        header("location: ../sign-up-in.php?error=none");
    }

?>