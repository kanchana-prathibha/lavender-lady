<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <title>Owner Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #b2bec3;
        }
        #chart-container {
            width: 100%;
            max-width: 1200px;
            margin: 50px auto;
        }
        canvas {
            border: 1px solid #ddd;
            background-color: #fff;
        }
    </style>
</head>
<body>
<div id="chart-container">
    <canvas id="myBarChart"></canvas>
</div>
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
<script>
    // Dummy data
    const labels = ['December', 'January', 'March', 'April', 'May   '];
    const data = {
        labels: labels,
        datasets: [{
            label: 'Orders In lavanderLady',
            backgroundColor: '#81ecec',
            borderColor: '#0984e3',
            borderWidth: 2,
            data: [5, 7, 0, 0, 0],
        }]
    };

    // Create the bar chart
    const ctx = document.getElementById('myBarChart').getContext('2d');
    const myBarChart = new Chart(ctx, {
        type: 'bar',
        data: data,
    });
</script>
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
<!-- Include Chart.js library -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>
</html>
