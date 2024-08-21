<?php

class filme {
    public int $id;
    public string $titulo;
    public string $diretor;
    public int $classificacao;
    public int $quantidade;

    public function __construct(
        string $titulo,
        string $diretor,
        int $classificacao,
        int $quantidade
    )
    {
        $this->titulo = $titulo;
        $this->diretor = $diretor;
        $this->classificacao = $classificacao;
        $this->quantidade = $quantidade;
    }
};

class cliente {
    public int $id;
    public string $nome;
    public string $cpf;
    public string $telefone;
    public string $saldo_devedor;
    public string $endereco;

    public function __construct(
        string $nome,
        string $cpf,
        string $telefone,
        string $saldo_devedor,
        string $endereco
    )
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
        $this->saldo_devedor = $saldo_devedor;
        $this->endereco = $endereco;
    }
};

class locacao {
    public int $id;
    public string $data_retirada;
    public string $data_devol;
    public string $valor;
    public int $cliente_id;

    public function __construct(
        string $data_retirada,
        string $data_devol,
        string $valor
    )
    {
        $this->data_retirada = $data_retirada;
        $this->data_devol = $data_devol;
        $this->valor = $valor;
    }
};
class filme_locacao {
    public int $id_filme;
    public int $id_locacao;
    public int $quant;

    public function __construct(
        int $quant
    )
    {
        $this->quant = $quant;
    }
};

echo "<pre>";
$filme = new Filme("Um Sonho de Liberdade", "Diretor", 14, 3);
var_dump($filme);

echo "<pre>";
$cliente = new Cliente("Lucas tarachuck", "03796977006", "51998058294", "R$0,00", "Rua Ernesto Silva, 639");
var_dump($cliente);

echo "<pre>";
$locacao = new Locacao("20/08/2024", "27/08/2024", "R$45,00");
var_dump($locacao);

echo "<pre>";
$filme_locacao = new filme_locacao("2");
var_dump($filme_locacao);