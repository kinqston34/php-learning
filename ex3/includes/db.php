
<?php
    $host = 'localhost:4306';
    $dbname = 'my_php';
    $dbusername = 'root';
    $dbpassword = '';
    
    try{
        $pdo = new PDO("mysql:host=$host;dbname=$dbname",$dbusername,$dbpassword);
        $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        die("Connect failed: " . $e -> getMessage());
    }


    // db 

    function get_username($pdo,$username){
        $query = "SELECT username FROM users WHERE username = ?";
        $stmt = $pdo -> prepare($query);
        $stmt -> execute([$username]);
        $result = $stmt -> fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    function get_email($pdo,$email){
        $query = "SELECT username FROM users WHERE email = ?";
        $stmt = $pdo -> prepare($query);
        $stmt -> execute([$email]);
        $result = $stmt -> fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    function set_user($pdo,$username,$pwd,$email){
        
    
        $query = "INSERT INTO users (username,pwd,email) VALUES (?,?,?);";
        $stmt = $pdo -> prepare($query);
        
        $options = [
            "cost" => 12,
        ];
        
        $hashedPwd = password_hash($pwd,PASSWORD_DEFAULT,$options);

        $stmt -> execute([$username,$hashedPwd,$email]);
    }
?>