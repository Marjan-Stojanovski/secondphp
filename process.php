<?php
require_once "header.php";
require_once "./db/db.php";
?>

<?php

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB) or die('Connection error');


if(isset($_POST['product_name']) && !empty($_POST['product_name'])) {
    $product_name = $_POST['product_name'];
} else {
    $product_name = '';
};

if(isset($_POST['product_desc']) && !empty($_POST['product_desc']))  {
    $product_desc = $_POST['product_desc'];
} else {
    $product_desc = '';
};

if(isset($_POST['product_price']) && !empty($_POST['product_price']))  {
    $product_price = $_POST['product_price'];
} else {
    $product_price = '';
};

if(isset($_POST['customer_name']) && !empty($_POST['customer_name']))  {
    $customer_name = $_POST['customer_name'];
} else {
    $customer_name = '';
};


$query = mysqli_query($conn, "INSERT INTO products(product_name, product_desc, product_price, customer_name) VALUES ('$product_name', '$product_desc', '$product_price', '$customer_name')");

if ($query) {
    header('Location: index.php');
} else {
    header('Location: 404.php');
};












?>

<?php   require_once "footer.php";  ?>

