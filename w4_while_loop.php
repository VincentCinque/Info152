<?php
 /************************************************************** 
 while loops are used to repeate code while a condition is true 
example:

while(condition is true){
    code to be exectued repeatedly 
}

**this can be bad for memory if it is contantly running:
Initialize a loop counter helps to stop this:
example:

while (condition is true){
    codes to be exectued repeatedly
    change(increase/decrease)the loop counter;
}

example of code:

while($x <= 0){
    echo "The Number is: $x \n";
    $x += 1; ***** this counter will add one unto itesel and reassign variable, this will continue till it hits 10 then stop
}            ***** therefor closing the loop so it does not eat up CPU and memory.

**************For Loop*********************************************
for(init counter; condition is true; change counter)
    codes to be executed                               ** loops are used to repeat processes that may be too much to write individually.

*******************************************************************/


$i = 1; // this serves as a counter variable, so in this case this will increase to 50, then stop the loop
$investment = 1000; // always put a set number in investment to refer back to the inital investment
$interest_rate = .1;
$years = 50;
$future_value = $investment; //declare a new variable and assign the investment variable to it, this ensures that investment does not change.
$counter = 1;
$x = 0;
$message = 1|2|3|4|5;

while($i <= $years){
    $future_value += $future_value * $interest_rate;
    $i++;
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

<h1>While Loops</h1>

<p>while loop:<?php 
while($x <= 0){
    echo "The Number is: $x \n";
    $x += 1;
}     

?>
</p>

<p>A while loop that Stores Numbers 1 through 5:
    <?php 
    while($counter <=5){
        $message = $message . $counter . "|";
        $counter++;
        echo $message;
    }
    ?>
</p>

<p>For Loop:
    <?php
    for($x = 0; $x <=10; $x++){
        echo "the Number Is: $x \n";
    }  
    ?>

    


</p>

<h1>while loop that calculates the future value of a one time investment</h1>

<p>Future value: <?php echo $future_value ?></p>



</body>   

</html>
