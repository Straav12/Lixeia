<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <link rel="stylesheet" type="text/css" href="./css/login.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lixeia | Login</title>
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
        <h1>Login</h1>
        <form action="testLogin.php" method="POST">
            <input type="text" name="usuario" placeholder="Usuário">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
            <br><br><br>
            <a href="index.php" class="back">Voltar</a>
        </form>
    </div>

</body>

</html>