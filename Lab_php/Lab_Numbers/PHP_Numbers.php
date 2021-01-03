<!DOCTYPE html>
<html>
<body>
<?php

//PHP Integers
echo "<H1>PHP Integers</H1><p>";
echo "เช็คค่าตัวเลขว่าเป็น Integers <p>";
echo "5985 = ";
$x = 5985;
var_dump(is_int($x));
echo "<br>";
echo "59.85 = ";
$x = 59.85;
var_dump(is_int($x));
echo "<br>";
echo "---------------------------------";

//PHP Floats
echo "<H1>PHP Floats</H1><p>";
echo "เช็คค่าตัวเลขว่าเป็น Floats <p>";
echo "10.365 = ";
$x = 10.365;
var_dump(is_float($x));
echo "<br>";
echo "---------------------------------";

//PHP Infinity
echo "<H1>PHP Infinity</H1><p>";
echo "เช็คค่าตัวเลขว่าเป็น finite หรือ infinite <p>";
echo "1.9e411 = ";
$x = 1.9e411;
var_dump($x);
echo "<br>";
echo "---------------------------------";

//PHP NaN
echo "<H1>PHP NaN</H1><p>";
echo "การคำนวณค่าที่ไม่ถูกต้องจะถูกส่งกลับเป็น NaN <p>";
echo "8 = ";
$x = acos(8);
var_dump($x);
echo "<br>";
echo "---------------------------------";

//PHP Numerical Strings
echo "<H1>PHP Numerical Strings</H1><p>";
echo "ตรวจสอบว่าตัวแปรเป็นตัวเลขหรือไม่<p>";
echo "5985 = ";
$x = 5985;
var_dump(is_numeric($x));
echo "<br>";
echo "59.85 = ";
$x = "5985";
var_dump(is_numeric($x));
echo "<br>";
echo "59.85 + 100 = ";
$x = "59.85" + 100;
var_dump(is_numeric($x));
echo "<br>";
echo "Hello = ";
$x = "Hello";
var_dump(is_numeric($x));
echo "<br>";
echo "---------------------------------";
//PHP Casting Strings and Floats to Integers
echo "<H1>Casting Strings and Floats to Integers</H1><p>";
echo "เปลี่ยนค่า float เป็น int <p>";
echo "23465.768 = ";
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;
echo "<br>";
echo "เปลี่ยนค่า string เป็น int<p>";
echo "23465.768 = ";
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
echo "<br>";
echo "---------------------------------";
?>  
</body>
</html>
