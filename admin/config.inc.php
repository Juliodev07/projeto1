<?php

    $conexao = mysqli_connect("localhost:3306","root","");

    $db = mysqli_select_db($conexao,"projeto_1");

    if(!$conexao){
       echo "<h2>Erro ao conectar o banco de dados</h2>";
    }

