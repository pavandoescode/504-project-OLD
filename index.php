<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
  header("location: login.php");
  exit;
}








?>
<!doctype html>
<html lang="en">

<head>
  <link rel="stylesheet" href="components/style.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Welcome <?php echo $_SESSION['email'] ?> </title>
</head>

<body id="bowel">
  <?php require "components/navbar.php" ?>
  
  <div class="card-body container mt-5 shadow p-3 mb-5 bg-body rounded text-dark bg-light">
  <b>Welcome,<br></b>

  &emsp;&emsp;&emsp;&emsp;<?php echo $_SESSION['email'] ?>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum nulla corporis quas, magni, tempora repellendus vel voluptas alias perferendis velit error repellat nesciunt iste at veritatis quam, eaque amet harum quis! Corrupti sunt reiciendis itaque recusandae, minus at ipsa maxime quasi ut optio modi numquam aliquid dignissimos esse, hic nostrum iure qui eaque nobis voluptatibus non ducimus officiis. Quod, impedit?</p>
  </div>



</body>

</html>