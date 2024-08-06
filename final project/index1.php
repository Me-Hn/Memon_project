<?php
include('header1.php');
?>

<slider>
    <div class="container-fluid">
        <div class="main"><!-- Start WOWSlider.com BODY section -->
            <div id="wowslider-container1">
            <div class="ws_images"><ul>
                    <li><img src="data1/images/slid1.jpg" alt="001" title="001" id="wows1_0"/></li>
                    <li><a href="http://wowslider.net"><img src="data1/images/slid2.jpg" alt="css slider" title="002" id="wows1_1"/></a></li>
                    <li><img src="data1/images/slid3.jpg" alt="003" title="003" id="wows1_2"/></li>
                </ul></div>
                <div class="ws_bullets"><div>
                    <a href="#" title="001"><span><img src="data1/tooltips/001.jpg" alt="001"/>1</span></a>
                    <a href="#" title="002"><span><img src="data1/tooltips/002.jpg" alt="002"/>2</span></a>
                    <a href="#" title="003"><span><img src="data1/tooltips/003.jpg" alt="003"/>3</span></a>
                </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">slideshow html code</a> by WOWSlider.com v9.0</div>
            <div class="ws_shadow"></div>
            </div>	
            <script type="text/javascript" src="engine1/wowslider.js"></script>
            <script type="text/javascript" src="engine1/script.js"></script>
            <!-- End WOWSlider.com BODY section --></div>
        </div>
</slider>

<card>
<div class="container">
    <div class="row">
       
    <?php 
    		$query="select * from addporduct where cat='Laptop'";
    		$dis=mysqli_query($con,$query) or die (mysqli_error()); 
    		while($row=mysqli_fetch_array($dis)){
    		   	?>
    		
        <div class="col-md-3"><div class="card" style="width: 250px; margin: 50px 0px 0px 0px; background: white;">
            <a href=""><img src="admin/images/user/<?php echo $row['image']?>" class="card-img-top" alt="..." style="height:200px; width:247px;"></a>
            <div class="card-body" style="margin: 50px 0px 0px 0px;">
              <h5 class="card-title"><?php echo $row['title']?></h5>
              <p class="card-text"><del>PKR:<?php echo $row['old']?></del> PKR:<?php echo $row['new']?></p>
              <a href="cart.php?id=<?php echo $row['0']?>&action=add" class="btn btn-primary">add to cart</a>
            </div>
          </div>
      </div>
<?php 
}
?>
    </div>
</div>
</card>

<h2 class="mob">Mobile Store</h2>
<div class="phead"></div>

<card>
<div class="container">
    <div class="row">
       
    <?php 
    		$query="select * from addporduct where cat='Mobile'";
    		$dis=mysqli_query($con,$query) or die (mysqli_error()); 
    		while($row=mysqli_fetch_array($dis)){
    		   	?>
    		
        <div class="col-md-3"><div class="card" style="width: 250px; margin: 50px 0px 0px 0px;">
            <a href=""><img src="admin/images/user/<?php echo $row['image']?>" class="card-img-top" alt="..." style="height:200px; width:247px;"></a>
            <div class="card-body" style="margin: 50px 0px 0px 0px;">
              <h5 class="card-title"><?php echo $row['title']?></h5>
              <p class="card-text"><del>PKR:<?php echo $row['old']?></del> PKR:<?php echo $row['new']?></p>
              <a href="cart.php?id=<?php echo $row['0']?>&action=add" class="btn btn-primary">add to cart</a>
            </div>
          </div>
      </div>
<?php 
}
?>
    </div>
</div>
</card>
<h2 class="mob">Tablet Store</h2>
<div class="phead"></div>
<card>
<div class="container">
    <div class="row">
       
    <?php 
    		$query="select * from addporduct where cat='Tablet'";
    		$dis=mysqli_query($con,$query) or die (mysqli_error()); 
    		while($row=mysqli_fetch_array($dis)){
    		   	?>
    		
        <div class="col-md-3"><div class="card" style="width: 200px; margin: 50px 0px 0px 0px;">
            <a href=""><img src="admin/images/user/<?php echo $row['image']?>" class="card-img-top" alt="..." style="height:200px; width:190px;"></a>
            <div class="card-body" style="margin: 50px 0px 0px 0px;">
              <h5 class="card-title"><?php echo $row['title']?></h5>
              <p class="card-text"><del>PKR:<?php echo $row['old']?></del> PKR:<?php echo $row['new']?></p>
              <a href="cart.php?id=<?php echo $row['0']?>&action=add" class="btn btn-primary">add to cart</a>
            </div>
          </div>
      </div>
<?php 
}
?>
    </div>
</div>
</card>

<?php
include('footer1.php');
?>