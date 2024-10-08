<?php
include 'dbconfig.php';

$sql = "DELETE FROM profiles WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$id = 5; 

if ($stmt->execute()) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record";
}
?>
