<html>
<head>
    <link rel="stylesheet" href="home.css" type="text/css">
    <link rel="stylesheet" href="products.css">
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
</head>

<body><br><br><br>

    <div class="header">
        <h1 id="prime">PrimeMart</h1>

        <nav class="menu">
            <ul>
                <li><a href="signup.html"><button id="signup">Sign Up</button></a></li>
                <li><a href="loginForm.html"><button class="button">Log In</button></a></li>
                <li><i class="fa fa-search" aria-hidden="true" style=" font-size : 20px; color: #3e384f;"></i></li>
                <li><a href="your_orders.php" class="no">Your Orders</a></li>
                <li id="dot">.</li>
                <li><a href="cart.php" class="no">Cart</a></li>
                <li id="dot">.</li>
                <li id="li_form"><a href="products.php" class="no">Products</a></li>
                <li id="dot">.</li>
                <li><a href="main_home.php" class="no">Home</a></li>
            </ul>
        </nav>
    </div><br><br><br>
    <div class="products">
        <h2 class="lg-title" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><b>Special Footwear With Offers</b></h2>
        <div class="container">
            <div class="product-items">
                <!-- single product -->
                <?php
                $products = [
                    [
                        'id' => '1',
                        'name' => 'Men DN 23XX',
                        'price' => '2500',
                        'image' => 'images/shoe-1.png'
                    ],
                    [
                        'id' => '2',
                        'name' => 'Men DN 23XX',
                        'price' => '2600',
                        'image' => 'images/shoe-2.png'
                    ],
                    [
                        'id' => '3',
                        'name' => 'Men DN 23XX',
                        'price' => '3100',
                        'image' => 'images/shoe-3.png'
                    ],
                    [
                        'id' => '4',
                        'name' => 'Men DN 23XX',
                        'price' => '2100',
                        'image' => 'images/shoe-4.png'
                    ],
                    [
                        'id' => '5',
                        'name' => 'Women DN 23XX',
                        'price' => '3600',
                        'image' => 'images/shoe-5.png'
                    ],
                    [
                        'id' => '6',
                        'name' => 'Women DN 23XX',
                        'price' => '4100',
                        'image' => 'images/shoe-6.png'
                    ],
                    [
                        'id' => '7',
                        'name' => 'Women DN 23XX',
                        'price' => '3500',
                        'image' => 'images/shoe-7.png'
                    ],
                    [
                        'id' => '8',
                        'name' => 'Men DN 23XX',
                        'price' => '3400',
                        'image' => 'images/shoe-8.png'
                    ]
                ];

                foreach ($products as $product) {
                ?>
                    <div class="product">
                        <div class="product-content">
                            <div class="product-img">
                                <img src="<?php echo $product['image']; ?>" alt="product image">

                            </div>
                            <div class="product-btns">
                                <form method="post" action="cart.php">
                                    <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                                    <input type="hidden" name="product_name" value="<?php echo $product['name']; ?>">
                                    <input type="hidden" name="product_price" value="<?php echo $product['price']; ?>">
                                    <input type="hidden" name="product_image" value="<?php echo $product['image']; ?>">
                                    <button type="submit" class="btn-cart" name="add_to_cart">Add to cart</button>
                                </form>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-info-top">
                                <h2 class="sm-title"><?php echo $product['name']; ?></h2>
                                <div class="rating">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                            </div>
                            <a href="#" class="product-name"><?php echo $product['name']; ?></a>
                            <div class="product-price">
                                <p><?php echo "₹ " . $product['price']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
                <!-- end of single product -->
            </div>
        </div>
    </div>

</body>

</html>