<?php 

require_once './header.php';
if(isset($_POST['signup123'])){

}

?>

<div class="container">
    <div class="row min-vh-100 d-flex">
        <div class="col-md-4 border rounded shadow p-3 m-auto">
            <h3 class="mb-3">Sign Up</h3>
            <form action="" method="post">
                <div class="row ">
                   <div class="col-6">
                    <input type="text" placeholder="First Name" name="fname" class="form-control">
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <input type="email" placeholder="Email" name="email" class="form-control">
                    </div> 
                    <div class="mb-6">
                        <input type="password" placeholder="Confirm Passwoerd" name="password" class="form-control">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

 
<?php 
require_once './footer.php';
?>