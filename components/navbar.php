<?php 

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  $loggedin = true;
}
else{
  $loggedin = false;
}











echo '<!doctype html>
<html lang="en">



<head>

<link rel="stylesheet" href="style.css">
 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    


</style>
</head>

<body>


<nav id="nav" class="navbar navbar-expand-lg navbar-dark bg-dark">
    <divbar class="container-fluid">

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>';

          if(!$loggedin){
            echo '
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="register.php">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="login.php">Login</a>
            </li>';}
            if($loggedin){
            echo ' 
            <li class="nav-item">
              <a href="logout.php"><button type="button" class="btn mx-4 btn-danger">logout</button></a>
            </li> ';}
       
echo '
        </ul>
      </divbar>
    </div>
  </nav>


</body>

</html>';
?>