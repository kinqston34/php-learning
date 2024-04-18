<?php 
    $dsn = "mysql:host=localhost:4306;dbname=my_php";
    $dbuser = "root";
    $dbpassword = "";

    try{
        $pdo = new PDO($dsn,$dbuser,$dbpassword);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); //這一行設定了PDO物件的屬性，將錯誤模式設定為拋出例外。這樣做的好處是，當發生錯誤時，程式會拋出PDOException類型的例外，方便我們進行錯誤處理。
    }catch(PDOException $e){
        echo "Connect failed: " . $e->getMessage(); // "->" 取得物件內的屬性或方法
    }

?>