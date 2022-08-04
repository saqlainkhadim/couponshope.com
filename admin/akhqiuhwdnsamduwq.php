<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin Panel- CouponSlush</title>

<?php include("includes/toplog.php");?>
<link href="../bootstrap/css/bootstrap.min.css"  rel="stylesheet" type="text/css"/>
<link href="../bootstrap/css/bootstrap-theme.min.css"  rel="stylesheet" type="text/css"/>

<link href="../css/adminpanel.css"  rel="stylesheet" type="text/css"/>
<script src="../jquery/jquery-2.1.4.min.js"></script>
<script src="../js/script.js"></script>
<script>

</script>

<?php

$conn = mysqli_connect('localhost', 'root', '') or die("cannot connect");
mysqli_select_db($conn, 'coupon-shope') or die("cannot select DB");
session_start();
if(isset($_SESSION['count'])){
     if($_SESSION['count'] == 0){
header('Location: http://couponshope.com/admin/login.php');          
}
else{}
}

?>

</head>

<body>
<div id="head">
<img src="../media/logo1.png" width="135px" style="background-color:black;"/>&nbsp;ADMIN PANEL
<div id="logout" style="position:fixed;padding:10px;top:0px;right:15px;"><a style="color:white;font-style:normal;font-size:16px;" href="logout.php">LOG OUT</a></div>
</div>

<div id="buttons" class="container">

<div class="buttons">
<div id="add_store">ADD STORE</div>
<div class="triangle" id="a_st"><img src="../media/drop2.png" width="100%" height="100%"/></div>
</div>

<div class="buttons"><div id="add_category">ADD CATEGORY</div><div class="triangle" id="a_cat"><img src="../media/drop2.png" width="100%" height="100%"/></div></div>

<div class="buttons"><div id="add_coupon">ADD COUPON</div><div class="triangle" id="a_cot"><img src="../media/drop2.png" width="100%" height="100%"/></div></div>

<div class="buttons"><div id="add_blog">ADD BLOG</div><div class="triangle" id="a_blog"><img src="../media/drop2.png" width="100%" height="100%"/></div></div>

<div class="buttons">
<div id="del_store">DELETE STORE</div>
<div class="triangle" id="d_st"><img src="../media/drop.png" width="100%" height="100%"/></div>
</div>

<div class="buttons"><div id="del_category">DELETE CATEGORY</div><div class="triangle" id="d_ct"><img src="../media/drop.png" width="100%" height="100%"/></div></div>

<div class="buttons"><div id="del_coupon">DELETE COUPON</div><div class="triangle" id="d_cot"><img src="../media/drop.png" width="100%" height="100%"/></div></div>

<div class="buttons"><div id="del_blog">DELETE BLOG</div><div class="triangle" id="d_blog"><img src="../media/drop.png" width="100%" height="100%"/></div></div>
<div class="buttons"><div id="ed-st">EDIT STORE</div><div class="triangle" id="e-st"><img src="../media/drop3.png" width="100%" height="100%"/></div></div>

<div class="buttons"><div id="slide">SLIDES</div><div class="triangle" id="sl"><img src="../media/drop.png" width="100%" height="100%"/></div></div>


</div>

<div id="maindiv">

<div id="slider">

<div class="slides" id="slide1"></div>

<div class="slides" id="slide2">
    
    
<div id="addstore" class="container">

<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">

<table>

<tr>
<th colspan="2">Add Store</th>
</tr>

<tr>
<td>Store Name: </td>
<td><input type="text" name="store_storename"></td>
</tr>



<tr>
<td>Store Website (Complete URL): </td>
<td><input name="store_link" type="url"></td>
</tr>

<tr>
<td>Store Logo:</td>
<td><input id="img" name="store_logo" type="file"></td>
</tr>

<tr>
<td>Store Description:</td>
<td><textarea name="store_desc" cols="50" rows="3"></textarea></td>
</tr>


<tr>
<td colspan="2" id="submit"><input id="store_submit" class="btn btn-success" type="submit" name="submitstore"></td>
</tr>

</table>

</form>


</div>

    
    </div>

<div class="slides" id="slide3">
    
<div id="addcategory" class="container">

<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">

<table>

<tr>
<th colspan="2">Enter Category</th>
</tr>

<tr>
<td>Gategory Name: </td>
<td><input type="text" name="gategory_name"></td>
</tr>




