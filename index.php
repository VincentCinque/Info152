<?php
/*************************************************************
 * File name: HW_INFO152/hw2/index.php
 * Purpose: INFO152-HW2, Build and Enhance “Product Discount”
 * Author: Vincent R. Cinque
 * DrexelId: vrc45
 * Complete Date: 2024/03/24
 ************************************************************/


 
$searchCriteria = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);


$dsn = 'mysql:host=localhost;dbname=HW2';
$username = 'usr';
$password = 'vrc45';

$db= new PDO($dsn, $username, $password);

$statment = $db->prepare("SELECT * FROM Students WHERE age = :search_criteria");

$statment->bindValue(':search_criteria', $searchCriteria);

$statment->execute();

$results = $statment->fetchAll();

$statment->closeCursor();

$age = $_POST ['age'];

$author = ' by Vincent Cinque ';
$current_date = date(' Y/m/d ');
$hw = ' for Info152-HW2';
?>

<!DOCTYPE html>
 <html lang="en-US">
<head>
    <title>Your Search results</title>

</head>
 <body>

 <header>
    <h1>Below is the student info that matches your search criteria: </h1>
 </header>

 <section id= "results">
    <h2>Below is the student info that matches your search criteria: Age =  <?php echo $age;?></h2>
    <?php
            foreach ($results as $result) {
                echo "<h3> Student ID </h3>" . "{$result['student_ID']}";
                echo "<h3> Full Name </h3>" . "{$result['full_name']}";
                echo "<h3> Age </h3>" . "{$result['age']}";
                echo "<h3> Gender </h3>" . "{$result['gender']}";
            }


    ?>
 </section>

 <footer>
   <section id= "author">
   <p>Data retrieved on <?php echo $current_date . $author . $hw?></p>
   </section>
 </footer>
    
 </body>