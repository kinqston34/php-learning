<?php

    // $sensitiveDate = "kingston";
    // $salt = bin2hex(random_bytes(16)); // 2進位轉16進位字串 ， random_bytes 要求隨機生成16位數2進位
    // $pepper = "ASecretPepperString";

    // // echo "<br>" . $salt;
    // $dataTOHash = $sensitiveDate . $salt . $pepper;
    // $hash = hash("sha256",$dataTOHash);
    // // echo "<br>" . $hash;

    // $sensitiveDate = "kingston";

    // $storedSalt = $salt;
    // $storedHash = $hash;
    // $pepper = "ASecretPepperString";

    // $dataTOHash = $sensitiveDate . $storedSalt . $pepper;
    // $vertificationHash = hash("sha256",$dataTOHash);

    // if ($storedHash === $vertificationHash){
    //     echo "The data are the same";
    //     echo "<br>";
    //     echo $storedHash;
    //     echo "<br>";
    //     echo $vertificationHash;
    // }else{
    //     echo "The data are not the same";
    // }

    // password_hash 密碼轉換
    $pwd = "kingston";

    $options = [
        'cost' => 12
    ];

    $hashedpwd = password_hash($pwd,PASSWORD_DEFAULT,$options);

    $pwdLogin = "kingston";
    if (password_verify($pwdLogin , $hashedpwd)){
        echo "The data are the same";
    }else{
        echo "The data are not the same";
    }
?>