<tr>
<td colspan="2" id="submit"><input id="categ_submit" class="btn btn-success" type="submit" name="submitcategory"></td>
</tr>

</table>

</form>

</div>

    
    
    </div>

<div class="slides" id="slide4">
    
   

<div id="addcoupon" class="container">

<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">

<table>

<tr>
<th colspan="2">Enter Coupon</th>
</tr>

<tr>
<td>Store Name: </td>
<td>
<input list="browsers" name="store_name" />
<datalist id="browsers" name="store_name">
  
<?php

$store_sql="SELECT * FROM stores";

$str=mysqli_query($conn, $store_sql);

while($strs = $str->fetch_assoc())

{
echo "<option value='".$strs['store']."'>";
}

?>

</datalist></td>
</tr><tr>
<td>Coupon Type</td>
<td><select name="code_type">
<option></option>
<option name="get">Reveal Code</option>
<option name='visit'>Free Shipping</option>
</select></td>
</tr>

<tr>
<td>Category:</td>
<td>
<select name="category">
<option></option>
<?php

$sql="SELECT * FROM categories";

$categ=mysqli_query($conn, $sql);

while($categs = $categ->fetch_assoc())

{
echo "<option>".$categs['category']."</option>";
}

?>
</select>
</td>
</tr>

<tr>

<td>Coupon Code (if any):</td>
<td><input type="text" name="code"></td>
</tr>
<tr>
<td>Main Discount (Example: Rs.1300 or 30% OFF):</td>
<td><textarea name="main_dis" cols="30" rows="2"></textarea></td>
</tr>
<tr>
<td>Discount Title:</td>
<td><textarea name="dis_title" cols="30" rows="2"></textarea></td>
</tr>

<tr>
<td>Discount Brief Detail:</td>
<td><textarea name="dis_detail" cols="30" rows="5"></textarea></td>
</tr>

<tr>
<td>Coupon Expiry:</td>
<td><input type="text" name="expiry"></td>
</tr>

<tr>
<td colspan="2" id="submit"><input id="coup_submit" class="btn btn-success" type="submit" name="submitcoup"></td>
</tr>

</table>

</form>

</div>

    
    
    </div>

<div class="slides" id="slide5">
    
    <div id="addblog" class="container">

<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">

<table>

<tr>
<th colspan="2">Add Blog</th>
</tr>

<tr>
<td>Blog Title : </td>
<td><input type="text" name="blog_title" max="20"></td>
</tr>

<tr>
<td>Author : </td>
<td><input type="text" name="blog_author" max="10"></td>
</tr>

<tr>
<td>Picture : </td>
<td style=""><input style="color:inherit" type="file" name="blog_pic"></td>
</tr>

<tr>
<td>First Paragraph : </td>
<td><textarea name="blog_first" cols="50" rows="5"></textarea></td>
</tr>

<tr>
<td>Second Paragraph : </td>
<td><textarea name="blog_second" cols="50" rows="5"></textarea></td>
</tr>


<tr>
<td colspan="2" id="submit"><input  class="btn btn-success" type="submit" name="submitblog"></td>
</tr>

</table>

</form>

</div>
    
    </div>



<div class="slides" id="slide6">
    
<div id="delstore" class="container">

<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">

<table>

<tr>
<th colspan="2">Delete Store</th>
</tr>

<tr>
<td>Delete Store:</td>
<td>
<input list="browsers" name="delstore" />
<datalist id="browsers" name="delstore">
  
<?php

$store_sql="SELECT * FROM stores";

$str=mysqli_query($conn, $store_sql);

while($strs = $str->fetch_assoc())

{
echo "<option value='".$strs['store']."'>";
}

?>

</datalist></td>
</tr>




<tr>
<td colspan="2" id="submit"><input  class="btn btn-success" type="submit" name="submitdelstore"></td>
</tr>

</table>

</form>

</div>

    
    
    </div>

<div class="slides" id="slide7">
       
<div id="delcateg" class="container">

<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">

<table>

<tr>
<th colspan="2">Delete Category</th>
</tr>

<tr>
<td>Delete Category:</td>
<td>
<select name="delcateg">
<option></option>
<?php

$sqlcateg="SELECT * FROM categories";

$categ=mysqli_query($conn, $sqlcateg);

