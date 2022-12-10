

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

   $recente = "SELECT * FROM tb_lixeia_1 ORDER BY id DESC LIMIT 1";
   $result_new = mysqli_query($conn, $recente);  

   while($row = mysqli_fetch_assoc($result_new)) {
       $volume = $row["volume_cheio"] . "<br>";
     }
     $recente = "SELECT * FROM tb_lixeia_1 ORDER BY id DESC LIMIT 1";
     $result_new = mysqli_query($conn, $recente);
    
    while($row = mysqli_fetch_assoc($result_new)) {
        $hora = $row["data_time"] . "<br>";
      }

     // echo "Capacidade atual: " . $volume . "<br>";  
     // echo "Horário da última verificação: " . $hora;
?>
