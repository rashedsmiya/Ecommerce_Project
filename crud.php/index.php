<?php 

    $conn = mysqli_connect("localhost", "root", "", "cmbd245");
    if(!$conn){
        echo "Database connection failed";
    } else {
        echo "Database connection successfull";
    }

    