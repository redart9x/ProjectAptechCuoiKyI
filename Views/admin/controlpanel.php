<?php
$ac = new adminController();	  		
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Page</title>
  <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
	<!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!--Font awsome-->
  <!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/> -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Gluten&display=swap" rel="stylesheet">
  <style type="text/css">

  	/* body{font-family: 'Gluten', cursive !important;} */
  	.bg {
      margin-top: 20vh;
      width: 60%;
      

    }  
    .row-container {border: 1px solid dimgray;
      border-radius: 20px;
      padding: 20px;
      -webkit-box-shadow: 1px 0px 34px -5px rgba(10,9,10,1);
      -moz-box-shadow: 1px 0px 34px -5px rgba(10,9,10,1);
      box-shadow: 1px 0px 34px -5px rgba(10,9,10,1);
    }

    .btn {margin: 0 auto;width: 150px;}




  </style>
</head>
<body>
	<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top" style="width: 100%;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><i class="fas fa-home"></i> ADMIN PAGE</a>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <a>
          <button class="btn btn-outline-info" type="button">Hello: <? echo $_SESSION['admin']; ?></button>
          </a>
          <a href="?request=logout">
              <button class="btn btn-danger" type="button">Log Out</button>
          </a>
      </div>
  </div>

</nav>
<!-- aside -->
	<aside style="float: left;width: 15%;">
	      <ul class="list-group">
	        <li class="list-group-item" aria-current="true">
	          <a href="?request=brands">Brands Food</a>
	        </li>
	        <li class="list-group-item">
	          <a href="?request=product">Foods</a>
	        </li>
          <li class="list-group-item">
            <a href="?request=character">Character</a>
          </li>
          <li class="list-group-item">
            <a href="?request=game">Game</a>
          </li>
          <li class="list-group-item">
            <a href="?request=event">Event</a>
          </li>
          <li class="list-group-item">
            <a href="?request=feedback">Feedback</a>
          </li>
	      </ul>
	</aside>

<!-- MAIN -->
<main style="float: left; width: 85%;">
	<?php $ac->routes(); ?>
</main>
</body>
</html>