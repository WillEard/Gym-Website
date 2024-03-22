<?php

    class SignInController extends SignIn
    {
        private $uname;
        private $pass;

        public function __construct($uname, $pass)
        {
            $this->uname = $uname;
            $this->pass = $pass;
        }

        public function SignInUser()
        {
            if($this->EmptyInput() == false)
            {
                header("location: ../sign-up-in.php?error=emptyinput(s)");
                exit();
            }

            $this->GetUser($this->uname, $this->pass);
        }

        private function EmptyInput()
        {
            if (empty($this->uname) || empty($this->pass))
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