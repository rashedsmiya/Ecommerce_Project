<?php 

    $connection = mysqli_connect('localhost', 'root', '', 'users');

    if(!$connection){
      die("Not connected.". mysqli_error($connection));
    } 
      
    if(isset($_REQUEST['edit_id'])){

        $Rcvd_id = $_REQUEST['edit_id'];

        $get_info = "SELECT * FROM user_info WHERE id = $Rcvd_id";

        $select_info = mysqli_query($connection, $get_info);

        while($row = mysqli_fetch_assoc($select_info)){
            echo $row['username'];
?>
        <form action="index.php" method="post"> 
            <input type="text" name="username" value="<?php echo $row['username']; ?>" placeholder="username">
            <input type="email" name="email" value="<?php echo $row['email']; ?>" placeholder="email">
            <input type="password" name="password" value="<?php echo $row['password']; ?>" placeholder="password">
            <input type="submit" name="submit" value="Update Date">
        </form>
<?php 
     

        }
    }

?>



