<?php
include 'dbconfig.php';

$sql = "SELECT * FROM profiles WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$id = 1; 
$stmt->execute();

$profile = $stmt->fetch(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($profile);
echo "</pre>";
?>
