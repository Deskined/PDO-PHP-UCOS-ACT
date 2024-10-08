<?php
include 'dbconfig.php';

$sql = "UPDATE profiles SET bio = :bio WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':bio', $bio);
$stmt->bindParam(':id', $id);

$bio = 'Updated bio for the profile.';
$id = 3;

if ($stmt->execute()) {
    echo "Record updated successfully";
} else {
    echo "Error updating record";
}
?>
