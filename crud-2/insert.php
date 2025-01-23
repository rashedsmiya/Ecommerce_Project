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
         <div class="col-md-3"></div>
         <div class="col-md-6">
         <h1>Add New Student</h1>

         <form action="store.php" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Name"> 
            </div>

            <div class="form-group">
                <label for="roll">Roll</label>
                <input type="text" class="form-control" name="roll" placeholder="Enter Roll"> 
            </div>

            <div class="form-group">
                <label for="roll">Reg</label>
                <input type="text" class="form-control" name="reg" placeholder="Enter reg"> 
            </div>

            <div class="form-group">
                <label for="roll">Date of Birth</label>
                <input type="date" class="form-control" name="dob" placeholder="Enter Date of Birth"> 
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
     </form>

      </div>
   </div>
</div>
</body>
</html>