while($categs = $categ->fetch_assoc())

{
echo "<option>".$categs['category']."</option>";
}

?>
</select>
</td>
</tr>




<tr>
<td colspan="2" align="center" id="submit"><input  class="btn btn-success" type="submit" name="submitdelcateg"></td>
</tr>

</table>

</form>

</div>
    
    
    
    </div>

<div class="slides" id="slide8">
    
    <div id="delcoupon" class="container">


<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">

<table>

<tr>
<th colspan="2">Delete Coupon</th>
</tr>

<tr>
<td>Delete Coupon With Code:</td>
<td><input type="text" name="delcoup_code"></td>
</tr>

<tr>
<td colspan="2" id="submit"><input  class="btn btn-success" type="submit" name="submitdelcoupwithcode"></td>
</tr>

<tr>
<td style="font-size:32px;">OR</td>

</tr>

<tr>
<td>Delete FreeShipping Coupon With Description:</td>
<td><textarea cols="30" rows="3" name="delcoupdesc"></textarea></td>
</tr>

<tr>
<td colspan="2" id="submit"><input class="btn btn-success" type="submit" name="submitdelcoupwithdesc"></td>
</tr>

<tr>
<td style="font-size:32px;">OR</td>

</tr>



<tr>
<td>Delete All Free Shipping Coupons Of This Store:</td>
<td><input list="browsers" name="delcoup_store" />
<datalist id="browsers" name="delcoup_store">
  
<?php

$store_sqla="SELECT * FROM stores";

$str1=mysqli_query($conn, $store_sqla);

while($strs2 = $str1->fetch_assoc())

{
echo "<option value='".$strs2['store']."'>";
}

?>

</datalist>
</td>
</tr>





<tr>
<td colspan="2" id="submit"><input  class="btn btn-success" type="submit" name="submitdelcoupwithstore"></td>
</tr>

<tr>
<td style="font-size:32px;">OR</td>

</tr>



<tr>
<td>Delete All Reveal Code Coupons Of This Store:</td>
<td><input list="browsers" name="delcoup_codestore" />
<datalist id="browsers" name="delcoup_codestore">
  
<?php

$store_sqla="SELECT * FROM stores";

$str1=mysqli_query($conn, $store_sqla);

while($strs2 = $str1->fetch_assoc())

{
echo "<option value='".$strs2['store']."'>";
}

?>

</datalist>
</td>
</tr>





<tr>
<td colspan="2" id="submit"><input  class="btn btn-success" type="submit" name="submitdelcoupcodewithstore"></td>
</tr>

</table>

</form>

</div>
    
    </div>

<div class="slides" id="slide9">
    
    <div id="delblog" class="container">

<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">

<table>

<tr>
<th colspan="2">Delete Blog</th>
</tr>

<tr>
<td>Delete Blog With Title:</td>
<td><input list="browse" name="del_blog">
<datalist id="browse" name="del_blog">
<?php

$store_sqlb="SELECT * FROM blogs";

$str3=mysqli_query($conn, $store_sqlb);

while($strs3 = $str3->fetch_assoc())

{
echo "<option value='".$strs3['title']."'>";
}

?>

</datalist>
</td>
</tr>

<tr>
<td colspan="2" id="submit"><input  class="btn btn-success" type="submit" name="submitdelblog"></td>
</tr>

</table>

</form>

</div>
    
    </div>

<div class="slides" id="slide10">
    
<div id="editstore" class="container">

<form method="GET" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">

<table>

<tr>
<th colspan="2">Edit Store</th>
</tr>

<tr>
<td>Edit Store with name: </td>
<td>
<input list="browsers" name="edstore" id="edstore" />
<datalist id="browsers" id="edstore" name="edstore">
  
<?php

$store_sql="SELECT * FROM stores";

$str=mysqli_query($conn, $store_sql);

while($strs = $str->fetch_assoc())

{
echo "<option value='".$strs['store']."'>";
}

?>

</datalist>
</td>
</tr>

<tr>
<td colspan="2" id="submit"><input id="est_submit" class="btn btn-success" type="submit" value="GET" name="edstsub"></td>
</tr>
</table>
</form>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
<table>

<?php  

	 $edstore=$_GET['edstore'];
   

	
	
	$edstore_sql="SELECT * FROM stores where store='".$edstore."'";

