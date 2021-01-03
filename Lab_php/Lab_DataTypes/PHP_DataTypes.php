<!DOCTYPE html>
<html>
<body>

<?php 
//PHP String
echo "<H1>PHP String</H1><p>";
$x = "Nantachai Nakdelok";
$y = 'Hello PHP!';
echo $x;
echo "<br>"; 
echo $y;
echo "<br>";
echo "---------------------------------";

//PHP Integer
echo "<H1>PHP Integer</H1><p>";
$x = 615021000927;
var_dump($x);
echo "<br>";
echo "---------------------------------";

//PHP Float
echo "<H1> PHP Float</H1><p>";
$x = 10.365;
var_dump($x);
echo "<br>";
echo "---------------------------------";

//PHP Boolean
echo "<H1>PHP Boolean</H1><p>";
$x = true;
$y = false;
echo "ใช้ในการทดสอบตามเงื่อนไข";
echo "<br>";
echo "---------------------------------";

//PHP Array
echo "<H1>PHP Array</H1><p>";
$MyGames = array("League of Legends","Princess Connect Re: Dive","Stardew Valley");
var_dump($MyGames);
echo "<br>";
echo "---------------------------------";

//PHP Object
echo "<H1>PHP Object</H1><p>";
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }
  
$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();
echo "<br>";
echo "---------------------------------";

//PHP NULL Value
echo "<H1>PHP NULL Value</H1><p>";
$x = "Hello Nantachai";
$x = null;
var_dump($x);
echo "<br>";
echo "---------------------------------";
?>
</body>
</html>