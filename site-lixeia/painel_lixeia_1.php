<?php
session_start();
//print_r($_SESSION);
if ((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}
$logado = $_SESSION['usuario'];

include("conexao_lixeia.php");

$consulta_lixeia_1 = "SELECT * FROM tb_lixeia_1 ORDER BY idtb_lixeia_1 DESC LIMIT 1";
$con_lixeia_1 = $conexao_lixeia->query($consulta_lixeia_1) or die($conexao_lixeia->error);
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <link rel="stylesheet" type="text/css" href="./css/painel_lixeia_1.css">
    <title>Lixeia | Painel</title>
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
                <div>
                    <button class="botao-sair">
                        <a href="sair.php" class="button">Sair</a>
                    </button>
                </div>
            </div>
            <div class="lixeia_1">
                <h1>Lixeia 1</h1>
                <img src="./img/Logo Lixeia.png" />
                <?php while ($dado = $con_lixeia_1->fetch_array()) { ?>
                    <h2><?php echo $dado["volume_cheio"], " % Cheio" ?></h2>
                    <h2><?php echo "Horário: ", date("H:i:s d/m/Y", strtotime($dado["data_time"])); ?></h2>
                <?php } ?>
            </div>
        </main>
    </header>

    <?php
    echo "<h1>Bem vindo <u>$logado</u></h1>";
    ?>
</body>
</html>