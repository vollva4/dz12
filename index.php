
<?php
$pdo = new PDO("mysql:host=127.0.0.1;dbname=global;charset=utf8", "avolvach", 'neto1512');
$sql = "SELECT * FROM books";
$stmt = $pdo->query($sql);
?>