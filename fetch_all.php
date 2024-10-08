<?php
include 'dbconfig.php';

$sql = "SELECT * FROM profiles";
$stmt = $conn->prepare($sql);
$stmt->execute();

$profiles = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($profiles);
echo "</pre>";
?>
