<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return Request Confirmation</title>
</head>
<body>
<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve product name and pickup date from the form
    $productName = $_POST["myproduct"];
    $pickupDate = $_POST["mydate"];
    
    // Print the confirmation message
    echo "<h2>Return Request Confirmation</h2>";
    echo "<p>Your product '$productName' will be picked up on '$pickupDate'.</p>";
} else {
    // If the form is not submitted, display an error message
    echo "<h2>Error: Form not submitted</h2>";
    echo "<p>Please submit the return request form.</p>";
}
?>
</body>
</html>
