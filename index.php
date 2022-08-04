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
<title>Home - Coupon Shope</title>




<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="bootstrap/css/bootstrap.min.css"  rel="stylesheet" type="text/css"/>
<link href="css/stylesheet.css" rel="stylesheet" type="text/css"/>
<script src="jquery/jquery-2.1.4.min.js"></script>
<script src="js/script.js"></script>
<script>

$(document).ready(function(e) {
var a=window.location;
a=a.toString();
var b= a.indexOf('?t');

if(b>0){
		
	setTimeout(function(){	$("body").css("overflow","hidden");
$("#bg").css("display","block");$("#popup").css("display","block");
setTimeout(function(){$("#popup").animate({top:"20%",opacity:"1"},500);},200);
},200);
	
	}
else{
	$("#popup").css("display","none");
	$("#bg").css("display","none");
	}	    
});





</script>


</head>

<body>

<div id="bg"></div>
<div id="popup">

<?php 
	
	
$host='localhost';
$username='root';
$pwd='';

$conn = mysqli_connect($host,$username,$pwd) or die("cannot connect"); 
mysqli_select_db($conn, 'coupon-shope') or die("cannot select DB");
?>

<?php
$type=$_GET['ty'];
$det=$_GET['det'];
$det=str_replace("plus", "+",$det);
$det=str_replace("epsilon", "!",$det);
$det=str_replace("comma", ",",$det);
$det=str_replace("point", ".",$det);
$det=str_replace("colon", ":",$det);
$det=str_replace("amp", "&",$det);
$det=str_replace("apos", "\'",$det);
$det=str_replace("semi", ";",$det);
$det=str_replace("slash", "/",$det);
$det=str_replace("ques", "?",$det);
$det=str_replace("perc", "%",$det);

                                     
$diffpoint=$_GET['dp'];
if($type=="freeshipping"){
	
	$popup="SELECT * FROM couponlisting INNER JOIN stores ON couponlisting.store_name= stores.store where couponlisting.store_name='".$diffpoint."' and code_type='Free Shipping' and dis_detail='".$det."'";


	}
else{
	$popup="SELECT * FROM couponlisting INNER JOIN stores ON couponlisting.store_name= stores.store where code='".$diffpoint."' and code_type='Reveal Code' and dis_detail='".$det."'";
	
	}	

$popup_records=mysqli_query($conn, $popup);




	while($couponlisting_popup = mysqli_fetch_assoc($popup_records)){




$newcount=($couponlisting_popup['clicks']+1);
$posi=substr_count($_SERVER['REQUEST_URI'],'?t');
if($posi>0){
if($type=="freeshipping"){
	
	$newquery="UPDATE couponlisting SET clicks ='$newcount'  where couponlisting.store_name='".$diffpoint."' and code_type='Free Shipping' and dis_detail='".$det."'";

if(mysqli_query($conn,$newquery)){
	
	}

	}
else{
	$newquery="UPDATE couponlisting SET clicks ='$newcount' where code='".$diffpoint."' and code_type='Reveal Code' and dis_detail='".$det."'";

if(mysqli_query($conn,$newquery)){
	
	}	
	}	

}


echo "<div id='popup-pic'><img src='media/stores_logo/".$couponlisting_popup['logo']."' width='80px'/></div>";
echo "<div id='popup-head'>".$couponlisting_popup['dis_title']."</div>";
echo "<div id='popup-codecopy'>";

if($couponlisting_popup['code_type']=='Reveal Code'){

echo "<div id='copy'>";
echo "<div id='copy-code'>".$couponlisting_popup['code']."</div>";
echo "<div id='copy-btn'>Copy<span  class='glyphicon glyphicon-copy'></span></div>";

echo "</div>";
echo "</div>";
echo "<div id='visit'><a href='".$couponlisting_popup['url']."' target='_blank' class='btn'>Visit Site</a></div>";

}
else if($couponlisting_popup['code_type']=='Free Shipping'){
	echo "<div id='no-need'>Tip: No Code Needed! ";
echo "</div>";
echo "</div><br>
";
echo "<div id='continue'><a href='".$couponlisting_popup['url']."' target='_blank' class='btn'>Continue To Store</a></div>";

	}


echo "<div id='popup-details'>Details:<br>
Get Up To ".$couponlisting_popup['dis_detail']."
</div>";


break;

	}
?>
</div>




<div id="wrapper" class=""> <!-- Contains Everything-->

<div id="header" class="container">

<?php include("includes/header.php")?>

<div id="navbar" class="col-lg-12 col-sm-12 col-md-12 col-xs-12">

<ul>
<li><a id='home' class="active"  href="#"><span class='fa fa-home' style='font-size:18px;'></span> Home</a></li>
<li><a  id='coup' href="/coupon/"><span class='fa fa-tags' style='font-size:18px;'></span>Coupons</a></li>
<li><a  id='lates' href="/deals/"><span class='fa fa-shopping-bag' style='font-size:18px;'></span>Deals</a></li>
<li><a  id='sto' href="/stores/"><span class='fa fa-shopping-cart' style='font-size:18px;'></span>Store</a></li>

