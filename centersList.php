<?php
session_start();
include 'database.php';
include 'includes/header.php';
include 'includes/navbar.php';
?>
<div class="card" style="margin-left:30px;margin-top:20px;width:100%;border:none">
<div class="card-header bg-primary text-white">  
                        <h4 class="card-title text-uppercase">Centers List</h4>  
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
    <table class="table table-responsive table-striped table-hover" style="padding-left:40px">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Donor</th>
      <th scope="col">Partner</th>
      <th scope="col">Year Of Inception</th>
      <th scope="col">Address</th>
      <th scope="col" style="text-align:center">Action</th>

    </tr>
  </thead>
  <tbody>
  <?php
        $query="SELECT * FROM `centers` ";
        $res=mysqli_query($db,$query);
        if(mysqli_num_rows($res)>0){
            while($saveDetails=mysqli_fetch_assoc($res)){
     ?>
    <tr>
      <td><?php echo $saveDetails['Id'];?></td>
      <td><?php echo $saveDetails['centerName']; ?></td>
      <td><?php echo $saveDetails['donor']; ?></td>
      <td><?php echo $saveDetails['partner']; ?></td>
      <td><?php echo $saveDetails['YOI']; ?></td>
      <td><?php echo $saveDetails['address']; ?></td>

      <td>
          <div class="row">
              <div class="col-md-4">
          <form action="centers_edit.php" method="POST">
              <input type="hidden" name="edit_id" value="<?php echo $saveDetails['Id']; ?>">
              <button type="submit" class="btn btn-success" name="edit_btn" >Edit</button>
            </form>
            </div>
            <div class="col-md-4">
            <form action="code.php" method="POST">
              <input type="hidden" name="delete_id1" value="<?php echo $saveDetails['Id']; ?>">
           <button type="submit" class="btn btn-danger" name="delete_btn1" >Delete</button>

            </form>
            </div>
            <div class="col-md-4">
            <form action="viewCenterList.php" method="POST">
              <input type="hidden" name="view_id" value="<?php echo $saveDetails['Id']; ?>">
           <button type="submit" class="btn btn-primary" name="view_btn" >View</button>

            </form>
            </div>
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