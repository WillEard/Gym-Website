<?php

    class SignUp extends DBClass
    {
        // CHECK user if already exists
        protected function CheckUser($userID, $email)
        {
            $stmt = $this->Connect()->prepare('SELECT username FROM users WHERE username = ? OR Email = ?;');
            
            if (!$stmt->execute(array($userID, $email)))
            {
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }

            $result;
            if ($stmt->rowCount() > 0)
            {
                $result = false;
                return $result;
            }
            else
            {
                $result = true;
                return $result;
            }
        }

        // INSERT user details into users table
        protected function SetUser($userID, $pass, $email)
        {
            $stmt = $this->Connect()->prepare('INSERT INTO users (username, email, pass) VALUES (?, ?, ?);');

            $hashedPass = password_hash($pass, PASSWORD_DEFAULT);

            if (!$stmt->execute(array($userID, $hashedPass, $email)))
            {
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }

            $stmt = null;
        }

        // GET userID
        protected function GetUserID($uname)
        {
            $stmt = $this->Connect()->prepare('SELECT userID FROM users WHERE username = ?;');

            if (!$stmt->execute(array($uname)))
            {
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }

            if (!$stmt->rowCount() == 0)
            {
                $stmt = null;
                header("location: ../index.php?error=profileNotFound");
                exit();
            }

            $profileData = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $profileData;
        }
    }
?>