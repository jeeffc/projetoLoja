<?php



?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        body{
            background-image: url(https://www.idealmarketing.com.br/blog/wp-content/uploads/2019/03/O-que-%C3%A9-um-ebook.jpg);
            font-family: Arial, Helvetica, sans-serif;
        }
        .telalogin{
            background-color: rgb(0, 0, 0, 0.8);
            position: absolute;
            top: 30%;
            left: 35%;
            transform: translate();
            padding: 80px;
            border-radius: 15px;
            color: antiquewhite;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
        }
        .inputsubmit{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 90%;
            border-radius: 10px;
            cursor: pointer;
        }
        .inputsubmit:hover{
            background-color: deepskyblue;
        }
        
    </style>
</head>
<body>
    <div class="telalogin">
        <div>
            <h1 class="ent">   Editar </h1>
            <form action="update.php" method="POST">
            <div> 
                <input type="text" name="user" id="usuario" placeholder="nome" required>
                
            </Div>
            <br>
            <Div>
                <input type="password" name="pass" id="senha" placeholder="senha" required>
            
            </div>
            <br>
            <input class="inputsubmit" type="submit" name="submit" value="Enviar">
            
            <p>Não tem Cadastro?
                <a href="C:\xampp\htdocs\registro\cadastro.php">Cadastre-se</a>
            </p>
        </form>

        </div>
    </div>
</body>
</html>