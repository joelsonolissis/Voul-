<?php
require_once("conecta.php");
$nome = ucwords($_POST['nome']);
$pre = ucwords($_POST['preco']);
$pro = ucwords($_POST['promo']);
$mercado = ucwords($_POST['se']);
$cat = ucwords($_POST['se1']);
$inserir=$db->prepare('INSERT INTO produtos(nome,preco,promocional,categoria,detalhe,mercado)Values(:nome,:preco,:promo,:cate,:deta,:mercado)');
$inserir->bindParam(":nome",$nome, PDO::PARAM_STR);
$inserir->bindParam(":preco",$pre, PDO::PARAM_INT);
$inserir->bindParam(":categoria",$cat, PDO::PARAM_STR);
$inserir->bindParam(":mercado",$mercado, PDO::PARAM_STR);
$inserir->bindParam(":promo",$pro, PDO::PARAM_INT);
$inserir->execute();

?>