<?php
include('conf.php');



if(isset($_POST['btn'])){

 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $pss=md5($_POST['pss']);
 $em=$_POST['em'];

 $fimg=$_FILES['img']['name'];
 $timg=$_FILES['img']['tmp_name'];

 $target="images/user/".$fimg;
 move_uploaded_file($timg, $target);

 $query="insert into adduser values('','$fname','$lname','$pss','$em','$fimg',now())";
 $res=mysqli_query($con,$query) or die (mysqli_error());

 if($res){
 echo "<script>
 alert('you are Registerd');
 document.location='login.php';
 </script>";
 }else{
  echo "<script>
 alert('you are not Registerd')
 </script>";
 }

}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" type="text/css" href="assets/css/layout.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

    <h1 id="ho">registration form</h1>
    <div class="container">
       <div class="main">
       <h1>wellcome</h1>
       <p class="pon">we are thankful to</p>
       <h3>our organaization</h3>
       <h2 class="pin1">Thank you</h2>
        </div>
        <div class="demo">
            <div class="demo1">
              <form class="row g-3" method="post" enctype="multipart/form-data">
                <div class="col-md-6">
                  <label for="validationDefault01" class="form-label">First name</label>
                  <input type="text" class="form-control" id="validationDefault01"  required name="fname">
                </div>
                <div class="col-md-6">
                  <label for="validationDefault02" class="form-label">Last name</label>
                  <input type="text" class="form-control" id="validationDefault02" required name="lname">
                </div>

                <div class="col-md-12">
                  <label for="validationDefault02" class="form-label">password</label>
                  <input type="password" class="form-control" id="validationDefault02" required name="pss">
                </div>
                
                <div class="col-md-12">
                  <label for="validationDefault02" class="form-label">Email</label>
                  <input type="email" class="form-control" id="validationDefault02" required name="em">
                </div>
                
                <div class="col-md-12">
                  <label for="validationDefault02" class="form-label">File</label>
                  <input type="file" class="form-control" id="validationDefault02" name="img">
                </div>
               
                <div class="col-12">
                  <input type="submit" value="sign up" name="btn">
                </div>
              </form>
    </div>
    </div>
    <script type="text/javascript" src="assets/js/css/script.js"></script>
</body>
</html>