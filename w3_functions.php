<?php
$nf = number_format(12345); //12,345 formats the number with a comma in the appropriate place
$nf1 = number_format(12345, 2); //12,345.00 formats in this manner
$nf2 = number_format(12345, 3); //12,345.000
$nf3 = number_format(12345, 4); //12,345.0000 continually adds zeros 
$nf4 = number_format(12345.671, 2); //How many decimals will be retained, in this case 2 and will also round up last decimal 

//Functions for converting user-entered data for display
$str = "university <strong>policy</strong>";

//arrays in php
//start from zero the below example for $color[0] would output red thes are very similiar to python dictionaries

$color = array('red', 'green', 'orange', 'blue');
$stuff = array(1, 'apple', 12.3, 'bob');

//indexed or numeric arrays:
//an array with a numeric index as the key, where values are stored linearly, index starts from 0 s
$sports[0] = 'football';
$sports[1] = 'cricket';
$sports[2] = 'baseball';
$sports[3] = 'soccer';

//built in functions to display/print information and variables
//to dump information about one or more variables, the information holds both type and value of the variables
$x = 3;
$fff = false;

//print_r function prints information about the variable in a more human readable way.

$abc = true;

// creating a blank variable and using the isset to check down in the HTML doc

$yy;

//date formats (function for getting the current date)
/*commonly used characters for date formatting
Character        Description
Y                a four-digit year such as 2017 (capital Y)
y                a two-digit year such as 17
m                numeric representation of the month with leading zeros (01-12) 
d                numberic representation of the day of month with leading zeros (01-31)*/

$date1 = date('y-m-d' );
$date2 = date('m/d/y ' );
$date3 = date('m.d.Y ');
$date4 = date('Y');

?>

<!DOCTYPE html>
<html>
<head>
  <title>Functions</title>
</head>   
<body>
<p>Number Format: <?php echo $nf; ?></p>
<p>Number Format: <?php echo $nf1; ?></p>
<p>Number Format: <?php echo $nf2; ?></p>
<p>Number Format: <?php echo $nf3; ?></p>
<p>Number Format: <?php echo $nf4; ?></p>

<p>HTML Conversion: <?php echo $str; ?></p>
<p>HTML Conversion: <?php echo htmlspecialchars ($str); ?></p> 

<p>Arrays: <?php echo $color[0]; ?></p>
<p>Arrays: <?php echo $color[3]; ?></p>
<p>Arrays: <?php echo $sports[1]; ?></p>
<p>Arrays: <?php echo $sports[2]; ?></p>
<p>Arrays: <?php echo $sports[3]; ?></p>
<p>Arrays containing diffrent elements: <?php echo $stuff[0]; ?></p>
<p>Arrays containing diffrent elements: <?php echo $stuff[1]; ?></p>

<p>Variable dumps: <?php var_dump($x); ?></p>
<p>Variable dumps: <?php var_dump($fff); ?></p>

<p>Variable dumps: <?php print_r($fff); ?></p>
<p>Variable dumps: <?php print_r($abc); ?></p>

<p>isset: <?php var_dump(isset($yy)); ?></p>

<p>Date Formats: <?php echo $date1; ?></p>
<p>Date Formats: <?php echo $date2; ?></p>
<p>Date Formats: <?php echo $date3; ?></p>
<p>Date Formats: <?php echo $date4; ?></p>


</body>   

</html>
