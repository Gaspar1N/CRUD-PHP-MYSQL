<?php
include_once "conexao.php";

try {
    // Execução da instrução SQL
    $consulta = $conectar->query("SELECT * FROM login");
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Usuários</title>
</head>
<body>

<button><a href='formCadastro.php'>Novo Cadastro</a></button> <br><br>
Listagem de Usuários

<div class="table">
    <table border=1'>
        <tr>
            <td>Nome</td>
            <td>Login</td>
            <td>Ações</td>
        </tr>

        <?php
        
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>{$linha['nome']}</td>";
            echo "<td>{$linha['login']}</td>";
            echo "<td><a href='FormEditar.php ?id={$linha['id']}'>Editar</a> - <a href='excluir.php?id={$linha['id']}'>Excluir</a></td>";
            echo "</tr>";
            
        }
        ?>
    </table>
</div>
<style>
.table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        overflow-x: auto;
}

.table, th, td {
        
        min-width: 100px; 
}

th, td {
        padding: 10px;
        text-align: left;
}

th {
        background-color: #f2f2f2;
}
a{
    text-decoration: none;
}

button{
    border-radius: 15px;
    height: 30px; 
    border: none;
    background-color: #BFDBF7;
}


</style>
</body>
</html>
