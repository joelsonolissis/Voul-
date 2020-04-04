<?php
session_start();
  $login_cookie = $_SESSION['logi'];
    if(isset($login_cookie)){
      echo"Bem-Vindo, $login_cookie <br>";
      echo"<script language='javascript' type='text/javascript'>window.location.href='inicial.php';</script>";
      
    }else{
    	setcookie("name");      
    	echo"<script language='javascript' type='text/javascript'>window.location.href='inicial.php';</script>";
      
    }
  
?>