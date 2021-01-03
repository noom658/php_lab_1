<!DOCTYPE html>
<html>
<body>
    <h1>PHP - The if Statement</h1>
    <?php
        $t = date("H");

        if ($t < "20") {
        echo "Have a good day!";
        }
        echo "<br>";
        echo "---------------------------------";
    ?>
    <h1>PHP - The if...else Statement</h1>
    <?php
        $t = date("H");

        if ($t < "20") {
        echo "Have a good day!";
        } else {
        echo "Have a good night!";
        }
        echo "<br>";
        echo "---------------------------------";
        
    ?>
    <h1>PHP - The if...elseif...else Statement</h1>
    <?php
        $t = date("H");
        echo "<p>The hour (of the server) is " . $t; 
        echo ", and will give the following message:</p>";

        if ($t < "10") {
        echo "Have a good morning!";
        } elseif ($t < "20") {
        echo "Have a good day!";
        } else {
        echo "Have a good night!";
        }
        echo "<br>";
        echo "---------------------------------";
    ?>
</body>
</html>