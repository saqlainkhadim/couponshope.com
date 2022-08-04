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
<title>Blog - Coupon Shope</title>

<link href="bootstrap/css/bootstrap.min.css"  rel="stylesheet" type="text/css"/>

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
<li><a  id='sto' href="stores.php"><span><img src="media/sto.png" width="20px" style="margin-top:-5px"/></span>Store</a></li>

<li><a  id='categ' class="active" href="blog.php"><span><img src="media/grid2.png" width="20px" style="margin-top:-5px"/></span> Blog</a></li>

<li><a  id='back' href="contact.php"><span><img src="media/back.png" width="20px" style="margin-top:-5px"/></span>Contact</a></li>
</ul>
</div>



</div><!--header-->


<div id="s-bigdiv" class="container">

<div id="aside2" class="col-lg-9 col-md-8 col-sm-12 col-xs12">
<div id="side2">Recently Added Articles</div>
<div id="side2-2">
    <div id="div-for-coupons-div">
	
<?php
$host='localhost';
$username='root';
$pwd='';

$conn = mysqli_connect($host,$username,$pwd) or die("cannot connect"); 
mysqli_select_db($conn, 'coupon-shope') or die("cannot select DB");
?>

<?php

$sql="SELECT * FROM blogs";

$query=mysqli_query($conn, $sql);

while($records=mysqli_fetch_assoc($query)){
	
    	echo "<div id='coupon-div' class='container'>";
        	echo "<div id='blog-pic' style='margin:0;' class='col-lg-2 col-md-3 col-sm-3 col-xs-12'>";
            	
                echo "<img src='media/blog_pics/".$records['pic']."' width='150px'/>";
               
           echo "</div>";
    
           echo "<div id='blog-details' class='col-lg-10 col-md-9 col-sm-9 col-xs-12 container-fluid'>";
            	
               echo "<div id='blog-head'>".$records['title']."</div>";
               
               echo "<div id='blog-line'>".substr($records['first'],0,50)."...</div>";
                echo "<div id='blog-timing'><img src='media/pencil.png'/>Post By: ".$records['author']." &nbsp;<img src='media/clock.png' width='23px'/>".$records['date']."</div>";
               echo "<div id='blog-readmore'><a target='_blank' href='blogs.php?blog=".$records['title']."'><div class='btn btn-primary'>Read Full Story</div></a></div>";
                
            
            echo "</div>";
            
            
        echo "</div>";   
}
    ?>

    </div>


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
