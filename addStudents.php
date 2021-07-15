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
        function getAge(){
    var dob = document.getElementById('dob').value;
    dob = new Date(dob);
    var today = new Date();
    var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
    document.getElementById('age').value=age;
}
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
                        <h4 class="card-title text-uppercase">Students Form</h4>  
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
                                        <label for="Mother's Name">Mother's Name </label>  
                                        <input type="text"  style="border-top-style: hidden;border-right-style: hidden;  border-left-style: hidden;border-bottom-style: groove;"
                                        class="form-control" id="momName" name="momName" placeholder="Enter Mother's Name" aria-describedby="inputGroupPrepend" required>  
                                        <div class="invalid-feedback">  
                                        Please provide Mother's Name.  
                                        </div>  
                                    </div>  
                                </div>  
                                <div class="col-sm-4 col-md-4 col-xs-12">  
                                    <div class="form-group">  
                                        <label for="Father's Name">Father's Name</label>  
                                        <input type="text" style="border-top-style: hidden;border-right-style: hidden;  border-left-style: hidden;border-bottom-style: groove;"
                                        class="form-control" id="fathersName" name="fathersName" placeholder="Enter Father's Name " aria-describedby="inputGroupPrepend" required>  
                                        <div class="invalid-feedback">  
                                            Please provide Father's Name.  
                                        </div>  
                                    </div>  
                                </div>  
                                  
                            </div>  
                            <div class="row">  
                            
                               
                                <div class="col-sm-4 col-md-4 col-xs-12">  
                                    <div class="form-group">  
                                        <label for="Gaurdian's Name">Gaurdian's Name</label>  
                                        <input type="text" style="border-top-style: hidden;border-right-style: hidden;  border-left-style: hidden;border-bottom-style: groove;"
                                        class="form-control" id="gaurdianName" name="gaurdianName" placeholder="Enter Gaurdian's Name " aria-describedby="inputGroupPrepend" required>  
                                        <div class="invalid-feedback">  
                                            Please provide Gaurdian's Name.  
                                        </div>  
                                    </div>  
                                </div>
                                <div class="col-sm-4 col-md-4 col-xs-12">  
                                    <div class="form-group">  
                                        <label for="Relationship with Gaurdian">Relationship With Gaurdian</label>  
                                        <input type="text" style="border-top-style: hidden;border-right-style: hidden;  border-left-style: hidden;border-bottom-style: groove;"
                                        class="form-control" id="RWGaurdian" name="RWGaurdian" placeholder="Enter Relationship With Gaurdian " aria-describedby="inputGroupPrepend" required>  
                                        <div class="invalid-feedback">  
                                            Please provide Relationship With Gaurdian.  
                                        </div>  
                                    </div>  
                                </div>  

                                <div class="col-sm-4 col-md-4 col-xs-12">  
                                    <div class="form-group">  
                                        <label for="Gaurdian's Profession">Gaurdian's Profession </label>  
                                        <input type="text" style="border-top-style: hidden;border-right-style: hidden;  border-left-style: hidden;border-bottom-style: groove;"
                                        class="form-control" id="GaurdianProfession" name="GaurdianProfession" placeholder="Enter Gaurdians Profession" aria-describedby="inputGroupPrepend" required>  
                                        <div class="invalid-feedback">  
                                            Please provide Gaurdians Profession.  
                                        </div>  
                                    </div>  
                                </div>  
                            </div>  
                            <div class="row">  
                            
                                
                                <div class="col-sm-4 col-md-4 col-xs-12">  
                                    <div class="form-group">  
                                    <?php
                                    $query="SELECT * FROM `centers`";
                                    $result=mysqli_query($db,$query);
                                    ?>
                                        <label for="Gender">Center</label>  
                                        <select class="custom-select" style="border-top-style: hidden;border-right-style: hidden;  border-left-style: hidden;border-bottom-style: groove;"
                                        name="center" required> 
                                        <?php
                                        while($row=mysqli_fetch_array($result)):;?>
                                        <option><?php echo $row[1]?></option>
                                        <?php endwhile;?>
                                    
                                          
                                        </select>  
                                        <div class="invalid-feedback">Please choose Center</div>  
                                    </div>  
                                </div> 
                                <div class="col-sm-4 col-md-4 col-xs-12">  
                                    <div class="form-group">  
                                        <label for="Gender">Gender</label>  
                                        <select class="custom-select" style="border-top-style: hidden;border-right-style: hidden;  border-left-style: hidden;border-bottom-style: groove;"
                                        name="gender" required>  
                                            <option value="">Select Gender</option>  
                                            <option value="male">Male</option>  
                                            <option value="female">Female</option>  
                                        </select>  
                                        <div class="invalid-feedback">Please choose gender</div>  
                                    </div>  
                                </div>   
                                <div class="col-sm-4 col-md-4 col-xs-12">  
                                    <div class="form-group">  
                                        <label for="email">Email address</label>  
                                        <input type="email" style="border-top-style: hidden;border-right-style: hidden;  border-left-style: hidden;border-bottom-style: groove;"
                                        class="form-control" id="email" name="email" placeholder="email address" aria-describedby="inputGroupPrepend" required>  
                                        <div class="invalid-feedback">  
                                            Please provide a valid email.  
                                        </div>  
                                    </div>  
                                </div>  
                            </div>  
                            
                            <div class="row">  
                                
                               
                                <div class="col-sm-4 col-md-4 col-xs-12">  
                                    <div class="form-group">  
                                        <label for="phonenumber">Mobile Number</label>  
                                        <input type="tel" style="border-top-style: hidden;border-right-style: hidden;  border-left-style: hidden;border-bottom-style: groove;"
                                        pattern="^\d{10}$" class="form-control" id="mobileNumber" name="mobileNumber" placeholder="Mobile Number" aria-describedby="inputGroupPrepend" required>  
                                        <div class="invalid-feedback">  
                                            Please enter 10 digit mobile number.  
                                        </div>  
                                    </div>  
                                </div>  
                                <div class="col-sm-4 col-md-4 col-xs-12">  
                                    <div class="form-group">  
                                        <label for="Date of Birth"> Date of Birth</label>  
                                        <input type="date" style="border-top-style: hidden;border-right-style: hidden;  border-left-style: hidden;border-bottom-style: groove;"
                                        class="form-control" id="dob" name="dob" onchange="getAge();"  aria-describedby="inputGroupPrepend" required>  
                                        <div class="invalid-feedback">  
                                            Please provide a DOB.  
                                        </div>  
                                    </div>  
                                </div> 
                                <div class="col-sm-4 col-md-4 col-xs-12">  
                                    <div class="form-group">  
                                        <label for="Age"> Age</label>  
                                        <input type="number" style="border-top-style: hidden;border-right-style: hidden;  border-left-style: hidden;border-bottom-style: groove;"
                                        class="form-control" id="age" name="age"  aria-describedby="inputGroupPrepend" required>  
                                        <div class="invalid-feedback">  
                                            Please provide Age.  
                                        </div>  
                                    </div>  
                                </div>   
                            </div>  
                            <div class="row">  
                            
                               
                                <div class="col-sm-4 col-md-4 col-xs-12">  
                                    <div class="form-group">  
                                        <label for="Id Number">Id Number</label>  
                                        <input type="text"  style="border-top-style: hidden;border-right-style: hidden;  border-left-style: hidden;border-bottom-style: groove;"
                                        class="form-control" id="IdNum" name="IdNum" placeholder="Enter Id Number" aria-describedby="inputGroupPrepend" required>  
                                        <div class="invalid-feedback">  
                                            Please enter your Id number.  
                                        </div>  
                                    </div>  
                                </div> 
                                <div class="col-sm-4 col-md-4 col-xs-12">  
                                    <div class="form-group">  
                                        <!-- <label for="Id Type">Id Type</label>  -->
                                        <input type="hidden" style="border-top-style: hidden;border-right-style: hidden;  border-left-style: hidden;border-bottom-style: groove;"
                                         class="form-control" id="IdType" name="IdType" placeholder="Enter Id Number" aria-describedby="inputGroupPrepend" required>  
 
                                        <div class="invalid-feedback">please enter Id type</div>  
                                    </div>  
                                </div>   
                                <div class="col-sm-4 col-md-4 col-xs-12">  
                                    <div class="form-group">  
                                        <label for="address">Address</label>  
                                        <textarea class="form-control" style="border-top-style: hidden;border-right-style: hidden;  border-left-style: hidden;border-bottom-style: groove;"
                                         rows="1" id="address" name="address" aria-describedby="inputGroupPrepend" required></textarea>  
                                        <div class="invalid-feedback">please enter address</div>  
                                    </div>  
                                </div>  
                            </div>  
                          
                           
                            
                            <div class="row">  
                                <div class="col-sm-12 col-md-12 col-xs-12">  
                                    <div class="form-group">  
                                        <div class="form-check">  
                                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>  
                                            <label class="form-check-label" for="invalidCheck">  
                                                Agree to terms and conditions  
                                            </label>  
                                            <div class="invalid-feedback">  
                                                You must agree before submitting.  
                                            </div>  
                                        </div>  
                                    </div>  
                                </div>  
                            </div>  
                            <div class="row">  
                                <div class="col-sm-12 col-md-12 col-xs-12">  
                                    <div class="float-right">  
                                        <button class="btn btn-danger rounded-0" type="submit">Cancel</button>  
                                        <button class="btn btn-primary rounded-0" type="submit" name="saveDetails">Add Student</button>  
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
