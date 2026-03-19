<?php
require 'db.php';
$id = $_GET['id']; 


$stmt = $pdo->prepare("SELECT * FROM inventory WHERE id = ?");
$stmt->execute([$id]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = "UPDATE inventory SET item_name=?, category=?, quantity=?, price=? WHERE id=?";
    $pdo->prepare($sql)->execute([$_POST['item'], $_POST['cat'], $_POST['qty'], $_POST['pri'], $id]);
    header("Location: read.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head><title>Edit Item</title> <link rel="stylesheet" href="styles.css"> </head>
<body>
    <h2>Edit Farm Item</h2>
    <form method="POST">
        <label>Item:</label>
        <input type="text" name="item" value="<?= $row['item_name'] ?>" required><br>
        
        <label>Category:</label>
        <input type="text" name="cat" value="<?= $row['category'] ?>" required><br>
        
        <label>Qty:</label>
        <input type="number" name="qty" value="<?= $row['quantity'] ?>" required><br>
        
        <label>Price:</label>
        <input type="number" step="0.01" name="pri" value="<?= $row['price'] ?>" required><br>
        
        <button type="submit">Update Item</button>
    </form>
    <a href="read.php">Cancel</a>
</body>
</html>