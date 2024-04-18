
<?php
    include "includes/session.php";
    include "includes/controller.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>註冊</title>
    <link rel="stylesheet" href="/ex3/css/index.css">
</head>
<body>

    <h3>Register</h3>

    <form action="includes/controller.php" method="post" class="register">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <input type="text" name="email" placeholder="email">
        <div>
            <button type="submit">Register</button>
            <button><a href="/ex3">return</a></button>
        </div>    
    </form>

    <?php

        // 錯誤顯示
        check_sign_errors();
    ?>
</body>
</html>