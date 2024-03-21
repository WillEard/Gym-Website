<?php

    class SignUpController extends SignUp
    {
        private $uname;
        private $password;
        private $confirmPassword;
        private $email;

        private $errorHandler;

        // CONSTRUCTOR
        public function __construct($uname, $email, $password, $confirmPassword)
        {
            $this->uname = $uname;
            $this->email = $email;
            $this->password = $password;
            $this->confirmPassword = $confirmPassword;

            $errorHandler = new ErrorHandler($uname, $email, $password, $confirmPassword);
        }

        public function SignUpUser()
        {
            if ($errorHandler.EmptyInput() == false)
            {
                header("location: ../sign-up-in.php?error=emptyinput(s)");
                exit();
            }

            if ($errorHandler.InvalidUid() == false)
            {
                header("location: ../sign-up-in.php?error=invalidusername");
                exit();
            }

            if ($errorHandler.InvalidEmail() == false)
            {
                header("location: ../sign-up-in.php?error=invalidemail");
                exit();
            }

            if ($errorHandler.PasswordMatch() == false)
            {
                header("location: ../sign-up-in.php?error=incorrectpass");
                exit();
            }

            if ($errorHandler.CheckUserExists() == false)
            {
                header("location: ../sign-up-in.php?error=usernameoremailtaken");
                exit();
            }

            $this->SetUser($this->uname, $this->email, $this->password);
        }

        private function FetchUserID($uname)
        {
            $userId = $this->GetUserID($uname);

            return $userId[0]["userID"];
        }
    }
?>