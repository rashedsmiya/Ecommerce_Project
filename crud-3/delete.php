<?php 

     $connection = mysqli_connect('localhost', 'root', '', 'users');

     if(!$connection){
       die("Not Connection.". mysqli_error($connection));
     }

     echo $recv = $_REQUEST['id'];

     $query = "DELETE FROM user_info WHERE id = $recv";
     
     $run_delete_query = mysqli_query($connection, $query);

     if($run_delete_query){
        header("location: index.php?deleted");
     }

      