<?php

require_once("conecta.php");
$nome = ucwords($_POST['nome']);
$email = $_POST['email'];
$tel = $_POST['tel'];
$senha = $_POST['senha'];
$sql = $db->prepare("SELECT * FROM usuario WHERE email = '".$_POST['email']."'");
$sql->execute();

$contar = $sql->fetch();
if($contar == 0 ){
$inserir=$db->prepare('INSERT INTO usuario (nome,email,senha,telefone) VALUES (:nome,:email,:senha,:tel)');

$inserir->bindParam(":nome",$nome, PDO::PARAM_STR);
$inserir->bindParam(":email",$email, PDO::PARAM_STR);
$inserir->bindParam(":senha",$senha, PDO::PARAM_STR);
$inserir->bindParam(":tel",$tel, PDO::PARAM_INT);
$inserir->execute();
echo "<script language='javascript' type='text/javascript'> alert('Cadastro realizado com sucesso.');</script>";
echo "<script language='javascript' type='text/javascript'>window.location.href='index.html';</script>";

}else{

echo "<script language='javascript' type='text/javascript'> alert('Este usuário já existe. Este email está a ser utilizado');</script>";
echo "<script language='javascript' type='text/javascript'>window.location.href='index.html';</script>";
}

?>