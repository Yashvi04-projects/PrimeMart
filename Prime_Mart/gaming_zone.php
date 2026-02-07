<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Special Shoes With Offers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="products.css">
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
</head>
<body>
<nav class="menu">
                        <ul>
                            <li><a href="signup.html"><button id="signup">Shoes</button></a></li>                 
                            <li><a href="loginForm.html"><button class="button">Mobile</button></a></li>
                            <li><i class="fa fa-search" aria-hidden="true" style=" font-size : 20px; color: #3e384f;"></i></li>
                            <li><a href="your_orders.php"  class="no">Laptops</a></li>
                            <li id="dot">.</li>
                            <li><a href="cart.php"  class="no">Today's Deals</a></li>
                            <li id="dot">.</li>
                            <li id="li_form"><a href="products.php" class="no">Electronics</a></li>
                            <li id="dot">.</li>
                            <li><a href="main_home.php" class="no">Gaming-Zone</a></li>
                        </ul>
                    </nav>

<div class="products">
    <div class="container">
        <h1 class="lg-title">Special Shoes With Offers</h1>

        <div class="product-items">
            <!-- single product -->
            <?php
            $products = [
                [
                    'id' => '1',
                    'name' => 'Men DN 23XX',
                    'price' => '2500',
                    'image' => 'images/gaming1.jpg'
                ],
                [
                    'id' => '2',
                    'name' => 'Men DN 23XX',
                    'price' => '2600',
                    'image' => 'images/'
                ],
                [
                    'id' => '3',
                    'name' => 'Men DN 23XX',
                    'price' => '3100',
                    'image' => 'images/'
                ],
                [
                    'id' => '4',
                    'name' => 'Men DN 23XX',
                    'price' => '2100',
                    'image' => 'images/'
                ],
                [
                    'id' => '5',
                    'name' => 'Women DN 23XX',
                    'price' => '3600',
                    'image' => 'images/'
                ],
                [
                    'id' => '6',
                    'name' => 'Women DN 23XX',
                    'price' => '4100',
                    'image' => 'images/'
                ],
                [
                    'id' => '7',
                    'name' => 'Women DN 23XX',
                    'price' => '3500',
                    'image' => 'images/'
                ],
                [
                    'id' => '8',
                    'name' => 'Men DN 23XX',
                    'price' => '3400',
                    'image' => 'images/'
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
                            <p><?php echo "₹ ".$product['price']; ?></p>
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