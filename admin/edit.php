<?php
session_start();
if(isset($_SESSION['uid'])){
  echo "";
}else{
  header('Location:../login.php');
}

?>
<?php 
include('../db.php');
include('header.php');
include('titlehead.php');

$uid = $_GET['uid'];

$query = "SELECT * FROM students WHERE id ='$uid'";
$result = mysqli_query($db, $query);

$row = mysqli_fetch_assoc($result);
?>

<div class="container mt-5">
  <div class="row">
    <div class="col-8 offset-2">
      <form action="updateData.php" method="post" enctype="multipart/form-data">
        <table class="table table-bordered table-responsive table-striped">
          <tbody>
            <tr>
              <th>Roll Number</th>
              <td> <input type="text" name="roll" id="" value="<?php echo $row['roll'];?>" required> </td>
            </tr>
            <tr>
              <th>Full Name</th>
              <td> <input type="text" name="name" id="" value="<?php echo $row['name'];?>" required> </td>
            </tr>
            <tr>
              <th>City</th>
              <td> <input type="text" name="city" id="" value="<?php echo $row['city'];?>" required> </td>
            </tr>
            <tr>
              <th>Class</th>
              <td> <input type="text" name="class" id="" value="<?php echo $row['class'];?>" required> </td>
            </tr>
            <tr>
              <th>Parent Contact Number</th>
              <td> <input type="number" name="contact" id="" value="<?php echo $row['contact'];?>" required> </td>
            </tr>
            <tr>
              <th>Image</th>
              <td> <input type="file" name="image" id="" value="<?php echo $row['image'];?>"> </td>
            </tr>
            <tr>
              <td colspan="2">
                <input type="hidden" value="<?php echo $row['id'];?>" name="uid">
                <input class="btn btn-primary" type="submit" value="Update" name="update">
              </td>
            </tr>

          </tbody>

        </table>

      </form>
    </div>
  </div>

</div>