<?php
include('conf.php')
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data in rows</title>
   
<style type="text/css">
body{
    background: grey;}


</style>
</head>
<body>
    <h1 align="center">vew Product</h1>
        <table class="center" border="1" align="center">
        <tr>
        <td>id</td>  
        <td>cat</td>
        <td>title</td>
        <td>old</td>
        <td>new</td>
        <td>image</td>
        <td>Data</td>
        

        </tr>    
        <?php
        $query="Select * from addporduct";
        $dis=mysqli_query($con,$query) or die (mysqli_query());
        while($row=mysqli_fetch_array($dis)){
        
        ?>

<tr>
    <td><?php echo $row[0]?></td>
    <td><?php echo $row[1]?></td>
    <td><?php echo $row[2]?></td>
    <td><?php echo $row[3]?></td>
    <td><?php echo $row[4]?></td>
    <td><?php echo $row[5]?></td>

    <td>
    <a href="del.php?id=<?php echo $row[0]?>">Del</a>    
    | Edit</td>
    

</tr>

<?php
        }
     ?>   
</table>

</body>
</html>

