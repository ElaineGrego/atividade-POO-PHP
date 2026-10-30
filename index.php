<?php

class Usuario {
    public $nome;
    public $idade;
    public $senha;
    public $cidade;

    public function salvarUsuario() {
        // Este método simula o salvamento de dados no banco de dados.
        return "Usuário " . $this->nome . " (ID fictício: XXX) salvo no banco de dados.";
    }
}

class Vendedor extends Usuario {
    public $telefone;
    public $email;

    public function __construct($nome, $idade, $senha, $cidade, $telefone, $email) {
        // Atribuição das propriedades herdadas da classe Usuario.
        $this->nome = $nome;
        $this->idade = $idade;
        $this->senha = $senha;
        $this->cidade = $cidade;

        // Atribuição das propriedades específicas da classe Vendedor.
        $this->telefone = $telefone;
        $this->email = $email;
    }

    public function exibirDados() {
        echo "--- Dados do Vendedor ---\n";
        echo "Nome: " . $this->nome . "\n";
        echo "Idade: " . $this->idade . " anos\n";
        echo "Senha: " . $this->senha . "\n";
        echo "Cidade: " . $this->cidade . "\n";
        echo "Telefone: " . $this->telefone . "\n";
        echo "Email: " . $this->email . "\n";
        echo $this->salvarUsuario() . "\n"; // Método herdado de Usuario.
    }
}

// Cadastro do vendedor Marcos Paulo.
$vendedorMarcos = new Vendedor(
    "Marcos Paulo",
    32,
    "Mp?123",
    "São Paulo",
    "011 00345 6000",
    "marcospp@bloggs.com"
);

// Exibição dos dados do vendedor.
$vendedorMarcos->exibirDados();

?>
