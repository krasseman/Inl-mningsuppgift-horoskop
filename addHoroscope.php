<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST'){ 
    $month = substr($_POST['birthDate'], 2, 2);
    $day = substr($_POST['birthDate'], 4, 2);

      
    include "createHoroscope.php";
        
        if(!isset($_SESSION['horoscope'])){ 
        $_SESSION['horoscope'] =  $horoscope;
        echo true;
     
    }
    else{
        echo false;
    }
    }

?>



