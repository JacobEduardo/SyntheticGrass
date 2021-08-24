<?php
require_once 'C:\xampp\htdocs\loan_system\web\views\essential\header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include("../head/head.php");
    ?>
</head>

<body class="bg-secondary">
    <div class="row text-light m-4 mt-5">

        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-auto">
                    <form method="POST" action="user_validate.php" name="signup-form">
                        <h5>Ingresar como administrador</h5>
                        <div class="form-group mt-4">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group mt-4">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <button type="submit" value="Ingresar" class="btn btn-primary mt-4">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <?php
        include("../body/body.php");
        ?>
    </div>
</body>

</html>