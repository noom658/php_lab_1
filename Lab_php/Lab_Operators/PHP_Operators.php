<!DOCTYPE html>
<html>
<body>
<?php
//PHP Constants
echo "<H1>PHP Arithmetic Operators</H1><p>";
$x = 10;  
$y = 6;
echo "10 + 6 = ",$x + $y;

$x = 10;  
$y = 6;
echo "<br>";
echo "10 - 6 = ",$x - $y;

$x = 10;  
$y = 6;
echo "<br>";
echo "10 * 6 = ",$x * $y;

$x = 10;  
$y = 6;
echo "<br>";
echo "10 / 6 = ",$x / $y;

$x = 10;  
$y = 6;
echo "<br>";
echo "10 % 6 = ",$x % $y;

$x = 10;  
$y = 3;
echo "<br>";
echo "10 ^ 3 = ",$x ** $y;

echo "<br>";
echo "---------------------------------";
//PHP Assignment Operators
echo "<H1>PHP Assignment Operators</H1><p>";
$x = 10;  
echo "X = ",$x;

$x = 20;  
$x += 100;
echo "<br>";
echo "X + Y = ",$x;

$x = 50;
$x -= 30;
echo "<br>";
echo "X - Y = ",$x;

$x = 10;  
$y = 6;
echo "<br>";
echo "X * Y = ",$x * $y;

$x = 10;
$x /= 5;
echo "<br>";
echo "X / Y = ",$x;

$x = 15;
$x %= 4;
echo "<br>";
echo "X % Y = ",$x;

//PHP Comparison Operators
echo "<H1>PHP Comparison Operators</H1><p>";
$x = 100;  
$y = "100";
echo "X == Y = ",var_dump($x == $y);

$x = 100;  
$y = "100";
echo "<br>";
echo "X === Y = ",var_dump($x === $y);

$x = 100;  
$y = "100";
echo "<br>";
echo "X != Y = ",var_dump($x != $y);

$x = 100;  
$y = "100";
echo "<br>";
echo "X <> Y = ",var_dump($x <> $y); 

$x = 100;  
$y = "100";
echo "<br>";
echo "X !== Y = ",var_dump($x !== $y);

$x = 100;
$y = 50;
echo "<br>";
echo "100 > 50 = ",var_dump($x > $y);

$x = 10;
$y = 50;
echo "<br>";
echo "10 < 50 = ",var_dump($x < $y); 

$x = 50;
$y = 50;
echo "<br>";
echo "50 >= 50 = ",var_dump($x >= $y);

$x = 50;
$y = 50;
echo "<br>";
echo "50 <= 50 = ",var_dump($x <= $y);

echo "<br>";
$x = 5;  
$y = 10;
echo ($x <=> $y); // returns -1 because $x is less than $y
echo "<br>";
$x = 10;  
$y = 10;
echo ($x <=> $y); // returns 0 because values are equal
echo "<br>";
$x = 15;  
$y = 10;
echo ($x <=> $y); // returns +1 because $x is greater than $y

//PHP Incremen
echo "<H1>PHP Incremen</H1><p>";
$x = 10;  
echo "10 + 1 = ", ++$x;

//PHP Logical Operators
echo "<H1>PHP Logical Operators</H1><p>";
$x = 100;  
$y = 50;
if ($x == 100 and $y == 50) {
    echo "Hello world!";
}

//PHP String Operators
echo "<H1>PHP String Operators</H1><p>";
$txt1 = "Hello";
$txt2 = " world!";
echo $txt1 . $txt2;

//PHP Array Operators
echo "<H1>PHP Array Operators</H1><p>";
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
print_r($x + $y); // union of $x and $y

//PHP Conditional Assignment Operators
echo "<H1>PHP Conditional Assignment Operators</H1><p>";
// if empty($user) = TRUE, set $status = "anonymous"
echo $status = (empty($user)) ? "anonymous" : "logged in";
echo("<br>");
$user = "John Doe";
// if empty($user) = FALSE, set $status = "logged in"
echo $status = (empty($user)) ? "anonymous" : "logged in";
?>  

</body>
</html>
