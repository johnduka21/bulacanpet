<!DOCTYPE html>
<html lang="en">
<head>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/960bfa3deb.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bulacan Pet Fish Supply Dashboard</title>
    <link rel="stylesheet" href="css/inventory-stock.css">
    <link rel="icon" type="image/x-icon" href="images/PlaceholderFavIcon.ico">
</head>
<body>
    <?php
    include 'inventory-header.php';
    if(isset($_POST['insert-product'])){
        //Product Details
        $product_title = $_POST(['product-title']);
        $product_category = $_POST(['product-category']);
        $retail_price = $_POST(['retail-price']);
        $wholesale_price = $_POST(['wholesale-price']);
        $stock_no = $_POST(['stock-no']);
        $product_desc = $_POST(['product-desc']);

        //Product Image
        $product_image = $_FILES['product-img']['name'];
        $temp_image = $_FILES['product-img']['tmp_name'];

        //Move file to Product Image Folders
        move_uploaded_file($temp_image,"./Product Images/$category_image");
        
        //Insert Query
        $insert_category = "INSERT into products (product_title, product_categ, retail_price, wholesale_price, stock_no, product_desc, product_img) values ('$product_title', '$product_category', '$retail_price', '$wholesale_price', '$stock_no', '$product_desc', '$product_image')";
        $result_query = mysqli_query($link, $insert_category);
        if ($result_query){
            echo "<script>alert('Product has been inserted successfully.')</script>";
        } else {
            echo "Error: Product has not been inserted. Please check all details.";
        }
    }
    ?>


        <div class="add-details-container">
            <div class="add_container">
                <div class="add_topNav">
                    <h1>Add Products</h1>
                    <a href="inventory-stock.php" class="href"><button id="add-cancel-btn">Cancel</button></a>
                </div>
            </div>
            
            <div class="details-container">
                <label for="p-title">Product Title:</label>
                <input type="text" id="p-title" name="product-title" required="required">

                <div>
                    <label for="prod-category">Product Category:</label>
                    <select class="category-select" name="product-category" required="required">
                        <option value="">Fish</option>
                        <option value="">Accessories</option>
                    </select>
                </div>

                <br>
                <label for="ret-price">Retail Price:</label>
                <span class="currencyinput">₱<input type="number" name="retail-price" value="1" min="1" required="required"></span>

                <br>
                <label for="whole-price">Wholesale Price:</label>
                <span class="currencyinput">₱<input type="number" name="wholesale-price" value="1" min="1" required="required"></span>

                <br>
                <label for="stock-no">Stock:</label>
                <span><input type="number" name="stock-no" value="1" min="1" required="required"></span>

                <br>
                <label for="prod-description">Product Description:</label>
                <span><input type="text" name="product-desc" required="required"></span>
                <br>

                <label for="p-title">Product Image:</label>
                <input type="file" id="p-title" name="product-img"  required="required">
                <br>

                <button type="submit" class="add-prdct-btn" name="insert-product">Add Product</button>
            </div>
        </div>

    </div>

</body>    