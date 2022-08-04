<div id="categ-head">Browse Into Relevant Categories</div>
<?php
		$categ="SELECT * FROM categories";

$records2=mysqli_query($conn, $categ);


	while($couponlisting2 = mysqli_fetch_assoc($records2)){

		
		
		
		
		 
	echo "<div id='categ-indiv' class='col-lg-6 col-md-6 col-sm-12 col-xs-12'>";
    
    echo "<a href='categories.php?select=".$couponlisting2['category']."' target='new'><div id='categs'>";
        echo $couponlisting2['category'];
      echo   "</div></a>";
    
    echo "</div>";
	}
?>
