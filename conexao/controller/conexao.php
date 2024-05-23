<?php

class Conexao {
    // Definição dos parâmetros de conexão
    private $host = "localhost"; // Endereço do servidor MySQL
    private $usuario = "root"; // Nome de usuário do MySQL
    private $senha = ""; // Senha do MySQL


    private $banco = "exemplo_aula_pw0"; // Nome do banco de dados a ser utilizado
    private $conexao; // Objeto de conexão MySQLi

    // Construtor da classe
    public function __construct() {

        // Estabelece a conexão com o banco de dados
        $this->conexao = new mysqli($this->host, $this->usuario, $this->senha, $this->banco);
        
        // Verifica se houve algum erro na conexão
        if ($this->conexao->connect_error) {

            // Se houver um erro, interrompe o script e exibe a mensagem de erro
            die("Falha na conexão: " . $this->conexao->connect_error);
        }
    }

    // Método para obter a conexão com o banco de dados
    public function getConexao() {
        // Retorna o objeto de conexão
        return $this->conexao;
    }
}

?>
