<?php 
session_start();
  include "../Controller/admin/adminController.php";
  $ac = new adminController();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <title>Admin</title>
</head>
<body>
  <?php
    $ac->SignInAdmin(); 
    include "../layout/toast.php";
  ?>
</body>
</html>
