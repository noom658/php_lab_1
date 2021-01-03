<!DOCTYPE html>
<html>
<body>
<?php
//PHP Constants
echo "<H1>PHP Constants</H1><p>";
echo "สร้างค่าคงที่ด้วยชื่อที่คำนึงถึงตัวพิมพ์เล็กและใหญ่";
echo "<br>";
define("Name", "Nantachai Nakdelok");
echo Name;
echo "<br>";
echo "---------------------------------";

//PHP Constant Arrays
echo "<H1>PHP Constant Arrays</H1><p>";
echo "สร้างค่า Array คงที่";
echo "<br>";
define("games", ["League of Legends","Princess Connect Re: Dive","Stardew Valley"]);
  echo games[0],"<br>";
  echo games[1],"<br>";
  echo games[2];
  echo "<br>";
  echo "---------------------------------";

//Constants are Global
echo "<H1>Constants are Global</H1><p>";
echo "ค่าคงที่เป็นแบบโกลบอลสามารถใช้ได้กับทั้งสคริปต์";
echo "<br>";
define("GREETING", "Welcome to W3Schools.com!");
function myTest() {
  echo GREETING;
  echo "<br>";
  echo "---------------------------------";
}
myTest(); 
?> 
</body>
</html>
