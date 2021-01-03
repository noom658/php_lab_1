<!DOCTYPE html>
<html>
<body>
<?php
//PHP Return the Length of a String
echo "<H1>Return the Length of a String</H1><p>";
echo "แสดงค่าความยาวของ String<p>";
echo strlen("Hello Nantachai");
echo "<br>";
echo "---------------------------------";

//Count Words in a String
echo "<H1>Count Words in a String</H1><p>";
echo "แสดงจำนวนคำของ String<p>";
echo str_word_count("Hello Nantachai");
echo "<br>";
echo "---------------------------------";

//Reverse a String
echo "<H1>Reverse a String</H1><p>";
echo "แสดงค่า String กลับด้าน ของ Nantachai Nakdelok<p>";
echo strrev("Nantachai Nakdelok");
echo "<br>";
echo "---------------------------------";

//Search For a Text Within a String
echo "<H1>Search For a Text Within a String</H1><p>";
echo "ค้นหาข้อความภายใน String ของ Nantachai Nakdelok<p>";
echo strpos("Nantachai Nakdelok", "Nakdelok");

//Replace Text Within a String
echo "<H1>Replace Text Within a String</H1><p>";
echo "ทับข้อความใน String ของ Nantachai Nakdelok<p>";
echo "ทับข้อความใน Nakdelok โดยเปลี่ยนเป็น Noom<p>";
echo str_replace("Nakdelok", "Noom", "Nantachai Nakdelok");
?> 
</body>
</html>
