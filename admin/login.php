<?php

$conn = mysqli_connect('localhost', 'root', '') or die("cannot connect");
mysqli_select_db($conn, 'coupon-shope') or die("cannot select DB");
session_start();


  
if(isset($_POST['login'])){

$query="Select * from account";

$result=mysqli_query($conn,$query);
//print_r($result);


$user=$_POST['username'];
$pwd=$_POST['password'];
$encrypt = md5($pwd);
$records=mysqli_fetch_assoc($result);

if($user==$records['username']&&$pwd==$records['password']){

$_SESSION['count']=1;
header('Location: http://couponshope.com/admin/akhqiuhwdnsamduwq.php');
  
}
else{
      $_SESSION['count']=0;
  echo "<div style='text-align:center;position:fixed;bottom:200px;z-index:3;width:100%;font-size:22px;color:red;'><h2>Username Or Password Is Incorrect</h2></div>";
  
}	
  




}
if($_SESSION['count']==1){
header('Location: http://couponshope.com/admin/akhqiuhwdnsamduwq.php');
}



?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login - CouponSlush</title>

<?php include("includes/toplog.php");?>
<link href="../bootstrap/css/bootstrap.min.css"  rel="stylesheet" type="text/css"/>
<link href="../bootstrap/css/bootstrap-theme.min.css"  rel="stylesheet" type="text/css"/>



<link href="https://couponflash.000webhostapp.com/css/adminpanel.css" rel="stylesheet" type="text/css"/>
<link href="../css/adminpanel.css"  rel="stylesheet" type="text/css"/>
<script src="../jquery/jquery-2.1.4.min.js"></script>
<script src="../js/script.js"></script>


</head>

<body>
<div id="abc" style="width:100%;height:50px;position:fixed;top:0px;background-color:white;z-index:2;"></div>
<div id="wrapper">

<div id="login_head">
Login To Admin Panel Of CouponSlush.com
<img src="../media/logo1.png" width="250px" style="float:right;margin-top:-20px;"/>

</div>

<div id="login_form">

<form method="post" action="login.php">
<label><h2>Log In To Admin Panel</h2></label>
<table>
<tr>
<td>Username: </td>
<td><input type="text" name="username" autofocus/></td>
</tr>

<tr>
<td>Password: </td>
<td><input type="password" name="password"/></td>
</tr>

<tr>
<td colspan="2" style="text-align:center"><button class="btn btn-primary" type="submit" name="login">Log In</button></td>
</tr>

</table>



</form>

</div>

</div>

</body>
</html>