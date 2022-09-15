<?php

$server = "localhost";
$username = "root";
$password = "";
$databse = "504";

$conn = mysqli_connect($server, $username, $password, $databse);

$sql = "SELECT * from user";


$result = mysqli_query($conn, $sql);


$usercount = mysqli_num_rows($result);





require "components/navbar.php";



?>



<!DOCTYPE html>
<html lang="en">

<head>


    <link rel="stylesheet" href="components/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Admin Panel</title>
</head>


<body id="boadmin">
    <div class="card card-body container mt-5 shadow p-3 mb-5 bg-body rounded text-dark bg-light">

        <div class="card-body">
            <h5 class="card-title">USER</h5>
            <p class="card-text"> Total User On This Site :
               <b> <?php echo $usercount; ?> </b> </p>
            
        </div>
    </div> 

    


</body>

</html>