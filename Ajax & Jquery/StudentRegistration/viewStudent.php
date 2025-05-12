<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);



include 'dbConn.php';

// Set content type header for HTML response
header('Content-Type: text/html; charset=UTF-8');

$sql = "SELECT * FROM students"; // Corrected table name
$result = $conn->query($sql);

// Check if the query was successful
if ($result === false) {
    echo "<h3>Error in fetching student data. Please try again later.</h3>";
    exit;
}

if ($result->num_rows > 0) {
    echo "<table class='table table-bordered table-striped table-hover' id='studentTable'>";
    echo "<tr><th>Student ID</th><th>First Name</th><th>Middle Name</th><th>Last Name</th><th>Sex</th><th>Batch</th><th>Department</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row["stuId"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["fName"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["mName"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["lName"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["sex"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["batch"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["dep"]) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<h3>No students found.</h3>";
}

$conn->close();
?>
