<?php
    require_once "header.php";
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Store Products</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="/process/process.php">
                <div class="form-group">
                    <label for="exampleInputEmail1">Product Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="product_name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Product Description</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="product_desc">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Product Price</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="product_price">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Customer Name</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="customer_name">
                </div>
                <button type="submit" class="btn btn-primary">Insert</button>
            </form>

        </div>
    </div>
</div>




<?php
    require_once "footer.php";
?>
