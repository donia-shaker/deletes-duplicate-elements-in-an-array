<?php
$givenArray = array(2,5,2,10,4,5,8,16);

$uniqueArry = array();
 
foreach($givenArray as $val) { //Loop1 
    
    foreach($uniqueArry as $uniqueValue) { //Loop2 

        if($val == $uniqueValue) {
            continue 2; // Referring Outer loop (Loop 1)
        }
    }
    $uniqueArry[] = $val;
}
print_r($uniqueArry);