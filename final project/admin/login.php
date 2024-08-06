<?php

include('conf.php');

if(isset($_POST['btn'])){

    $em=$_POST['em'];
    $ps=md5($_POST['ps']);

    $query="select * from adduser where em='$em' and Pss='$ps'"; 
    $dis=mysqli_query($con,$query) or die (mysqli_error());
     while($row=mysqli_fetch_array($dis)){

      $_SESSION['fn']=$row['fname'];
      $_SESSION['ln']=$row['lname'];

      }



    $count=mysqli_num_rows($dis);

if($count>0){
  echo "<script>
  alert('Wellcome user');
  document.location='home.php';
  </script>";
}else{
  echo "<script>
  alert('Invalid user');
  </script>";
}

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="assets1/css/layout.css">
    <link rel="stylesheet" type="text/css" href="assets1/css/style.css">
</head>
<body>
    
<div class="demo">
    <a href=""><i class="fa-solid fa-user icon1"></i></a>
    <h1>login</h1>
    <p>Please Enter your Login password!</p>
    <div class="main">
        <form method="post">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="em">
              
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="ps">
            </div>
            <div class="mb-3 form-check">
              <h4><u>Forgot Password?</u></h4>
              
              <div class="col-12">
                  <input type="submit" value="sign up" name="btn">
                </div>
          </form>
    </div>
    <div class="footer">
        <p>Dont have an account?</p><p id="sig"><u>Sign Up</u></p>
    </div>
</div>
<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>