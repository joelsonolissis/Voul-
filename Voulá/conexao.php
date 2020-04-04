<?php 

session_start();
 require_once("conecta.php");
$login = $_POST['inputEmail'];
$senha = MD5($_POST['inputPassword']);

if (!empty($_POST) AND (empty($_POST["inputEmail"]) OR empty($_POST["inputPassword"]))) {
      header("Location: index.html"); exit;
  }




if (isset($_POST['inputEmail'])) {
          $sql=$db->prepare("SELECT * FROM usuario WHERE email = '".$_POST['inputEmail']."' AND senha = '".$_POST['inputPassword']."'"); 
          $sql->execute();  
      $verifica = $sql->fetch();
        if ($verifica<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='index.html';</script>";
          die();
        }else{
          $sql1 = "SELECT * FROM usuario WHERE email = '".$_POST['inputEmail']."' AND senha = '".$_POST['inputPassword']."'";
        $verifica = $db->query($sql1);
          foreach($verifica as $row){
          
          
          $_SESSION['login'] = $row['nome'];
           $_SESSION['logi'] = $login;
           
          header("Location:index1.php");
         }
        }
    }

?>