<?php 
    try {
// Faz conexão com o banco de dados    

$conectar = new PDO ("mysql:host=localhost;port=3306;dbname=pdo;", "root", "");

} catch (PDOException $e){

// Caso ocorra algum erro na conexão com o banco, exibe algum erro
echo 'Falha ao conectar com o banco de dados: ' . $e->getMessage ();
}

?>