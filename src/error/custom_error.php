<?php

class CustomException extends Exception{


    public function errorMessage(){
        $errorMsg = 'Error on line '.$this->getLine(). ' in '
            .$this->getFile(). ': <br>'.$this->getMessage()
            .'<br> is not valid E-mail address';

        return $errorMsg;
    }
}


$email = "test@test....ru";

try{
    if (filter_var($email,FILTER_VALIDATE_EMAIL)===false){
        throw new CustomException($email);
    }
}catch (CustomException $e){
    echo $e->errorMessage();
}