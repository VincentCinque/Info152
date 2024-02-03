<?php
/*****************************************************
 * File Name: HW_INFO152/hw1/index.php
 * Purpose: INFO152-HW1, Build and Enchance "Product Discount'
 * Author: Vincent Cinque
 * DrexelId: 14678062
 * Complete Date: 04-Feb-2024
 ********************************************************/
//Calculate the discount amount using below variables
$product_description = $_GET ['product_description'];
$list_price = $_GET ['list_price'];
$discount_percent = $_GET ['discount_percent'];
$discount_amount = $list_price * $discount_percent * .01;
$discount_price = $list_price - $discount_amount;

// Formatting numbers to second decimal place and adding $ sign
$list_price_formated = "$" .number_format($list_price, 2);
$discount_percent = number_format($discount_percent, 1);
$discount_amount_formated = "$" .number_format ($discount_amount, 2);
$discount_price_formated = "$" .number_format($discount_price, 2);

// Concatenating and html formatting
$product_description = htmlspecialchars($product_description);
$discount_percent .= '%';


//Author Homework and other information
$author = '  Vincent Cinque ';
$current_date = date(' Y/m/d ');
$hw = ' for Info152-HW1';
?>



<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>Your Discount</h1>

        <label>Product Description:</label>
        <span><?php echo $product_description ; ?></span><br> 

        <label>List Price:</label>
        <span><?php echo $list_price_formated; ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo $discount_percent; ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo $discount_amount_formated; ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo $discount_price_formated; ?></span><br>
    </main>
    <section id="author">
    <p >These Calculations were done on<?php echo $current_date, $author, $hw; ?> </p>
    </section>
</body>
</html>