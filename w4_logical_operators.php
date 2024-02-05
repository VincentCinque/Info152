<?php
/* the Conditional Operators
Operator               Example
************************************************
==                     $last_name == "Harris"
                       $Test_score == 10      makes sure the variable is equal, will display true if it is 
                       33 == '33'             This operator is not a strict evaluator will return true if the number matches even if diffrent types string or number
************************************************
!=                     $first_name != "Ray"  comparing that they are not equal
                       $months != 0
************************************************
<                      $age < 18            less than operator
************************************************
<=                     $investments <= 0     Less than or equal too operator
************************************************
>                      $test_score > 100     Greater than operator
************************************************
>=                     $rate / 100 >= 0.1     Greater than or equal to operator
************************************************
===                    $investments === FALSE    
                       $years === NULL
                       33 === '33'             More strict than == will not return if dosent exactly match this will return false
************************************************
!==                    $investments !== FALSE  Strict comparison if they are not equal
                       $years !== NULL
************************************************/

/* The Logical Operators in order of precedence
************************************************
Operator            Example
!                   !is_numeric($age)         logical not operator; will turn the operator to false and make sure its a number
************************************************
&&                  $age > 17 && $score < 70  Both sides must be true to display true
************************************************
||                  !is_numeric ($rate) || $rate < 0   Only one side must be true to display true, can be connected many times
************************************************/


33 == '33';
33 != '34;';
$age = 3; // if (age<3) less than, this will return false because age is 3 not less than
$score = 60
$aaa = is_numeric("abc")
?>

<!DOCTYPE html>
<html>
<head>
  <title>IF Statments</title>
</head>   
<body>
  <h1>Conditional Operators</h1>
<h2>*************== Operator******************************</h2>
<p> == operator: <?php var_dump (33 == '33'); ?></p>
<p> == operator: <?php echo (33 == '33'); ?></p>
<p> == operator: <?php print_r (33 == '33'); ?></p>
<h2>***************!= Operator************************************</h2>
<p> != operator: <?php echo (33 != '33'); ?></p>
<p> != operator: <?php var_dump (33 != '33'); ?></p>
<p> != operator: <?php print_r (33 != '33'); ?></p>
<h2>*******************< (less than) Operator False********************************</h2>
<p> < operator: <?php echo ($age < 3); ?></p>
<p> < operator: <?php var_dump ($age < 3); ?></p>
<p> < operator: <?php print_r ($age < 3); ?></p>
<h2>*******************< (less than) Operator True********************************</h2>
<p> < operator: <?php echo ($age < 5); ?></p> 
<p> < operator: <?php var_dump ($age < 5); ?></p>
<p> < operator: <?php print_r ($age < 5); ?></p>
<h2>*******************<= (less than or equal to) Operator True********************************</h2>
<p> <= operator: <?php echo ($age <= 3); ?></p> 
<p> <= operator: <?php var_dump ($age <= 3); ?></p>
<p> <= operator: <?php print_r ($age <= 3); ?></p>
<h2>*******************<= (less than or equal to) Operator False********************************</h2>
<p> <= operator: <?php echo ($age <= 5); ?></p> 
<p> <= operator: <?php var_dump ($age <= 5); ?></p>
<p> <= operator: <?php print_r ($age <= 5); ?></p>
<h2>*******************> (greater than) Operator True********************************</h2>
<p> <= operator: <?php echo ($age > 2); ?></p> 
<p> <= operator: <?php var_dump ($age > 2); ?></p>
<p> <= operator: <?php print_r ($age > 2); ?></p>
<h2>*******************> (Greater than) Operator False********************************</h2>
<p> <= operator: <?php echo ($age > 5); ?></p> 
<p> <= operator: <?php var_dump ($age > 5); ?></p>
<p> <= operator: <?php print_r ($age > 5); ?></p>
<h2>*******************>= (Greater than or equal to) Operator False********************************</h2>
<p> <= operator: <?php echo ($age >= 5); ?></p> 
<p> <= operator: <?php var_dump ($age >= 5); ?></p>
<p> <= operator: <?php print_r ($age >= 5); ?></p>
<h2>*******************>= (Greater than or equal to) Operator False********************************</h2>
<p> <= operator: <?php echo ($age >= 3); ?></p> 
<p> <= operator: <?php var_dump ($age >= 3); ?></p>
<p> <= operator: <?php print_r ($age >= 3); ?></p>
<h2>*******************!= Operator True********************************</h2>
<p> != operator: <?php echo (33 != '34'); ?></p>
<p> != operator: <?php var_dump (33 != '34'); ?></p>
<p> != operator: <?php print_r (33 != '34'); ?></p>
<h2>*******************!= Operator False********************************</h2>
<p> != operator: <?php echo (33 != '33'); ?></p>
<p> != operator: <?php var_dump (33 != '33'); ?></p>
<p> != operator: <?php print_r (33 != '33'); ?></p>
<h2>******************=== Operator*********************************</h2>
<p> === operator: <?php var_dump (33 === '33'); ?></p>
<p> === operator: <?php echo (33 === '33'); ?></p>
<p> === operator: <?php print_r (33 === '33'); ?></p>
<h2>******************!== Operator True*********************************</h2>
<p> !== operator: <?php var_dump (33 !== '33'); ?></p>
<p> !== operator: <?php echo (33 !== '33'); ?></p>
<p> !== operator: <?php print_r (33 !== '33'); ?></p>
<h2>******************!== Operator False*********************************</h2>
<p> !== operator: <?php var_dump (33 !== '34'); ?></p>
<p> !== operator: <?php echo (33 !== '34'); ?></p>
<p> !== operator: <?php print_r (33 !== '34'); ?></p>

<h1>Logical Operators</h1>
<h2>****************** && Operator true*********************************</h2>
<p> && operator: <?php var_dump ($age > 2 && $score > 40); ?></p>
<h2>****************** && Operator false*********************************</h2>
<p> && operator: <?php var_dump ($age > 3 && $score > 70); ?></p>
<h2>****************** || Operator true*********************************</h2>
<p> || operator: <?php var_dump ($age > 2 || $score > 40); ?></p>
<h2>****************** || Operator false*********************************</h2>
<p> || operator: <?php var_dump ($age > 4 || $score > 70); ?></p>
<h2>****************** ! Operator*********************************</h2>
<p> ! operator: <?php var_dump $aaa; ?></p>
<p> ! operator: <?php var_dump (!$aaa); ?></p>

</body>   

</html>
