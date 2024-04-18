
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];

    try{
        require_once "db.php"; //確保指定的檔案只會被包含一次，無論你在程式中有多少次呼叫它。

        $query = "UPDATE users SET username = ? , pwd = ? , email = ? WHERE id = 2;";

        $stmt = $pdo->prepare($query);

        $stmt -> execute([$username,$pwd,$email]);

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