<?php
include ('ALTmainscript.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <link rel="stylesheet" type="text/css" href="./css/login.css">
    <title>CAÇA</title>
</head>
<body>
<header class="menu-principal">
        <main>
            <div class="header-1">
                <div class="logo">
                    <a href="index.php">
                        <img src="./img/Logo Lixeia.png" />
                    </a>
                </div>
                <div class="redes-sociais">
                    <ul>
                        <li>
                            <a href="https://pt-br.facebook.com/" target="blank">
                                <!--as referencias sao os links das redes sociais da lixeia-->
                                <img src="./img/Logo Facebook.png">
                                <!--as sources sao os logos das redes sociais correspondentes-->
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/_lixeia_/" target="blank">
                                <!--as referencias sao os links das redes sociais da lixeia-->
                                <img src="./img/Logo Instagram.png">
                                <!--as sources sao os logos das redes sociais correspondentes-->
                            </a>
                        </li>
                        <li>
                            <a href="https://br.linkedin.com/" target="blank">
                                <!--as referencias sao os links das redes sociais da lixeia-->
                                <img src="./img/Logo Linkedin.png">
                                <!--as sources sao os logos das redes sociais correspondentes-->
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/" target="blank">
                                <!--as referencias sao os links das redes sociais da lixeia-->
                                <img src="./img/Logo Twitter.png">
                                <!--as sources sao os logos das redes sociais correspondentes-->
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </main>
    </header>
    <div class="tela-login">
        <h1>Login Caça</h1>
        <form action="" method="POST">
            <p>
                <input type="text" name="email" placeholder="E-mail">
            </p>
            <?php 
              //  include ('ALTmainscript.php');
                include ('ALTconexao.php');

                if(isset($_POST['email']) || isset($_POST['senha'])){

                    if(strlen($_POST['email']) == 0){  
                        echo "<p style='color:red;'>Preencha seu e-mail.</p>";
                    }
                }
            ?>
            <p>
                <input type="password" name="senha" placeholder="Senha">
            </p>
            <?php
               // include ('ALTmainscript.php');
                include ('ALTconexao.php');

                if(isset($_POST['email']) || isset($_POST['senha'])){
                    if(strlen($_POST['senha']) == 0){
                        echo "<p style='color:red;'>Preencha sua senha.</p>";
                    }
                }
            ?>
            <p>
                <button class="inputSubmit" type="submit">Entrar</button>
            </p>
            <br>
            <a href="index.php" class="back">Voltar</a>
            
        </form>
    </div>
</body>
</html>