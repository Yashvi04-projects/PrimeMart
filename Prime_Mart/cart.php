<!DOCTYPE html>
<html>

<head>
    <title>Shopping Cart UI</title>
    <link rel="stylesheet" type="text/css" href="cart.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,900" rel="stylesheet">
</head>
<body>

    <div class="CartContainer">
        <?php
        error_reporting(E_PARSE);
        session_start();

        $conn = mysqli_connect('localhost:3306', 'root', '1234', 'prime_mart');
        if (!$conn) {
            die("Couldn't connect: ");
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $productId = $_POST['product_id'];
            $productName = $_POST['product_name'];
            $productPrice = $_POST['product_price'];
            $productImage = $_POST['product_image'];

            $selectQuery = "SELECT * FROM addtocart WHERE ProductID = '$productId'";
            $result = mysqli_query($conn, $selectQuery);

            if ($result && mysqli_num_rows($result) > 0) {
                // Product already exists in the cart
                goto cart_item;
            } else {
                // Insert new product into the cart
                $insertQuery = "INSERT INTO addtocart (ProductID, ProductName, ProductPrice, ProductImage) VALUES ('$productId', '$productName', '$productPrice', '$productImage')";
                $insertResult = mysqli_query($conn, $insertQuery);

                if ($insertResult) {
                    // Data inserted successfully
                    header('Location: cart.php');
                    exit();
                } else {
                    // Error occurred while inserting data
                    echo "Error: ";
                }
            }
        }

        cart_item:

        $select_query = "SELECT * FROM addtocart";
        $result = mysqli_query($conn, $select_query);


        if ($result->num_rows > 0) {
            $total_price = 0;
            echo "<div class=\"HeadingContainer\">";
            echo "<h3 class=\"Heading\">Shopping Cart</h3>";
            echo "</div>";

            while ($row = $result->fetch_assoc()) {
                $product_id = $row['ProductID'];
                $product_name = $row['ProductName'];
                $product_price = $row['ProductPrice'];
                $product_image = $row['ProductImage'];
                $total_price = $total_price + $product_price;

                echo "<div class=\"Cart-Items pad\">";
                echo "<div class=\"item-container\">";
                echo "<div class=\"image-box\">";
                echo "<img style=\"height: 150px;\" src=\"$product_image\" />";
                echo "</div>";
                echo "<div class=\"item-details\">";
                echo "<h1 class=\"title\">$product_name</h1>";
                echo "<div class=\"amount\">" . "₹" . $product_price . "</div>";
                echo "<form class=\"remove-form\" action=\"remove_product.php\" method=\"POST\">";
                echo "<input type=\"hidden\" name=\"product_id\" value=\"$product_id\">";
                echo "<div class=\"remove-container\">";
                echo "<button type=\"submit\" class=\"remove\"><u>Remove</u></button></div>";
                echo "</form>";
                echo "</div>";
                echo "</div>";
                echo "<hr>";
                echo "</div>";
            }
            echo "</div>";
            echo "<div class=\"checkout-container\">";
            echo "<div class=\"total-amount\">Total Amount : ₹" . $total_price . "</div>";
            echo "<div class =\"button-container\">";
            echo "<form action=\"process_order.php\" method=\"POST\">";
            echo "<input type=\"hidden\" name=\"total_price\" value=\"$total_price\">";
            foreach ($products as $product) {
                echo "<input type=\"hidden\" name=\"product_ids[]\" value=\"" . $product['id'] . "\">";
                echo "<input type=\"hidden\" name=\"product_names[]\" value=\"" . $product['name'] . "\">";
                echo "<input type=\"hidden\" name=\"product_prices[]\" value=\"" . $product['price'] . "\">";
                echo "<input type=\"hidden\" name=\"product_images[]\" value=\"" . $product['image'] . "\">";
            }
            echo "<button type=\"submit\" class=\"button\">Checkout</button>";
            echo "</form>";
            echo "</div>";
            echo "</div>";
        } else {
            echo "<h1 class=\"Heading-no-item\">No Items in cart</h1>";
            echo "</div>";
        }
        ?>


</body>

</html>