$edstr=mysqli_query($conn, $edstore_sql);

while($edstrs = $edstr->fetch_assoc()){
$ed_sname=$edstrs['store'];
$ed_surl=$edstrs['url'];
$ed_slogo=$edstrs['logo'];
$ed_sdes=$edstrs['store_description'];
echo "
<tr>
<td>Store Name: </td>
<td><input type='text' name='ed_stname' value='".$ed_sname."' id='ed_stname'  readonly></td>
</tr>

<tr>
<td>Store Website (Complete URL): </td>
<td><input name='ed_sturl' id='ed_sturl'  value='".$ed_surl."' type='url'></td>
</tr>

<tr>
<td>Store Logo:</td>
<td><img src='../media/stores_logo/".$ed_slogo."' width='40px' style='float:left'></td>
</tr>



<tr>
<td>Store Description:</td>
<td><textarea name='ed_stdesc' id='ed_stdesc' cols='50' rows='3'>".$ed_sdes."</textarea></td>
</tr>


<tr>
<td colspan='2' id='submit'><input id='store_submit' class='btn btn-success' type='submit' name='ed_stsub'></td>
</tr>";
	
}
	?>




</table>



	




</form>

</div>

    
    
    </div>


<div class="slides" id="slide11">
    
    <div id="sl_update" class="container">

<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">

<table>

<tr>
<th colspan="2">Update Slides</th>
</tr>
<tr>
<th colspan="2">Note: Only this size is allowed: 1500x500 px </th>
</tr>

<tr>
<td>Slide 1:</td>
<td><input type="file" name="banner1"></td>
</tr>

<tr>
<td colspan="2" id="submit"><input  class="btn btn-success" type="submit" value="Update" name="submitslides1"></td>
</tr>

<tr>
<td>Slide 2:</td>
<td><input type="file" name="banner2"></td>
</tr>

<tr>
<td colspan="2" id="submit"><input  class="btn btn-success" type="submit" value="Update" name="submitslides2"></td>
</tr>

<tr>
<td>Slide 3:</td>
<td><input type="file" name="banner3"></td>
</tr>

<tr>
<td colspan="2" id="submit"><input  class="btn btn-success" type="submit" value="Update" name="submitslides3"></td>
</tr>

</table>

</form>

</div>
    
    </div>




</div>





<?php
//store add
$store_count=0;

if(isset($_POST['submitstore'])){
$store_storename=$_POST['store_storename'];
$url=$_POST['store_link'];
$logo_name=$_FILES['store_logo']['name'];
$logo_type=$_FILES['store_logo']['type'];
$logo_size=$_FILES['store_logo']['size'];
$logo_temp=$_FILES['store_logo']['tmp_name'];
$store_desc=addslashes($_POST['store_desc']);

if($store_storename=='' or $url=='' or $store_desc==''){

echo "<div style='color:red;text-align:center;'><h2 id='message'>Some field missing<h2></div>";

exit();

}

if($logo_type=="image/jpeg" or $logo_type=="image/png" or $logo_type=="image/gif"){
if($logo_size<=500000){
move_uploaded_file($logo_temp,"../media/stores_logo/".$logo_name);

$store_sql="INSERT INTO stores(store,url,logo,store_description) VALUES('$store_storename','$url','$logo_name','$store_desc')";

if(mysqli_query($conn,$store_sql)){

echo "
<div style='color:red;text-align:center;'>
<h2 id='message'>Store Successfully Added<h2>
</div>";
header('Location: http://couponshope.com/admin/akhqiuhwdnsamduwq.php');


exit();
}

}
else{
echo "<div style='color:red;text-align:center;'><h2 id='message'>Logo size is greater than 50kbs.<h2></div>";
exit();
}
}
if(!mysqli_query($conn,$store_sql)){
echo "
<div>
<h2 style='color:red;text-align:center;' id='message'>Store Or URL Exist<h2>
</div>";
}

}






//coupon add
$coup_count=0;

