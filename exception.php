<?php
require_once "exception/validationException.php";
require_once "data/loginRequest.php";
require_once "helper/validation.php";

$loginRequest = new loginRequest();
$loginRequest->username = "   ";
$loginRequest->password = "   ";

try{
    validateLoginRequest($loginRequest);
} catch (validationException | Exception $exception){
    echo "Error : {$exception->getMessage()} <br>" . PHP_EOL;

    var_dump($exception->getTrace()); //get trace berfungsi untuk menampilkan debug
    echo "<br>";
    echo $exception->getTraceAsString(); //yang ini sama ajja tapi dijadiin string semua
    echo "<br>";
} finally {
    echo "ERROR ATAU ENGGAK, AKAN TETAP DIEKSEKUSI" . PHP_EOL;
}
echo "<br>";
echo "VALID" . PHP_EOL;
?>