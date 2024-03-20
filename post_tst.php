<?php

$age =filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
$text = filter_input(INPUT_POST, "text");
var_dump($text);
var_dump($age);
$array_a = array(1,2,"a",true);

for($i=0; $i < 4; $i++){
    var_dump($array_a[$i]);
}
$age_2 = filter_input(INPUT_POST, "age_2");
var_dump($age_2);
$commute = $_POST["commute"];
echo 'using post to recieve commute array';
var_dump($commute);
// $commute = filter_input(INPUT_POST, "commute");
// var_dump($commute);
?>


<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
    <h2>Please Find User Information Below Through Post Method:</h2>
    <p>
        <?php
            if($age){
                echo "recived age is $age years old";
                echo "<br>";
                echo htmlspecialchars($text);
                echo "<p>" . $text . "</p>";
            }

            for($i=0; $i < 4; $i++){
                echo "<p>" . ($array_a[$i]) . "</p>";
            }

            

        ?>
     </p>

     <div>
        <p>
        <?php
            echo $age_2;
            echo "<br>";
            echo $commute;

        ?>    
        </p>

     </div>

     <div>
        <?php

             for($i=0; $i < 3; $i++){
                echo "<p>" . ($commute[$i]) . "</p>";
            }
        ?>
     </div>
</body>


</html>




