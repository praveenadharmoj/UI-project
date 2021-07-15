<?php
session_start();
include 'database.php';
include 'includes/header.php';
include 'includes/navbar.php';
?>
<div class="container-fluid">
  <div class="card mb-4">
  <div class="card-header bg-primary text-white">  
                        <h4 class="card-title text-uppercase">Edit Centers</h4>  
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
    $query="SELECT * FROM `centers` WHERE Id ='$i'";
    $res=mysqli_query($db,$query);
    // if(mysqli_num_rows($res)>0){
        // while($r1=mysqli_fetch_assoc($res)){
            foreach($res as $row){
        ?>

<form action="code.php" method="POST" style="padding:40px">
    <input type="hidden" class="form-control"  id="" name="edit_id" value="<?php echo $row['Id']?>">

   <div class="form-group">
    <div class="row">
    <div class="col-sm-4 col-md-4 col-xs-12">  
      <label for="" style="  font-weight: bold;">Name</label>
        <input type="text" class="form-control" id="" style="border-top-style: hidden;border-right-style: hidden;  border-left-style: hidden;border-bottom-style: groove;
        " name="edit_cname" value="<?php echo $row['centerName']?>">
     </div>
     <div class="col-sm-4 col-md-4 col-xs-12">  
       <label for="" style="  font-weight: bold;">Donor</label>
       <input type="text" class="form-control" id="" style="border-top-style: hidden;border-right-style: hidden;  border-left-style: hidden;border-bottom-style: groove;"
        name="edit_donor" value="<?php echo $row['donor']?>">
    </div>
    <div class="col-sm-4 col-md-4 col-xs-12">  
      <label for="" style="  font-weight: bold;">Partner</label>
      <input type="text" class="form-control" id="" style="border-top-style: hidden;border-right-style: hidden;  border-left-style: hidden;border-bottom-style: groove;"name="edit_partner" value="<?php echo $row['partner']?>">
    </div>
  </div>
  </div>
   <div class="form-group">
      <div class="row">
        <div class="col-sm-4 col-md-4 col-xs-12">  
           <label for="" style="  font-weight: bold;">Year of Inception</label>
            <input type="text" class="form-control" id=""style="border-top-style: hidden;border-right-style: hidden;  border-left-style: hidden;border-bottom-style: groove;"
              name="edit_YOI" value="<?php echo $row['YOI']?>">
        </div>
        <div class="col-sm-4 col-md-4 col-xs-12">  
             <label for="" style="  font-weight: bold;">Address</label>
            <input type="text" class="form-control" id="" style="border-top-style: hidden;border-right-style: hidden;  border-left-style: hidden;border-bottom-style: groove;"
              name="edit_address" value="<?php echo $row['address']?>">
        </div>
  </div>
  </div>
  <a href="centersList.php" class="btn btn-danger">Cancel</a>
        <button type="submit" class="btn btn-primary" name="upbtn1">Update</button>
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