<?php
require_once("conecta.php");
$super_mercado = $_POST['se'];
$email = $_POST[''];
$numero = $_POST[''];
$valor_pagar = $_POST['kz'];
$produtos = $_POST[''];

if ($super_mercado = "" || $valor_pagar="" || $produtos="") {
	echo "<script language='javascript' type='text/javascript'> alert('Preencha os dados');window.location.href='inicial.php';</script>";
}else{

$sql = "INSERT into compra (super_mercado,email_cliente,id_cliente,numero_cliente,valor_pagar,produtos,sit) values ('$super_mercado','$email','','','$valor_pagar','$produtos','Pedente')";

$query = mysqli_query($conexao,$sql);
}
?>

