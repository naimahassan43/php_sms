<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <title>Student Management System</title>
</head>

<body>
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



  <!-- Option : Separate Popper and Bootstrap JS -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
    integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
    integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
  </script>

</body>

</html>