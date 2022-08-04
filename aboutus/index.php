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
<link rel="icon" href="../media/logo.png" type="image/png">
<title>About Us - Coupon Shope</title>

<link href="../bootstrap/css/bootstrap.min.css"  rel="stylesheet" type="text/css"/>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="../css/stylesheet.css" rel="stylesheet" type="text/css"/>
<script src="../jquery/jquery-2.1.4.min.js"></script>
<script src="../js/script.js"></script>
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


<div id="tophead">
<small id="to-sm">Offer</small>
<small>Kitchen Carnival - Upto 80% Off</small>
<small id="to-ri">Customer support (24X7): info@couponshope.com</small> 
</div>
<div id="logo" class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a href="../" target="_blank"><img src="../media/logo1.png" width="250px" height="100px" style="cursor:pointer"/></a></div>
<div id="searchbar"  class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

        <form method="get" action="../store/">
<div id="searchfield">
<input type="text" name="search" autocomplete="off" placeholder="Search Stores..." autofocus/>
</div>

</form>
        
</div>
<div id="btn-div" class="col-xs-12 visible-xs">
<div id="nav-btn" class="">
<div id="line"></div>
<div id="line"></div>
<div id="line"></div>

</div>
</div>

<div id="navbar" class="col-lg-12 col-sm-12 col-md-12 col-xs-12">

<ul>
<li><a id='home' href="../"><span class='fa fa-home' style='font-size:18px;'></span> Home</a></li>
<li><a  id='coup'  href="../coupon/"><span class='fa fa-tags' style='font-size:18px;'></span>Coupons</a></li>
<li><a  id='lates' href="../deals/"><span class='fa fa-shopping-bag' style='font-size:18px;'></span>Deals</a></li>
<li><a  id='sto' href="../stores/"><span class='fa fa-shopping-cart' style='font-size:18px;'></span>Store</a></li>

<li><a  id='categ' href="../blog/"><span class='fa fa-edit' style='font-size:18px;'></span> Blog</a></li>

<li><a  id='back' href="../contact/"><span class='fa fa-phone' style='font-size:18px;'></span>Contact</a></li>
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


<div id="f1" class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

	<div id="flogo"><a href="#" target="_blank"><img src="../media/logo1.png" width="250px"/></div></a>
    <p>Couponshope : 2767 Tree Frog Lane Kansas City, MO 64106</p>
    <p>Phone : +1 9724719248</p>
    <p>E-mail : info@couponshope.com</p>
  


</div>

<div id="f2" class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
<h2>General Links</h2><br>
<br>
<a href="../privacypolicy/">Privacy Policy</a>
<br>
<a href="../aboutus/">About Us</a><br>
<a href="../contact/">Contact Us</a>
<br>


</div>

<div id="f3" class="container col-lg-4 col-md-4 col-sm-12 col-xs-12">
<h2>Our Social Links</h2>
	<div id='fb'>Facebook</div>
    <div id='twi'>Twitter</div>
    <div id='insta'>Instagram</div>
    <div id='pin'>Pinterest</div>
	<div id='in'>LinkedIn</div>



</div>

	
</footer>

<div id="f4">
<div style='width:100%;text-align:center;'>All the given products are already discounted and offer limited stock with no rain checks. There are no prior gift cards, purchases, taxes, shipping, and processing or gift certificates charges. The applicable tax must be paid but the customer. Offers may not be conjunction with discount, code, coupon, promotion or other offers. Where necessary void prohibited, taxed or may restrict. Return of any portion will be equated with balanced forfeiture of the offer or minimum/equal amount. We have right to end or modify any promotion at any time of the year with other resections applied at any time.</div>
<div id="in-f4" style='text-align:center;' class="col-lg-12 col-md-12 col-sm-12 col-xs12">©2017 couponshope.com. ALL RIGHTS RESERVED</div>
<div id="last" class="col-lg-5 col-md-5 col-sm-12 col-xs12">
<a href="../">couponshope.com</a>
&nbsp;/&nbsp;
<a href="../aboutus/">About us</a>
&nbsp;/&nbsp;
<a href="../blog/">Blog</a>
&nbsp;/&nbsp;
<a href="../contact/">Contact us</a>
</div>


</div>

</div> <!-- Wrapper -->


</body>
</html>
