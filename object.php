<?php
#syntax for creating an object from any class

#objectname = new Classname (agruments);
#PDO means PHP data objects
$db = new PDO($dsn, $username, $password);

#the syntax for calling method of an object

#objectName->methodName(argumentlist);
$db->prepare($SQL_statement);

#The syntax fpr a DSN for a mySQL database

#'mysql:host=host_address;dbname=database_name'

$dsn = 'mysql:host=localhost;dbname=my_guitar_shop_1';
$username = 'mgs_user';
$password = 'pa55word';

#create PDO object -- all of the charecteristics inside the argument are now
#inherent to the $db PDO
$db= new PDO($dsn, $username, $password)

#the syntax for calling prepare () method of a PDO object
#objectName->methodName(argumentList);

$db->prepare($SQL_statement); //returns a PDOstament object
$statment = $db->prepare($SQL_statement); 

$sql_statment = 'SELECT productName, listPrice
                 FROM products
                 WHERE productID = 2;';

#The syntax for calling execute() method of a PDOStatment object

$statment->execute();

#how to connect to a MySQL database(full workflow)
$dsn = 'mysql:host=localhost;dbname=my_guitar_shop_1';
$username = 'mgs_user';
$password = 'pa55word';

$db= new PDO($dsn, $username, $password)

$sql_statment = 'SELECT productName, listPrice
                 FROM products
                 WHERE productID = 2;';
$statment = $db->prepare($sql_statment);
$statment->execute();     

#two more methods of the PDOStatment object
#fetch() fetches the next rom from a result set
#and closeCursor()closes the communications safely for the PDO

#example

$dsn = 'mysql:host=localhost;dbname=my_guitar_shop_1';
$username = 'mgs_user';
$password = 'pa55word';

$db= new PDO($dsn, $username, $password)

$sql_statment = 'SELECT productName, listPrice
                 FROM products
                 WHERE productID = 2;';
$statment = $db->prepare($sql_statment);
$statment->execute();     

$product = $statment->fetch();
#to fetch multiple rows example, this will fetch 3 rows and assign to corresponding variable 
$product2 = $statment->fetch();
$product3 = $statment->fetch();
$statment->closeCursor();

?>

