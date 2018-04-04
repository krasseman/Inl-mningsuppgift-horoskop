<?php
session_start();
parse_str(file_get_contents("php://input"), $_PUT);


if ($_SERVER['REQUEST_METHOD'] == 'PUT'){ 
$month = substr($_PUT['birthDate'], 2, 2);
$day = substr($_PUT['birthDate'], 4, 2);

  
include "createHoroscope.php";
 
  
    if(isset($_SESSION['horoscope'])){  
    $_SESSION['horoscope'] =  $horoscope;
    echo true;
}
else{
    echo false;
}
}



?>