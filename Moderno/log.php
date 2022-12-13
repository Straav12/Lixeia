
<?php 
   $usuario = 'root';
    $senha = '';
    $database = 'db_lixeia';
    $host = 'localhost';
    
    $mysqli = new mysqli($host, $usuario, $senha, $database);
    $conn = mysqli_connect($host, $usuario, $senha, $database);
    if($mysqli->error){
        die("Falha ao concetar ao banco de dados: " . $mysqli->error);
    }


    $sql = "SELECT * FROM tb_lixeia_1 ORDER BY id DESC LIMIT 1";


    $sql = "SELECT id, volume_cheio, data_time FROM tb_lixeia_1";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Volume: " . $row["volume_cheio"]. " - Horario: " . $row["data_time"]."<br>"."<br>";
      }
?> 
