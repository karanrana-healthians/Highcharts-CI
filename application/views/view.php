

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Edit User</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="<?php echo base_url().'main/dashboard'?>">Home</a>
        <a class="nav-link" href="<?php echo base_url().'upload_controller/index'?>">Details</a>
        <a class="nav-link" href="<?php echo base_url().'upload_controller/index'?>">Edit/Delete User</a>
      </div>
    </div>
  </div>
</nav>

<center><h2>Detail of Registered Person<h2></center>
</br></br>
    <table align ="center" border="1px" style="width:900px; line-height:30px"> 
        <tr>
            <th colspan="8"><center><h2>Record<h2></center></th>
        </tr>
        <tr>
            <th>ID</th>
            <th>Image Path</th>
            <th>Name</th>
            <th>Age</th>
            <th>Address</th>
            <th>Contact Number</th>
            <th>City</th>
            <th>Gender</th>
        </tr>


<?php 
  if(!empty($Usercrm)){
    foreach($Usercrm as $user) {?>
        <tr>
            <td><?php echo $user['id']?></td>
            <td><img src="<?php echo base_url().$user['image_path']; ?>"
            height="50px" weight="50px"></td>
            
            <td><?php echo $user['user_name']?></td>
            <td><?php echo $user['user_age']?></td>
            <td><?php echo $user['user_add']?></td>
            <td><?php echo $user['contact_number']?></td>
            <td><?php echo $user['city']?></td>
            <td><?php echo $user['gender']?></td>


            <td><a  class="btn btn-info" 
                    href="<?php echo base_url().'upload_controller/editdata/'.$user['id']?>">Edit</a>&nbsp;
                <a  class="btn btn-danger" 
                    href = "<?php echo base_url().'upload_controller/deletedata/'.$user['id']?>">Delete</a></td>
        </tr>


<?php
}}
?>
</table>
</body>
</html>