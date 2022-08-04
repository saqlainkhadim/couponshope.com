<?php 

session_start();
 // session_unset();
  $_SESSION['count']=0;
   if($_SESSION['count'] == 0) {
      header("Location: login.php");
   }
?>