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
         die("Not Inserted" . mysqli_error());
    }  
 }  

?>

<form action="index.php" method="post">

       <input type="text" name="username" placeholder="username">
       <input type="email" name="email" placeholder="email">
       <input type="password" name="password" placeholder="password">
       <input type="submit" name="submit">

</form>

