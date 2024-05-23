<!DOCTYPE html>
<html>
<head>
    <title>Tela de Consulta</title>
    <!-- Inclui o arquivo CSS do Bootstrap para estilização -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Consulta</h2>
        <!-- Tabela para exibir os registros -->
        <table class="table">
            <thead>
                <!-- Cabeçalho da tabela -->
                <tr>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Celular</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Simulação de registros (normalmente estes registros viriam do banco de dados)
                $registros = [
                    ['João', '123456789', '987654321'],
                    ['Maria', '987654321', '123456789'],
                    ['Pedro', '555555555', '999999999']
                ];

                // Loop através dos registros para exibição na tabela
                foreach ($registros as $registro) {
                    echo '<tr>';
                    echo '<td>' . $registro[0] . '</td>'; // Nome
                    echo '<td>' . $registro[1] . '</td>'; // Telefone
                    echo '<td>' . $registro[2] . '</td>'; // Celular
                    echo '<td>';
                    // Botões para editar e excluir registros (ainda não funcionais)
                    echo '<button class="btn btn-primary">Editar</button>';
                    echo '<button class="btn btn-danger">Excluir</button>';
                    echo '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>  
