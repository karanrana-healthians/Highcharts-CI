<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  
  <div class="container-fluid">
    <a class="navbar-brand" href="#">DASHBOARD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
        <a class="nav-link" href="<?php echo base_url().'upload_controller/index'?>">Edit User</a>
        <a class="nav-link" href="<?php echo base_url().'upload_controller/index'?>">Delete User</a>
      </div>
    </div>
  </div>
</nav>
</br></br>
<div class="container">
  <div class="row">
  <center><div class="col">
    <h2> Click here to<a href="<?php echo base_url().'upload_controller/custom_view'?>">ADD NEW USER</a> </h2>
    </div></center>
    <center><div class="row">
    <h4> Click here to <a href="<?php echo base_url().'upload_controller/index'?>">EDIT/DELETE EXISTING USER</a> <h4>
    </div><center>
    
  </div>
</div>
</html>