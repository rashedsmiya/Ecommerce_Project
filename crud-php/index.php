<?php 
     
    try {
        $conn = mysqli_connect("localhost", "root", "", "cmbd257");
        
    } catch (mysqli_sql_exception $e) {
        die("Coonection Failed : " . $e->getMessage());        
    }

    $readQuery = "SELECT * FROM `users`";
    $read = mysqli_query($conn, $readQuery);
    $users = mysqli_fetch_all($read, MYSQLI_ASSOC);

    if(isset($_POST['create'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $createQuery = "INSERT INTO `users` (`name`, `email`) VALUES ('$name', '$email')";
        $create = mysqli_query($conn, $createQuery);
    }

?>  

<?php if(!isset($_GET['uid']) && !isset($_GET['did'])) { ?>
<h2>All Users</h2>
<table border="1" cellspacing="0" cellpadding="10">
    <tr>
        <td>S.N</td>
        <td>Name</td>
        <td>Email</td>
        <td>Registered Date</td>
        <td>Action</td>
    </tr> 
    
    <?php 
    $sn = 1;
    foreach($users as $user) { ?>
            <tr>
                <td><?= $sn++ ?></td>
                <td><?= $user['name'] ?></td>  
                <td><?= $user['email'] ?></td>  
                <td>   
                    <?= date("F/d/Y h:i:s - A", strtotime($user['created_at'])) ?>
                </td>  
                <td>
                    <a href="index.php?uid=<?= $user['id'] ?>"><button>Update</button></a>
                    <a href="index.php?uid=<?= $user['id'] ?>"><button>Delete</button></a>
                </td>
            </tr>
        <?php } ?>
        </table>  
        <br><br>
        <h2>Add Student</h2>
        <form action="" method="POST">
            <input type="text" placeholder="User Name" name="name">
            <br><br>
            <input type="email" placeholder="User Email" name="email" require>
            <br><br>
            <input type="submit" value="Add Student" name="create"> 
        </form>
  
<?php } ?> 

<?php  

if (isset ($_POST['update'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $uid = $_GET['uid'];
    $updateQuery = "UPDATE `users` SET `name` = `$name`, `email` = '$email' WHERE `id` = $uid";
    $updat = mysqli_query($conn, $updateQuery);
    if(!$update){
        echo "<script>alert('Something went wrong')</script>";
    } else {
        echo "<script>alert('Student updated successfully')</script>"; 
    }
}
 
    if(isset($_GET['uid'])){
        $uid = $_GET['uid'];
        $userQuery = "SELECT * FROM `users` WHERE `id` = $uid";
        $runUserQuery = mysqli_query($conn, $userQuery);
        $user = mysqli_fetch_assoc($runUserQuery);
?>

    <h2>Update user</h2>
    <form action="" method="POST" >
        <input type="hidden" name="uid" value="<?= $user['id'] ?>">
        <input type="text" placeholder="User Name" name="name" required value="<?= $user['name'] ?>">
         <br>
        <input type="email" placeholder="User Email" name="email" required value="<?= $user['email'] ?>">
         <br>
        <input type="submit" value="Update Student" name="update">
        <a href="<?= basename($_SERVER['PHP_SELF']) ?>">
            <button type="button">Cancel</button>
        </a>
    </form>

<?php } ?>