if(isset($_POST['submitcoup'])){
$store_name=$_POST['store_name'];
$category=$_POST['category'];
$code_type=$_POST['code_type'];
$code=$_POST['code'];

$main_dis=addslashes($_POST['main_dis']);
$dis_title=addslashes($_POST['dis_title']);
$dis_detail=addslashes($_POST['dis_detail']);
$expiry=$_POST['expiry'];

$coup_count+=1;

if($category=='' or $code_type=='' or $main_dis=='' or $dis_title=='' or $dis_detail=='' or $expiry==''){


echo "<div style='color:red;text-align:center;'><h2 id='message'>Some field missing<h2></div>";


}




else if(($code_type=='Free Shipping' && $code=='') or ($code_type=='Reveal Code' && $code!='') ){
$sqlcoup="INSERT INTO couponlisting(store_name,category,code,code_type,main_dis,dis_title,dis_detail,expiry) VALUES('$store_name','$category','$code','$code_type','$main_dis','$dis_title','$dis_detail','$expiry')";

if(mysqli_query($conn,$sqlcoup)){

echo "
<div style='color:red;text-align:center;'>
<h2 id='message'>Coupon Successfully Published<h2>
</div>";header('Location: http://couponshope.com/admin/akhqiuhwdnsamduwq.php');
exit();

}
else if(!mysqli_query($conn,$sqlcoup)){

echo "
<div style='color:red;text-align:center;'>
<h2 id='message'>Null<h2>
</div>";


}


}
else{
echo "<div style='color:red;text-align:center;'><h2 id='message'>Some field missing<h2></div>";
}	
}


//category add

if(isset($_POST['submitcategory'])){
$category_name=$_POST['gategory_name'];

if($category_name==''){	
echo "<div style='color:red;text-align:center;'><h2 id='message'>Field missing<h2></div>";

}




else{
$category_sql="INSERT INTO categories(category) VALUES('$category_name')";

if(mysqli_query($conn,$category_sql)){

echo "
<div style='color:red;text-align:center;'>
<h2 id='message'>Category Successfully Published<h2>
</div>";header('Location: http://couponshope.com/admin/akhqiuhwdnsamduwq.php'); 
exit();

}

}
}

//BLOG add
$store_count=0;

if(isset($_POST['submitblog'])){
$blog_title=$_POST['blog_title'];
$author=$_POST['blog_author'];
$first_para=addslashes($_POST['blog_first']);
$second_para=addslashes($_POST['blog_second']);
$date= DATE('l, jS F Y');
$pic_name=$_FILES['blog_pic']['name'];
$pic_type=$_FILES['blog_pic']['type'];
$pic_size=$_FILES['blog_pic']['size'];
$pic_temp=$_FILES['blog_pic']['tmp_name'];

if($blog_title=='' or $author=='' or $first_para==''){

echo "<div style='color:red;text-align:center;'><h2 id='message'>Some field missing<h2></div>";

exit();

}

if($pic_type=="image/jpeg" or $pic_type=="image/png" or $pic_type=="image/gif"){
if($pic_size<=100000){
move_uploaded_file($pic_temp,"../media/blog_pics/$pic_name");

$blogadd_sql="INSERT INTO blogs(title,author,pic,date,first,second) VALUES('$blog_title','$author','$pic_name','$date','$first_para','$second_para')";

if(mysqli_query($conn,$blogadd_sql)){

echo "
<div style='color:red;text-align:center;'>
<h2 id='message'>Blog Successfully Published<h2>
</div>";
header('Location: http://couponshope.com/admin/akhqiuhwdnsamduwq.php'); 
exit();
}

}
else{
echo "<div style='color:red;text-align:center;'><h2 id='message'>Logo size is greater than 100kbs.<h2></div>";
exit();
}
}
if(!mysqli_query($conn,$blogadd_sql)){
echo "
<div style='color:red;text-align:center;'>
<h2 id='message'>Title Already Exist<h2>
</div>";
}

}




