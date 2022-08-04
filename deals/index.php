<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<title>Deals - Coupon Shope</title>

<link rel="icon" href="../media/logo.png" type="image/png">


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
<li><a  id='lates' class="active" href="#"><span class='fa fa-shopping-bag' style='font-size:18px;'></span>Deals</a></li>
<li><a  id='sto' href="../stores/"><span class='fa fa-shopping-cart' style='font-size:18px;'></span>Store</a></li>

<li><a  id='categ' href="../blog/"><span class='fa fa-edit' style='font-size:18px;'></span> Blog</a></li>

<li><a  id='back' href="../contact/"><span class='fa fa-phone' style='font-size:18px;'></span>Contact</a></li>
</ul>
</div>




</div><!--header-->


<div id="s-bigdiv" class="container">

<div id="aside1" class="col-lg-3 col-md-4 col-sm-5 col-xs12">


<div id="side1-3">

    <div id="intop-tags">
    
    	<div id="popu-t">Popular Tags</div>
        
        <div id="popu-na" class="container">
  
          <?php
$host='localhost';
$username='root';
$pwd='';

$conn = mysqli_connect($host,$username,$pwd) or die("cannot connect"); 
mysqli_select_db($conn, 'coupon-shope') or die("cannot select DB");


$sqlt="SELECT * FROM categories";

$recordst=mysqli_query($conn, $sqlt);


	while($couponlistingt = mysqli_fetch_assoc($recordst)){
  
   $categ=$couponlistingt['category'];
                                        $categ=str_replace("/", "",$categ);
                                      $categ=str_replace(" ", "",$categ);
  
        echo "<div id='small-tags'><a href='../categories/".$categ."'><img src='../media/ball.png' width='10px' style='margin-top:-5px;margin-right:5px;'/>".$couponlistingt['category']."</a></div>";
	}
	?>
    </div>
    
    </div>
  

</div>


<div id="side1-2">
		
	    	<div id="intop-brands" class="container">
        
        <div id="one" class="container">
        <div id="popu-s">Top Stores</div>
        <div id="view-s"><a href="/stores/"><small>View more stores</small></a></div>
        </div>
        <div id="img-sto" class="container">
        <?php
$host='localhost';
$username='root';
$pwd='';

$conn = mysqli_connect($host,$username,$pwd) or die("cannot connect"); 
mysqli_select_db($conn, 'coupon-shope') or die("cannot select DB");


$sqlt="SELECT * FROM stores ORDER BY rand() LIMIT 0,12";

$recordst=mysqli_query($conn, $sqlt);


	while($couponlistingt = mysqli_fetch_assoc($recordst)){
	$sname=$couponlistingt['store'];
                		  $sname=str_replace(" ", "",$sname);
        	echo "<a href='../brands/".$sname."'><img src='../media/stores_logo/".$couponlistingt['logo']."'  alt='".$couponlistingt['store']."'/></a>";
	}
     ?>
     
	    </div>
        
        
        </div>
    	
		 
    	
</div>


</div>

<div id="aside2" class="col-lg-9 col-md-8 col-sm-7 col-xs12">
<div id="side2">Available Best Deals
           <?php
$host='localhost';
$username='root';
$pwd='';

$conn = mysqli_connect($host,$username,$pwd) or die("cannot connect"); 
mysqli_select_db($conn, 'coupon-shope') or die("cannot select DB");
$sqlt="SELECT * FROM couponlisting INNER JOIN stores ON couponlisting.store_name= stores.store where couponlisting.code_type='Free Shipping' ORDER BY rand()";
$recordst=mysqli_query($conn, $sqlt);

$count=0;
	while($couponlistingt = mysqli_fetch_assoc($recordst)){
		++$count;
		}
?>
(<?php echo $count ?>)


</div>
<div id="side2-2">


