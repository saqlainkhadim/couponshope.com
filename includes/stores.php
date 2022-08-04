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
		
        	echo "<a href='/brands/".$sname."'><img src='media/stores_logo/".$couponlistingt['logo']."'/></a>";
	}
     ?>
     
	    </div>
        
        
        </div>
    