<?php
include('conf.php');


if(isset($_POST['btn'])){

 $cat=$_POST['cat'];
 $title=$_POST['title'];
 $old=$_POST['old'];
 $new=$_POST['new'];

 $fimg=$_FILES['img']['name'];
 $timg=$_FILES['img']['tmp_name'];

 $target="images/user/".$fimg;
 move_uploaded_file($timg, $target);

 $query="insert into addporduct values('','$cat','$title','$old','$new','$fimg',now())";
 $res=mysqli_query($con,$query) or die (mysqli_error());

 if($res){
 echo "<script>
 alert('Product Submit');
 document.location='vew.php';
 </script>";
 }else{
  echo "<script>
 alert('Error! Try again')
 </script>";
 }

}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="assets3/css/layout.css">
    <link rel="stylesheet" type="text/css" href="assets3/css/style.css">
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="row">
            <div class="col-md-4"><h1>Estore</h1></div>
            <div class="col-md-4"></div>
            <div class="col-md-4 uname">
            <span>Wellcome
                    <?php
                    if(isset($_SESSION['fn'])){
                        echo $_SESSION['fn'];
                        echo $_SESSION['ln'];
                    }else{
                        echo "<script>
                        document.location='login.php';
                        </script>";
                    }
                    ?>
</span>
                <a href="logout.php" class="btn btn-danger">logout</a>
            </div>
            </div>
        </div>
    </div>
    
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>from1</title>
</head>
<body>

<div class="nav">
    <div class="container">
        <div class="row">
            <div class="col-md-12 nav1">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
          <a class="nav-link" href="#">Add product</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">view product</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">add user</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">profile</a>
        </li>
        
      </form>
    </div>
  </div>
</nav>


<section class="container my-2 bg-light w-50 text-black p-2">
      <form class="row g-3 p-3" method="post" enctype="multipart/form-data">
          <div class="col-md-6"> <h6>Select Categories </h6></div>
          <div class="col-md-6">
              	<select class="form-select" aria-label="Default select example" name="cat">
  				<option selected name="cat">Open select menu</option>
  				<option value="Mobile">Mobile</option>
  				<option value="Laptop">Laptop</option>
  				<option value="Tablet">Tablet</option>
				</select>
            </div>
            <div class="col-md-6"> <h6>Product Title </h6> </div>
            <div class="col-md-6">
              <input type="text" class="form-control"placeholder="Product Title" name="title" id="validationDefault02" required>
            </div>

          	 <div class="col-md-6"><h6> Old Price</h6> </div>
            <div class="col-md-6">
              <input type="text" class="form-control" placeholder="Old Price" name="old" id="validationDefault02" required>
            </div>

             <div class="col-md-6"> <h6>New Price </h6></div>
            <div class="col-md-6">
              <input type="text" class="form-control" placeholder="New Price" name="new" id="validationDefault02" required>
            </div>


            <div class="col-md-6"> 
            <label for="inputState" class="form-label"><h6>Image</h6></label> 
            </div>
            <div class="col-md-6">
            <input type="file" class="form-control" name="img" name="">
          	</div>

          <div class="col-12">
            <input type="submit" class="btn btn-primary" name="btn" value="Add Product">
          </div>
        </form>

  </section>

        