<?php
require_once "exception/validationException.php";
require_once "data/loginRequest.php";
require_once "helper/validationUtil.php";

$request = new loginRequest();
$request->username = "eko";
$request->password = "rahasia";
// validationUtil::validate($request);

ValidationUtil::validateReflection($request);

class RegisterUserRequest{
    public ?string $name;
    public ?string $address;
    public ?string $email;
}

$register = new RegisterUserRequest();
$register->name = "Eko";
$register->address = "Subang";
$register->email = "eko@gmail.com";

validationUtil::validateReflection($register);
?>