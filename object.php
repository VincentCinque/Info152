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
                 FROM products # this is the table name
                 WHERE productID = 2;';
$statment = $db->prepare($sql_statment);
$statment->execute();     

$product = $statment->fetch();
#to fetch multiple rows example, this will fetch 3 rows and assign to corresponding variable 
$product2 = $statment->fetch();
$product3 = $statment->fetch();
$statment->closeCursor();

#Code that returns a result set that has one row
$product_id = 3;
$query = 'SELECT productCode, productName, listPrice
          FROM products
          WHERE productID = 5;';
$statment = $db->prepare($query);
$statment->execute();
$product = $statment->fetch();
$statment->closeCursor();

#code that uses a string key to access each column, fetching results in an array to call the individual factors such as product code, product name and list price you will need to use the 
#array functions as seen below
$product_code = $product['productCode'];
$product_name = $product['productName'];
$product_list_price = $product['listPrice'];

#code that uses a numberic index to access each column
$product_code = $product[0];
$product_name = $product[1];
$product_list_price = $product[2];

#Methods of the PDOStatment object to bind value
#a method bindValue() of the PDOStatment object to bind value to placeholder in a SQL statment

$sql_statment = 'SELECT productCode, productName, listPrice
                 FROM products
                 WHERE productID = :param;';
$statment = $db->prepare($sql_statment);
$statment->bindValue(':param', 2);# just change the number in here instead of in the product ID and doing a whole new statment
$statment->execute();
$product = $statment->fetch();
$statment->closeCursor();

#how to execute a SQL statment that dosent bind value to placeholder

$query = 'SELECT *
          from products;';
$statment = $db->prepare($query);
$statment->execute();

#how to execute a SQL statment that does bind value to placeholder
$catagory_id = 1;
$query = 'SELECT *
          FROM products
          WHERE categoryID = :category_id;';
$statment = $db->prepare($query);
$statment->bindValue(':category_id', $category_id);
$statment->execute();

#how to execute an INSERT statment 
$category_id = 1;
$code = 'strat';
$name = 'Fender Stratocaster'
$price = 699.99;

$query= "INSERT INTO products(categpryID, productCode, productName, listPrice)
         VALUES (:category_id, :code, :name, :price);";

$statment = $db->prepare($query);
$statment->bindValue(':category_id', $category_id);
$statment->bindValue(':code', $code);
$statment->bindValue(':name', $name);
$statment->bindValue(':price', $price);
$statment->execute();
$statment->closeCursor();

#How to execute an UPDATE statment
$product_id = 4;
$price = 599.99;

$query = "UPDATE products
          SET listPrice = :price
          WHERE productID = :product_id;";

$statment = $db->prepare($query);
$statment->bindValue(':product_id', $product_id);
$statment->bindValue(':price', $price);
$statment->execute();
$statment->closeCursor();  

#how to execute a DELETE statment
$product_id = 4;

$query = "DELETE products
          WHERE productID = :product_id;";

$statment = $db->prepare($query);
$statment->bindValue(':product_id', $product_id);
$statment->execute();
$statment->closeCursor();  

#Another method of the PDOstatment object
#fetchAll() fetches all rows from a result set
#code that returns a result set that has more than one row

$product_id = 3;

$query = "SELECT products
          FROM products
          WHERE categoryID = :category_id;";

$statment = $db->prepare($query);
$statment->bindValue(':category_id', $category_id);
$statment->execute();
$products = $statment->fetchAll();
$statment->closeCursor();  
?>

