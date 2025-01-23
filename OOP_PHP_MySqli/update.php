<?php 

    $conn = new mysqli('localhost', 'root', '', 'school');
    $name = "Rasel";
    $age = 19;
    $id = 14;
    $dob = "1000-22-23";

    $sql = "UPDATE students 
            SET name = 'Raj',
                age  = $age,
                dob  = '$dob' 
            WHERE id = $id";
    if( $conn->query($sql) ){
        echo "Update Successfully";
    } else{
        echo "File TO Update";
    }



