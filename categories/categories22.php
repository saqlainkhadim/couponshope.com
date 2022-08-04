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
b=a.indexOf("?categ=");
var c;
c=a.substr(b+7);

	
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

<div id="aside1" class="col-lg-3 col-md-4 col-sm-5 col-xs12">


<div id="side1-3">

<?php include("includes/categories.php")?>

</div>


<div id="side1-2">
		<?php include("includes/stores.php");
		$categ=$_GET['categ']; 
		 
		 $categ=str_replace("plus", "+",$categ);
$categ=str_replace("epsilon", "!",$categ);
$categ=str_replace("comma", ",",$categ);
$categ=str_replace("point", ".",$categ);
$categ=str_replace("colon", ":",$categ);
$categ=str_replace("amp", "&",$categ);
$categ=str_replace("apos", "\'",$categ);
$categ=str_replace("semi", ";",$categ);
$categ=str_replace("slash", "/",$categ);
$categ=str_replace("ques", "?",$categ);
$categ=str_replace("perc", "%",$categ);

echo "<script>$('title').text('".$categ." Coupons- CouponShope')</script>";
		 
		 
		if($categ==''){
	$abc="No Results Found";
	}
else{
	$abc="".$categ.""."'s Coupons";
	
	}	
		?> 
    	
</div>


</div>

<div id="aside2" class="col-lg-9 col-md-8 col-sm-7 col-xs12">
<div id="side2"><?php echo $abc?>
           <?php
$host='localhost';
$username='root';
$pwd='';



$conn = mysqli_connect($host,$username,$pwd) or die("cannot connect"); 
mysqli_select_db($conn, 'coupon-shope') or die("cannot select DB");
$sqlt="SELECT * FROM couponlisting INNER JOIN stores ON couponlisting.store_name= stores.store where category='".$categ."' ORDER BY rand()";
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
$sqlt="SELECT * FROM couponlisting INNER JOIN stores ON couponlisting.store_name= stores.store where category='".$categ."' ORDER BY rand()";
$recordst=mysqli_query($conn, $sqlt);


	while($couponlistingt = mysqli_fetch_assoc($recordst)){
		
 	echo "<div class='coup-divs'>
    
    <div id='coup-div' class='container'>
    					
    	<div id='coup-1' class='col-lg-2 col-md-2 col-sm-4 col-xs-12'>
        			
                    <div id='incoup-1' class='container'>
                    	<img src='media/stores_logo/".$couponlistingt['logo']."' width='80px'/>
                    	  	<div id='what'>".$couponlistingt['main_dis']."</div>";
                    if($couponlistingt['code']==''){   
					    echo "<div id='code'><small>No Code Needed</small></div>";
					}
					else{
						echo "<div id='code'>".$couponlistingt['code']."</div>";
					}
					echo "</div>
                    
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
                                      
                                  echo "<a target='_blank' href='index.php?ty=code&det=".$dis."&dp=".$couponlistingt['code']."'><div id='incoup3-4'>
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
                                       echo "<a target='_blank' href='index.php?ty=freeshipping&det=".$dis."&dp=".$couponlistingt['store']."'><div id='incoup3-4'>
                                      ".$couponlistingt['code_type']."
                                      </div></a>";
                                      }
                                      
                                      
                       
   		echo "<!--to--> 			</div>
	
			
    
    
    </div>
    </div>";
	}
	?>
    
    </div>
 




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
