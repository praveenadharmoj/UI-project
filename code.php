<?php
session_start();
include 'database.php';
if(isset($_POST['login']))
{
    $a1=$_POST['user'];
    $b1=$_POST['pwd'];
    $query="SELECT * FROM `admin` WHERE username='$a1' AND password='$b1'";
    $res=mysqli_query($db,$query);
    if(mysqli_fetch_array($res)){
        $_SESSION['username']=$a1;
        header('Location:main.php');
        
        if(!$_SESSION['username']){
            header('Location:login.php');
        }
    }
    else{
        $_SESSION['status']='Username and Password are incorrect';
        header('Location:login.php');
    }
    
}

if(isset($_POST['saveDetails'])){
    $a=$_POST['Id'];
    $b=$_POST['fname'];
    $e=$_POST['momName'];
    $f=$_POST['fathersName'];
    $g=$_POST['gaurdianName'];
    $h=$_POST['RWGaurdian'];
    $i=$_POST['GaurdianProfession'];
    $j=$_POST['center'];
    $k=$_POST['age'];
    $l=$_POST['dob'];
    $m=$_POST['email'];
    $n=$_POST['gender'];
    $o=$_POST['IdNum'];
    $q=$_POST['address'];
    $r=$_POST['mobileNumber'];
    $q1=" INSERT INTO `createstudents`(`ID`, 
    `FullName`, 
    `Mother'sName`,
     `Father'sName`,
     `GaurdiansName`,
      `RGaurdian`,
      `GaurdianProfession`, 
      `center`, `age`,
       `DOB`, `email`,
      `gender`, `IdNumber`, `Address`, `mobileNumber`) VALUES 
    ('$a','$b','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$q','$r')";
    $res=mysqli_query($db,$q1);
    if($res){
        $_SESSION['success']="Record has been Added";
        header('Location:studentList.php');
    }
    else{
        $_SESSION['status']="Record has not been Added";
        header('Location:addStudents.php');

    }
    }
    if(isset($_POST['logout'])){
        session_destroy();
        header('Location:login.php');
    }
    
?>

<?php
if(isset($_POST['upbtn'])){
    $i=$_POST['edit_id'];
    $a2=$_POST['edit_fname'];
    $b2=$_POST['edit_gaurdiansName'];
    $c2=$_POST['edit_RGaurdian'];
    $d2=$_POST['edit_gaurdianProfession'];
    $e2=$_POST['edit_center'];
    $f2=$_POST['edit_dob'];
    $g2=$_POST['edit_age'];
    $h2=$_POST['edit_email'];
    $i2=$_POST['edit_IdNumber'];
    $j2=$_POST['edit_IdType'];
    $k2=$_POST['edit_Address'];
    $l2=$_POST['edit_mobileNumber'];

    $query="UPDATE `createstudents` SET `ID`='$i',`FullName`='$a2',
    `GaurdiansName`='$b2',
    `RGaurdian`='$c2',`GaurdianProfession`='$d2',`center`='$e2',
    `age`='$g2',`DOB`='$f2',`email`='$h2',
    `IdNumber`='$i2',
    `IdType`='$j2',`Address`='$k2',`mobileNumber`='$l2' WHERE Id=$i";
    $res=mysqli_query($db,$query);
    if($res){
        $_SESSION['success']="Profile has been updated";
        header('Location:studentList.php');
    }
    else{
        $_SESSION['status']="Profile has not been updated";
        header('Location:edit.php');

    }
}
?>


<?php
if(isset($_POST['delete_btn'])){
    $id=$_POST['delete_id'];
    $query="DELETE FROM `createstudents` WHERE id='$id'";
    $res=mysqli_query($db,$query);
    if($res){
$_SESSION['success']="Student Data is Deleted";
header('Location:studentList.php');
    }
    else{
        $_SESSION['status']="Student Data is not Deleted";
        header('Location:studentList.php');
        
    }
}
?>
<?php
if(isset($_POST['addCenters'])){
    $a=$_POST['ID'];
    $b=$_POST['cname'];
    $c=$_POST['donor'];
    $d=$_POST['partner'];
    $e=$_POST['YOI'];
    $f=$_POST['address'];
    $g=$_POST['programManager'];
    $h=$_POST['assProjectMng'];
    $i=$_POST['cdonar'];
    $j=$_POST['centerManager'];
    $k=$_POST['officeAdministrator'];
    $l=$_POST['placementCoordinator'];


    $q1=" INSERT INTO `centers`(`Id`, `centerName`,`donor`, `partner`, `YOI`, `address`,
    `programManager`,`AssociateProjectManager`,`cdonar`,`centerManager`,`officeAdministrator`,`placementCoordinator`) 
    VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l')";
    $res=mysqli_query($db,$q1);
    if($res){
        $_SESSION['success']="Center has been Added";
        header('Location:centersList.php');
    }
    else{
        $_SESSION['status']="Center has not been Added";
        header('Location:addCenters.php');

    }
    }

?>
<?php
if(isset($_POST['delete_btn1'])){
    $id=$_POST['delete_id1'];
    $query="DELETE FROM `centers` WHERE id='$id'";
    $res=mysqli_query($db,$query);
    if($res){
$_SESSION['success']="Center Data is Deleted";
header('Location:centersList.php');
    }
    else{
        $_SESSION['status']="Center Data is not Deleted";
        header('Location:centersList.php');
        
    }
}
?>
<?php
if(isset($_POST['upbtn1'])){
    $i=$_POST['edit_id'];
    $a2=$_POST['edit_cname'];
    $b2=$_POST['edit_donor'];
    $c2=$_POST['edit_partner'];
    $d2=$_POST['edit_YOI'];
    $e2=$_POST['edit_address'];
    
    $query="UPDATE `centers` SET `Id`='$i',`centerName`='$a2',`donor`='$b2',`partner`='$c2',`YOI`='$d2',`address`='$e2' WHERE id=$i";
    $res=mysqli_query($db,$query);
    if($res){
        $_SESSION['success']="Centerdata has been updated";
        header('Location:centersList.php');
    }
    else{
        $_SESSION['status']="Centerdata has not been updated";
        header('Location:centers_edit.php');

    }
}
?>

<?php
if(isset($_POST['saveDetails1'])){
    $a=$_POST['Id'];
    $b=$_POST['fname'];
    $c=$_POST['mobileNumber'];
    $d=$_POST['email'];

    $q1="INSERT INTO `upcomingstudents`(`ID`, `fullName`, `mobileNumber`,`email`) VALUES ('$a','$b','$c','$d') ";
    $res=mysqli_query($db,$q1);
    if($res){
        $_SESSION['success']="Record has been Added";
        header('Location:upcomingstudentlist.php');
    }
    else{
        $_SESSION['status']="Record has not been Added";
        header('Location:upcomingstudent.php');

    }
    }

?>
