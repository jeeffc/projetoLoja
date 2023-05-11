<?php
//iniciar log//
ob_start();
session_start();
if(isset($_SESSION["usuario_logado"]))
    header("location: loja.php");
if(isset($_GET["sair"])){
    unset($_SESSION["usuario_logado"]);
    header("location: login.php");
}


?>
    <?php include 'cabecalho.php' ?>
    <main> Tela inicial</main>
    <?php 'rodape.php' ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="./assets/css/style.css">



</head>
<body>
    
    <!-- header da pag-->
    <header class="container">
        <section class="row">
            <div class="imagemtopo"><img src="./assets/livrologo.png" alt="logo" height="30%" width="100" class="livrinho"></div>
            
            <!--Menu da pag-->    
               <nav class="itens">
                    <ul>
                        <li >
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">Sobre</a>
                        </li>
                        <li>
                            <a href="#">Contato</a>
                        </li>
                        <li>
                            <a href="#" class="btn btn-color">Mais</a>
                        </li>
                        <li><a href="loja.php?sair=true">Sair</a></li>
                    
                    </ul>
                </nav> 
                
        </section>
    </header> -->
    lista produtos
    <ul class="produtos-menu">
        <li><a href="livros-kids">Livros infantil</a> </li>
        <br>
        <li><a href="livros-romance"> Livros romance</a></li>
        <br>
        <li><a href="livros-magia">Livros magia</a> </li>
        <br>
        <li><a href="livros-receitas">Livros receitas</a> </li>

    </ul> 
 -->

<main class="container">
    <!-- conteudo do site -->
    <section class="row">
        <!--conteudo texto do site
        <article>
            <h1>Empresta Ai</h1>
            <h2>COMPARTILHE</h2>
            <p>Pra que comprar se você pode compartilhar?</p>
            <p>Quando colaboramos e compartilhamos, multiplicamos os recursos e vivenciamos um maior senso de abundância e conexão,</p>
            <a href="">saiba mais</a>
        </article>
        Fim conteudo txt sobre site-->
       <figcaption>
        <img src="https://static.vecteezy.com/ti/vetor-gratis/p3/1330427-pessoa-lendo-livro-em-casa-vetor.jpg" alt="lendo" height="50%" width="100%">
       </figcaption> 
    </section>
    <!-- fim conteuro site-->
</main>
    <!-- fim container -->
</body>
</html>