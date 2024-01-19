<?php
    include_once "conexao.php";
    
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $consulta = $conectar->query("SELECT * FROM login WHERE id = '$id' ");
    $linha = $consulta->fetch(PDO::FETCH_ASSOC);


?>

<div id="container">
    <form action="editar.php" method="post">
        <label for="" value="" <?php echo $linha ['nome'] ?> id="nome" > Nome</label> <br>  
        <input type="text" name="nome" class="login"> <br>
        <label for="">Login</label> <br>   
        <input type="text" name="login" class="login"> <br>
        <input type="hidden" name="id" value="<?php echo $linha['id'] ?>"> <br>
        <input type="submit" value="Editar" id="button">
    </form>
</div>

<style>
#container{
   text-align: center; 
}

.login{
    border: 1px solid gray;
    border-radius: 10px;
    height: 25px;
    margin: 10px;
}

</style>