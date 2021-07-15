<?php
session_start();

include 'includes/header.php';

?>
<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
        <?php

if(isset($_SESSION['status']))
{
  echo  '<h2 style="text-align:center;padding-top:30px">'.$_SESSION['status'].'</h2>';
    unset($_SESSION['status']);
}
?>

            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block"></div>
                    <div class="col-lg-8 m-auto">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                            </div>
                            <form class="user" action="code.php" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                        name="user" aria-describedby="emailHelp"
                                        placeholder="Enter Username...">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user"
                                        name="pwd" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small" style="float:left">
                                        <input type="checkbox" class="custom-control-input" id="customCheck">
                                        <label class="custom-control-label" for="customCheck">Remember
                                            Me</label>
                                    </div>
                                </div>
                                <button type="submit" name="login" class="btn btn-primary btn-user btn-block">
                                    Login
</button>
                                <hr>


                            </form>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>
<?php
include 'includes/script.php';

?>