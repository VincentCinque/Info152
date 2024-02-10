<?php
$i = 0;
$message = array(3, 4, 5, 6, 7, 8, 9);
$my_info = array('Vincent Cinque', 29, 8);
$claim_text = 'My age is: ';
$NUM_MONTHS = '12';

$months = $my_info[1] * $NUM_MONTHS + $my_info[2];
$years = $months / $NUM_MONTHS + $my_info[1];
?>

<!DOCTYPE html>
<html>
<head>
    <title>[Info for developer] User's Data</title>
    <link rel= "stylesheet" type= "text/css"
            href="main.css"/>   

</head>   
<body>

<h2>[Info for developer] User's Data</h2>
<p>User's Name is: <?php var_dump($my_info[0]); ?></p>
<p>Age Years: <?php var_dump($my_info[1]); ?></p>
<p>Age Months: <?php var_dump($my_info[2]) ?></p>

<h2>[Info to User] Data Recieved</h2>
<p>The age of User: <?php echo $my_info[0] .' in months is ' .$months .', or ' .$years; ?></p>

<h2>[IF Statment] Younger or Older than 20 Years Old?</h2>

<p>Users age : <?php if ($my_info[1] >= 20){
    echo "Vincent is older than 20.";  
}elseif($my_info[1] = 20){
    echo "Vincent is 20 years old!";
}elseif($my_info[1] <= 20){
    echo "Vincent is younger than 20 years old";
} 
?> </p>

<h2>[While Loop] print a sequence</h2>
<?php while($i <= 6){
    $message = $i .$message .'>';
    $i++;
    echo $message;
}  ?>

</body>   

</html>
