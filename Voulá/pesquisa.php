<?php
require_once("conecta.php");


$sql1 = $db->prepare("SELECT * FROM produtos");
$sql1->bindParam(':variavelphp', $variavelphp, PDO::PARAM_STR); 
$sql1->execute();





?>