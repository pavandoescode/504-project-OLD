<?php
$login = false;
$err = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $server = "localhost";
  $username = "root";
  $password = "";
  $databse = "504";
  
  $conn = mysqli_connect($server,$username,$password,$databse);
  
  $email = $_POST["email"];
  $password = $_POST["password"];
  

    $sql = "SELECT * from user WHERE email = '$email' AND password = '$password'" ;
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
      


      $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['email'] = $email;
                header("location: index.php");



    }
   else {
    $err = "Invalid Credencials";
  }
}

?>
 

<!doctype html>
<html lang="en">

<head>
  <link rel="stylesheet" href="components/style.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Log in</title>
</head>

<body id="boreg">
  <?php require "components/navbar.php" ?>


  <?php
  if ($err) {
    echo '<small><div class="alert col-5 text-center Containers alert-danger" role="alert"> Invalid Credencials </div></small>';
  }
  if ($login) {
    echo '<small><div class="alert col-5 text-center Containers alert-success" role="alert"> Your Are Logged In </div></small>';
  }
  ?>


  <br>
  <form id="regform" action="login.php" method="post">
    <div class="container col-4 my-4">
      <div class="mb-3">
        <label for="email" class="form-label">Email Address</label>
        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">password</label>
        <input type="password" class="form-control" name="password" id="password">
      </div>
    


      <button type="submit" class="btn btn-primary">login      </button>
    </div>
  </form>

</body>

</html>`