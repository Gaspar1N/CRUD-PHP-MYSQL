<div class="container">
    <form action="cadastrar.php" method="post">
        <label for="">Nome</label> <br>
        <input type="text" name="nome" class="login"> <br>
        <label for="">Login</label> <br>
        <input type="text" name="login" class="login"> <br> <br>
        <input type="submit" value="Cadastrar" id="botao">
    </form>
</div>

<style>
.container{
   text-align: center; 
}

.login{
    border: 1px solid gray;
    border-radius: 10px;
    height: 25px;
    margin: 10px;
}

#botao{
    position: absolute;
    right: 632px;
    border-radius: 10px red;
    height: 30px;
    width:100px;
}
