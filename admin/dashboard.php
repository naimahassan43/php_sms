<?php
session_start();
if(isset($_SESSION['uid'])){
  echo "";
}else{
  header('Location:../login.php');
}

?>
<?php 
include('header.php');
include('titlehead.php');
?>

<div class="container">
  <div class="row dash-cont">

    <div class="col-4">
      <a href="addStudent.php">Insert Student Details</a>
    </div>
    <div class="col-4">
      <a href="updateStudent.php">Update Student Details</a>
    </div>
    <div class="col-4">
      <a href="deleteStudent.php">Delete Student Details</a>
    </div>
  </div>
  <h3 class="text-end mt-3"><a class="btn btn-danger " href="../admin/logout.php">Log Out</a> </h3>
</div>

<?php include('footer.php')?>