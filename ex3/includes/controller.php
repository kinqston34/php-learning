
<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        $username = $_POST["username"];
        $pwd = $_POST["pwd"];
        $email = $_POST["email"];

        try{
            require_once "db.php";
            
            $error = [];

            if (is_input_empty($username,$pwd,$email)){
                $error["empty_input"] = "Fill in all fields!";
            }

            if (is_eamil_invalid($email)){
                $error["invalid_email"] = "Invalid email used!";
            }    

            if(is_username_taken($pdo,$username)){
                $error["username_taken"] = "Username already taken!";
            }
            if(is_email_registered($pdo,$email)){
                $error["email_used"] = "Email already registered!";
            }

            require_once "session.php";

            if ($error){
                $_SESSION["errors_signup"] = $error;
                header("Location: ../register.php");
                die();
            }
            
            create_user($pdo,$username,$pwd,$email);

            header("Location: ../index.php?register=success");

            $pdo = null;
            $stmt = null;

            die();
        }catch(PDOException $e){
            die("Query failed: " . $e -> getMessage());
        }

    }


    function is_input_empty($username,$pwd,$email){
        if (empty($username) || empty($pwd) || empty($email)){
            return true;
        }else{
            return false;
        }
    }

    function is_eamil_invalid($email){
        if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
            return true;
        }else{
            return false;
        }
    }

    function is_username_taken($pdo ,$username){
        
        if (get_username($pdo,$username)){
            return true;
        }else{
            return false;
        }
    }

    function is_email_registered($pdo ,$email){
        
        if (get_email($pdo,$email)){
            return true;
        }else{
            return false;
        }
    }


    function check_sign_errors(){

        if (isset($_SESSION["errors_signup"])){
            $errors = $_SESSION["errors_signup"];

            echo "<br>";

            foreach($errors as $e) {
                echo '<p class="form-error">'. $e .'</p>';
            }

            unset($_SESSION["errors_signup"]);
        }else if (isset($_GET["register"]) && $_GET["register"] == "success"){
            echo "<br>";
            echo "<p class='form-success'>Signup success!</p>";
        }
    }

    function create_user($pdo,$username,$pwd,$email){

        set_user($pdo,$username,$pwd,$email);
    }
?>