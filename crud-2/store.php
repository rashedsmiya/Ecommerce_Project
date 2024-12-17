<?php 
$name = $_POST['name'];
$roll = $_POST['roll'];
$reg = $_POST['reg'];
$dob = $_POST['dob'];

$conn = new mysqli('localhost', 'root', '', 'school');
$sql = "INSERT INTO students
        VALUES(NULL, '$name', $roll, $reg, '$dob')";

$conn->query($sql);