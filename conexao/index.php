<!DOCTYPE html>
<html>
<head>
    <title>Tela de Cadastro</title>
    <!-- Importa o arquivo CSS do Bootstrap para aplicar estilos -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Cadastro</h2>
        <!-- Início do formulário de cadastro -->
        <form>
            <!-- Campo para inserir o nome -->
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" placeholder="Digite o nome">
            </div>
            <!-- Campo para inserir o endereço -->
            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" class="form-control" id="endereco" placeholder="Digite o endereço">
            </div>
            <!-- Campo para inserir o bairro -->
            <div class="form-group">
                <label for="bairro">Bairro:</label>
                <input type="text" class="form-control" id="bairro" placeholder="Digite o bairro">
            </div>
            <!-- Campo para inserir o CEP -->
            <div class="form-group">
                <label for="cep">CEP:</label>
                <input type="text" class="form-control" id="cep" placeholder="Digite o CEP">
            </div>
            <!-- Campo para inserir a cidade -->
            <div class="form-group">
                <label for="cidade">Cidade:</label>
                <input type="text" class="form-control" id="cidade" placeholder="Digite a cidade">
            </div>
            <!-- Campo para inserir o estado -->
            <div class="form-group">
                <label for="estado">Estado:</label>
                <input type="text" class="form-control" id="estado" placeholder="Digite o estado">
            </div>
            <!-- Campo para inserir o telefone -->
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" class="form-control" id="telefone" placeholder="Digite o telefone">
            </div>
            <!-- Campo para inserir o celular -->
            <div class="form-group">
                <label for="celular">Celular:</label>
                <input type="text" class="form-control" id="celular" placeholder="Digite o celular">
            </div>
            <!-- Botão para submeter o formulário -->
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
        <!-- Fim do formulário de cadastro -->
    </div>
</body>
</html>
