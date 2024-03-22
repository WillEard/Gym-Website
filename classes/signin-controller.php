<?php

    class SignInController extends SignIn
    {
        private $uname;
        private $pass;

        public function __construct($uname, $pass)
        {
            $this->uname = $uname;
            $this->password = $pass;
        }

        public function SignInUser()
        {
            if($this->EmptyInput() == false)
            {
                header("location: ../sign-up-in.php?error=emptyinput");
                exit();
            }

            $this->GetUser($this->uname, $this->password);
        }

        private function EmptyInput()
        {
            if (empty($this->uname) || empty($this->password))
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