<?php
session_start();
$conn = mysqli_connect('localhost:3306', 'root', '1234','prime_mart');
    if(!$conn){
        die("Couldn't connect: ");
    }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productId = $_POST['product_id'];

    // Delete the product from the addtocart table
    $deleteQuery = "DELETE FROM addtocart WHERE ProductID = '$productId'";
    $deleteResult = mysqli_query($conn, $deleteQuery);

    if ($deleteResult) {
        // Deletion successful
        header('Location: cart.php');
        exit();
    } else {
        // Error occurred while deleting
        echo "Error: " . mysqli_error($conn);
    }
}
?>
