
<?php

//FUNÇÃO
function extrairHora($tabela){

    $host = 'localhost';
    $usuario = 'root';
    $senha = '';
    $database = 'db_lixeia';

    $mysqli = new mysqli($host, $usuario, $senha, $database);
    $conn = mysqli_connect($host, $usuario, $senha, $database);
    if($mysqli->error){
    die("Falha ao concetar ao banco de dados: " . $mysqli->error);
    }    
    $recente = "SELECT * FROM $tabela ORDER BY id DESC LIMIT 1";
    $result_new = mysqli_query($conn, $recente);  

    while($row = mysqli_fetch_assoc($result_new)) {
    $volume = $row["volume_cheio"] . "<br>";
    }
    $recente = "SELECT * FROM $tabela ORDER BY id DESC LIMIT 1";
    $result_new = mysqli_query($conn, $recente);

    while($row = mysqli_fetch_assoc($result_new)) {
        $hora = $row["data_time"] . "<br>";
    }
    return($hora);
}
    // echo "Capacidade atual: " . $volume . "<br>";  
    // echo "Horário da última verificação: " . $hora;


function extrairVolume($tabela){

$host = 'localhost';
$usuario = 'root';
$senha = '';
$database = 'db_lixeia';

$mysqli = new mysqli($host, $usuario, $senha, $database);
$conn = mysqli_connect($host, $usuario, $senha, $database);
if($mysqli->error){
die("Falha ao concetar ao banco de dados: " . $mysqli->error);
}    
$recente = "SELECT * FROM $tabela ORDER BY id DESC LIMIT 1";
$result_new = mysqli_query($conn, $recente);  

while($row = mysqli_fetch_assoc($result_new)) {
$volume = $row["volume_cheio"] . "<br>";
}
$recente = "SELECT * FROM $tabela ORDER BY id DESC LIMIT 1";
$result_new = mysqli_query($conn, $recente);

while($row = mysqli_fetch_assoc($result_new)) {
    $hora = $row["data_time"] . "<br>";
}
return($volume);
}
// echo "Capacidade atual: " . $volume . "<br>";  
// echo "Horário da última verificação: " . $hora;
?>