<?php
$sqlt="SELECT * FROM couponlisting INNER JOIN stores ON couponlisting.store_name= stores.store where couponlisting.code_type='Free Shipping' ORDER BY rand()";
$recordst=mysqli_query($conn, $sqlt);


	while($couponlistingt = mysqli_fetch_assoc($recordst)){
		
 	echo "<div class='coup-divs'>
    
    <div id='coup-div' class='container'>
    					
    	<div id='coup-1' class='col-lg-2 col-md-2 col-sm-4 col-xs-12'>
        			
                    <div id='incoup-1' class='container'>
                    	<img src='../media/stores_logo/".$couponlistingt['logo']."' alt='".$couponlistingt['store_name']."' width='80px'/>
                    	<div id='what'>".$couponlistingt['main_dis']."</div>
                        <div id='code'><small>No Code Needed</small></div>
                    </div>
                    
      				  </div>
        
        
      			  <div id='coup-2' class='col-lg-6 col-md-6 col-sm-7 col-xs-12 container-fluid'>
                  
                  <div id='incoup2-1'>
                  	<small id='s1'>Sale</small>
                    <small id='s2'>98% success</small>
                    <small id='s3'><span style='font-size:16px;'>&#9786;</span>Verified</small>
                     <small id='s4'>".$couponlistingt['clicks']." used</small>
                    
                    
                  </div>
                   <div id='incoup2-2'>
                  	".$couponlistingt['dis_title']."
                  </div>
                   <div id='incoup2-3'>
                  ".$couponlistingt['dis_detail']."
                  </div>
                  
                  
                  </div>
    				  <div id='coup-3' class='col-lg-3 col-md-3 col-sm-12 col-xs-12'>
   									
                                      <div id='incoup3-3'>
                                      ".$couponlistingt['store_name']."
                         </div>";
                                  if($couponlistingt['code_type']=='Reveal Code'){
                                    $dis=$couponlistingt['dis_detail'];
                                      $dis=str_replace("+", "plus",$dis);
                                      $dis=str_replace("!", "epsilon",$dis);
                                      $dis=str_replace(",", "comma",$dis);
                                      $dis=str_replace(".", "point",$dis);
                                      $dis=str_replace(":", "colon",$dis);
                                      $dis=str_replace("&", "amp",$dis);
                                      $dis=str_replace("'", "apos",$dis);
                                      $dis=str_replace(";", "semi",$dis);
                                      $dis=str_replace("/", "slash",$dis);
                                      $dis=str_replace("%", "perc",$dis);
                                      $dis=str_replace("?", "ques",$dis);
                                      
                                  echo "<a target='_blank' href='../?ty=code&det=".$dis."&dp=".$couponlistingt['code']."'><div id='incoup3-4'>
                                      ".$couponlistingt['code_type']."
                                      </div></a>";
                                      }
                                      else{
                                      $dis=$couponlistingt['dis_detail'];
                                      $dis=str_replace("+", "plus",$dis);
                                      $dis=str_replace("!", "epsilon",$dis);
                                      $dis=str_replace(",", "comma",$dis);
                                      $dis=str_replace(".", "point",$dis);
                                      $dis=str_replace(":", "colon",$dis);
                                      $dis=str_replace("&", "amp",$dis);
                                      $dis=str_replace("'", "apos",$dis);
                                      $dis=str_replace(";", "semi",$dis);
                                      $dis=str_replace("/", "slash",$dis);
                                      $dis=str_replace("%", "perc",$dis);
                                      $dis=str_replace("?", "ques",$dis);
                                       echo "<a target='_blank' href='../?ty=freeshipping&det=".$dis."&dp=".$couponlistingt['store']."'><div id='incoup3-4'>
                                      ".$couponlistingt['code_type']."
                                      </div></a>";
                                      }
                                      
                                    echo "<div id='exp' style='text-align:center;font-size:14px;'>Expires on:".$couponlistingt['expiry']."</div>" ;   
                       
   		echo "<!--to--> 			</div>
	
			
    
    
     </div>
    </div>";
	}
	?>
    
   
 




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
