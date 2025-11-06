<?php
require_once "config.inc.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $preco = $_POST["preco"];

    $sql = "INSERT INTO produtos (nome, preco) VALUES ('$nome', '$preco')";

    if (mysqli_query($conexao, $sql)) {
        echo "<h3>Produto cadastrado com sucesso!</h3>";
        echo "<a href='?pg=produtos-admin'>Voltar</a>";
    } else {
        echo "<h3>Erro ao cadastrar produto!</h3>";
        echo "<a href='?pg=produtos-admin'>Voltar</a>";
    }
} else {
    echo "<h2>Acesso negado!</h2>";
    echo "<a href='?pg=produtos-admin'>Voltar</a>";
}
mysqli_close($conexao);
?>