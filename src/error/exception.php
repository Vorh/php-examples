<?php

function checkNum($number){
    if($number){
        throw new Exception("Value must be 1 or below");
    }

    return true;
}

try{
    checkNum(2);
}catch (Exception $e){
    echo "Message: " .$e->getMessage();
}
