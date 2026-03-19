<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h2>Farm Inventory System</h2>
<form action="create.php" method="POST">

    <input type="text" name="item" placeholder="Item Name (e.g. Rice Seeds)" required>

    <input type="text" name="category" placeholder="Category (e.g. Seeds)" required>

    <input type="number" name="qty" placeholder="Quantity" required>

    <input type="number" step="0.01" name="price" placeholder="Price per Unit" required>

    <button type="submit">Add to Inventory</button>
</form>
<a href="read.php">View Inventory</a>
</body>
</html>