<?php
        include 'verify.php'
?>

    <h3><?php echo $_SESSION['login']?></h3>

    <a href="<?php session_destroy()?>">Logout</a>
