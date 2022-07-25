<!DOCTYPE html>
<html lang="en">
<head>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/960bfa3deb.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
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
                    <h1>Categories</h1>
                    <a href="inventory-insert-fishCategory.php" class="href"><button id="products-add-product">Insert Category (Fish)</button></a>
                    <a href="inventory-insert-accCategory.php" class="href"><button id="products-add-product">Insert Category (Accessories)</button></a>
                </div>

                <div class="stock_content">
                
                <!-- Fish Category -->
                    <div class="stock_main">  
                        <!-- All Products -->
                        <div class="all-products">
                            <div class="products-table">
                                <div class="products-title">
                                    <p>Fish Categories</p>
                                </div>
                                <div>
                                    <table>
                                        <tr>
                                            <th>Category ID</th>
                                            <th>Category Title</th>
                                            <th>Action</th>
                                        </tr>
                                        <tr>
                                        <?php
                                            include 'php\dbh.php';
                                            $select_category = "SELECT * FROM categories";
                                            $result_query = mysqli_query($link, $select_category);

                                            while($row_data = mysqli_fetch_assoc($result_query)){
                                                $category_id=$row_data['category_id'];
                                                $category_title=$row_data['category_title'];
                                                echo"<tr><td>$category_id</td>
                                                <td>$category_title</td>
                                                <td>
                                                    <button>Edit</button>
                                                    <button><a href='php/functions.php?delete=<?php echo $row_data[category_id];?>'>Delete</a></button>
                                                </td></tr>";
                                            }
                                        ?>
                                        </tr>
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Accessories Category -->
                <div class="stock_content">
                    <div class="stock_main">  
                        <!-- All Products -->
                        <div class="all-products">
                            <div class="products-table">
                                <div class="products-title">
                                    <p>Accessories Categories</p>
                                </div>
                                <div>
                                    <table>
                                        <tr>
                                            <th>Category ID</th>
                                            <th>Category Title</th>
                                            <th>Action</th>
                                        </tr>
                                        <tr>
                                            <td>10342921</td>
                                            <td>Fish</td>
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