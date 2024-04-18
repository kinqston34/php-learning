<?php
 require_once "config.php";
?>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];

    $_SESSION["username"] = "test2";
    
    unset($_SESSION["username"]);

    

    try{
        require_once "db.php"; //確保指定的檔案只會被包含一次，無論你在程式中有多少次呼叫它。

        $query = "SELECT * From users WHERE username = ?";

        $stmt = $pdo->prepare($query);

        $stmt -> execute([$username]);

        $result = $stmt -> fetchAll(PDO::FETCH_ASSOC); // 返回關聯陣列 (二維)
        $pdo = null;
        $stmt = null;

        
        // header("Location:search_result.php");    
        // die();
    }catch(PDOException $e){
        die("Query failed: ". $e -> getMessage());
    }

}else{
    header("Location:index.html");
}

?>