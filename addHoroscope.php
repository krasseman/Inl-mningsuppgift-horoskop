<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST'){ 
    $month = substr($_POST['birthDate'], 2, 2);
    $day = substr($_POST['birthDate'], 4, 2);

      
        $horoscopes = array(
            "ariesFM"       => 3,   "ariesLM"         => 4,  "ariesFD"         => 21, "ariesLD"        => 20,
            "taurusFM"      => 4,   "taurusLM"        => 5,  "taurusFD"        => 21, "taurusLD"       => 21,
            "geminiFM"      => 5,   "geminiLM"        => 6,  "geminiFD"        => 22, "geminiLD"       => 21,
            "cancerFM"      => 6,   "cancerLM"        => 7,  "cancerFD"        => 22, "cancerLD"       => 22,
            "leoFM"         => 7,   "leoLM"           => 8,  "leoFD"           => 23, "leoLD"          => 23,
            "virgoFM"       => 8,   "virgoLM"         => 9,  "virgoFD"         => 24, "virgoLD"        => 22,
            "libraFM"       => 9,   "libraLM"         => 10, "libraFD"         => 23, "libraLD"        => 23,
            "scorpioFM"     => 10,  "scorpioLM"       => 11, "scorpioFD"       => 24, "scorpioLD"      => 22,
            "sagittariusFM" => 11,  "sagittariusLM"   => 12, "sagittariusFD"   => 23, "sagittariusLD"  => 21,
            "capricornFM"   => 12,  "capricornLM"     => 1,  "capricornFD"     => 22, "capricornLD"    => 20,
            "aquariusFM"    => 1,   "aquariusLM"      => 2,  "aquariusFD"      => 21, "aquariusLD"     => 18,
            "piscesFM"      => 2,   "piscesLM"        => 3,  "piscesFD"        => 19, "piscesLD"       => 20,
        );
      
        if($month == $horoscopes["ariesFM"] && $day >= $horoscopes["ariesFD"] || $month == $horoscopes["ariesLM"] && $day <= $horoscopes["ariesLD"]){          
            $horoscope = 'Vädur';
        }
        if($month == $horoscopes["taurusFM"] && $day >= $horoscopes["taurusFD"] || $month == $horoscopes["taurusLM"] && $day <= $horoscopes["taurusLD"]){          
            $horoscope = 'Oxe';
        }
        if($month == $horoscopes["geminiFM"] && $day >= $horoscopes["geminiFD"] || $month == $horoscopes["geminiLM"] && $day <= $horoscopes["geminiLD"]){          
            $horoscope = 'Tvilling';
        }
        if($month == $horoscopes["cancerFM"] && $day >= $horoscopes["cancerFD"] || $month == $horoscopes["cancerLM"] && $day <= $horoscopes["cancerLD"]){          
            $horoscope = 'Kräfta';
        }
        if($month == $horoscopes["leoFM"] && $day >= $horoscopes["leoFD"] || $month == $horoscopes["leoLM"] && $day <= $horoscopes["leoLD"]){          
            $horoscope = "<h1>Du är ett lejon!</h1><img src='./img/lion1.jpg'>";
        }
        if($month == $horoscopes["virgoFM"] && $day >= $horoscopes["virgoFD"] || $month == $horoscopes["virgoLM"] && $day <= $horoscopes["virgoLD"]){          
            $horoscope = 'Jungfru';
        }
        if($month == $horoscopes["libraFM"] && $day >= $horoscopes["libraFD"] || $month == $horoscopes["libraLM"] && $day <= $horoscopes["libraLD"]){          
            $horoscope = 'Våg';
        }
        if($month == $horoscopes["scorpioFM"] && $day >= $horoscopes["scorpioFD"] || $month == $horoscopes["scorpioLM"] && $day <= $horoscopes["scorpioLD"]){          
            $horoscope = 'Skorpion';
        }
        if($month == $horoscopes["sagittariusFM"] && $day >= $horoscopes["sagittariusFD"] || $month == $horoscopes["sagittariusLM"] && $day <= $horoscopes["sagittariusLD"]){          
            $horoscope = 'Skytt';
        }
        if($month == $horoscopes["capricornFM"] && $day >= $horoscopes["capricornFD"] || $month == $horoscopes["capricornLM"] && $day <= $horoscopes["capricornLD"]){          
            $horoscope = 'Stenbock';
        }
        if($month == $horoscopes["aquariusFM"] && $day >= $horoscopes["aquariusFD"] || $month == $horoscopes["aquariusLM"] && $day <= $horoscopes["aquariusLD"]){          
            $horoscope = 'Vattuman';
        }
        if($month == $horoscopes["piscesFM"] && $day >= $horoscopes["piscesFD"] || $month == $horoscopes["piscesLM"] && $day <= $horoscopes["piscesLD"]){          
            $horoscope = 'Fisk';
        }
     
      
        if(!isset($_SESSION['horoscope'])){ 
        $_SESSION['horoscope'] =  $horoscope;
        echo "Save horoscope = True" ;
     
    }
    else{
        echo "Save horoscope = False";
    }
    }

?>



