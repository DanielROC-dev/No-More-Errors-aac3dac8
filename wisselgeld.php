<?php
$values = array(
50 ,20 ,10 ,5 ,2 ,1 ,0.50 ,0.20 ,0.10 ,0.05, 0.02, 0.01
);

$inputRounded = round($argv[1], 2);
$input = $argv[1];

function ErrorTester($input){
    try{
        if($input < 0){
            throw new Exception("Negative value has been detected, you cannot use any negative values");      
        }
        else if(empty($input)){
            throw new Exception("Nothing has been detected, are you sure you entered a value?");           
        }
        else if(!is_numeric($input)){
            throw new Exception("String has been detected, please refrain from using non numeric characters");    
        }
    }
    catch(Exception $error){
        echo "> An Error has occurred";
        throw $error;
    }
}
try { 
    echo ErrorTester($input);
}
catch(Exception $error) {
    echo PHP_EOL . "> " .  $error->getMessage();
    exit();
}

if(!$inputRounded == 0) {
    foreach($values as $values2){
        $inputRounded = round($inputRounded, 2);
        $amountOfx = floor($inputRounded / $values2);
        if(!$amountOfx == 0) {
            echo "> $amountOfx x " . $values2 . PHP_EOL;
            $inputRounded = $inputRounded - ($amountOfx * $values2);
        }
    }
} else {
    exit();
} 


