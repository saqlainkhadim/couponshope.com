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
<title>About Us - Coupon Shope</title>

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

<li><a  id='back' href="contact.php"><span><img src="media/back.png" width="20px" style="margin-top:-5px"/></span>Contact</a></li>
</ul>
</div>



</div><!--header-->


<div id="s-bigdiv" class="container">

<div id="aside2" class="col-lg-9 col-md-8 col-sm-12 col-xs12">
<div id="side2">About Us</div>
<div id="side2-2">
    <div id="div-for-coupons-div">
	<div id="div-for-privacy">
	
    <div id="div1">
    	
        <p>When it's time to shop online, the Coupon Shope comes up.</p>
    </div>
    <div id="div1">
    	
        <p>If you are looking for an online resource for to buy or to have a large number of coupons codes. Why not sign up for Coupon Shope, we offer all the latest shopping coupons so you never feel inadequate the desired discount. You will find good deals that will help you save money by offering potential discounts and always upgrading discounts to various retailers, retailers, and online retailers. You will never end up with so many amazing shopping items that make up the day you've earned it. By giving you the best bonne codes, you have the optimum source to have a lap luxury style of shopping without losing your budget.</p>
    </div>
    
    <div id="div1">
    	<h2>Decent Offers</h2>
        <p>
        Coupon Shope offers several Varity coupon shops to make your money safe. We will always bring out new ways to expand the horizons of your imagination. Always looking for excellence, on our main page you will see a large number of different offers, from which you can choose the best one for you. We are very serious about keeping our favorite brand on top, so you do not have to spend a lot of time. It often starts to get the best COUPON code, and we will offer you a troubleshooting offer, which will be updated on our newest site to help you get the right quote.
        </p>
    </div>
    <div id="div1">
    	<h2>Amazing Offers</h2>
        <p>
        From time to time, we send an e-mail with more offers from a discount voucher to our prestigious subscribers. There are many offers in the newsletter as a percentage of full orders, free products or limited time offers and special offers. There are also many interesting stories about how many prestigious subscribers should trust us. So, to sign up and start several emails a year, otherwise you have the chance to cancel your order at any time. We also deliver offers that we offer throughout the year with sales and discount coupons. Our special customers can save money and the best offers of coupons.
        </p>
    </div>
    <div id="div1">
    	<h2>Our Prestigious Offers</h2>
        <p>
       We have several categories that you can freely choose by visiting our website. We are pleased to offer the following:<br>
1)	Apparel & Clothing’s<br>
2)	Gifts & Flowers<br>
3)	Arts & Crafts<br>
4)	Auctions<br>
5)	Automotive <br>
6)	Babies & Kids<br>
7)	Home & Garden<br>
These are just some of the ones we want to share, but on our category, you'll find everything you can go through. We want to get to know our website and enjoy the sophisticated experience with the Coupon Shope. We are confident that you will visit us again when we see a huge number of offers that are intuitive and varied. Our website is quite safe, so we tend to provide the best benefit that cannot be used.

        </p>
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
