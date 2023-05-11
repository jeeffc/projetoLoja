<?php
require 'config.php';
$id - filter_input(INPUT_GET, 'id');
$usuario = [];

if($id){
    $sql = $pdo->prepare("SELECT*FROM  tbclientes WHERE id = :id");
    $sqp->bindvalue(':id', $id);
    $sql->execute();

    if ($sql->rowCout() > 0);
    $usuario = $sql->fetch(PDO::FETCH_ASSOC);
}   else{
    header('location: loja.php');
}



?>