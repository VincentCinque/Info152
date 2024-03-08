<?php
#Built in functions that pass control
/* 
include ($path)      Jump into the specific other file and run the code inside only once
                      include will display a warning and the current script will continue to be executed even if the path fails
require ($path)      Jump into the specified other file and run the code inside there 
                      Require will display a fatal error and hte current script will stop when the path fails to execute 
require_once ($path)  

exit([$status])
kill ([$status])
*/

echo "starting file a.php";
echo "<br>";

#include('b.php');
#require('b.php');

require_once('b.php'); # will only jump to a once
echo 'back in a.php';

require('b.php');

echo 'back in a.php'

# after using exit and kill it will stop the compiler from reading code past that
/* 
The include Function
include ('index.php')  index.php in the current directory 
include 'index.php'    parentheses are optional 

The Require Function
require('index.php) index.php in the current directory

The Exit Function
exit;  parentheses are optional
exit(); 
exit ("unable to connect to db.'); passes a message through the browser

example:

if($is_valid){ if this is true then the below will happen if false it wont
    include('process_data.php);
    exit();
}


************************************************************************
How to navigate up and down directories in current file/script index.php

include ('./module.php');  the ./ means in the current directory equivalent to include ('module.php')
include ('config/module.php');  down one directory
include ('..layout.php');       the ../ means up one directory, equialent to include('layout.php');
include ('../../error.php');    the ../../ means up two directorys 

*/



?>