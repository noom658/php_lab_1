<!DOCTYPE html>
<html>
<body>
<?php
//PHP Function
echo "<H1>PHP Function</H1><p>";
echo "ฟังก์ชันส่งค่ากลับ<p>";
echo(pi());
echo "<br>";
echo "---------------------------------";

//PHP Min and Max Functions
echo "<H1>PHP Min and Max Functions</H1><p>";
echo "ฟังก์ชันหาค่า Min ของ 0, 150, 30, 20, -8, -200";
echo "<br>";
echo "Min = ";
echo(min(0, 150, 30, 20, -8, -200) . "<br>");
echo "Max = ";
echo(max(0, 150, 30, 20, -8, -200));
echo "<br>";
echo "---------------------------------";

//PHP abs() Function
echo "<H1>PHP abs() Function</H1><p>";
echo "ฟังก์ชันส่งค่าตัวเลข(เป็นบวก)";
echo "<br>";
echo "-6.7 = ";
echo(abs(-6.7));
echo "<br>";
echo "---------------------------------";

//PHP sqrt() Function
echo "<H1>PHP sqrt() Function</H1><p>";
echo "ฟังก์ชันส่งคืนค่ารากที่สองของตัวเลข";
echo "<br>";
echo "64 = ";
echo(sqrt(64) . "<br>");
echo "0 = ";
echo(sqrt(0) . "<br>");
echo "1 = ";
echo(sqrt(1) . "<br>");
echo "9 = ";
echo(sqrt(9));
echo "<br>";
echo "---------------------------------";

//PHP round() Function
echo "<H1>PHP round() Function</H1><p>";
echo "ฟังก์ชันปัดเศษตัวเลขทศนิยมให้เป็นจำนวนเต็ม";
echo "<br>";
echo "0.60 = ";
echo(round(0.60) . "<br>");
echo "0.50 = ";
echo(round(0.50) . "<br>");
echo "0.49 = ";
echo(round(0.49) . "<br>");
echo "-4.40 = ";
echo(round(-4.40) . "<br>");
echo "-4.60 = ";
echo(round(-4.60));
echo "<br>";
echo "---------------------------------";

//Random Numbers
echo "<H1>Random Numbers</H1><p>";
echo "ฟังก์ชันสร้างตัวเลขสุ่ม ";
echo(rand());
echo "<br>";
echo "ฟังก์ชันสร้างตัวเลขสุ่มตั้งแต่ 10 - 100 = ";
echo(rand(10, 100));
echo "<br>";
echo "---------------------------------";
?>
</body>
</html>
