<?php
include_once"config.php";
?>


<?php
$nome= $_POST['nome'];
$senha = $_POST['senha'];


$sql = "INSERT INTO tbclientes(nome, senha) VALUES ('$nome', '$senha')";

if (mysqli_query($conn, $sql));{
    header("location: login.php");
}

mysqli_close($conn);
?>