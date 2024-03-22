<?php

    class SignIn extends DBClass
    {
        protected function GetUser($uname, $pass)
        {
            $stmt = $this->Connect()->prepare('SELECT pass FROM users WHERE username = ?;');

            if (!$stmt->execute(array($uname, $pass)))
            {
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }

            if ($stmt->rowCount() == 0)
            {
                $stmt = null;
                header("location: ../index.php?error=usernotfound");
                exit();
            }

            $hashedPass = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $checkPass = password_verify($pass, $hashedPass[0]["pass"]);

            if (!$checkPass)
            {
                $stmt = null;
                header("location: ../index.php?error=incorrectpassword");
                exit();
            }
            else if ($checkPass)
            {
                $stmt = $this->Connect()->prepare('SELECT * FROM users WHERE username = ? OR Email = ? AND pass = ?;');

                if (!$stmt->execute(array($uname, $email, $pass)))
                {
                    $stmt = null;
                    header("location: ../index.php?error=stmtfailed");
                    exit();
                }

                if ($stmt->rowCount() == 0)
                {
                    $stmt = null;
                    header("location: ../index.php?error=usernotfound");
                    exit();
                }

                $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

                session_start();
                $_SESSION["userid"] = $user[0]["userID"];
                $_SESSION["username"] = $user[0]["username"];

                $stmt = null;
            }
        }
    }

?>