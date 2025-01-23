<?php 

    $conn = new mysqli('localhost', 'root', '', 'school');

    $sql = "DELETE FROM students WHERE students . id = 1";

    if($conn->query($sql)){
        echo "Deleted Sucessfully";
    } else{
        echo "Faile To Delate";
    } 