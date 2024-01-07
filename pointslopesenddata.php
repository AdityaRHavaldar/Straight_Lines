<?php
// Establish a database connection
$mysqli = new mysqli("localhost", "root", "", "test");

// Check for a successful connection
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

// Get data from the AJAX request
$x = $_POST['x'];
$y = $_POST['y'];
$slope = $_POST['slope'];
$equation = $_POST['equation'];

// Perform database insertion
$sql = "INSERT INTO point_slope_form (x, y, slope, equation) VALUES (?, ?, ?, ?)";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("ddds", $x, $y, $slope, $equation);

if ($stmt->execute()) {
    echo "Data inserted successfully.";
} else {
    echo "Error: " . $stmt->error;
}

// Close the database connection
$stmt->close();
$mysqli->close();
?>
