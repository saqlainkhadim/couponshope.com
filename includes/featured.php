<div id="head-fee">
<div id="top-fea" class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
Featured Brand
</div>
<div id="fea-fcontrols" class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
<div id="fearight"><img src="media/r2.png" width="20px"></div>
<div id="fealeft"><img src="media/l2.png" width="20px"></div>
</div>
</div>

<div id="fea-slider">
	<div class="fea-slidermain">
    	<?php
    	
    	$host='localhost';
$username='root';
$pwd='';

$conn = mysqli_connect($host,$username,$pwd) or die("cannot connect"); 
mysqli_select_db($conn, 'coupon-shope') or die("cannot select DB");


$sqlt="SELECT * FROM stores ORDER BY rand() LIMIT 0,12";
$recordst=mysqli_query($conn, $sqlt);


	while($couponlistingt = mysqli_fetch_assoc($recordst)){
	echo "<div class='fea-slides col-xs-6'>";
        	echo "<div id='feaslide' style='text-align:center;'>";
        	$sname=$couponlistingt['store'];
        	$sname=str_replace(" ", "",$sname);
            echo "<a href='brands/".$sname."'><img src='media/stores_logo/".$couponlistingt['logo']."' width='200px' height='100%'/></a>";
            echo"</div>";
        echo "</div>";
	}
    	 
        
        ?>
        
        
        
        
       
    </div>
    
</div>
