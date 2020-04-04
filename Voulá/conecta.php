<?php
  try{
  $db=new PDO("mysql:host=localhost;dbname=voula","root","");
    
  }catch(PDOException $e){
    echo $e->getMessage();    }
  ?>