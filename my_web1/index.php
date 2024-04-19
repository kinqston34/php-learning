<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        
        $y = 1;

        $fn1 = fn($x) => $x + $y;
        // 相当于通过 value 使用 $y：
        $fn2 = function ($x) use ($y) {
            return $x + $y;
        };

        var_export($fn1(3));


        // $answer = function(){
        //     return "123";
        // };

        // echo $answer();

        // function foo() {
        //     echo "In foo()<br />\n";
        // }

        // $func = "foo";
        // $func();

        // function add($a, $b) {
        //     return $a + $b;
        // }

        // echo add(...[1, 2])."\n";

        // $a = [1, 2];
        // echo add(...$a);


        // function add_some_extra(&$string)
        // {
        //     $string .= 'and something extra.';
        // }
        // $str = 'This is a string, ';
        // add_some_extra($str);
        // echo $str;

        // goto go ;

        // echo "between go";

        // go:
        // echo "echo go";
        

        // $a = 4 ;
        // echo $result = match($a){
        //     1 ,3 ,5 => "a = 1",
        //     2 => "a = 2",
        //     3 => "a = 3",
        //     default => "a = someone",
        // };

        // $a = 1;
        // $b = 2;

        // $a .= $b;
        // echo $a;

        // $a = $c;
        // echo gettype($a);

        // $output = `dir`;
        // echo "<pre>$output</pre>";

        // $a = array("a" => "apple", "b" => "banana");
        // $b = array("a" => "pear", "b" => "strawberry", "c" => "cherry");
        // $a += $b;
        // echo "Union of \$a += \$b: \n";
        // var_dump($a);
        // print "\n";
        
    ?>
</body>
</html>