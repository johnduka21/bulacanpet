<!DOCTYPE html>
<html lang="en">
<head>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/960bfa3deb.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Control 2</title>
    <link rel="stylesheet" href="css/inventory-stock.css">
    <link rel="icon" type="image/x-icon" href="images/PlaceholderFavIcon.ico">
</head>

<body>
    <!--Header-->
        <?php
        include ('inventory-header.php');
        ?>


            <div class="stock_container">
                <div class="stock_topNav">
                    <h1>Stock</h1>
                    <a href="inventory-add-product.php" class="href"><button id="products-add-product">Add Product</button></a>
                </div>

                <div class="stock_content">
                    <div class="stock_main">  
                        <!-- All Products -->
                        <div class="all-products">
                            <div class="products-table">
                                <div class="products-title">
                                    <p>All Products</p>
                                </div>
                                <div>
                                    <table>
                                        <tr>
                                            <th>Product ID</th>
                                            <th>Product Title</th>
                                            <th>Category</th>
                                            <th>Retail Price</th>
                                            <th>Stock</th>
                                            <th>Action</th>
                                        </tr>
                                        <tr>
                                            <td>10342921</td>
                                            <td>Blue Betta</td>
                                            <td>Fish</td>
                                            <td>P1,450.00</td>
                                            <td>101</td>
                                            <td>
                                                <button>Edit</button>
                                                <button>Delete</button>
                                            </td>
                                        </tr>
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    
</body>