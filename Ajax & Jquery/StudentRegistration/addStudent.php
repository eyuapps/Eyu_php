<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

//this line is to exchange data by json or informing the browser as we used json
header('Content-Type: application/json');
include 'dbConn.php';
$response = [];
$stuId = $_POST['stuId'];
$fName = $_POST['fName'];
$mName = $_POST['mName'];
$lName = $_POST['lName'];
$sex = $_POST['sex'];
$batch = $_POST['batch'];
$dep = $_POST['dep'];
$sqlString = "INSERT INTO students (stuId, fName, mName,
lName, sex, batch, dep)
VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sqlString);
$stmt->bind_param("sssssis", $stuId, $fName, $mName, $lName,
$sex, $batch, $dep);
if (!$stmt->execute())
{
$response['status'] = 'success';
$response['message'] = 'Student not added ';
}
else {
$response['status'] = 'success';
$response['message'] = 'Student added successfully!';
}
$stmt->close();
$conn->close();
echo json_encode($response);
?>

