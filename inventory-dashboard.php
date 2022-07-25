<!DOCTYPE html>
<html lang="en">
<head>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/960bfa3deb.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bulacan Pet Fish Supply Dashboard</title>
    <link rel="stylesheet" href="css/inventory-system.css">
    <link rel="icon" type="image/x-icon" href="images/PlaceholderFavIcon.ico">
</head>
<body>
    <?php
    include 'inventory-header.php';
    ?>

            <div class="dashboard_content_container">
                <div class="dashboard_topNav">
                    <a href=""><i class="fa fa-navicon"></i></a>
                    <a href="php/inventory-logout.php" id="logout-button"><i class="fa fa-power-off"></i>Logout</a>
                </div>

                <div class="dashboard_content">
                    <div class="dashboard_content_main">
                        <!-- CARDS -->
                        <div class="cards">
                            <!-- First Card -->
                            <div class="card-single">
                                <div>
                                    <h1>54</h1>
                                    <a href="inventory-orders.html"><p>Orders</p></a>
                                </div>
                                <div>
                                    <span class="fa-solid fa-cart-shopping"></span>
                                </div>
                            </div>

                            <!-- Second Card -->
                            <div class="card-single">
                                <div>
                                    <h1>P54.00</h1>
                                    <p>Revenue</p>
                                </div>
                                <div>
                                    <span class="fa-solid fa-coins"></span>
                                </div>
                            </div>

                            <!-- Third Card -->
                            <div class="card-single">
                                <div>
                                    <h1>124</h1>
                                    <a href="inventory-stock.html"><p>Total Products</p></a>
                                </div>
                                <div>
                                    <span class="fa-solid fa-fish-fins"></span>
                                </div>
                            </div>

                            <!-- Fourth Card -->
                            <div class="card-single">
                                <div>
                                    <h1><a href="inventory-sales-report.html" class="href">Summary</a></h1>
                                    <a href="inventory-sales-report.html"><p>Sales Report</p></a>
                                </div>
                            </div>

                        </div>
                        
                        <!-- Recent Orders -->
                        <div class="content-2">
                            <div class="recent-orders">
                                <div class="recent-orders-title">
                                    <p>Recent Orders</p> <!-- Show 5 of the recent orders only -->
                                </div>
                                <div>
                                    <table>
                                        <tr>
                                            <th>Order Date</th>
                                            <th>Customer</th>
                                            <th>Order Subtotal</th>
                                            <th>Total</th>
                                        </tr>
                                        <tr>
                                            <td>June 8, 2022</td>
                                            <td>John Doe</td>
                                            <td>P1,400.00</td>
                                            <td>P1,450.00</td>
                                        </tr>
                                        <tr>
                                            <td>June 8, 2022</td>
                                            <td>John Doe</td>
                                            <td>P1,400.00</td>
                                            <td>P1,450.00</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            
</body>

<!-- https://www.youtube.com/watch?v=UQpZJdQ2o-I&t=113s | This is the Responsive Ecommerce Inventory system type for CRUD learning-->