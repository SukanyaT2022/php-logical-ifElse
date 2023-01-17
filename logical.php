<?php
//write a php code to create two variables called num1 and num2.
// if the value of num1 or num2 is 10 or the total of both is 10 so print valid else print invalid

$num1 = 10;
$num2 = 10;
if($num1==10){
echo("valid");
}
else if($num2==10){
    echo("valid");
    }
    else if ($num1 + $num2 == 10){
    echo("valid")    ;
    }
    else{
        echo("invalid");
    }


//write a php code to create two variables called num1 and num2.
// if the value of num1 or num2 is 10 or the total of both is 10 so print valid else print invalid
//logical crate if else in one line use --or ||, and &&, not ! in three conditions
$num1 = 10;
$num2 = 10;
if($num1==10 || $num2==10 || $num1 + $num2 == 10){
echo("valid");
}
    else{
        echo("invalid");
    }




//Write a php code to create three variables called side1, side2 and side3 which store three sides of a triangle. 
//if all three sides are equal print equilateral,
//if any two sides are equal print isosceles and else print scalene
$sideOne = 6;
$sideTwo = 6;
$sideThree = 4;
if ($sideOne == $sideTwo && $sideTwo == $sideThree){
    echo("equalilateral");
}
else if ($sideOne == $sideTwo ||$sideTwo == $sideThree|| $sideOne == $sideThree){
    echo("isosceles");
}
else{
echo("scalene");
}


//Write a php code to create a variable which stores a number. if number is positive then check 
//if its even. if yes then print positive even.
//if its odd then print positive odd and if the number is negative then print negative number.
//nested

$number = 6;
//if the number is positive and then check even
if ($number > 0){
    if($number % 2 == 0){
echo("even positive");
    }
    else{
        echo("odd positive");
    }
}
//if not meet 2 condition  print all negative
else{
echo("all negative");
}



?>
