<?php

use League\Config\Exception\ValidationException;

function validateLoginRequest(loginRequest $request){
    if(!isset($request->username)){
        throw new Exception("Username is null"); //sebelumnya aku pake ValidationException bukannya Exception tapi error
    }else if(!isset($request->password)){
        throw new Exception("Password is null"); //Makanya aku pakenya Exception
    } else if(trim($request->username) == ""){
        throw new Exception("Username is empty");
    } else if(trim($request->password) == ""){
        throw new Exception("Password is empty");
    }
}
?>