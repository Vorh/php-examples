<?php


session_start();

?>

<!DOCTYPE html>
<html>
<body>

<?php
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";

echo "Session variables are set<br>";
print_r($_SESSION);

?>

</body>
</html>
