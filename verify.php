<?php
        session_start();
        if(!$_SESSION['login'])
        {
            return header('Location: index.php');
            exit;
        }

?>