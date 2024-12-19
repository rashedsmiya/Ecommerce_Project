<?php 

     $connection = mysqli_connect('localhost', 'root', '', 'users');

     if(!$connection){
       die("Not Connection.". mysqli_error($connection));
     }

     $query = "SELECT * FROM user_info";

     $adanprodun = mysqli_query($connection, $query);

     $count = mysqli_num_rows($adanprodun);

     if($count > 0){

     if(isset($_REQUEST['deleted'])){
          echo "<font color='green'>Date Deleted</font>";
     }
?>

<table class="table">
      <thead class="thead-dark">
          <tr>
               <th>ID</th>
               <th>Name</th>
               <th>Email</th>
               <th>Password</th>
               <th>Action</th>
          </tr>
</thead>

 <?php

     while($row = mysqli_fetch_assoc($adanprodun)) {
           
          $db_id       =    $row['id'];
          $username    =    $row['username'];  
          $email       =    $row['email']; 
          $password    =    $row['password'];

?>
       
          <tbody>
               <tr>
                    <td><?php echo $db_id; ?></td>
                    <td><?php echo $username; ?></td>
                    <td><?php echo $email; ?></td>
                    <td><?php echo $password; ?></td>
                    <td><a href="single_data_edit.php?edit_id=<?php echo $db_id; ?>">Edit</a> || <a href="delete.php?id=<?php echo $db_id ?>">Delete</a></td>
               </tr>
          </tbody>

   <?php   
        
     } 
?>

</table>   

<?php 

} else{
echo "You don't have any data in your database";
}
 
