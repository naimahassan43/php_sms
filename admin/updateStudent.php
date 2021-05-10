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
    <div class="col-6 offset-3">
      <form action="" method="post" enctype="multipart/form-data">
        <table class="table table-bordered table-responsive table-striped">
          <tbody>
            <tr>
              <!-- <th>Roll Number</th>
              <td> <input type="text" name="roll" id="" placeholder="Enter Roll Number" required> </td>
            </tr> -->
            <tr>
              <th>Full Name</th>
              <td> <input type="text" name="name" id="" placeholder="Enter Full Name" required> </td>
            </tr>

            <tr>
              <th>Class</th>
              <td> <input type="text" name="class" id="" placeholder="Enter Class Name" required> </td>
            </tr>

            <tr>
              <td colspan="2">
                <input class="btn btn-primary" type="submit" value="Search" name="submit">
              </td>
            </tr>

          </tbody>

        </table>

      </form>


    </div>
  </div>
  <div class="row">
    <div class="col-10 offset-1">
      <table class="table table-bordered table-responsive table-striped text-center">
        <tr>
          <th>No</th>
          <th>Image</th>
          <th>Name</th>
          <th>Roll Number</th>
          <th>Edit</th>
        </tr>
        <?php
      
      if(isset($_POST['submit'])){
        // $roll       = $_POST['roll'];
        $name       = $_POST['name'];
        $class      = $_POST['class'];
        $query ="SELECT * FROM `students` WHERE `class`='$class' AND `name` LIKE '%$name%' ";
        $res = mysqli_query($db, $query);

        if(mysqli_num_rows($res)){
        
          $count =0;
          while($row = mysqli_fetch_assoc($res)){
            $count++;
            ?>
        <tr>
          <td><?php echo $count;?></td>
          <td>
            <img src="../img/<?php echo $row['image'];?>" alt="" class="img-responsive" style="max-width: 80px;">
          </td>
          <td><?php echo $row['name'];?></td>
          <td><?php echo $row['roll'];?></td>
          <td>
            <a class="btn btn-info " href="edit.php?uid=<?php echo $row['id'];?>">Edit</a>
          </td>
        </tr>

        <?php
          }
        }
        else{
          echo "No records found";
        }

      }

      ?>
      </table>
    </div>
  </div>

</div>