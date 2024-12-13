<?php 

  if(isset($_POST['registertion'])){
    
    $name = $_POST['fullname'];
    $email = $_POST['email_address'];
    $password = $_POST['reg_password'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];

    if(!empty($name) && !empty($email) && !empty($password) && !empty($phone) && !empty($gender)){

    }else{
        $error = 'Please fill up the required field';
    }

  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php With mysql</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="col-md-8">
            <h2 class=text-sucess>Registration From</h2>
            <h3 class="text-danger">
                <?php 
                    if(isset($error)){
                        echo $error;
                    }
                ?>
            </h3>
        </div>
        <form action="" method="POST">
        <div class="form-group">
            <label for="">Fulll Name</label>
            <input type="text" placeholder="Full Name" name="fullname" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Email Address</label>
            <input type="email" placeholder="Email Address" name="email_address" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Enter a password</label>
            <input type="password" placeholder="Enter a strong password" name="reg_password" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Phone</label>
            <input type="tel" placeholder="Phone Number" name="phone" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Select your gender</label>
            <input type="radio"  name="gender" value="male"/> <label for="">Male</label>
            <input type="radio" name="gender" value="female"/> <label for="">Female</label>
        </div>
        <div class="form-group">
            <input type="submit" name="registertion" value="Sing Up" class="btn btn-success btn-block btn-lg"/>
        </div>
      </form>
    </div>
</body>
</html>