<?php


function showDetails($roll,$class){
  if(isset($_POST['submit'])){
  include('db.php');
  $sql = "SELECT * FROM students WHERE roll='$roll' AND class='$class'";

  // echo $sql;
  $result = mysqli_query($db, $sql);
  // echo $result;

  if(mysqli_num_rows($result)>0){
     $row = mysqli_fetch_assoc($result);?>

<div class="container mt-5">
  <div class="row">
    <div class="col-10 offset-1">
      <table class="table table-striped table-bordered table-hover">
        <tr>
          <th colspan="3">
            <h3 class="text-center">Student Details</h3>
          </th>
        </tr>
        <tr>
          <td rowspan="5" style="text-align:center; padding:0px;">
            <img src="img/<?php echo $row['image'];?>" class="img-responsive"
              style="max-width: 120px; max-height: 150px; ">
          </td>
          <th>Roll Number</th>
          <td><?php echo $row['roll'];?></td>
        </tr>
        <tr>
          <th>Name</th>
          <td><?php echo $row['name'];?></td>
        </tr>
        <tr>
          <th>Class</th>
          <td><?php echo $row['class'];?></td>
        </tr>
        <tr>
          <th>City</th>
          <td><?php echo $row['city'];?></td>
        </tr>
        <tr>
          <th>Contact Number</th>
          <td><?php echo $row['contact'];?></td>
        </tr>
      </table>

    </div>
  </div>
</div>


<?php
}else{

    echo "<script>alert('No Student Found);</script>";

  }
}
}

?>