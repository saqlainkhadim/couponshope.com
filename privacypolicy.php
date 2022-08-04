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
<title>Privacy Policy - Coupon Shope</title>

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
<li><a  id='sto' href="stores.php"><span><img src="media/sto.png" width="20px" style="margin-top:-5px"/></span>Store</a></li>

<li><a  id='categ' href="blog.php"><span><img src="media/grid.png" width="20px" style="margin-top:-5px"/></span> Blog</a></li>

<li><a  id='back' href="contact.php"><span><img src="media/back.png" width="20px" style="margin-top:-5px"/></span>Contact</a></li>
</ul>
</div>



</div><!--header-->


<div id="s-bigdiv" class="container">

<div id="aside2" class="col-lg-9 col-md-8 col-sm-12 col-xs12">
<div id="side2">Privacy Policy</div>
<div id="side2-2">
    <div id="div-for-coupons-div">
	<div id="div-for-privacy">
	
    <div id="div1">
    	
        <p>Our privacy policy changes at any time, and changes to our privacy policy will be reported on our website as soon as it is changed at any time.</p>
    </div>
    
    <div id="div1">
    	<h2>Data Collection:</h2>
        <p>
        We collect the name, email address and phone number just for communication with our customers and kept it secret for any other expense.
        </p>
    </div>
    <div id="div1">
    	<h2>Data Confidentiality: </h2>
        <p>
        We guarantee that database data is fully trusted and will never be shared with any third party.
        </p>
    </div>
    <div id="div1">
    	<h2>Online Visits: </h2>
        <p>
        We verify the IP address of our customers every time we visit Promotionalcod.com
        </p>
    </div>
    <div id="div1">
    	
        <p>
   

Our Privacy Policy combines the use, collection and disclosure of information collected on our website. We are dedicated to assuring you of maintaining the security and confidentiality of financial and personal security. The reader must keep in mind that our privacy policy applies to all registered persons or their products or services, using separate privacy practices. We have links to other sites of related products, and when they use these links, they simply leave the outside and have to keep in mind that we are not controlling these sites. It does not assume responsibility for the privacy and privacy of the sites you provide information, and such sites will not be subject to our Privacy Policy. In the report on the protection of data on these related sites, account must be taken of.
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
