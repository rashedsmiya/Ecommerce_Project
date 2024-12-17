<?php 

    $conn = new mysqli('localhost', 'root', '', 'school');
    $sql = "SELECT * FROM students";
    $result = $conn->query($sql);

    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Students</title>
</head>
<body>

    <div class="container">

    <div class="row clearfix">
         <div class="col-md-2">

         </div>
<div class="col-md-8">
    <h1>Student list</h1>
    <a href="insert.php" class="btn">Add Student</a>
    <br><br>
    <table class="table table-bordered table-sm">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Roll</th>
                <th>Reg</th>
                <th>Date of Birth</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $result->fetch_assoc()) { ?>
              <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['roll']; ?></td>
                <td><?php echo $row['gpa']; ?></td>
                <td><?php echo $row['dob']; ?></td>
              </tr>
              <?php } ?>
        </tbody>
    </table>
</div>
    
</body>
</html>



