<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastrar</title>
</head>
<body>
    <div class="main-prod">
        <div class="left-prod">
            <h1>Cadastrar Produtos</h1>
            <img src="img-prod.svg" class="img" alt="img">
        </div>
        <div class="right-prod">
            <div class="card-prod">
                <div class="textfield">
                    <label for="produto">Produto</label>
                    <input type="text" name="usuario" placeholder="Digite o nome do produto">
                </div>
                <div class="textfield">
                    <label for="estoque">Estoque</label>
                    <input type="text" name="estoque" placeholder="Digite a quantidade em estoque">
                </div>
                <button class="btnenviar" name="btnenviar" type="submit">Cadastrar</button>
                
                <a href="../menu.html" class="btn-voltar">Voltar</a>
            </div>
        </div>
    </div>




<!--
    <form name="cliente" method = "POST" action = "">
    <fieldset id="a">
        <legend><b>Dados do Produto: </b></legend>
        <p>Nome: <input name="txtnome" type="text" size="40" maxlength="40" placeholder="Nome do Produto"></p>
        <p>Estoque: <input name="txtestoq" type="text" size="10" placeholder="0" ></p>

    </fieldset>
    <br>
    <fieldset id="b">
        <legend><b>Opções: </b></legend>
        <br>
        <input name="btnenviar" type="submit" value="Cadastrar">&nbsp;&nbsp;
        <input name="limpar" type="reset" value="Limpar">
    </fieldset>
</form>
-->

<?php
extract($_POST, EXTR_OVERWRITE);
if(isset($btnenviar))
{
    include_once 'Produto.php';
    $pro= new Produto();
    $pro->setNome($usuario);
    $pro->setEstoque($estoque);
    echo "<h3><br><br>" . $pro->salvar() . "</h3>";
}
?>
</body>
</html>

