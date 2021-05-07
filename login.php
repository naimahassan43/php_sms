<?php 
session_start();
include('db.php');
if($_SESSION['uid']){
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

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <title>Login Page</title>
</head>

<body>
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



  <!-- Option : Separate Popper and Bootstrap JS -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
    integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
    integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
  </script>

</body>

</html>