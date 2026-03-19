<?php
require 'db.php';
$items = $pdo->query("SELECT * FROM inventory")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head><title>Farm Inventory</title> <link rel="stylesheet" href="styles.css"> </head>
<body>
    <h2>Current Inventory</h2>
    <a href="index.php">Add New Item</a>
    <table border="1">
        <tr>
            <th>Item</th><th>Category</th><th>Qty</th><th>Price</th><th>Action</th>
        </tr>
        <?php foreach ($items as $i): ?>
        <tr>
            <td><?= $i['item_name'] ?></td>
            <td><?= $i['category'] ?></td>
            <td><?= $i['quantity'] ?></td>
            <td><?= $i['price'] ?></td>
            <td>
                <a href="update.php?id=<?= $i['id'] ?>">Edit</a> | 
                <a href="delete.php?id=<?= $i['id'] ?>">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>