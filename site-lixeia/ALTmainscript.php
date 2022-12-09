<?php
include('ALTconexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])){

    if(strlen($_POST['email']) == 0){  
        $tememail = 0;
    }else if(strlen($_POST['senha']) == 0){
        $temsenha = 0;
    }else{

        $tememail = 1;
        $temsenha = 1;

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);
        
        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1){
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: ALTpainel.php");

        }else{
            echo  "<script>alert('Oops! Dados inválidos.');</script>";
        }

    }
}
?>