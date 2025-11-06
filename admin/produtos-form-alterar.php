<?php

    require_once 'config.inc.php';

    $id = $_GET['id'];
    $sql = "SELECT * FROM produtos WHERE id = '$id'";
    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0){
        while($dados = mysqli_fetch_array($resultado)){
            $nome = $dados['nome'];
            $preco = $dados['preco'];
            $id = $dados['id'];

        }
?>

<h2>Cadastro de produtos</h2>
<form action="?pg=produtos-alterar" method="post">
    <input type="hidden" name="id" value="<?=$id?>">

    <label>Nome:</label>
    <input type="text" name="nome" value="<?=$nome?>"><br>
    <label>Preço:</label>
    <input type="number" name="preco" value="<?=$preco?>"><br>
    <input type="submit" value="Cadastrar produtos">

</form>

<?php
    }else{
        echo "<h2>Nenhum produto encontrado!</h2>";
    }
?>