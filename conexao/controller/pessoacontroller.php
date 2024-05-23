<?php

// Inclui o arquivo contendo a definição da classe Pessoa
require_once '../model/pessoa.php';

// Definição da classe PessoaController
class PessoaController {
    // Propriedade para armazenar um objeto Pessoa
    private $pessoa;

    // Construtor da classe PessoaController
    public function __construct() {
        // Instancia um objeto da classe Pessoa
        $this->pessoa = new Pessoa();
        
        // Chama o método inserir para adicionar uma nova pessoa
        $this->inserir();
    }

    // Método para inserir uma nova pessoa
    public function inserir() {
        // Define os atributos da pessoa com base nos dados recebidos via POST
        $this->pessoa->setNome($_POST['nome']);
        $this->pessoa->setEndereco($_POST['endereco']);
        $this->pessoa->setBairro($_POST['bairro']);
        $this->pessoa->setCep($_POST['cep']);
        $this->pessoa->setCidade($_POST['cidade']);
        $this->pessoa->setEstado($_POST['estado']);
        $this->pessoa->setTelefone($_POST['telefone']);
        $this->pessoa->setCelular($_POST['celular']);
        
        // Chama o método inserir da classe Pessoa para armazenar os dados no banco de dados
        $this->pessoa->inserir();
    }
}

// Cria uma instância da classe PessoaController para acionar a inserção de uma nova pessoa
new PessoaController();

?>
