<?php 
require_once './header.php';
?>

<div class="container">
    <div class="row min-vh-100 d-flex">
        <div class="col-md-4 border rounded shadow p-3 m-auto">
            <h3 class="mb-3">Sign Up</h3>
            <form action="mb-4" method="post">
                <div class="mb-3">
                    <input type="text" placeholder="First Name" name="fname" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="email" placeholder="Email" name="email" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="password" placeholder="Passwoerd" name="password" class="form-control">
                </div>
            </form>
        </div>
    </div>
</div>

 
<?php 
require_once './footer.php';
?>