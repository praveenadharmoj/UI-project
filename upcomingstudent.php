<?php
session_start();
include 'database.php';
include 'includes/header.php';
include 'includes/navbar.php';
?>

<script type="text/javascript">  
        (function () {  
            'use strict';  
            window.addEventListener('load', function () {  
                var form = document.getElementById('needs-validation');  
                form.addEventListener('submit', function (event) {  
                    if (form.checkValidity() === false) {  
                        event.preventDefault();  
                        event.stopPropagation();  
                    }  
                    form.classList.add('was-validated');  
                }, false);  
            }, false);  
        })();  

    </script>  
</head>  
<body>  
    <div class="container py-5">  
        <div class="row">  
            <div class="offset-sm-1 col-md-11 offset-sm-1">  
            <?php
if(isset($_SESSION['success'])){
echo '<h2>'.$_SESSION['success'].'</h2>';
unset($_SESSION['success']);
}
if(isset($_SESSION['status'])){
echo '<h2>'.$_SESSION['status'].'</h2>';
unset($_SESSION['status']);
}
?>
         
                <div class="card">  
                    <div class="card-header bg-primary text-white">  
                        <h4 class="card-title text-uppercase">Upcoming Students Form</h4>  
                    </div>  
                    <div class="card-body">  
                   

                        <form action="code.php" Method="POST" id="needs-validation" novalidate>  
                        <div class="row">  
                        <div class="col-sm-4 col-md-4 col-xs-12">  
                            <input type="hidden" name="Id" id="Id" >
                                    <div class="form-group">  
                                        <label for="Full Nmae">Full Name</label>  
                                        <input type="text" style="border-top-style: hidden;border-right-style: hidden;  border-left-style: hidden;border-bottom-style: groove;"
                                        class="form-control" id="fname" name="fname" placeholder="Enter Full Name" aria-describedby="inputGroupPrepend" required>  
                                        <div class="invalid-feedback">  
                                            Please provide Full Name.  
                                        </div>  
                                    </div>  
                                </div>  
                                <div class="col-sm-4 col-md-4 col-xs-12">  
                                    <div class="form-group">  
                                        <label for="">Mobile Number </label>  
                                        <input type="text"  style="border-top-style: hidden;border-right-style: hidden;  border-left-style: hidden;border-bottom-style: groove;"
                                        class="form-control" id="mobileNumber" name="mobileNumber" placeholder="Enter Mobile Number" aria-describedby="inputGroupPrepend" required>  
                                        <div class="invalid-feedback">  
                                        Please provide Mobile Number.  
                                        </div>  
                                    </div>  
                                </div>  
                                <div class="col-sm-4 col-md-4 col-xs-12">  
                                    <div class="form-group">  
                                        <label for="">Email Id </label>  
                                        <input type="email"  style="border-top-style: hidden;border-right-style: hidden;  border-left-style: hidden;border-bottom-style: groove;"
                                        class="form-control" id="email" name="email" placeholder="Enter Emailid" aria-describedby="inputGroupPrepend" required>  
                                        <div class="invalid-feedback">  
                                        Please provide Emailid.  
                                        </div>  
                                    </div>  
                                </div>  
                                  
                            </div>  
                           
                            <div class="row">  
                                <div class="col-sm-12 col-md-12 col-xs-12">  
                                    <div class="float-right">  
                                        <button class="btn btn-danger rounded-0" type="submit">Cancel</button>  
                                        <button class="btn btn-primary rounded-0" type="submit" name="saveDetails1">Save</button>  
                                    </div>                            
                                </div>  
                            </div>  
                        </form>  
                    </div>  
                </div>  
            </div>  
        </div>  
    </div>  
    <?php
include 'includes/script.php';

?>
