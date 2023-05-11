<?php require_once("serverproduto.php");
if(isset($_GET['enviar'])){
    if(!empty(['nomeproduto'])|| !empty(['autor']) || !empty(['codigo'])) {
        $nome=$_GET['nomeproduto'];
        $autor=$_GET['autor'];
        $codigo=$_GET['codigo'];

        $comando="INSERT INTO livros(nome, autor, codigo) VALUES ('$nome', '$autor', '$codigo')";
        $enviar=mysqli_query($conn, $comando);

        if($enviar){
            $_SESSION['mensagem']= "Produto cadastrado com sucesso!!";
            header("location loja.html");
            echo "Produto cadastrado";
            exit;
        }else{
            $_SESSION['mensagem']= "Produto não cadastrado";
            header("location loja.html ");
            exit;
        }
    }
}



?>