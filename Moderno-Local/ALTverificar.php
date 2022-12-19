<?php
    require 'maisRecente.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <link rel="stylesheet" type="text/css" href="./css/slick.css">
    <title>Lixeia | Verificar lixeiras</title>
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
                            <a href="https://www.instagram.com/" target="blank">
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
    <main class="col-100 menu-urls">
        <div class="header-2">
            <div class="menu">
                <ul>
                    <li>
                        <a href="ALTpainel.php">Início</a>
                    </li>
                    <!--as referencias sao os links das paginas que cada item do menu direcionara-->
                    <li>
                        <a href="ALTverificar.php">Verficar lixeiras</a>
                    </li>
                    <!--as referencias sao os links das paginas que cada item do menu direcionara-->
                    <li>
                        <a href="">Cálculo de rotas</a>
                    </li>
                    <!--as referencias sao os links das paginas que cada item do menu direcionara-->
                    <li>
                        <a href="ALTfaleconosco.php">Fale conosco</a>
                    </li>
                    <!--as referencias sao os links das paginas que cada item do menu direcionara-->
                    <li>
                        <a href="ALTlogout.php">Sair</a>
                    </li>
                    <!--as referencias sao os links das paginas que cada item do menu direcionara-->
                </ul>
            </div>
            <div class="busca">
                <input placeholder="Pesquisar no Site" type="text">
            </div>
        </div>
    </main>
    <p>.</p>
    <a href="log.php" target="_blank" class="tirar_estilo" >
        <div class="square">
            <br>
            <?php
                include('verificacao-cor.php');
            ?>
            <h3>Lixeira 1(um)<h3>
            <p>Volume de lixo atual:</p>
            <?php              
                echo "" . extrairVolume('tb_lixeia_1');       
            ?>
            <p>Ultima verificação:</p>
            <?php 
                echo "" . extrairHora('tb_lixeia_1');       
            ?>
        </div>
    </a>
</body>
</html>