<?php
include('maisRecente.php');  
if($volume < 50){
    echo "<div class=\"verde  \"></div>";       
}else if($volume >= 50 and $volume < 75){
    echo "<div class=\"amarelo  \"></div>";       
}else if($volume >= 75){
    echo "<div class=\"vermelho  \"></div>";   
}    
?>