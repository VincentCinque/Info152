<?php
    /*
    filename:
    author name:
    */
    /* this is how you create variables in php*/
    $a = true;
    $aa = false;
    $b = "good";
    $c = 33;
    $d = 33.5; /* this is a double*/
    /* define is the same as a function in python "E" is def6ined and once called
    Im a PHP constant other than a variable is output constant can only be assigned once*/
    define("E", 'Im a PHP constant other than a variable');

    /*concatenation combines two variables just like in python */
    $first_name = 'Bob';
    $last_name = 'Roberts';
    //$name = 'Name: ' . $first_name;
    $name = $first_name . ' ' . $last_name;
    // adding the ' ' as seen above displays it with a space to make it look better

?>

<!DOCTYPE html>
<html>
<head>

</head>   
<body>

    <!-- echo is basically the same thing as print in python -->
    <h1>this is a first php prac</h1>
    <!-- the echo below will display the literal string-->
    <p>this is: <?php echo "abc"; ?> </p>
    <!-- This echo will pull whatever is in the variable above (see php script above) -->
    <p>what is: <?php echo $a; ?> </p> 
    <p>what is: <?php echo $aa; ?> </p> 
    <p>what is: <?php echo $b; ?> </p>
    <p>what is: <?php echo $c; ?> </p>
    <p>what is: <?php echo $d; ?> </p>
    <!-- this will show what type of data is stored within the variable (gettype) -->
    <p>type is: <?php echo gettype($b); ?> </p>
    <!-- gettype here displays integer because php variable above contains a number -->
    <p>type is: <?php echo gettype($c); ?> </p>
    <!-- type is boolean -->
    <p>type is: <?php echo gettype($a); ?> </p>
    <p>type is: <?php echo gettype($d); ?> </p>
    <p>type is: <?php echo E; ?> </p>
    <p>type is: <?php echo gettype (E); ?> </p>
    <p>this is concatenation: <?php echo $name ?></p>
    
    
</body>   

</html>
