<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log In With Admin Account</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <style>
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
<div class="container-fluid bg" >
  <div class="row justify-content-center">
    <div class="cold-md-3 col-sm-6 col-xs-12 row-container">
      <form method="POST">
        <h3> Log In With Admin Account</h3>
        <section style="color:red;"><?=$alert??'' ?></section>
        <div class="form-group">
          <label for="username">Username: </label>
          <input type="text" name="username" class="form-control" id="username" placeholder="Enter Username" required>         
        </div>
        <div class="form-group">
          <label for="password">Password: </label>
          <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password" required>         
        </div>
          <button class="btn btn-primary d-grid gap-2 my-3">Login</button>
      </form>
    </div>
  </div>
</div>
</body>
</html>
