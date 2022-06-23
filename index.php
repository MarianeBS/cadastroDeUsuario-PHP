
<html>
    <head>
        <title>Formulário</title>
    </head>
    <body>
        <h1>Cadastro de Pessoa Física</h1>
        <form method="post" action="Controller/controllerPessoa.php">
            <br>    
            <label for="lblNome">Nome:</label>
            <br>
            <input type="text" name="txtNome">
            <br>
            <label for="lblEndereco">Endereço:</label>
            <br>
            <input type="text" name="txtEndereco">
            <br>
            <label for="lblBairro">Bairro:</label>
            <br>
            <input type="text" name="txtBairro">
            <br>
            <label for="lblCep">CEP:</label>
            <br>
            <input type="text" name="txtCep">
            <br>
            <br>
            <button>Cadastrar</button>
        </form>
    </body>
</html>



