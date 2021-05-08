<?php include('admin/header.php')?>

<h3 class="text-end m-5"><a href="login.php">Admin Login</a> </h3>
<h1 class="text-center">Welcome to the Student Management System</h1>
<div class="container">
  <div class="row">
    <div class="col-lg-8 offset-lg-2 col-8 offset-2">
      <h3 class="text-center m-5">Students Information</h3>
      <form action="index.php" method="post">

        <div class="row mb-3">
          <div class="col-sm-10">
            <select class="form-select" aria-label="Default select example">
              <option selected>Select Class</option>
              <option value="1">1st</option>
              <option value="2">2nd</option>
              <option value="3">3rd</option>
              <option value="4">4th</option>
              <option value="5">5th</option>
              <option value="6">6th</option>
            </select>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-sm-10">
            <input type="text" class="form-control" name="roll" id="roll" placeholder="Enter Roll Number">
          </div>
        </div>
        <input type="submit" class="btn btn-primary" name="submit" id="" value="Show Information">



      </form>

    </div>
  </div>
</div>

<?php include('admin/footer.php');?>