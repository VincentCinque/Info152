<?php
#Number 10
$first_var = 'water';
$second_var = "melon";

$my_fav1 = "water$second_var";# correct
$my_fav2 = '$first_var&$second_var'; # incorrect
$my_fav3 = $first_var.$second_var;#correct
$my_fav4 = "$first_var$second_var";#correct
$my_fav5 = $first_var&$second_var;#incorrect
$my_fav6 = "water$second_var";
$my_fav7 = "$first_var&$second_var";

echo $my_fav1 . "<br>";
echo $my_fav2 . "<br>";
echo $my_fav3 . "<br>";
echo $my_fav4 . "<br>";
echo $my_fav5 . "<br>";
echo $my_fav6 . "<br>";
echo $my_fav7 . "<br>";
#Number 8 how many iterations are ran?
$monthlyInterestRate = .10;
$futureValue = 100;
$months = 5;
$i = 3;

while($i < $months){
    $futureValue = $futureValue * (++$monthlyInterestRate);
    $i += 1;
}

echo $monthlyInterestRate;
#answer is 2 iterations

# Number 11**********************************************
$age = 1;
$age4 = 1;

$age1 += $age +1;#correct
$age2 += $age;
$age3 = ++$age+1;
#$age4++;
$age5 = $age +1;
$age6 += 1;

echo $age1 . "<br>";
echo $age2 . "<br>";
echo $age3 . "<br>";
echo $age4++ . "<br>";
echo $age5 . "<br>";
echo $age6 . "<br>";

#Number 13

$colors_0 = array('Red', 'Green', 'Blue');
$colors_1 = array(0=>'Red', 'Green', 2=> 'Blue');
#$colors_2 = array('a'=>'Red', 'b'=>'Green', 2=> 'c'=>'Blue');


?>