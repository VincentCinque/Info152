<?php
/* If statments are done very similiary to python
**** IF statment with no other clauses**********
if (conditon) {
    code to be executed if the condition is true
}   

example:
if ($price <= 0) {
    $message = 'price must be greater than zero.';
    echo $message;
}

if the condition is true or the price is greater than 0 then it wont print the message

****IF statment with an ELSE clause*******
if (condition) {
    code to be executed if the condition is true
} else{
    code to be executed if the condition is false
}

example:
if (empty($firstname)) {
    $message = 'You must enter  your first name.';
} else{
    $message = 'hello ' .$first_name .'!';
}
echo $message;

if the first name is not filled out (empty) this will evalute true and trigger the if statment
if it is not and the value is filled (a name inputed) it will evaluate false and trigger the else statment

****IF statment with an ELSEIF and ELSE clause*******
if (condition_1) {
    code to be executed if the condition_1 is true
} elseif (condition_2) {
    code to be executed if the condition_1 is false and condition_2 is true
}elseif (condition_3) {
    code to be executed if the condition_1, condition_2 are false and condition_3 is true
}else{
    code to be executed if all the above conditions are false
}

grade > 89
79 > grade <= 89
69 > grade <= 79
59 > grade <= 69
grade < = 60
example:
if ($grade > 89){
    echo 'A';
}elseif ($grade > 79){
    echo 'B';
}elseif ($grade > 69){
    echo 'C';
}else{
    echo 'D or less';
}

****Nested if else statments*******
if(empty($month) || !is_numeric($months) || $months <=0){  ** check to make sure all these are true if not:
    $message = 'Please enter a number of months > zero.';
}else{ ** jump to else and process through below if statment 
    $years = $months / 12;
    if($years > 1){ if above inut 
        $message = 'A long-term investment.;
    }else{
        $message = 'A short-term investment.';
    }
}

*/
 

$price1= 3;
$price = 0;
$message = 'Price must be greater than 0';
$message2 = 'good price'
?>

<!DOCTYPE html>
<html>
<head>
</head>   
<body>
<h1>if statement</h1>
    <p>Price: <?php if ($price <= 0){
        echo $message;
        }?></p>


<h1>Else statement</h1>
    <p>Price: <?php if ($price1 <= 0){
        echo $message;
        }else{
            echo $message2;
        }?></p>


</body>   

</html>
