<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
    
    
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Hello! Add User</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
        <a class="nav-link" href="view.php">Edit User</a>
        <a class="nav-link" href="view.php">Delete User</a>
      </div>
    </div>
  </div>
</nav>
<center><h2>ENTER YOUR DETAILS HERE:</h2></center>
<div class="container">    
<form action="<?php echo base_url().'upload_controller/editdata'?>" class="row g-3" method="POST" enctype="multipart/form-data">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Name</label>
    <input type="text" class="form-control" id="inputEmail4" name="user_name">
    <small><?php echo form_error('user_name'); ?></small>
  </div>
  <div class="col-md-6">
    <label for="inputage" class="form-label">Age</label>
    <input type="text" class="form-control" id="inputage" name="user_age">
    <small><?php echo form_error('user_age'); ?></small>
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Enter address" name="user_add">
    <small><?php echo form_error('user_add'); ?></small>
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Phone</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Phone NO." name="contact_number">
    <small><?php echo form_error('contact_number'); ?></small>
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity" name="city">
    <small><?php echo form_error('city'); ?></small>
  </div>

  <div>
    <label for="gender">Gender:</label>
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="M">
  <label class="form-check-label" for="inlineRadio1">Male</label>
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="F">
  <label class="form-check-label" for="inlineRadio2">Female</label>
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="T">
  <label class="form-check-label" for="inlineRadio3">Transgender</label>
  <small><?php echo form_error('gender'); ?></small>
</div>
<div>
    Select Image File to Upload:
    <input type="file" name="image_path" class = "form-control">
    <small><?php if(isset($error)) {echo $error; } ?></small>
</div>
<div class="col-12">
    <button type="submit" name="update" class="btn btn-primary">Submit</button>
</div>
</form>
</div>
    
</body>
<script>

</script>

</html>






