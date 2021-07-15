<?php
session_start();
include 'database.php';
include 'includes/header.php';
include 'includes/navbar.php';
?>
<div class="card" style="margin-left:30px;margin-top:30px ;width:100%;border:none">
<div class="card-header bg-primary text-white">  
                        <h4 class="card-title text-uppercase">Upcoming Students List</h4>  
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
    <table class="table table-responsive table-striped table-hover" style="padding-left:150px;">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">STUDENT NAME</th>
      <th scope="col">MOBILE NO</th>
      <th scope="col">STUDENT PROFILE</th>
    </tr>
  </thead>
  <tbody>
  <?php
        $query="SELECT * FROM `upcomingstudents` ";
        $res=mysqli_query($db,$query);
        if(mysqli_num_rows($res)>0){
            while($saveDetails=mysqli_fetch_assoc($res)){
     ?>
    <tr>
      <td><?php echo $saveDetails['Id'];?></td>
      <td><?php echo $saveDetails['fullName']; ?></td>
      <td><?php echo $saveDetails['mobileNumber']; ?></td>

      <td>
          <div class="row">
              <div class="col-md-4">
          <form action="" method="POST">
              <input type="hidden" name="edit_id" value="<?php echo $saveDetails['Id']; ?>">
           <!-- <a href="" name="edit_btn">   <i class="fas fa-edit"  ></i></a> -->
              <button type="submit" class="btn btn-success" name="edit_btn" >Interest</button>
            </form>
            </div>
            <div class="col-md-4">
            <form action="" method="POST">
              <input type="hidden" name="delete_id" value="<?php echo $saveDetails['Id']; ?>">
           <!-- <a href="">   <i class="fas fa-trash-alt" name="delete_btn" ></i></a> -->
           <button type="submit" class="btn btn-danger" name="delete_btn" >Not Interest</button>

            </form>
            </div>
            <div class="col-md-4">
            <form action="edit.php" method="POST">
              <!-- <input type="text" name="edit_id" value="<?php echo $saveDetails['Id']; ?>"> -->
              <!-- <a href=""><i class="fas fa-check" name="checkPending"></i></a> -->
                        </form>
            </div>

            </div>
      </td>
    </tr>
  <?php
       }
    }
    ?>
  </tbody>
</table>

    </div>
</div>

<?php
include 'includes/script.php';

?>