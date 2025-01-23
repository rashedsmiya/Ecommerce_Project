<?php 

   include("./config.php");
   
   $getStudents=$conn->prepare("SELECT * FROM students");
   $getStudents->execute();
   $students=$getStudents->fetchAll();

   echo "<table border='1'>";
   foreach($students as $student){
      echo "<tr> 
      <td>". $student['name']."</td>
      <td>". $student['course']."</td>
      <td>". $student['batch']."</td>
      <td>". $student['city']."</td>
      <td>". $student['year']."</td>
      </tr>";
   } 

   echo "<table>";

   




