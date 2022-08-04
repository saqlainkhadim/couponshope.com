<div id="in-slider">
 <?php
	
	$query='Select * from slider';
	$record=mysqli_query($conn,$query);
	while($slides=mysqli_fetch_assoc($record)){
	
echo "<div class='slides'><img src='media/slides/".$slides['banner1']."' width='100%' class='img-responsive'/></div>";
echo "<div class='slides'><img src='media/slides/".$slides['banner2']."' width='100%' class='img-responsive'/></div>";
echo "<div class='slides'><img src='media/slides/".$slides['banner3']."' width='100%' class='img-responsive'/></div>";
echo "</div>";
echo "<div id='controls' class='img-responsive'>";
echo "<div id='left'><img src='media/l1.png' width='40px'/></div>";
echo "<div id='right'><img src='media/r1.png' width='40px'/></div>";
}
?>
</div>