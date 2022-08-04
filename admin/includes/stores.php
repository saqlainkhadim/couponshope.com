<div id="main-for-brands">
<?php
$host='localhost';
$username='root';
$pwd='';

$conn = mysqli_connect($host,$username,$pwd) or die("cannot connect"); 
mysqli_select_db($conn, 'couponshope') or die("cannot select DB");

   
   		$brands="SELECT * FROM stores ORDER BY rand() LIMIT 0,12";

$records2=mysqli_query($conn, $brands);


	while($couponlisting2 = mysqli_fetch_assoc($records2)){
    
    	echo "<div class='brandspics col-lg-2 col-md-2 col-sm-3 col-xs-4'>";
       echo "<div id='inbrandpics'>";
       echo "<a href='brands.php?s=".$couponlisting2['store']."'><img src='media/stores_logo/".$couponlisting2['logo']."' width='100%' height='100%'/></a>";
       echo "</div>";
       echo "</div>";
	}
    ?>
    </div>    
    