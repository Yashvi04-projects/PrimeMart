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

        include 'connect.php';

          session_start();
          $dbhost = 'localhost';
          $dbuser = 'root';
          $dbpass = '1234';
          $dbname = 'prime_mart';
          $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

         
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                if (isset($_POST['product_id1']) && isset($_POST['product_name1']) && isset($_POST['product_price1']) && isset($_POST['product_image1'])) {

                    $product_id = $_POST['product_id1'];
                    $product_name = $_POST['product_name1'];
                    $product_price = $_POST['product_price1'];
                    $product_image = $_POST['product_image1'];

                    $select_query = "select * from addtocart";
                    $result = mysqli_query($conn, $select_query);

                    if ($result->num_rows > 0) { 
                      while ($row = $result->fetch_assoc()) {

                        if($product_id == $row['ProductID']) {
                            goto cart_item;
                        }
                        else {
                          goto insert_operation1;

                        }
                      }
                    }
                    else {
                          goto insert_operation1;
                    }

                    insert_operation1:

                            $query ="insert into addtocart (ProductID, ProductName, ProductPrice, ProductImage) values ('$product_id ','$product_name', '$product_price', '$product_image')";
                            $insert = mysqli_query($conn, $query);
                            
                            goto cart_item;
                
                }


                if (isset($_POST['product_id2']) && isset($_POST['product_name2']) && isset($_POST['product_price2']) && isset($_POST['product_image2'])) {

                    $product_id = $_POST['product_id2'];
                    $product_name = $_POST['product_name2'];
                    $product_price = $_POST['product_price2'];
                    $product_image = $_POST['product_image2'];

                    $select_query = "select * from addtocart";
                    $result = mysqli_query($conn, $select_query);

                    if ($result->num_rows > 0) { 
                      while ($row = $result->fetch_assoc()) {

                        if($product_id == $row['ProductID']) {
                            goto cart_item;
                        }
                        else {
                          goto insert_operation2;

                        }
                      }
                    }
                    else {
                          goto insert_operation2;
                    }

                    insert_operation2:

                      $query ="insert into addtocart (ProductID, ProductName, ProductPrice, ProductImage) values ('$product_id ','$product_name', '$product_price', '$product_image')";
                      $insert = mysqli_query($conn, $query);
                      
                      goto cart_item;

                }

                if (isset($_POST['product_id3']) && isset($_POST['product_name3']) && isset($_POST['product_price3']) && isset($_POST['product_image3'])) {

                    $product_id = $_POST['product_id3'];
                    $product_name = $_POST['product_name3'];
                    $product_price = $_POST['product_price3'];
                    $product_image = $_POST['product_image3'];

                    $select_query = "select * from addtocart";
                    $result = mysqli_query($conn, $select_query);

                    if ($result->num_rows > 0) { 
                      while ($row = $result->fetch_assoc()) {

                        if($product_id == $row['ProductID']) {
                            goto cart_item;
                        }
                        else {
                          goto insert_operation3;

                        }
                      }
                    }
                    else {
                          goto insert_operation3;
                    }

                    insert_operation3:

                      $query ="insert into addtocart (ProductID, ProductName, ProductPrice, ProductImage) values ('$product_id ','$product_name', '$product_price', '$product_image')";
                      $insert = mysqli_query($conn, $query);
                      
                      goto cart_item;

                }


                if (isset($_POST['product_id4']) && isset($_POST['product_name4']) && isset($_POST['product_price4']) && isset($_POST['product_image4'])) {

                    $product_id = $_POST['product_id4'];
                    $product_name = $_POST['product_name4'];
                    $product_price = $_POST['product_price4'];
                    $product_image = $_POST['product_image4'];

                    $select_query = "select * from addtocart";
                    $result = mysqli_query($conn, $select_query);

                    if ($result->num_rows > 0) { 
                      while ($row = $result->fetch_assoc()) {

                        if($product_id == $row['ProductID']) {
                            goto cart_item;
                        }
                        else {
                          goto insert_operation4;

                        }
                      }
                    }
                    else {
                          goto insert_operation4;
                    }

                    insert_operation4:

                      $query ="insert into addtocart (ProductID, ProductName, ProductPrice, ProductImage) values ('$product_id ','$product_name', '$product_price', '$product_image')";
                      $insert = mysqli_query($conn, $query);

                      goto cart_item;

                }

                if (isset($_POST['product_id5']) && isset($_POST['product_name5']) && isset($_POST['product_price5']) && isset($_POST['product_image5'])) {

                    $product_id = $_POST['product_id5'];
                    $product_name = $_POST['product_name5'];
                    $product_price = $_POST['product_price5'];
                    $product_image = $_POST['product_image5'];

                    $select_query = "select * from addtocart";
                    $result = mysqli_query($conn, $select_query);

                    if ($result->num_rows > 0) { 
                      while ($row = $result->fetch_assoc()) {

                        if($product_id == $row['ProductID']) {
                            goto cart_item;
                        }
                        else {
                          goto insert_operation5;

                        }
                      }
                    }
                    else {
                          goto insert_operation5;
                    }

                    insert_operation5:

                      $query ="insert into addtocart (ProductID, ProductName, ProductPrice, ProductImage) values ('$product_id ','$product_name', '$product_price', '$product_image')";
                      $insert = mysqli_query($conn, $query);
                      
                      goto cart_item;

                }

                if (isset($_POST['product_id6']) && isset($_POST['product_name6']) && isset($_POST['product_price6']) && isset($_POST['product_image6'])) {

                    $product_id = $_POST['product_id6'];
                    $product_name = $_POST['product_name6'];
                    $product_price = $_POST['product_price6'];
                    $product_image = $_POST['product_image6'];

                    $select_query = "select * from addtocart";
                    $result = mysqli_query($conn, $select_query);

                    if ($result->num_rows > 0) { 
                      while ($row = $result->fetch_assoc()) {

                        if($product_id == $row['ProductID']) {
                            goto cart_item;
                        }
                        else {
                          goto insert_operation6;

                        }
                      }
                    }
                    else {
                          goto insert_operation6;
                    }

                    insert_operation6:

                      $query ="insert into addtocart (ProductID, ProductName, ProductPrice, ProductImage) values ('$product_id ','$product_name', '$product_price', '$product_image')";
                      $insert = mysqli_query($conn, $query);
                      
                      goto cart_item;

                }

                if (isset($_POST['product_id7']) && isset($_POST['product_name7']) && isset($_POST['product_price7']) && isset($_POST['product_image7'])) {

                    $product_id = $_POST['product_id7'];
                    $product_name = $_POST['product_name7'];
                    $product_price = $_POST['product_price7'];
                    $product_image = $_POST['product_image7'];

                    $select_query = "select * from addtocart";
                    $result = mysqli_query($conn, $select_query);

                    if ($result->num_rows > 0) { 
                      while ($row = $result->fetch_assoc()) {

                        if($product_id == $row['ProductID']) {
                            goto cart_item;
                        }
                        else {
                          goto insert_operation7;

                        }
                      }
                    }
                    else {
                          goto insert_operation7;
                    }

                    insert_operation7:

                      $query ="insert into addtocart (ProductID, ProductName, ProductPrice, ProductImage) values ('$product_id ','$product_name', '$product_price', '$product_image')";
                      $insert = mysqli_query($conn, $query);
                      
                      goto cart_item;

                }

                if (isset($_POST['product_id8']) && isset($_POST['product_name8']) && isset($_POST['product_price8']) && isset($_POST['product_image8'])) {

                    $product_id = $_POST['product_id8'];
                    $product_name = $_POST['product_name8'];
                    $product_price = $_POST['product_price8'];
                    $product_image = $_POST['product_image8'];

                    $select_query = "select * from addtocart";
                    $result = mysqli_query($conn, $select_query);

                    if ($result->num_rows > 0) { 
                      while ($row = $result->fetch_assoc()) {

                        if($product_id == $row['ProductID']) {
                            goto cart_item;
                        }
                        else {
                          goto insert_operation8;

                        }
                      }
                    }
                    else {
                          goto insert_operation8;
                    }

                    insert_operation8:

                      $query ="insert into addtocart (ProductID, ProductName, ProductPrice, ProductImage) values ('$product_id ','$product_name', '$product_price', '$product_image')";
                      $insert = mysqli_query($conn, $query);

                      goto cart_item;

                }
                

            }
              cart_item:


              $select_query = "select * from addtocart";
              $result = mysqli_query($conn, $select_query);

              if ($result->num_rows > 0) {
                // echo "<table border = 1>"

                echo "<div class=\Header\>";
                echo "<h3 class=\Heading\>Shopping Cart</h3>";
                echo "</div>";
  
                while ($row = $result->fetch_assoc()) {

                  $product_id = $row['ProductID'];
                  $product_name = $row['ProductName'];
                  $product_price = $row['ProductPrice'];
                  $product_image = $row['ProductImage'];

                  
                  // echo "<tr>"
                  // echo "<td>".$product_image."<td>";
                  // echo "<td>".$product_name."</td>";
                  // echo "<td>".$product_price."</td>";
                  // echo "</tr>"
                  



                  // echo "<div class=\Cart-Items pad\>";  
                  // echo "<div class=\image-box\>";
                  // echo "<img src=\.$product_image.\ style='height: 120px;'>";
                  // echo "</div>";
                  // echo "<div class=\about\>";
                  // echo "<h1 class=\title\>".$product_name."</h1>";
                  // echo "</div>";
                  
                  // echo "<div class=\prices\>";
                  // echo "<div class=\amount\ style='color: black;'>'.$product_price.'</div>"; 
                  // echo "<div class=\remove\><u>Remove</u></div>";
                  // echo "</div>";
                  // echo "<br>";
                  // echo "<hr>";

                  echo "<div class=\Cart-Items pad\>";
                  echo "<div class=\image-box\>";
                  echo "<img src=\ . $product_image . style='height: 120px;'>";
                  echo "</div>";
                  echo "<div class=\about\>";
                  echo "<h1 class=\title\>" . $product_name . "</h1>";
                  echo "</div>";
                  echo "<div class=\prices\>";
                  echo "<div class=\amount\ style='color: black;'>" . $product_price . "</div>";
                  echo "<div class=\remove\><u>Remove</u></div>";
                  echo "</div>";
                  echo "<hr>";
                  echo "</div>";



                  // echo "<div class=\counter\>";
                  // echo "<div class=\btn\>+</div>";
                  // echo "<div class=\count\>2</div>";
                  // echo "<div class=\btn\>-</div>";
                  // echo "</div>";

                  // $a++;
                }

                // echo "</table>"
              }
              else {

                
                echo "<h1 class=\Heading-no-item\>No Items in cart</h1>";
                
                
              }

          ?>

  <!-- <div class="checkout">
    <div class="total">
      <div>
        <div class="Subtotal">Sub-Total</div>
        <div class="items">2 items</div>
      </div>
      <div class="total-amount">$6.18</div>
    </div>
    <button class="button">Checkout</button>
  </div>
  </div> -->
</body>

</html>