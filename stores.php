<?php
$host='localhost';
$username='root';
$pwd='';

$conn = mysqli_connect($host,$username,$pwd) or die("cannot connect"); 
mysqli_select_db($conn, 'coupon-shope') or die("cannot select DB");
?>
	
<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<?php include("includes/toplog.php");?>
<title>Stores - Coupon Shope</title>

<link href="bootstrap/css/bootstrap.min.css"  rel="stylesheet" type="text/css"/>
<link href="https://couponflash.000webhostapp.com/css/stylesheet.css" rel="stylesheet" type="text/css"/>
<link href="css/stylesheet.css" rel="stylesheet" type="text/css"/>
<script src="jquery/jquery-2.1.4.min.js"></script>
<script src="js/script.js"></script>
<script>

$(document).ready(function(e) {
var a=window.location;
a=a.toString();
var b= a.indexOf('?c');

if(b>0){
		
	setTimeout(function(){	$("body").css("overflow","hidden");
		$("#bg").css("display","block");$("#popup").css("display","block");$("#popup").animate({top:"20%"},500);},200);
	
	}
else{
	$("#popup").css("display","none");
	$("#bg").css("display","none");
	}	    
});




</script>


</head>

<body>


<div id="wrapper" class=""> <!-- Contains Everything-->

<div id="header" class="container">

<?php include("includes/header.php")?>

<div id="navbar" class="col-lg-12 col-sm-12 col-md-12 col-xs-12">

<ul>
<li><a id='home' href="index.php"><span><img src="media/home.png" width="20px" style="margin-top:-5px"/></span> Home</a></li>
<li><a  id='coup' href="coupon.php"><span><img src="media/coup.png" width="20px" style="margin-top:-5px"/></span>Coupons</a></li>
<li><a  id='lates' href="deals.php"><span><img src="media/lates.png" width="20px" style="margin-top:-5px"/></span>Deals</a></li>
<li><a  id='sto' class="active" href="stores.php"><span><img src="media/sto2.png" width="20px" style="margin-top:-5px"/></span>Store</a></li>

<li><a  id='categ' href="blog.php"><span><img src="media/grid.png" width="20px" style="margin-top:-5px"/></span> Blog</a></li>

<li><a  id='back' href="contact.php"><span><img src="media/back.png" width="20px" style="margin-top:-5px"/></span>Contact</a></li>
</ul>
</div>



</div><!--header-->


<div id="s-bigdiv" class="container">

<div id="aside1" class="col-lg-3 col-md-4 col-sm-5 col-xs12">


<div id="side1-3">
<?php include("includes/categories.php") ?>
</div>

<div id="side1-2">
		 
    <?php include("includes/stores.php")?>
</div>


</div>

<div id="aside2" class="col-lg-9 col-md-8 col-sm-7 col-xs12">
<div id="side2">All Stores (
<?php  
$sql="SELECT * FROM stores ORDER BY store ASC";

$records=mysqli_query($conn, $sql);

$count=0;
	while($couponlisting = mysqli_fetch_assoc($records)){
	++$count;
	}
echo $count;
?>
 )

</div>
<div id="side2-2">
<?php

$sql="SELECT * FROM stores ORDER BY store";

$records=mysqli_query($conn, $sql);


	while($couponlisting = mysqli_fetch_assoc($records))

	{
 	echo "<div class='st-divs'>";
    echo "<div id='st-div'>";
    
    echo "<img src='media/stores_logo/".$couponlisting['logo']."' width='100px' height='100px' style='padding:5px;'/>";
  
    echo "<a href='brands.php?st=".$couponlisting['store']."'><div id='st-deal'>View Deal</div></a>";
    echo "</div>";
    echo "</div>";
 
}
?>



</div>
</div>

</div><!-- s-bigdiv -->





<footer>

<?php include("includes/footer.php") ?>
	
</footer>

<div id="f4">
<?php include("includes/last.php") ?>

</div>

</div> <!-- Wrapper -->


</body>
</html>
