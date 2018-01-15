<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<?php
$color = "red";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";

$test = "Hello world ";

$first = "5";
$second = 5;
echo "$first + $second <br>";

echo "$test Yarik <br>";

$array = array("Test", "MAGIC", "FT");

echo $array;

function myTest()
{
    echo "MAIN <br>";
}

myTest();


class Car
{
    function __construct()
    {
        $this->model = "VM";
    }
}

$vm = new Car();

echo strlen($vm->model);

$x = 1;

while ($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
}

foreach ($array as $value) {
    echo "$value <br>";
}

echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];


?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Name: <input type="text" name="fname">
    <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>
<a href="main.php?subject=PHP&web=W3schools.com">Test $GET</a>

<?php

echo "Study ".$_GET['subject']. " at ". $_GET['web'];

?>


</body>
</html>