//DEL COUPON
if(isset($_POST['submitdelcoupwithstore'])){
$delcoup_store=$_POST['delcoup_store'];

if($delcoup_store==''){


echo "<div style='color:red;text-align:center;'><h2 id='message'>Field missing<h2></div>";


}





else{
$delcoup_code_sql="DELETE FROM `couponlisting` WHERE code_type='Free Shipping' AND store_name='".$delcoup_store."'";

if(mysqli_query($conn,$delcoup_code_sql)){

echo "
<div style='color:red;text-align:center;'>
<h2 id='message'>Coupon Successfully Deleted<h2>
</div>";header('Location: http://couponshope.com/admin/akhqiuhwdnsamduwq.php');

}


}
}
if(isset($_POST['submitdelcoupcodewithstore'])){
$delcoup_codestore=$_POST['delcoup_codestore'];

if($delcoup_codestore==''){


echo "<div style='color:red;text-align:center;'><h2 id='message'>Field missing<h2></div>";


}





else{
$delcoup_code_sql33="DELETE FROM `couponlisting` WHERE code_type='Reveal Code' AND store_name='".$delcoup_codestore."'";

if(mysqli_query($conn,$delcoup_code_sql33)){

echo "
<div style='color:red;text-align:center;'>
<h2 id='message'>Coupon Successfully Deleted<h2>
</div>";header('Location: http://couponshope.com/admin/akhqiuhwdnsamduwq.php');

}


}
}
if(isset($_POST['submitdelcoupwithcode'])){
$delcoup_code=$_POST['delcoup_code'];

if($delcoup_code==''){


echo "<div style='color:red;text-align:center;'><h2 id='message'>Field missing<h2></div>";


}





else{
$delcoup_code_sql2="DELETE FROM `couponlisting` WHERE code='".$delcoup_code."'";

if(mysqli_query($conn,$delcoup_code_sql2)){

echo "
<div style='color:red;text-align:center;'>
<h2 id='message'>Coupon Successfully Deleted<h2>
</div>";header('Location: http://couponshope.com/admin/akhqiuhwdnsamduwq.php');

}


}
}
if(isset($_POST['submitdelcoupwithdesc'])){
$delcoupdesc=addslashes($_POST['delcoupdesc']);


if($delcoupdesc==''){
		
		
	echo "<div style='color:red;text-align:center;'><h2 id='message'>Field missing<h2></div>";
		
		
	}
	
	




else{
$delcoup_code_sql2="DELETE FROM `couponlisting` WHERE dis_detail='".$delcoupdesc."'";
 
if(mysqli_query($conn,$delcoup_code_sql2)){
	
	echo "
		<div style='color:red;text-align:center;'>
		<h2 id='message'>Coupon Successfully Deleted<h2>
		</div>";header('Location: http://couponshope.com/admin/akhqiuhwdnsamduwq.php');

	}



	}
}

//DEL STORE
if(isset($_POST['submitdelstore'])){
$delstore=$_POST['delstore'];

if($delstore==''){

echo "<div style='color:red;text-align:center;'><h2 id='message'>Field missing<h2></div>";


}
else{
$delstore_sql="DELETE FROM `stores` WHERE store='".$delstore."'";
$delstore_sql2="DELETE FROM `couponlisting` WHERE store_name='".$delstore."'";


if(mysqli_query($conn,$delstore_sql)&&mysqli_query($conn,$delstore_sql2)){

echo "
<div style='color:red;text-align:center;'>
<h2 id='message'>Store Successfully Deleted<h2>
</div>";header('Location: http://couponshope.com/admin/akhqiuhwdnsamduwq.php');

}


}
}

//DEL Category
if(isset($_POST['submitdelcateg'])){
$delcateg=$_POST['delcateg'];

if($delcateg==''){

echo "<div style='color:red;text-align:center;'><h2 id='message'>Field missing<h2></div>";


}
else{
$delstore_sql="DELETE FROM `categories` WHERE category='".$delcateg."'";

if(mysqli_query($conn,$delstore_sql)){

echo "
<div style='color:red;text-align:center;'>
<h2 id='message'>Category Successfully Deleted<h2>
</div>";header('Location: http://couponshope.com/admin/akhqiuhwdnsamduwq.php');

}


}
}

//DEL Blog
if(isset($_POST['submitdelblog'])){
$delblog=$_POST['del_blog'];

if($delblog==''){

echo "<div style='color:red;text-align:center;'><h2 id='message'>Field missing<h2></div>";


}
else{
$delblog_sql="DELETE FROM `blogs` WHERE title='".$delblog."'";

if(mysqli_query($conn,$delblog_sql)){

echo "
<div style='color:red;text-align:center;'>
<h2 id='message'>Category Successfully Deleted<h2>
</div>";header('Location: http://couponshope.com/admin/akhqiuhwdnsamduwq.php');

}


}
}





//store edit
$store_count=0;

