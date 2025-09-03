<?php
$conn = new mysqli("localhost", "root", "", "project_db");
$result = $conn->query("SELECT * FROM project");
echo "<h2>Registered Students</h2>";
echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Email</th><th>Course</th><th>Registred AT</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row['id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['email'] . "</td><td>" . $row['course'] . "</td><td>" .  "</td></tr>";
} 
echo "</table>";
$conn->close();
?>