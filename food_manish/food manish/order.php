<?php
include 'db.php';

$pizza_qty = $_POST['pizza_qty'];
$burger_qty = $_POST['burger_qty'];
$total = ($pizza_qty * 10) + ($burger_qty * 8);

$sql = "INSERT INTO orders (pizza_qty, burger_qty, total, status) VALUES ('$pizza_qty', '$burger_qty', '$total', 'pending')";

if ($conn->query($sql) === TRUE) {
    echo "<p>Order placed successfully! Your total is $$total. Track your order <a href='status.php'>here</a>.</p>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
