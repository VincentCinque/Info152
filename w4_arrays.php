<?php
//arrays start at 0 so 3 in the array would be the 0 value
    $e = array(3, 3.33, true , 'test' );

    $i = 0;

    while ($i < 4){
        //print out each element in the array
        echo $e[$i];
        //$i is the counter variable
        $i++;
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Arrays</title>
    <link rel= "stylesheet" type= "text/css"
            href="main.css"/>   

</head>   
<body>
<h1>array and while loop:</h1>
<p><?php while ($i < 4){
        //print out each element in the array
        echo $e[$i];
        //$i is the counter variable
        $i++;
    };?> </p>

<h1>Displaying it in a more user friendly way</h1>

    <p><?php while ($i < 4){
            //print out each element in the array
            echo $e[$i];
            echo "<br>";
            //$i is the counter variable
            $i++;
            };
            ?> 
            
        </p>


</body>   

</html>
