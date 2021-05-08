<?php 
session_start();
include('db.php');
if(isset($_SESSION['uid'])){
  header('Location:admin/dashboard.php');
}   
   
   if (isset($_POST['login'])){
           
    $user=$_POST['uname'];
    $password=$_POST['password'];

    $query = "SELECT * FROM admin WHERE username='$user' AND password='$password'";
    $result= mysqli_query($db,$query);
    $row=mysqli_num_rows($result);
    if($row<1){
   ?>

<script>
alert("Username or Password doesn't match!!");
window.open('login.php', '_self');
</script>


<?php 
      } else{

      $data = mysqli_fetch_assoc($result);

      $id = $data['id'];

      echo $id;
      $_SESSION['uid'] = $id;

      header('Location:admin/dashboard.php');
  

      }?>

<?php    }
  

  ?>

<?php include('admin/header.php')?>

<!-- <h3 class="text-end m-5"><a href="login.php">Logout</a> </h3> -->
<h1 class="text-center m-3">Admin Login</h1>
<div class="container">
  <div class="row">
    <div class="col-lg-6 offset-lg-3 col-6 offset-3">

      <form action="login.php" method="post">
        <div class="mb-3">

          <input type="text" class="form-control" id="uname" name="uname" placeholder="Enter Username"
            required="required">
        </div>
        <div class="mb-3">

          <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password"
            required="required">
        </div>

        <input type="submit" class="btn btn-primary" name="login" id="" value="Login">

      </form>
    </div>
  </div>
</div>

<?php include('admin/footer.php');?>