<!DOCTYPE html>
<html>
<head>
    <title>Your Orders</title>
    <link rel="stylesheet" type="text/css" href="your_orders.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,900" rel="stylesheet">
</head>
<body>

    <div class="invoice-container">
        <h1 class="invoice-heading">Your Orders</h1>

        <?php
        session_start();
        $conn = mysqli_connect('localhost', 'root', '1234','prime_mart');
    if(!$conn){
        die("Couldn't connect: ");
    }
        // Retrieve all orders
        $query = "SELECT * FROM orders";
        $result = mysqli_query($conn, $query);
        ?>

        <?php if (mysqli_num_rows($result) > 0) { ?>
            <div class="order-list">
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="order-item">
                        <span class="order-id">Order ID: <?php echo $row['order_id']; ?></span>
                        <span class="order-amount">Total Amount: ₹<?php echo $row['total_price']; ?></span>
                        <a class="invoice-link" href="orders.php?order_id=<?php echo $row['order_id']; ?>">View Invoice</a>
                    </div>
                <?php } ?>
            </div>
        <?php } else { ?>
            <p>No orders found.</p>
        <?php } ?>

    </div>

</body>
</html>
