<?php
//given an array
$arrayToSum = array(1,2,3,9,5);

if (count($arrayToSum)<=4) {
    echo "please provide an array of five values";
}

/**using simple array calculations using array keys
 * that is arrayToSum[0] etc
 */

 //summing everything except one
 $arrayOne = $arrayToSum[1] + $arrayToSum[2] + $arrayToSum[3] + $arrayToSum[4];

 //summing everthing except 2
 $arrayTwo = $arrayToSum[0] + $arrayToSum[2] + $arrayToSum[3] + $arrayToSum[4];

 //summing everthing except 3
 $arrayThree = $arrayToSum[0] + $arrayToSum[1] + $arrayToSum[3] + $arrayToSum[4];

 //summing everthing except 4
 $arrayFour = $arrayToSum[0] + $arrayToSum[1] + $arrayToSum[2] + $arrayToSum[4];

 //summing everthing except 5
 $arrayFive = $arrayToSum[0] + $arrayToSum[1] + $arrayToSum[2] + $arrayToSum[3];

 $arrayMain = array($arrayOne, $arrayTwo, $arrayThree, $arrayFour, $arrayFive);

 arsort($arrayMain);


 //print_r($arrayMain);

 echo $arrayMain[4].' '.$arrayMain[0];