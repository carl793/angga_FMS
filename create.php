<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $item = $_POST['item'];
    $cat  = $_POST['category'];
    $qty  = $_POST['qty'];
    $pri  = $_POST['price'];

    $sql = "INSERT INTO inventory (item_name, category, quantity, price) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$item, $cat, $qty, $pri]);

    header("Location: read.php");
}
?>