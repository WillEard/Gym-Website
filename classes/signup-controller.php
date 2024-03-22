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
            if ($this->EmptyInput() == false)
            {
                header("location: ../sign-up-in.php?error=emptyinput(s)");
                exit();
            }

            // IF username is invalid
            if ($this->InvalidUid() == false)
            {
                header("location: ../sign-up-in.php?error=invalidusername");
                exit();
            }

            // IF email is invalid
            if ($this->InvalidEmail() == false)
            {
                header("location: ../sign-up-in.php?error=invalidemail");
                exit();
            }

            // IF password && confirmPassword do not match
            if ($this->PasswordMatch() == false)
            {
                header("location: ../sign-up-in.php?error=incorrectpass");
                exit();
            }

            // IF user entered already exists
            if ($this->CheckUserExists() == false)
            {
                header("location: ../sign-up-in.php?error=usernameoremailtaken");
                exit();
            }

            // CALL SetUser
            $this->SetUser($this->uname, $this->email, $this->password);
        }

        function EmptyInput()
        {
            if (empty($this->uname) || empty($this->email) || empty($this->password) || empty($this->confirmPassword))
            {
                return false;
            }
            else
            {
                return true;
            }
        }

        function InvalidUid()
        {
            if (!preg_match("/^[a-zA-Z0-9]*$/", $this->uname))  
            {
                return false;
            }
            else
            {
                return true;
            }
        }

        function InvalidEmail()
        {
            if (!filter_var($this->email, FILTER_VALIDATE_EMAIL))
            {
                return false;
            }
            else
            {
                return true;
            }
        }

        function PasswordMatch()
        {
            if  ($this->password !== $this->confirmPassword)
            {
                return false;
            }
            else
            {
                return true;
            }
        }

        function CheckUserExists()
        {
            if (!$this->CheckUser($this->uname, $this->email))
            {
                return false;
            }
            else
            {
                return true;
            }
        }

        // GET User ID
        public function FetchUserID($uname)
        {
            $userId = $this->GetUserID($uname);

            return $userId[0]["userID"];
        }
    }
?>