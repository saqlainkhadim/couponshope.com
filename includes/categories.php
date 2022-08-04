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
                              
  
        echo "<div id='small-tags'><a href='/categories/".$categ."'><img src='media/ball.png' width='10px' style='margin-top:-5px;margin-right:5px;'/>".$couponlistingt['category']."</a></div>";
	}
	?>
    </div>
    
    </div>
  