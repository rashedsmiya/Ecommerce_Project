<?php 

   $host = "localhost";
   $username = "root";
   $password = null;

   try {
      $conn = new PDO("mysql:host=$host;dname=college",$username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      echo "Connect Done";
   }catch(PDOException $err){
      echo "connect filed $err->getMessage()";
   }

   echo "<br/>";
   $result = $conn->query("show table");
   while($row = $result->fetch(PDO::FETCH_NUM)){
      print_r($row);
   };
?>