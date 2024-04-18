<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = 4 ;
        echo $result = match($a){
            1 ,3 ,5 => "a = 1",
            2 => "a = 2",
            3 => "a = 3",
            default => "a = someone",
        };
    ?>
</body>
</html>