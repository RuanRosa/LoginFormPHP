<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>

        <form action="RegisterController.php" method="post">
            <h3>Register</h3>
            <label for="">E-mail:</label>
                <input type="email" name="login"><br>
            <label for="">Password:</label>
                <input type="password" name="password"><br>
            <button type="submit">Register</button>
        </form>
        <p>Already have an account?<a href="login.php">Login</a></p>
    
</body>
</html>