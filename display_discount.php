<?php
/*****************************************************
 * File Name: HW_INFO152/hw1/index.php
 * Purpose: INFO152-HW1, Build and Enchance "Product Discount'
 * Author: Vincent Cinque
 * DrexelId: 14678062
 * Complete Date: 04-Feb-2024
 ********************************************************/
$product_description = $_GET ['product_description'];
$list_price = $_GET ['list_price'];
$discount_percent = $_GET ['discount_percent'];
$discount_amount = $list_price * $discount_percent * .01;
$discount_price = $list_price - $discount_amount;
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
        <span><?php echo $product_description; ?></span><br> 

        <label>List Price:</label>
        <span><?php echo $list_price; ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo $discount_percent; ?>%</span><br>

        <label>Discount Amount:</label>
        <span><?php echo $discount_amount; ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo $discount_price; ?></span><br>
    </main>
</body>
</html>