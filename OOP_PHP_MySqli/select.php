<?php 

    $conn = new mysqli('localhost', 'root', '', 'school');

    $sql = "SELECT * FROM students";

    $result = $conn->query($sql);
    
    // echo $result->num_rows;
  
    while($row = $result->fetch_assoc()){
        echo $row['id'] . ' Name : ' . $row['name'] . '<br>';
    }  
  
 
