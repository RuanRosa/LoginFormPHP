<?php
            include 'Connection.php';

            $login = $_POST['login'];
            $password = $_POST['password'];
            
            if(empty($login) || empty($password))
            {
                return header("Location: index.php");
            }

            $insert = "INSERT INTO table_users(email,password) VALUES('$login',md5('$password'))";
            $result = mysqli_query($link, $insert);

            return header('Location: painel.php');
            exit;
?>
