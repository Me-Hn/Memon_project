<?php
include('conf.php')

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="assest2/css/layout.css">
    <link rel="stylesheet" type="text/css" href="assest2/css/style.css">
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
    
    <div class="nav">
    <div class="container">
        <div class="row">
            <div class="col-md-12 nav1">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
          <a class="nav-link" href="form1.php">Add product</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="vew.php">view product</a>
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
            </div>
        </div>
    </div>

    </div>
</body>
</html>