<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>admin</span></h3><h1><span><?php echo $_SESSION['admin_name'] ?></span></h1></h3>
      <p>this is an admin page</p>
      <a href="dashboard.php" class="btn">dashboard</a>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>