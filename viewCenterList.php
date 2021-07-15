<?php
session_start();
include 'database.php';
include 'includes/header.php';
include 'includes/navbar.php';
?>
<div class="container-fluid">
  <div class="card mb-4">
  <div class="card-header bg-primary text-white">  
                        <h4 class="card-title text-uppercase">View Center Details</h4>  
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
if(isset($_POST['view_btn'])){
    $i=$_POST['view_id'];
    $query="SELECT * FROM `centers` WHERE Id ='$i'";
    $res=mysqli_query($db,$query);
    // if(mysqli_num_rows($res)>0){
        // while($r1=mysqli_fetch_assoc($res)){
            foreach($res as $row){
        ?>

<form>
    <div class="form-group row">
    <input type="hidden" name="" value="<?php echo $row['Id']?>">
        <label for="" class="col-sm-2 col-form-label">Name  :</label>
        <div class="col-sm-10">
            <input type="text" style="border:none;font-size:14px"class="form-control" id="" value="<?php echo $row['centerName']?>" placeholder="Email">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Donor  :</label>
        <div class="col-sm-10">
            <input type="text" style="border:none;font-size:14px"class="form-control" value="<?php echo $row['donor']?>" id="" placeholder="Password">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Partner  :</label>
        <div class="col-sm-10">
            <input type="text" style="border:none;font-size:14px"class="form-control" value="<?php echo $row['partner']?>" id="" placeholder="Password">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Year of Inception  :</label>
        <div class="col-sm-10">
            <input type="text" style="border:none;font-size:14px"class="form-control" value="<?php echo $row['YOI']?>" id="" placeholder="Password">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Address  :</label>
        <div class="col-sm-10">
            <input type="text" style="border:none;font-size:14px"class="form-control" value="<?php echo $row['address']?>" id="" placeholder="Password">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Program Manager :</label>
        <div class="col-sm-10">
            <input type="text" style="border:none;font-size:14px"class="form-control" value="<?php echo $row['programManager']?>" id="" placeholder="Password">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Associate Project Manager</label>
        <div class="col-sm-10">
            <input type="text" style="border:none;font-size:14px"class="form-control" value="<?php echo $row['AssociateProjectManager']?>" id="" placeholder="Password">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Donar Name  :</label>
        <div class="col-sm-10">
            <input type="text" style="border:none;font-size:14px"class="form-control" value="<?php echo $row['cdonar']?>" id="" placeholder="Password">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Center Manager  :</label>
        <div class="col-sm-10">
            <input type="text" style="border:none;font-size:14px"class="form-control" value="<?php echo $row['centerManager']?>" id="" placeholder="Password">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Office Administrator  :</label>
        <div class="col-sm-10">
            <input type="text" style="border:none;font-size:14px"class="form-control" value="<?php echo $row['officeAdministrator']?>" id="" placeholder="Password">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Placement Coordinator  :</label>
        <div class="col-sm-10">
            <input type="text" style="border:none;font-size:14px"class="form-control" value="<?php echo $row['placementCoordinator']?>" id="" placeholder="Password">
        </div>
    </div>
    
    
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