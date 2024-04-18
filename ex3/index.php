<?php
    include "includes/session.php";
    include "includes/controller.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入</title>
    <link rel="stylesheet" href="/ex3/css/index.css">
</head>
<body>
    <h3>Login</h3>

    <form action="" method="post" class="login">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <div>
            <button type="submit">Login</button>
            <button><a href="/ex3/register.php">register</a></button>
        </div>
    </form>

    <?php

    // 錯誤顯示
        check_sign_errors();
    ?>
    
</body>
</html>