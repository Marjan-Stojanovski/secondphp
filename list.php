<?php
require_once "header.php";
require_once "./db/db.php";
?>
<?php

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB) or die('Connection error');

$query = mysqli_query($conn, "SELECT * FROM products");

$products = [];
while ($product = mysqli_fetch_assoc($query)) {
    $products[] = $product;
};

?>
<div class="container">
    <br>
    <div class="row">
        <div class="col-md-10">
            <h1>Manage Products</h1>
        </div>
        <div class="col-md-2">
            <a href="index.php" class="btn btn-primary">Create Product</a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th hidden>Id</th>
                    <th>Product Name</th>
                    <th>Product Description</th>
                    <th>Product Price</th>
                    <th>Customer Name</th>
                    <th>Manage List</th>
                </tr>
                </thead>
                <tbody>
                <?php

                foreach($products as $product) {
                    echo '<tr>
                    <td hidden>'.$product['id'].'</td>
                    <td>'.$product['product_name'].'</td>
                    <td>'.$product['product_desc'].'</td>
                    <td>'.$product['product_price'].'den</td>
                    <td>'.$product['customer_name'].'</td>
                    <td>
                       <a href="/manage.php?id='.$product['id'].'" class="btn btn-danger">Delete Product</a>
                    </td>
                </tr>';
                };

                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php


?>
















<?php   require_once "footer.php";  ?>
