<!DOCTYPE html>
<html>
<head>
    <title>Tela de Cadastro</title>
    <!-- Inclui o arquivo CSS do Bootstrap para estilização -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Editar</h2>
        <!-- Formulário de cadastro -->
        <form>
            <!-- Campo para o nome -->
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" placeholder="Digite o nome">
            </div>
            <!-- Campo para o endereço -->
            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" class="form-control" id="endereco" placeholder="Digite o endereço">
            </div>
            <!-- Campo para o bairro -->
            <div class="form-group">
                <label for="bairro">Bairro:</label>
                <input type="text" class="form-control" id="bairro" placeholder="Digite o bairro">
            </div>
            <!-- Campo para o CEP -->
            <div class="form-group">
                <label for="cep">CEP:</label>
                <input type="text" class="form-control" id="cep" placeholder="Digite o CEP">
            </div>
            <!-- Campo para a cidade -->
            <div class="form-group">
                <label for="cidade">Cidade:</label>
                <input type="text" class="form-control" id="cidade" placeholder="Digite a cidade">
            </div>
            <!-- Campo para o estado -->
            <div class="form-group">
                <label for="estado">Estado:</label>
                <input type="text" class="form-control" id="estado" placeholder="Digite o estado">
            </div>
            <!-- Campo para o telefone -->
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" class="form-control" id="telefone" placeholder="Digite o telefone">
            </div>
            <!-- Campo para o celular -->
            <div class="form-group">
                <label for="celular">Celular:</label>
                <input type="text" class="form-control" id="celular" placeholder="Digite o celular">
            </div>
            <!-- Botão para enviar o formulário -->
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
</body>
</html>