<li><a  id='categ' href="/blog/"><span class='fa fa-edit' style='font-size:18px;'></span> Blog</a></li>

<li><a  id='back' href="/contact/"><span class='fa fa-phone' style='font-size:18px;'></span>Contact</a></li>
</ul>
</div>



</div><!--header-->



<div id="slider">
<?php include("includes/slider.php")?>

</div><!--slider-->


<div id="firstdiv" class="container">

<div id="heading">
<div id="dis" class="col-lg-10 col-md-10 col-sm-10 col-xs-12">DISCOUNT UPTO 01-90% ON HOT DEALS AT COUPONSOPE</div>
<div id="divcontrol"  class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
<div id="newright"><img src="media/r2.png" width="20px"/></div>
<div id="newleft"><img src="media/l2.png" width="20px"/></div>
</div>
</div>

<div id="divslider">

<div id="indivslider">
<?php
$sql="SELECT  * FROM couponlisting INNER JOIN stores ON couponlisting.store_name= stores.store where couponlisting.code_type='Free Shipping' ORDER BY store_name LIMIT 0,36";

$records=mysqli_query($conn, $sql);


	while($couponlisting = mysqli_fetch_assoc($records))

	{
		echo "<div class='divslides col-lg-2 col-md-2 col-sm-3 col-xs-4'>";
        		echo "<div id='indivslides'>";
                
                echo "<div id='d-pic'><img src='media/stores_logo/".$couponlisting['logo']."' width='50px'/></div>";
                echo "<div id='d-name'>".$couponlisting['store_name']."</div>";
                echo "<div id='rest'>";
                echo "<div id='d-dis'>".substr($couponlisting['dis_title'],0,35)."</div>";
                echo "<a href='/store/?search=".$couponlisting['store_name']."'><div id='d-deal'>View Deal</div></a>";
               echo "<div id='d-exp'>Expiry: ".$couponlisting['expiry']."</div>";
               echo "</div>";
                
                
                echo "</div>
       </div>";
	
	}
	?>



</div>

</div>



</div>



<div id="seconddiv">

<div id="f-insec" class="col-lg-10 col-md-10 col-sm-10 col-xs-12">

<div id="f-head">
<div id="f-fname" class="col-lg-10 col-md-10 col-sm-10 col-xs-12">Latest Coupons</div>
<div id="f-fcontrols" class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
<div id="fright"><img src="media/r2.png" width="20px"/></div>
<div id="fleft"><img src="media/l2.png" width="20px"/></div>
</div>

</div>
<div id="f-slider">
<div id="f-slidermain">

<?php
$sql2="SELECT  * FROM couponlisting INNER JOIN stores ON couponlisting.store_name= stores.store where couponlisting.code_type='Reveal Code' ORDER BY rand() LIMIT 0,12";

$records2=mysqli_query($conn, $sql2);


	while($couponlisting2 = mysqli_fetch_assoc($records2))

	{
       echo "<div id='in-fslider'>";
      							echo "<div class='fslides'>";
                                		
                                        echo "<div id='ins1'>";
                                        echo "<img src='media/stores_logo/".$couponlisting2['logo']."' width='160px'/>";
                                        echo "</div>";
                                        echo "<div id='ins2'>";
                                        echo "<div id='coup-dis'>".substr($couponlisting2['dis_title'],0,35)."</div>";
                                        echo "<div id='ins2-brand'>".$couponlisting2['store_name']."</div>";
               echo "<a href='/store/?search=".$couponlisting2['store_name']."'><div id='ins2-deal'>".$couponlisting2['code_type']."</div></a>";
                                        echo "<div id='ins2-exp'>Expire: ".$couponlisting2['expiry']."</div>";
                                        echo "</div>
                                </div>
         </div>";

	}
	?>

</div>

</div>

</div><!--f-insec-->

<div id="s-insec" class="col-lg-2 col-md-2 col-sm-2 col-xs-4" style="height:300px;width:160px;padding:0;">
<a href="http://www.mb103.com/lnk.asp?o=11471&c=114121&a=284853&l=11655">
<IMG SRC="http://www.mb103.com/getimage.asp?a=284853&m=4711&o=11471&i=114121.dat" width=160 height=600 border=0>
</a>
</div>


</div>

<div id="featured">
<?php include("includes/featured.php")?>
</div>

<div id="third-div">
<div id="top-tags" class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	<?php include("includes/categories.php")?>
    </div>
     <div id="top-brands" class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
   <?php include("includes/stores.php")?>

</div>
</div>


<footer>

<?php include("includes/footer.php") ?>
	
</footer>

<div id="f4">
<?php include("includes/last.php") ?>

</div>

</div> <!-- Wrapper -->



</body>
</html>
