<?php
$a = 1; 
$b = "1";
$c = "";
$d = " ";
$c;
$futureValue = 100;
$monthlyInterestRate = 0.01;
$months = 5;
$i = 2;

if ($c == $d) {
    echo '$c == $d is true';
} else if ($c == $d && $a !== $b) {
    echo '$c == $d && $a !== $b   is true ';
} else if (empty($d)) {
    echo 'empty($d) is true';
} else {
    if (!empty($c)) {
        echo ' !empty($c) is true';
    } else if (!isset($c)) {
        echo ' !isset($c) is true ';
    } else if (isset($c) || isset($d)) {
        echo ' isset($c) || isset($d)  is true';
    } else {
        echo 'All is true';
    }

}

while ($i < $months) {

   $futureValue = $futureValue * (1 + $monthlyInterestRate);

   $i++;

}

if(isset($c)){
    $today_date = date('Y/m/d');

}elseif (!is_numeric($b)){
    $today_date = date('m-d-Y');
}elseif (empty($a)){
    $today_date = date('y-m-d');
}else{
    $today_date = date('m/d/y');
}

$discount_amount = 0;
$discount_amount1 = 0;
$discount_amount2 = 0;
$discount_amount3 = 0;

$order_total = 100;

if ($order_total < 300) {

    $discount_amount = $order_total * .1;

} else if ($order_total > 400) {

    $discount_amount = $order_total * .2;

} else {

    $discount_amount = $order_total * .3;

}

$order_total1 = 400;

if ($order_total1 < 300) {

    $discount_amount1 = $order_total1 * .1;

} else if ($order_total > 400) {

    $discount_amount1 = $order_total1 * .2;

} else {

    $discount_amount1 = $order_total * .3;

}

$order_total2 = 200;

if ($order_total2 < 300) {

    $discount_amount2 = $order_total2 * .1;

} else if ($order_total2 > 400) {

    $discount_amount2 = $order_total2 * .2;

} else {

    $discount_amount2 = $order_total2 * .3;

}

$order_total3 = 300;

if ($order_total3 < 300) {

    $discount_amount3 = $order_total3 * .1;

} else if ($order_total3 > 400) {

    $discount_amount3 = $order_total3 * .2;

} else {

    $discount_amount3 = $order_total3 * .3;

}



?>

<!DOCTYPE html>
<html>
<head>
    <title>Name Test</title>
    <link rel= "stylesheet" type= "text/css"
            href="main.css"/>   

</head>   
<body>

    <h2>tst</h2>
    <p>16: <?php echo $today_date; ?></p>
    <p>18 (100): <?php echo $discount_amount; ?></p>
    <p>18 (400): <?php echo $discount_amount1; ?></p>
    <p>18 (200): <?php echo $discount_amount2; ?></p>
    <p>18 (300): <?php echo $discount_amount3; ?></p>
    <p>10: <?php echo $i; ?></p>
    
</body>   

</html>
