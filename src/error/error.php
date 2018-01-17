<?php



function customError($errno,$errstr){
    echo "<b> Error </b> [$errno] $errstr<br>";
    echo "Ending script";
    die();
}

set_error_handler("customError");

$test=2;
if ($test>=1) {
    trigger_error("Value must be 1 or below",E_USER_WARNING);
}
