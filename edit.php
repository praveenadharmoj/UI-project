<?php
session_start();
include 'database.php';
include 'includes/header.php';
include 'includes/navbar.php';
?>

<script>
 function getAge(){
    var dob = document.getElementById('dob').value;
    dob = new Date(dob);
    var today = new Date();
    var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
    document.getElementById('age').value=age;
}
</script>
<div class="container-fluid">
  <div class="card mb-4">
  <div class="card-header bg-primary text-white">  
                        <h4 class="card-title text-uppercase">Edit Profile</h4>  
                    </div>  

<div class="card-body">
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
<?php
if(isset($_POST['edit_btn'])){
    $i=$_POST['edit_id'];
    $query="SELECT * FROM `createstudents` WHERE Id ='$i'";
    $res=mysqli_query($db,$query);
    // if(mysqli_num_rows($res)>0){
        // while($r1=mysqli_fetch_assoc($res)){
            foreach($res as $row){
        ?>

<form action="code.php" method="POST" style="padding:40px">
      <div class="form-group">
      <label for="" style="font-style:bold"></label>
    <input type="hidden" class="form-control"  id="" name="edit_id" value="<?php echo $row['ID']?>">
  </div>
  
  <div class="form-group">
  <div class="row">
  <div class="col-sm-4 col-md-4 col-xs-12">  

  <label for="" style="  font-weight: bold;">Student Name</label>

    <input type="text" class="form-control" id="" style="border-top-style: hidden;border-right-style: hidden;  border-left-style: hidden;border-bottom-style: groove;
        " name="edit_fname" value="<?php echo $row['FullName']?>">
  </div>
  <div class="col-sm-4 col-md-4 col-xs-12">  

  <label for="" style="  font-weight: bold;">Gaurdian Name</label>

    <input type="text" class="form-control" id="" style="border-top-style: hidden;border-right-style: hidden;  border-left-style: hidden;border-bottom-style: groove;"
    name="edit_gaurdiansName" value="<?php echo $row['GaurdiansName']?>">
  </div>
  <div class="col-sm-4 col-md-4 col-xs-12">  

  <label for="" style="  font-weight: bold;">Relationship with Gaurdian</label>

    <input type="text" class="form-control" id="" style="border-top-style: hidden;border-right-style: hidden;  border-left-style: hidden;border-bottom-style: groove;"name="edit_RGaurdian" value="<?php echo $row['RGaurdian']?>">
  </div>
  </div>
  </div>
  <div class="form-group">
  <div class="row">
  <div class="col-sm-4 col-md-4 col-xs-12">  

  <label for="" style="  font-weight: bold;">Gaurdian Profession</label>

    <input type="text" class="form-control" id=""style="border-top-style: hidden;border-right-style: hidden;  border-left-style: hidden;border-bottom-style: groove;"
     name="edit_gaurdianProfession" value="<?php echo $row['GaurdianProfession']?>">
  </div>
  <div class="col-sm-4 col-md-4 col-xs-12">  

  <label for="" style="  font-weight: bold;">Center</label>
    <select class="custom-select" style="border-top-style: hidden;border-right-style: hidden;  border-left-style: hidden;border-bottom-style: groove;"
   name="edit_center" required>  
                                            <option > <?php echo $row['center']?></option>  
                                            <?php
                                    $query="SELECT * FROM `centers`";
                                    $result=mysqli_query($db,$query);
                                    
                                    ?>
 
                                        </select> 
  
  </div>
  <div class="col-sm-4 col-md-4 col-xs-12">  

  <label for="" style="  font-weight: bold;">DOB</label>

    <input type="date" class="form-control" id="dob"style="border-top-style: hidden;border-right-style: hidden;  border-left-style: hidden;border-bottom-style: groove;"
     name="edit_dob" onchange="getAge()" value="<?php echo $row['DOB']?>">
  </div>
  </div>
  </div>
  <div class="form-group">
  <input type="hidden" class="form-control" id="age" name="edit_age">

  <div class="row">
  <div class="col-sm-4 col-md-4 col-xs-12">  
  <label for="" style="  font-weight: bold;">Email Id</label>

<input type="text" class="form-control" id=""style="border-top-style: hidden;border-right-style: hidden;  border-left-style: hidden;border-bottom-style: groove;"
 name="edit_email" value="<?php echo $row['email']?>">


  </div>
  <div class="col-sm-4 col-md-4 col-xs-12">  
  <label for="" style="  font-weight: bold;">Id Number</label>

    <input type="text" class="form-control" id=""style="border-top-style: hidden;border-right-style: hidden;  border-left-style: hidden;border-bottom-style: groove;"
     name="edit_IdNumber" value="<?php echo $row['IdNumber']?>">

  </div>
  <!-- <div class="col-sm-4 col-md-4 col-xs-12">  
  <label for="" style="  font-weight: bold;">Id Type</label>

<input type="text" class="form-control" id="" style="border-top-style: hidden;border-right-style: hidden;  border-left-style: hidden;border-bottom-style: groove;"
name="edit_IdType" value="<?php echo $row['IdType']?>">
 
  
  </div> -->
  </div>
  </div>
  <div class="form-group">
  <div class="row">
 
  <div class="col-sm-4 col-md-4 col-xs-12">  
  <label for="" style="  font-weight: bold;">Address</Address></label>

<input type="text" class="form-control" id="" style="border-top-style: hidden;border-right-style: hidden;  border-left-style: hidden;border-bottom-style: groove;"
name="edit_Address" value="<?php echo $row['Address']?>">
  
  </div>
  <div class="col-sm-4 col-md-4 col-xs-12">  

  <label for="" style="  font-weight: bold;">Mobile Number</label>

    <input type="text" class="form-control" id="" style="border-top-style: hidden;border-right-style: hidden;  border-left-style: hidden;border-bottom-style: groove;"
    name="edit_mobileNumber" value="<?php echo $row['mobileNumber']?>"></div>
  </div>
  </div>
  </div>
 

</div>


  <a href="register.php" class="btn btn-danger">Cancel</a>
        <button type="submit" class="btn btn-primary" name="upbtn">Update</button>
        </form>  
        <?php
            }
          }
          ?>     
    </div> 
    </div>
    </div>   
         <?php
include 'includes/script.php';
?>