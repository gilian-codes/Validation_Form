<?php 
class Weather {
    public static $tempConditions = ['cold', 'mild', 'warm'];

    public static function celciustoferenheit($c){
        return $c * 9 / 5 + 32;

    }

    public static function determineTempConditions($f){
         if($f < 40){
            return self::$tempConditions[0] ; //cold
         } else if($f > 70){
            return self::$tempConditions[1]  ;//mild
         } else{
            return self::$tempConditions[2]; //warm
         }
    }
}

//access the class directly
   //print_r(Weather::$tempConditions);
   echo Weather::celciustoferenheit(20);
   echo Weather::determineTempConditions(0);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STATIC</title>
</head>
<body>
    
</body>
</html>