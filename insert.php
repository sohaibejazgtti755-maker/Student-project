<?php

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "project_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name   = $_POST['name'] ;
    $email  = $_POST['email'] ;
    $course = $_POST['course'] ;

    if (!empty($name) && !empty($email) && !empty($course)) {
        $sql = "INSERT INTO project (name, email, course)
                VALUES ('$name', '$email', '$course')";

        if ($conn->query($sql) === TRUE) {
            echo "New student registered successfully! <br>";
            echo "<a href='view.php'>View Students</a>";
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "Please fill all fields!";
    }
}

$conn->close();
?>