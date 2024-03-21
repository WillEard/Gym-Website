<?php

    // CLASS ErrorHandler - handles sign up error handling for data
    class ErrorHandler
    {
        // CONSTRUCTOR
        public function __construct($uname, $email, $password, $confirmPassword)
        {
            $this->uname = $uname;
            $this->email = $email;
            $this->password = $password;
            $this->confirmPassword = $confirmPassword;
        }

        /* CALL BACK FUNCTIONS FOR ERROR HANDLING */
        
        public function EmptyInput()
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

        public function InvalidUid()
        {
            if (!preg_match("/^[a-zA-Z0-9]*$/",  $this->uname))  
			{
                return false;
            }
            else
            {
                return true;
            }
        }

        public function InvalidEmail()
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

        public function PasswordMatch()
        {
            if  ($this->password == $this->confirmPassword)
            {
                return false;
            }
            else
            {
                return true;
            }
        }

        public function CheckUserExists()
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


    }
?>