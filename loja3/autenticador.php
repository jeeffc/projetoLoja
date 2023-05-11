<?php
session_start();

    try {
        $usuario_certo = "jeferson";
        $senha_correta = "321";

        $usuario_digitado = $_POST ['user'];
        $senha_digitada = $_POST ['pass'];

        if($usuario_digitado == $usuario_certo)
        {
            if($senha_digitada == $senha_correta)
            {
                $_SESSION["usuario_logado"] = $usuario_digitado;
                header("location: loja.html");
            } else {
                header("location: login.php?falhou");
            }
        }else{
            header("location: login.php?falhou");
        }


    }catch(Exception $e){
        
        echo $e->getMessage();
    }



?>