<?php include("header.php");?>


<?php

    
	if(isset($_REQUEST['id'])){
		
		$Id=$_REQUEST['id'];
		$Action=$_REQUEST['action'];
		
		
switch($Action){

case "add":
if(isset($_SESSION['cart'][$Id])){
	$_SESSION['cart'][$Id]++;
	}else{
    $_SESSION['cart'][$Id]=1;
		}break;

case "remove":			
	$_SESSION['cart'][$Id]--;	
	if($_SESSION['cart'][$Id]==0){
	unset($_SESSION['cart'][$Id]);
	}break;
	
	
case "clear":	
unset($_SESSION['cart']);
echo "

<script>
window.location='index.php';
</script>";	

	}
?>	
<style>
td{
color:#06F;
font-size:1.1em;	
	}
</style>	
<div class="container">		
<table width="100%" class="table table-hover">
<tr>
<td>S.No</td>
<td>Product name</td>
<td>Image</td>
<td>Price</td>
<td>Quantity</td>
<td>Sub Total</td>
<td>Action</td>
</tr>

<?php
$n=1;		
$grandtotal=0;
 foreach($_SESSION['cart'] as $Id=>$value){
 $query="select * from tbl6 where id='$Id'";	
 $dis=mysqli_query($con,$query) or die (mysqli_error());	 
 $row=mysqli_fetch_array($dis);
 $grandtotal+=$row['price']*$value; 
?>	 
	 
<tr>
<td><?php echo $n++;?></td>
<td><?php echo $row['product'];?></td>
<td><img src="admin/images/user/<?php echo $row['img'];?>" width="100"></td>
<td><?php echo $row['price'];?></td>
<td><?php echo $value;?></td>
<td><?php echo $row['price']*$value;?></td>
<td>
<a href="cart.php?id=<?php echo $row['id']?>&action=add">+</a>
|
<a href="cart.php?id=<?php echo $row['id']?>&action=remove">-</i></a>
</td>
</tr>    
	
    
<?php     
	 }
?>	

<tr>
<td colspan="2"><a href="index.php" class="btn btn-primary">Continue  Shopping <i class="fa fa-cart-plus"></i></a></td>

<td colspan="2"><a href="cart.php?id=<?php echo $Id?>&action=clear" class="btn 
btn-danger">Clear Cart <i class="fa fa-trash"></i></a></td>

<td>GrandTotal : <?php echo $grandtotal;?></td>

<td><a href="checkout.php" class="btn btn-success">Checkout <i class="fa fa-shopping-cart" aria-hidden="true"></i></a></td>


</tr>

	
	
	 
</table>	 
</div> 



<?php	 	
		}
?>



















<?php include("footer.php");?>