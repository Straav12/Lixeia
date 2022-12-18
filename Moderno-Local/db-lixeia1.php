<html>

<body>

    <?php

    $dbHost = 'localhost';
    $dbUsername = 'id19989027_root';
    $dbPassword = 'e4%OqA\5vQ)}^JEm';
    $dbName = 'id19989027_db_lixeia';

    $connect = @mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

    if (!$connect) {
        echo "Error: " . mysqli_connect_error();
        exit();
    }

    echo "Sucesso na conexao!";

    $volume_cheio = $_GET["volume_cheio"];

    $query = "INSERT INTO tb_lixeia_1 (volume_cheio) VALUES ('$volume_cheio')";
    $result = mysqli_query($connect, $query);

    echo "Inserido com Sucesso!";

    ?>
</body>

</html>