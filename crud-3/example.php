<?php 

    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $email    = $_POST['email'];
        $password = $_POST['password'];

        if($username && $email && $password){
               
        }

        $connection = mysqli_connect('localhost', 'root', '', 'users');

        if(!$connection){
           die("Not connected.". mysqli_error($connection));
    } 

    $query = "INSERT INTO user_info(username, email, password)";
    $query .="VALUES ('$username', '$email', '$password')";

    $resul = mysqli_query($connection, $query);

    if(!$resul){
        die("Not inserted". mysqli_error());
    } else{
       echo "Any field cannot be";
    }  
 }  

?>

<form action="index.php" method="post">
       <input type="text" name="username" placeholder="username">
       <input type="email" name="email" placeholder="email">
       <input type="password" name="password" placeholder="password">
       <input type="submit" name="submit">
</form>


<?php 

     $connection = mysqli_connect('localhost', 'root', '', 'users');

     if(!$connection){
       die("Not Connection.". mysqli_error($connection));
     }

     $query = "SELECT * FROM user_info";

     $adanprodun = mysqli_query($connection, $query);

     $count = mysqli_num_rows($adanprodun);

     if($count > 0){

     while($row = mysqli_fetch_assoc($adanprodun)){
            echo "{$row['id']}";
            echo "<br>";
       
       echo "{$row['username']}";
       echo "<br>";

       echo "{$row['email']}";
       echo "<br>";

       echo "{$row['password']}";
       echo "<br>";

       echo "{$row['submit_date']}";
       echo "<br>";      
     }
     echo "$count";
     } else{
              echo "You don't have any data";
     }

?>


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
                    <td><a href="">Edit</a> || <a href="delete.php?id=<?php echo $db_id ?>">Delete</a></td>
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
 