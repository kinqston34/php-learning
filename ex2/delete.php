

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    

    try{
        require_once "db.php"; //確保指定的檔案只會被包含一次，無論你在程式中有多少次呼叫它。

        $query = "DELETE FROM users WHERE username = ? AND pwd = ?;";

        $stmt = $pdo->prepare($query);

        $stmt -> execute([$username,$pwd]);

        $pdo = null;
        $stmt = null;

        header("Location:index.html");    
        die();
    }catch(PDOException $e){
        die("Query failed: ". $e -> getMessage());
    }

}else{
    header("Location:index.html");
}

?>