<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="number" name="n1" placeholder="number 1" required>
        <select name="operator" id="operator">
            <option value="add">+</option>
            <option value="substract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="number" name="n2" placeholder="number 2" required>

        <button type="submit">calculate</button>
    </form>

    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            // $n1 = $_POST["n1"];
            // $operator = $_POST["operator"];
            // $n2 = $_POST["n2"];

            $n1 = filter_input(INPUT_POST,"n1", FILTER_SANITIZE_NUMBER_FLOAT); //FILTER_SANITIZE_NUMBER_FLOAT 
            $n2 = filter_input(INPUT_POST,"n2", FILTER_SANITIZE_NUMBER_FLOAT);
            $operator = htmlspecialchars($_POST["operator"]);

            $errors = false;

            if(empty($n1) || empty($n2) || empty($operator)){
                echo "<p class='calc-error'> Fill in all fields</p>";
                $errors = true;
            }

            if (!is_numeric($n1) || !is_numeric($n2)){
                echo "<p class='calc-error'> Only write numbers</p>";
                $errors = true;
            }

            if (!$errors){
                $result = 0;
                $result = match($operator){  //php8才有這個
                    "add" => $n1 + $n2 ,
                    "substract" => $n1 - $n2 ,
                    "multiply" => $n1 * $n2 ,
                    "divide" => $n1 / $n2 ,
                };

                echo "<p class='calc-result'>Result = " . $result . "</p>";
            }
        }
    ?>

</body>
</html>