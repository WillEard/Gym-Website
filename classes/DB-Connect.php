<?php

    class DBClass
    {
        protected function Connect()
        {
            try 
            {
                $username = "root";
                $password = "";

                $databaseManager = new PDO('mysql:host-localhost;dbname=GymDatabase',$username,$password);

                return $databaseManager;
                
            } 
            catch (PDOException $e) 
            {
                echo 'Exception caught: ', $e->getMessage(), "<br/>";
                die();
            }
        }
    }

?>