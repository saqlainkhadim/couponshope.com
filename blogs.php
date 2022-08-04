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
<title></title>

<link href="bootstrap/css/bootstrap.min.css"  rel="stylesheet" type="text/css"/>

<link href="css/stylesheet.css" rel="stylesheet" type="text/css"/>
<script src="jquery/jquery-2.1.4.min.js"></script>
<script src="js/script.js"></script>
<script>

$(document).ready(function(e) {
    var a=window.location;
var b;
a=a.toString();
b=a.indexOf("?blog=");
var c;
c=a.substr(b+6);

$("title").text(c+" Blog- Coupon Shope");
	
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
<div id="side2" style="height:auto">
<?php 
$blog=$_GET['blog'];
echo $blog;
?>


</div>
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
	
	
	 $sql="SELECT * FROM blogs where title='".$blog."'";

$blog=mysqli_query($conn, $sql);


	while($blogs = $blog->fetch_assoc())

	{
echo "<div id='myblog'>";
    	
    echo  "<div id='myblog-title'>".$blogs['title']."</div>";
		
 echo "
 <div id='myblog-det'>
 <img src='media/pencil2.png'/>Post By:".$blogs['author']."&nbsp;&nbsp;<img style='margin-top:-5px;' src='media/clock2.png'/>&nbsp;".$blogs['date']."</div>";

       echo "<div id='myblog-pic'><img src='media/blog_pics/".$blogs['pic']."' width='70%'/></div>";
        
      echo  "<div id='myblog-first'>".$blogs['first']."</div>";
		
      echo  "<div id='myblog-second'>".$blogs['second']."</div>";

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
