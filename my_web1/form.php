<?php


var_dump($_SERVER["REQUEST_METHOD"]);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $q1 = htmlspecialchars($_POST["q1"]); 
    
    if (empty($lastname)){
        
        header("Location: index.php");
        exit();
    } 
    
    echo $firstname , $lastname , $q1;

    header("Location: index.php");
}else{
    header("Location: index.php");
}

?>