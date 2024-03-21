<?php

    // CLASS ErrorHandler - handles sign up error handling for data
    class ErrorHandler
    {
        // CONSTRUCTOR
        public function __construct($email, $uname, $password, $confirmPassword)
        {
            /*
            $this->uname = $uname;
            $this->email = $email;
            $this->password = $password;
            $this->confirmPassword = $confirmPassword;
            */
        }

        /* CALL BACK FUNCTIONS FOR ERROR HANDLING */
        public function CallErrorHandlers()
        {
            function EmptyInput()
            {
                if (empty($uname) || empty($email) || empty($password) || empty($confirmPassword))
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
                if (!preg_match("/^[a-zA-Z0-9]*$/",  $uname))  
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
                if (!filter_var($email, FILTER_VALIDATE_EMAIL))
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
                if  ($this->password == $confirmPassword)
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
                if (!$this->CheckUser($uname, $email))
                {
                    return false;
                }
                else
                {
                    return true;
                }
            }
        }
    }
?>