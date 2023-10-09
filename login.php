<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div style="width: 250px; display:flex; jusftify-content:center; align-item:center;" >
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>"  method="POST">
<div class="container-fluid" style=" margin: 200px 500px; ">
<h1>User Login  </h2>
<div class="row">
    <div class="col-md-4">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
</div>
</div>
<div class="row">
<div class="col-md-4">
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
</div>
</div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</from>

    </div>

<?php
    if($_SERVER["REQUEST_METHOD"]== "POST"){
        $username=$_POST["email"];
        $password=$_POST["password"];
        if($username== "admin" && $password=="1234"){
            header("Location:index.php");
        }
    }
?>
</body>
</html>


