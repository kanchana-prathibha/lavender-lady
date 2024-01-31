<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Orders</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php
@include 'database.php';
$select = mysqli_query($conn, "SELECT * FROM orders");
?>

<?php
if (mysqli_num_rows($select) > 0) {
    echo "<table>";
    echo "<tr><th>Order ID</th><th>Order Date</th><th>Price</th><th>Quantity</th><th>Customer ID</th><th>Product ID</th><th>Cart ID</th><th>Name</th><th>Size</th><th>Photo</th><th>Delivery Status</th><th>Location</th></tr>";

    // Output data of each row
    while($row = mysqli_fetch_assoc($select)) {
        echo "<tr>";
        echo "<td>" . $row["orderId"] . "</td>";
        echo "<td>" . $row["orderDate"] . "</td>";
        echo "<td>" . $row["price"] . "</td>";
        echo "<td>" . $row["quantity"] . "</td>";
        echo "<td>" . $row["customerId"] . "</td>";
        echo "<td>" . $row["productId"] . "</td>";
        echo "<td>" . $row["cartId"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["size"] . "</td>";
        echo "<td>" . $row["photo"] . "</td>";
        echo "<td>" . $row["deliveryStatus"] . "</td>";
        echo "<td>" . $row["location"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>

</body>
</html>
