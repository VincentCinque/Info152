<?php
    /*Below will save the value from the user input into the PHP file  */
    $first_name = $_GET ['first_name'];
    $last_name = $_GET ['last_name'];
    /* GET will attach the users input directly into the link in the browser exposed*/

?>

<!DOCTYPE html>
<html>
<head>
    <title>Name Test</title>
    <link rel= "stylesheet" type= "text/css"
            href="main.css"/>   

</head>   
<body>

    <h2>Welcome</h2>
    <p>First Name: <?php echo $first_name; ?></p>
    <p>Last Name: <?php echo $last_name; ?></p>
</body>   

</html>
