<?php

    // CLASS SignUpController - inherits from Signup
    class SignUpController extends SignUp
    {
        // VARIABLES for user data
        private $uname;
        private $password;
        private $confirmPassword;
        private $email;

        // VARIABLE for error handler object
        private $errorHandler;

        // CONSTRUCTOR
        public function __construct($uname, $email, $password, $confirmPassword)
        {
            $this->uname = $uname;
            $this->email = $email;
            $this->password = $password;
            $this->confirmPassword = $confirmPassword;

            // INSTANTIATE ERROR HANDLER OBJECT
            //$errorHandler = new ErrorHandler($uname, $email, $password, $confirmPassword);
        }

        // CALL error handler methods from the ErrorHandler class.
        public function SignUpUser()
        {
            // IF fields are empty
            if ($errorHandler.EmptyInput() == false)
            {
                header("location: ../sign-up-in.php?error=emptyinput(s)");
                exit();
            }

            // IF username is invalid
            if ($errorHandler.InvalidUid() == false)
            {
                header("location: ../sign-up-in.php?error=invalidusername");
                exit();
            }

            // IF email is invalid
            if ($errorHandler.InvalidEmail() == false)
            {
                header("location: ../sign-up-in.php?error=invalidemail");
                exit();
            }

            // IF password && confirmPassword do not match
            if ($errorHandler.PasswordMatch() == false)
            {
                header("location: ../sign-up-in.php?error=incorrectpass");
                exit();
            }

            // IF user entered already exists
            if ($errorHandler.CheckUserExists() == false)
            {
                header("location: ../sign-up-in.php?error=usernameoremailtaken");
                exit();
            }

            // CALL SetUser
            $this->SetUser($this->uname, $this->email, $this->password);
        }

        // GET User ID
        private function FetchUserID($uname)
        {
            $userId = $this->GetUserID($uname);

            return $userId[0]["userID"];
        }
    }
?>