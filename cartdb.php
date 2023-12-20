<?php
session_start();
include("connectiondb.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if(isset($_POST['user_id'])){
        $userId=$_POST['user_id'];
    }else{
        header("login.php");
    }

    // Iterate through the cart items and insert into the 'cart' table
    foreach ($_POST['cart'] as $productId => $quantity) {
        $sanitizedProductId =getpid();
        $sanitizedQuantity = sanitizeAndValidate($quantity);

        // Assuming you have a function to get the price based on the product ID
        $price = getPriceFromDatabase($sanitizedProductId);

        // Calculate subtotal
        $subtotal = $sanitizedQuantity * $price;

        // Perform the database insertion
        $query = "INSERT INTO cart (customerid, productid, quantity, price) 
                  VALUES ($userId, $sanitizedProductId, $sanitizedQuantity, $subtotal)";
        // Execute the query using your database connection
        // ...

        // You may also want to handle errors and provide appropriate feedback to the user
    }

    // Redirect the user to a thank-you page or any other page
    header("Location: thank_you.php");
    exit();
}

// Function to sanitize and validate input


// Function to get the price from the database based on the product ID
function getPriceFromDatabase($productId) {
    // Implement your logic to retrieve the price from the database
    // ...

    return $price;
}
?>