<?php
   
   $conn = new mysqli('localhost', 'root', '', 'school');
   
   $name = "Sakib";
   $class_id = 5;
   $roll = 12;
   $age = 24;
   $gpa = 4.55;
   $dob = "1998-22-29";

   $sql = "INSERT INTO students 
           VALUES(NULL, $class_id, '$name', $roll, $age, $gpa, '$dob');"; 
   
   if($conn->query($sql)){
      echo "Inserted Successfully";
   } else{
      echo "Not Inserted";
   }
         

    

