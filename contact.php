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
<title>Coupon - Coupon Shope</title>

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

<li><a  id='categ' href="blog.php"><span><img src="media/grid.png" width="20px" style="margin-top:-5px"/></span> Blog</a></li>

<li><a  id='back' class="active" href="contact.php"><span><img src="media/back2.png" width="20px" style="margin-top:-5px"/></span>Contact</a></li>
</ul>
</div>



</div><!--header-->


<div id="s-bigdiv" class="container">

<div id="aside2" class="col-lg-9 col-md-8 col-sm-12 col-xs12">
<div id="side2">Contact Us</div>
<div id="side2-2">
    <div id="div-for-coupons-div">
		 <div id="div-for-privacy">
	
    <div id="div1">
    	<h2>Our Address:</h2>
        <p>
       2767 Tree Frog Lane Kansas City, MO 64106
        </p>
    </div>
    <div id="div1">
    	<h2>Our Phone Number: </h2>
        <p>
      +1 9724719248
        </p>
    </div>
   <div id="div1">
    	
    	<div id="form">
    
    <h2>Contact Us</h2>
    <form method="post" action="/webformmailer.php">
    
    <table>
    
    <tr>
    <td id="td1">Name: </td>
    <td id="td2"><input type="text" name="name"/></td>
    </tr>
    <tr>
    <tr>
    <td id="td1">Email: </td>
    <td id="td2"><input type="email" name="email"/></td>
    </tr>
    <tr>
     <tr>
    <td id="td1">Phone: </td>
    <td id="td2"><input type="tel" name="phn"/></td>
    </tr>
    <tr>
    <tr>
    <td id="td1">Message: </td>
    <td id="td2"><textarea name="mess" cols="40" rows="10"></textarea></td>
    </tr>
    <tr>
    <tr>
    <td id="td2" style="width:100%;text-align:center;"><input style="margin:0 auto;" type="submit" class="btn" name="submit"/></td>
    </tr>
    <tr>
    
    </table>
  	
    </form>
    
    
    </div>
    	
    </div>
    
    
   

    </div>	





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
