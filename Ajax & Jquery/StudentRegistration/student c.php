<?php

$stuId = $_POST['studId'];
$fName = $_POST['fName'];   
$mName = $_POST['mName'];
$lName = $_POST['lName'];  
$sex = $_POST['sex'];
$batch = $_POST['batch'];
$dep = $_POST['dep']; 
$created_at = date('Y-m-d H:i:s');

echo $_POST['studId'];
echo "<br>";
echo $_POST['fName'];
echo "<br>";
echo $_POST['mName'];
echo "<br>";
echo $_POST['lName'];
echo "<br>";
echo $_POST['sex'];
echo "<br>";
echo $_POST['batch'];
echo "<br>";
echo $_POST['dep'];
echo "<br>";
echo $created_at;


//connection create

$host = "localhost";
$user = "root";
$password = "";
$database = "eyu_database";

$conn = new mysqli($host , $user, $password, $database);

//checkibng

if($conn->connect_error){
    die("<h3 style='color: red;'>Not Connected: ". $conn->connect_error."</h3>");
}
else{
    echo "<h3 style='color: green;'>Connected Success-fully to eyu_database </h3>";
}

//close connection



//insert data into database

$sqlString = "INSERT INTO student (studId, fName, mName, lName, sex, batch, dep)
              VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sqlString);

if ($stmt) {
    $stmt->bind_param("ssssssi", $studId, $fName, $mName, $lName, $sex, $batch, $dep); // Corrected bind_param types and count

    if ($stmt->execute()) {
        echo "<h3 style='color: green;'>New Record created Successfully! </h3>";
    } else {
        die("<h3 style='color: red;'>Execute Failed: " . $stmt->error . "</h3>");
    }

    $stmt->close();
} else {
    die("<h3 style='color: red;'>Prepare Failed: " . $conn->error . "</h3>");
}

$sql = "SELECT * FROM student"; // Corrected table name
$result = $conn->query($sql);

if ($result) {
    echo "<pre>";
    print_r($result->fetch_all(MYSQLI_ASSOC)); // Fetch all rows as an associative array
    echo "</pre>";
    $result->free(); // Free the result set
} else {
    echo "<h3 style='color: red;'>Error fetching data: " . $conn->error . "</h3>";
}

$conn->close();

?> 