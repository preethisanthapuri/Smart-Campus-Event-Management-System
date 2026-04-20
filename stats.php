<?php include 'db.php'; ?>

<h2>📊 Event Registration Statistics</h2>

<?php
$sql = "SELECT e.name, COUNT(r.id) AS total
        FROM events e
        LEFT JOIN registrations r ON e.id = r.event_id
        GROUP BY e.id";

$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
    echo "<p>{$row['name']} → {$row['total']} registrations</p>";
}
?>