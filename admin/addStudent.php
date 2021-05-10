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
?>

<div class="container mt-5">
  <div class="row">
    <div class="col-8 offset-2">
      <form action="addStudent.php" method="post" enctype="multipart/form-data">
        <table class="table table-bordered table-responsive table-striped">
          <tbody>
            <tr>
              <th>Roll Number</th>
              <td> <input type="text" name="roll" id="" placeholder="Enter Roll Number" required> </td>
            </tr>
            <tr>
              <th>Full Name</th>
              <td> <input type="text" name="name" id="" placeholder="Enter Full Name" required> </td>
            </tr>
            <tr>
              <th>City</th>
              <td> <input type="text" name="city" id="" placeholder="Enter City Name" required> </td>
            </tr>
            <tr>
              <th>Class</th>
              <td> <input type="text" name="class" id="" placeholder="Enter Class Name" required> </td>
            </tr>
            <tr>
              <th>Parent Contact Number</th>
              <td> <input type="number" name="contact" id="" placeholder="Enter Contact Number" required> </td>
            </tr>
            <tr>
              <th>Image</th>
              <td> <input type="file" name="image" id=""> </td>
            </tr>
            <tr>
              <td colspan="2"> <input class="btn btn-primary" type="submit" value="Submit" name="submit"> </td>
            </tr>

          </tbody>

        </table>

      </form>
      <?php
      
      if(isset($_POST['submit'])){

        $roll       = $_POST['roll'];
        $name       = $_POST['name'];
        $city       = $_POST['city'];
        $contact    = $_POST['contact'];
        $class      = $_POST['class'];
        $imageName      = $_FILES['image']['name'];
        $tempimage      = $_FILES['image']['tmp_name'];

        $image=rand(0,500000).'_'.$imageName; 
        move_uploaded_file($tempimage, "../img/".$image);

        $query = "INSERT INTO `students`( `roll`, `name`, `city`, `contact`, `class`,`image`) VALUES ('$roll','$name','$city','$contact','$class','$image')";
// echo $query;
        $res = mysqli_query($db, $query);

        if($res==true){
          ?>
      <script>
      alert('Data Inserted Successfully')
      </script>
      <?php 
        }
      }
      ?>
    </div>
  </div>

</div>