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
        if(!$create){
            echo "<script>alert('Something went worng')</script>";
        } else{
            echo "<script>alert('Student added sucessfully')</script>";
        }
    }

?>  

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
                        <a href="crud.php?uid=<?= $user['id'] ?>"><button>Delete</button></a>
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
  
 