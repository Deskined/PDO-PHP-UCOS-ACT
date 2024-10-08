<?php
include 'dbconfig.php';

$sql = "SELECT * FROM profiles";
$stmt = $conn->prepare($sql);
$stmt->execute();

$profiles = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<table border='1'>
        <tr>
            <th>ID</th>
            <th>User ID</th>
            <th>Bio</th>
            <th>Avatar URL</th>
        </tr>";

foreach ($profiles as $profile) {
    echo "<tr>
            <td>{$profile['id']}</td>
            <td>{$profile['user_id']}</td>
            <td>{$profile['bio']}</td>
            <td>{$profile['avatar_url']}</td>
        </tr>";
}

echo "</table>";
?>
