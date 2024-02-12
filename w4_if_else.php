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
$month1 = 5;
$years = 3;
$month = 0;
$grade3 = 69;
$grade2 = 79;
$grade1 = 59;
$grade = 89;
$price1= 3;
$price = 0;
$message = 'Price must be greater than 0';
$message2 = 'good price';

$my_num = 80;

$first_name = 'Bob';

$message1 = "Customers name is: " || $first_name;




?>

<!DOCTYPE html>
<html>
<head>
</head>   
<body> 
    <h1>if statement</h1>

    <p>message <?php echo $message1; ?></p>
    <p>Price: <?php if ($price <= 0){
        echo $message;
        }?></p>


    <h1>Else statement</h1>
    <p>Price: <?php if ($price1 <= 0){
        echo $message;
        }else{
            echo $message2;
        }?></p>

    <h1>If Else Statment</h1>
        
    <p>grade: <?php if ($grade >=89){
            echo "A";
        }elseif ($grade <=79){
            echo "B";
        }elseif ($grade <=69){
            echo "C";
        }elseif($grade <=59){
            echo 'fail';
        }?>
    </p>

    <p>grade: <?php if ($grade2 >=89){
            echo "A";
        }elseif ($grade2 >=79){
            echo "B";
        }elseif ($grade2 >=69){
            echo "C";
        }elseif($grade2 >=59){
            echo 'fail';
        }?>

    </p>

    <p>grade: <?php if ($grade3 >=89){
            echo "A";
        }elseif ($grade3 >=79){
            echo "B";
        }elseif ($grade3 >=69){
            echo "C";
        }elseif($grade3 >=59){
            echo 'fail';
        }?>

    </p>

    <p>grade: <?php if ($grade1 >=89){
            echo "A";
        }elseif ($grade1 >= 79){
            echo "B";
        }elseif ($grade1 >= 69){
            echo "C";
        }elseif($grade1 >= 59){
            echo 'fail';
        }?>
    </p>

    <h1>Nested If Statments</h1>

    <p>Investments: <?php if(empty($month) || !is_numeric($month) || $month <=0){ 
    echo 'Please enter a number of months > zero.';
    }else{ 
    $years = $month / 12;
        if($years > 1){
        echo 'A long-term investment.';
        }else{
        echo 'A short-term investment.';
        }
    }?>

<p>Investments: <?php if(empty($month1) || !is_numeric($month1) || $month1 <=0){ 
    echo 'Please enter a number of months > zero.';
    }else{ 
    $years = $month1 / 12;
        if($years > 1){
        echo 'A long-term investment.';
        }else{
        echo 'A short-term investment.';
        }
    }?>

</p>

<p> message:<?php 

if($my_num <= 100 && $my_num >= 60){
    $message = "the number $my_num is less than 100 and more than 60";
    echo $message;
}
  ?></p>

</body>   

</html>
