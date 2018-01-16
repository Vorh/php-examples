<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
$_SESSION["favcolor"] = "test";
print_r($_SESSION);
?>

</body>
</html>