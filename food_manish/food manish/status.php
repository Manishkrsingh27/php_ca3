<?php
include 'db.php';
$sql = "SELECT * FROM orders ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Order ID: " . $row["id"]. " - Pizza: " . $row["pizza_qty"] . " - Burger: " . $row["burger_qty"] . " - Status: " . $row["status"];
    }
} else {
    echo "No orders found.";
}
$conn->close();
?>
