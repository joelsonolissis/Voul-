<?php
require_once("conecta.php");
$email = $_POST['email'];

$sql = $db->prepare("SELECT * FROM usuario where email='".$_POST['email']."'");
$sql->execute();
$contar = $sql->fetch();
if($contar == 0 ){
echo "<script language='javascript' type='text/javascript'> alert('Este email não está associoado a nenhuma conta.');</script>";
echo "<script language='javascript' type='text/javascript'>window.location.href='redsenha.html';</script>";

}else{
session_start();
$codigo = random_int(1000, 9999);



  $destino = $_POST['email'];
  $assunto = "Voulá - Redefinir senha";
 
  // É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From: starweb.tec@hotmail.com';
  //$headers .= "Bcc: $EmailPadrao\r\n";
   $arquivo = "O seu código para redifinir a senha é:" . $codigo;
  $enviaremail = mail($destino, $assunto, $arquivo, $headers);
  if($enviaremail){
  $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
  echo "<script language='javascript' type='text/javascript'> alert('E-MAIL ENVIADO COM SUCESSO!. O link será enviado para o e-mail fornecido no formulário');</script>";
  echo "<script language='javascript' type='text/javascript'>window.location.href='redsenha.html';</script>";
  } else {
  $mgm = "ERRO AO ENVIAR E-MAIL!";
  echo "";
  }

}

?>