if(isset($_POST['ed_stsub'])){
	

$estore_storename=$_POST['ed_stname'];

$eurl=$_POST['ed_sturl'];
$elogo_name=$_FILES['ed_stlogo']['name'];
$elogo_type=$_FILES['ed_stlogo']['type'];
$elogo_size=$_FILES['ed_stlogo']['size'];
$elogo_temp=$_FILES['ed_stlogo']['tmp_name'];
$estore_desc=addslashes($_POST['ed_stdesc']);


if($eurl=='' or $estore_desc==''){

echo "<div style='color:red;text-align:center;'><h2 id='message'>Some field missing<h2></div>";

exit();

}

else{


$estore_sql="UPDATE stores SET url='".$eurl."',store_description='".$estore_desc."' where store='".$estore_storename."'";

if(mysqli_query($conn,$estore_sql)){
echo "
<div style='color:red;text-align:center;'>
<h2 id='message'>Store Successfully Edited<h2>
</div>";
header('Location: http://couponshope.com/admin/akhqiuhwdnsamduwq.php');


exit();
}
}
if(!mysqli_query($conn,$store_sql)){
echo "
<div>
<h2 style='color:red;text-align:center;' id='message'>Store Or URL Exist<h2>
</div>";
}

}



//slides update
$store_count=0;

if(isset($_POST['submitslides1'])){
	

$b1_name=$_FILES['banner1']['name'];
$b1_type=$_FILES['banner1']['type'];
$b1_size=$_FILES['banner1']['size'];
$b1_temp=$_FILES['banner1']['tmp_name'];



if($b1_type=="image/jpeg" or $b1_type=="image/png" or $b1_type=="image/gif"){
	
		move_uploaded_file($b1_temp,"../media/slides/".$b1_name);
		
		$b1_add="Update slider SET banner1='".$b1_name."' where slider='first'";


if(mysqli_query($conn,$b1_add)){
echo "
<div style='color:red;text-align:center;'>
<h2 id='message'>Slide1 Successfully Updated<h2>
</div>";
header('Location: http://couponshope.com/admin/akhqiuhwdnsamduwq.php');


exit();

}
if(!mysqli_query($conn,$b1_add)){
echo "
<div>
<h2 style='color:red;text-align:center;' id='message'>Problem While Updating Slide1<h2>
</div>";
}
}
}
if(isset($_POST['submitslides2'])){
	
$b2_name=$_FILES['banner2']['name'];
$b2_type=$_FILES['banner2']['type'];
$b2_size=$_FILES['banner2']['size'];
$b2_temp=$_FILES['banner2']['tmp_name'];


if($b2_type=="image/jpeg" or $b2_type=="image/png" or $b2_type=="image/gif"){
	
		move_uploaded_file($b2_temp,"../media/slides/".$b2_name);
		
		$b2_add="Update slider SET banner2='".$b2_name."' where slider='first'";


if(mysqli_query($conn,$b2_add)){
echo "
<div style='color:red;text-align:center;'>
<h2 id='message'>Slide2 Successfully Updated<h2>
</div>";
header('Location: http://couponshope.com/admin/akhqiuhwdnsamduwq.php');


exit();

}
if(!mysqli_query($conn,$b2_add)){
echo "
<div>
<h2 style='color:red;text-align:center;' id='message'>Problem While Updating Slide2<h2>
</div>";
}
}
}
if(isset($_POST['submitslides3'])){
	
$b3_name=$_FILES['banner3']['name'];
$b3_type=$_FILES['banner3']['type'];
$b3_size=$_FILES['banner3']['size'];
$b3_temp=$_FILES['banner3']['tmp_name'];

if($b3_type=="image/jpeg" or $b3_type=="image/png" or $b3_type=="image/gif"){
	
		move_uploaded_file($b3_temp,"../media/slides/".$b3_name);
		
		$b3_add="Update slider SET banner3='".$b3_name."' where slider='first'";


if(mysqli_query($conn,$b3_add)){
echo "
<div style='color:red;text-align:center;'>
<h2 id='message'>Slide3 Successfully Updated<h2>
</div>";
header('Location: http://couponshope.com/admin/akhqiuhwdnsamduwq.php');


exit();

}
if(!mysqli_query($conn,$b3_add)){
echo "
<div>
<h2 style='color:red;text-align:center;' id='message'>Problem While Updating Slide3<h2>
</div>";
}
}



}



?>

</div>

</body>
</html>