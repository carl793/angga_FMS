<?php
require 'db.php';
$id = $_GET['id'];

$pdo->prepare("DELETE FROM inventory WHERE id = ?")->execute([$id]);

header("Location: read.php");
?>