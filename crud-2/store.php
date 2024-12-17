<?php 
$name = $_POST['name'];
$roll = $_POST['roll'];
$reg = $_POST['reg'];
echo $dob = $_POST['dob'];

$conn = new mysqli('localhost', 'root', '', 'school');
$sql = "INSERT INTO students
        VALUES(NULL, '$name', $roll, $reg, '$dob')";

if($conn->query($sql)) {
        session_start(); 
        $_SESSION['msg'] = 'Student Added Successfully';
        header("Location: index.php");
}