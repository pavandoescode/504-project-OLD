<?php
$passmatch = false;
$alert = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
  $server = "localhost";
  $username = "root";
  $password = "";
  $databse = "504";
  
  $conn = mysqli_connect($server,$username,$password,$databse);
  



  $Email = $_POST["Email"];
  $Password = $_POST["Password"];
  $cPassword = $_POST["cPassword"];
  if ($Password == $cPassword) {
    $sql = "INSERT INTO `user` (`email`, `password`, `time`) VALUES ('$Email', '$Password', current_timestamp())";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      $alert = true;
    }
  } else {
    $passmatch = "pass not match";
  }
}

?>


<!doctype html>
<html lang="en">

<head>
  <link rel="stylesheet" href="components/style.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>SignUp Page</title>
</head>

<body id="boreg">
  <?php require "components/navbar.php" ?>


  <?php
  if ($passmatch) {
    echo '<small><div class="alert col-5 text-center Containers alert-danger" role="alert"> password Is Different </div></small>';
  }
  if ($alert) {
    echo '<small><div class="alert col-5 text-center Containers alert-success" role="alert"> Your account is Created </div></small>';
  }
  ?>


  <br>
  <form id="regform" action="register.php" method="post">
    <div class="container col-4 my-4">
      <div class="mb-3">
        <label for="Email" class="form-label">Email Address</label>
        <input type="emai" class="form-control" name="Email" id="Email1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="Password" class="form-label">Password</label>
        <input type="password" class="form-control" name="Password" id="Password">
      </div>
      <div class="mb-3">
        <label for="cPassword" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" name="cPassword" id="cPassword">
      </div>


      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>

</body>

</html>