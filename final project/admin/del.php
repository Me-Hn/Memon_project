
<?php
include('conf.php');

if(isset($_GET['id'])){
    $id=$_GET['id'];

    $query="delete from addporduct where id='$id'";
    $res=mysqli_query($con,$query) or die (mysqli_error());

    if($res){
        echo "<script>
        alert('your Prodct has been Deleted')
        document.location='vew.php';
        </script>";
    }else{
        echo "<script>
        alert('your Prodct has been Not Deleted')
        </script>";
    }
}
?>