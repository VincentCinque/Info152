<?php
 /*Operators:   Example:           Result:
 +               5+7                12
 -               5-12               -7
 *               6 * 7              42
 /               13/4               3.25
 %               13%4                1
 ++              $counter++         adds 1 to counter
 --              $counter--         subtract 1 from counter
*/
/* order of precedence 
Order         Operator       Direction
1              ++             Left to right
2              --             Left to right 
3              * / %          Left to right 
4              + -            Left to right

Order of precedence and the use of parentheses
3 + 4 * 5 = 23 *** from left to right, does not follow PEMDAS***
(3+4) * 5 = 35  *** Uses whats in the parenthesis first, then the multiplication ***
*/

$x = 14;
$y = 8;
$xy = 3;
$xyz = 3;
$b = $x++;
$c = ++$x;

$result1 = $x + $y;
$result2 = $x - $y;
$result3 = $x * $y;
$result4 = $x / $y;
$result5 = $x % $y;
/*A Statment that uses the intdiv() function this will eliminate the decimal part producing just 1 instead of where $result4 will echo out 1.75*/
$result6 = intdiv($x, $y);
$xy++;
$xyz--;

/* Statements that calculate a discount*/
$list_price = 19.95;
$discount_percent = 20;
$discount_amount = $list_price * $discount_percent * .01;
$discount_price = $list_price - $discount_amount;

/* The compound assignment operators
.=
+=
-=
*=
/=
%=
*/
/* this saves time over doing $name = 'ray' $name = $name . 'harris'; this will provide the same result below.*/
$name = 'Ray';
$name .= ' Harris';

$message = 'Months ';
$months = 120;
$message .= $months;

/* breakdown of why the compound assign operator is quicker and easier*/  
/*The Standard assignment operator*/
$count = 1;
$count =$count +1;
/* compound assignment operator*/
$count = 1;
$count += 1;
/* the increment operator*/
$count = 1;
$count++;

?>

<!DOCTYPE html>
<html>
<head>
  <title>Arithmetic</title>
</head>   
<body>

    <h2>Welcome</h2>
    <p>Add: <?php echo $result1; ?></p>
    <p>Subtract: <?php echo $result2; ?></p>
    <p>Multiply: <?php echo $result3; ?></p>
    <p>Divide: <?php echo $result4; ?></p>
    <p>%: <?php echo $result5; ?></p>
    <p>counter +: <?php echo $xy++; ?></p>
    <p>counter -: <?php echo $xyz--; ?></p>
    <p>Int Div function: <?php echo $result6; ?></p>

    <p>counter diffrences output: <?php echo $b; ?></p>
    <p>counter diffrences output: <?php echo $c; ?></p>

    <p>Discount Price: <?php echo $discount_price; ?></p>

    <p>Concatenation: <?php echo $name; ?></p>
    <p>Concatenation: <?php echo $message; ?></p>
</body>   

</html>
