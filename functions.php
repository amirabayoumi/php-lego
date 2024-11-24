<?php


function subFib($start, $count = 2) // standerd value 
{
    $sum = 0;
    for ($i = $start; $i < $count + $start; $i++) {
        $sum += $i;
    }
    return $sum;
}



print subFib(20) . "<br>";
print subFib(20, 3) . "<br>";
print subFib(50, 100) . "<br>";


$basis = 10000;
function superSum(int $one, int $two): int // to be sure that the return will be a number
{
    global $basis; // last value before calling the function 

    return  $basis + $one + $two;
}

print superSum(1, 2) . "<br>";
$basis = 100;
print superSum(1, 5.5) . "<br>";
