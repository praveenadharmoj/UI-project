<?php
session_start();
include 'database.php';
include 'includes/header.php';
include 'includes/navbar.php';
?>
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
                        <h4 class="card-title text-uppercase">Centers </h4>  
                    </div>  
                    <div class="card-body">  
                   

                        <form action="code.php" Method="POST" id="needs-validation" novalidate>  
                        <div class="row">  
                        <div class="col-sm-4 col-md-4 col-xs-12">  
                            <input type="hidden" name="Id" id="Id" >
                                    <div class="form-group">  
                                        <label for="Center Name">Center Name</label>  
                                        <input type="text" style="border-top-style: hidden;border-right-style: hidden;  border-left-style: hidden;border-bottom-style: groove;"
                                        class="form-control" id="cname" name="cname" placeholder="Enter Full Name" aria-describedby="inputGroupPrepend" required>  
                                        <div class="invalid-feedback">  
                                            Please provide center Name.  
                                        </div>  
                                    </div>  
                                </div>  
   <div class="col-sm-4 col-md-4 col-xs-12">  
                                    <div class="form-group">  
                                        <label for="Center Name">Donor</label>  
                                        <input type="text" style="border-top-style: hidden;border-right-style: hidden;  border-left-style: hidden;border-bottom-style: groove;"
                                        class="form-control" id="donor" name="donor" placeholder="Enter Full Name" aria-describedby="inputGroupPrepend" required>  
                                        <div class="invalid-feedback">  
                                            Please provide Donor Name.  
                                        </div>  
                                    </div>  
                                </div>  
   <div class="col-sm-4 col-md-4 col-xs-12">  
                                    <div class="form-group">  
                                        <label for="Center Name">Partner</label>  
                                        <input type="text" style="border-top-style: hidden;border-right-style: hidden;  border-left-style: hidden;border-bottom-style: groove;"
                                        class="form-control" id="partner" name="partner" placeholder="Enter Full Name" aria-describedby="inputGroupPrepend" required>  
                                        <div class="invalid-feedback">  
                                            Please provide partner Name.  
                                        </div>  
                                    </div>  
                                </div>  
   </div>
   <div class="row">  
                        <div class="col-sm-4 col-md-4 col-xs-12">  
                            <input type="hidden" name="Id" id="Id" >
                                    <div class="form-group">  
                                        <label for="Center Name">Year of Inception </label>  
                                        <input type="text" style="border-top-style: hidden;border-right-style: hidden;  border-left-style: hidden;border-bottom-style: groove;"
                                        class="form-control" id="YOI" name="YOI" placeholder="Enter Full Name" aria-describedby="inputGroupPrepend" required>  
                                        <div class="invalid-feedback">  
                                            Please provide center Name.  
                                        </div>  
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

   </div>

   </div>


<br>
<hr>
   <h3>Center Contacts</h3>
							<div class="row">  
                                <div class="col-sm-4 col-md-4 col-xs-12">  
                                    <div class="form-group">  
                                        <label for="Program Manager">Program Manager</label>  
                                        <input type="text" class="form-control" style="border-top-style: hidden;border-right-style: hidden;  border-left-style: hidden;border-bottom-style: groove;"
                                        name="programManager">
                                        <div class="invalid-feedback">Please enter Program Manager</div>  
                                    </div>  
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-xs-12">  
                                    <div class="form-group">  
                                        <label for="Assistant Program Manager">Assistant Program Manager</label>  
                                        <input type="text" class="form-control" style="border-top-style: hidden;border-right-style: hidden;  border-left-style: hidden;border-bottom-style: groove;"
                                         name="assProjectMng">

                                        <div class="invalid-feedback">Please enter Assistant Program Manager</div>  
                                    </div>  
                                </div> 
                                <div class="col-sm-4 col-md-4 col-xs-12">  
                                    <div class="form-group">  
                                        <label for="Donar">Donar Name</label>  
                                        <input type="text" class="form-control" style="border-top-style: hidden;border-right-style: hidden;  border-left-style: hidden;border-bottom-style: groove;"
                                         name="cdonar">

                                        <div class="invalid-feedback">Please enter Donar Name</div>  
                                    </div>   
                                </div>  
								</div>
								<div class="row">  
                                
                                <div class="col-sm-4 col-md-4 col-xs-12">  
                                    <div class="form-group">  
                                        <label for="Center Manager">Center Manager</label>  
                                        <input type="text" class="form-control"style="border-top-style: hidden;border-right-style: hidden;  border-left-style: hidden;border-bottom-style: groove;"
                                         name="centerManager">

                                        <div class="invalid-feedback">Please enter Program Manager Name</div>  
                                    </div>  
                                </div>
                                <div class="col-sm-4 col-md-4 col-xs-12">  
                                    <div class="form-group">  
                                        <label for="Office Administrator">Office Administrator</label>  
                                        <input type="text" class="form-control" style="border-top-style: hidden;border-right-style: hidden;  border-left-style: hidden;border-bottom-style: groove;"
                                        name="officeAdministrator">

                                        <div class="invalid-feedback">Please enter Office Administrator Name</div>  
                                    </div>  
                                </div> 
                                <div class="col-sm-4 col-md-4 col-xs-12">  
                                    <div class="form-group">  
                                        <label for="Placement Coordinator">Placement Coordinator</label>  
                                        <input type="text" class="form-control" style="border-top-style: hidden;border-right-style: hidden;  border-left-style: hidden;border-bottom-style: groove;"
                                        name="placementCoordinator">

                                        <div class="invalid-feedback">Please enter Placement Coordinator Name</div>  
                                    </div>  
                                </div>  
                                </div>  
                                <button type="submit" class="btn btn-success" name="addCenters">Submit</button>

                                </form>
              
                                 
                                <?php
                                include 'includes/script.php' ?>