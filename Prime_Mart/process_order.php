<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '1234','prime_mart');
    if(!$conn){
        die("Couldn't connect: ");
    }

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve cart items
$selectQuery = "SELECT * FROM addtocart";
$result = mysqli_query($conn, $selectQuery);

if ($result->num_rows > 0) {
    // Create a new order in the orders table
    $totalPrice = 0;
    $datetime = date('Y-m-d H:i:s');
    $insertOrderQuery = "INSERT INTO orders (total_price, order_date) VALUES ('$totalPrice', '$datetime')";
    $orderResult = mysqli_query($conn, $insertOrderQuery);

    if ($orderResult) {
        $orderId = mysqli_insert_id($conn);

        // Insert order items into order_items table
        while ($row = mysqli_fetch_assoc($result)) {
            $productId = $row['ProductID'];
            $productName = $row['ProductName'];
            $productPrice = $row['ProductPrice'];
            $productImage = $row['ProductImage'];

            $insertItemQuery = "INSERT INTO order_items (order_id, product_id, product_name, product_price, product_image) VALUES ('$orderId', '$productId', '$productName', '$productPrice', '$productImage')";
            $insertItemResult = mysqli_query($conn, $insertItemQuery);

            if (!$insertItemResult) {
                echo "Error inserting order items: " . mysqli_error($conn);
                exit();
            }

            $totalPrice += $productPrice;
        }

        // Update total_price in orders table
        $updateTotalPriceQuery = "UPDATE orders SET total_price = '$totalPrice' WHERE order_id = '$orderId'";
        $updateTotalPriceResult = mysqli_query($conn, $updateTotalPriceQuery);

        if (!$updateTotalPriceResult) {
            echo "Error updating total price: " . mysqli_error($conn);
            exit();
        }

        // Clear the cart after successful order
        $clearCartQuery = "TRUNCATE TABLE addtocart";
        $clearCartResult = mysqli_query($conn, $clearCartQuery);

        if (!$clearCartResult) {
            echo "Error clearing cart: " . mysqli_error($conn);
            exit();
        }

        // Redirect to order success page with order ID
        header("Location: orders.php?order_id=$orderId");
        exit();
    } else {
        echo "Error inserting order: " . mysqli_error($conn);
        exit();
    }
} else {
    echo "No items in the cart";
}
?>
