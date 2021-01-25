<?php
            session_start();
            include 'Connection.php';
            $login = $_POST['login'];
            $password = $_POST['password'];
            
            if(empty($login) or empty($password))
            {
                return header('Location: index.php');
            }

            $select = "SELECT * FROM table_users WHERE email = '{$login}' and password = md5('{$password}')";

            $query = mysqli_query($link, $select);

            $row = mysqli_num_rows($query);

            if($row === 1)
            {
                $_SESSION['login'] = $login;
                header('Location: painel.php');
                exit;
            }
            else
            {
                echo "Password or user invalid";
            }
?>