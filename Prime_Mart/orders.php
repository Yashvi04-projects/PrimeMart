<!DOCTYPE html>
<html>
<head>
    <title>Order Invoice</title>
    <link rel="stylesheet" type="text/css" href="orders.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,900" rel="stylesheet">
</head>
<body>

    <div class="invoice-container">
        <h1 class="invoice-heading">Order Invoice</h1>

        <?php
        session_start();
        $conn = mysqli_connect('localhost', 'root', '1234','prime_mart');
        if(!$conn){
            die("Couldn't connect: ");
        }

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $orderId = $_GET['order_id'];

        // Retrieve order details from orders table
        $orderQuery = "SELECT * FROM orders WHERE order_id = '$orderId'";
        $orderResult = mysqli_query($conn, $orderQuery);
        $orderRow = mysqli_fetch_assoc($orderResult);
        $totalPrice = $orderRow['total_price'];

        // Retrieve order items from order_items table
        $itemsQuery = "SELECT * FROM order_items WHERE order_id = '$orderId'";
        $itemsResult = mysqli_query($conn, $itemsQuery);
        ?>

        <div class="order-details">
            <div class="detail">
                <span class="label">Order ID:</span>
                <span class="value"><?php echo $orderId; ?></span>
            </div>
            <div class="detail">
                <span class="label">Total Amount:</span>
                <span class="value">₹<?php echo $totalPrice; ?></span>
            </div>
        </div>

        <div class="order-items">
            <table>
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Image</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($itemRow = mysqli_fetch_assoc($itemsResult)) { ?>
                        <tr>
                            <td><?php echo $itemRow['product_name']; ?></td>
                            <td>₹<?php echo $itemRow['product_price']; ?></td>
                            <td><img src="<?php echo $itemRow['product_image']; ?>" alt="Product Image"></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
