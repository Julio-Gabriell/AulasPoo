<?php

class ContaBancaria
{
    private string $titular;
    private string $cpf;
    private string $agencia;
    private string $numero;
    private float $saldo = 0;

    public function __construct(string $titular, string $cpf, string $agencia, string $numero)
    {
        $this->setTitular($titular);
        $this->setCpf($cpf);
        $this->agencia = $agencia;
        $this->numero = $numero;
    }

    // getters e setters
    // gettters -> get -> saída/retorno das informações
    // setters -> set -> entrada e validação das informações
    // para cada atributo preciso de um get e um set

    // setCpf e getCpf estão encapsulando o comportamento de leitura e modifição
    // do CPF da classe
    // podemos chamar de interface de acesso e validação
    public function setCpf(string $cpf)
    {
        if (!$this->validaCpf($cpf)) {
            throw new InvalidArgumentException("CPF Inválido");
            // esse throw basicamente joga/lança um erro, e nesse caso o erro de InvalidArgumentException
            // isso serve pra forçar nosso código a parar de rodar, com se fosse um exit()
        } 

        $this->cpf = $cpf;
    }

    public function getCpf(): string 
    {
        return $this->cpf;
    }

    public function validaCpf($cpf): bool
    {
        // validação com regex - expressão regular
        // essa parte não precisa se preocupar, ele não vai cobrar
        // esse trecho basicamente verifica se no cpf tem apenas numeros
        // oq faz essa verificação é esse /\D/, isso é um regex
        if (preg_match('/\D/', $cpf)) {
            return false;
        }

        if (strlen($cpf) != 11) {
            return false;
        } 

        return true;
    }

    public function setTitular(string $titular)
    {
        if (!$this->validaTitular($titular)) {
            throw new InvalidArgumentException("Titular Inválido");
            // esse throw basicamente joga/lança um erro, e nesse caso o erro de InvalidArgumentException
            // isso serve pra forçar nosso código a parar de rodar, com se fosse um exit()
        } 

        $this->titular = $titular;
    }

    public function getTitular(): string 
    {
        return $this->titular;
    }

    public function validaTitular($titular): bool
    {
        if ($titular < 3) {
            return false;
        }

        return true;
    }

    public function exibirSaldo()
    {
        echo "O saldo da conta {$this->numero} - {$this->agencia}, {$this->titular} é {$this->saldo}\n";
    }

    public function saque(float $valor)
    {
        if ($valor <= 0) {
            return false;
        } 

        if ($valor > $this->saldo) {
            return false;
        }

        $this->saldo -= $valor;
        return true;
    }

    public function deposito(float $valor)
    {
        if ($valor <= 0) {
            return false;
        } 

        $this->saldo += $valor;
        return true;
    }
}

// Agora vem a parte do try catch, no try a gente escreve nosso codigo normal
// nossos testes basicamente, e ai o catch vai servir pra capturar os argumentos
// invalidos que a gente jogou/lançou la em cima

try {
    $conta01 = new ContaBancaria("João", "48784065850", "25", "0001");

    $conta01->exibirSaldo();
    $conta01->deposito(10);
    $conta01->exibirSaldo();

    $conta01->deposito(200);
    $conta01->exibirSaldo();

    $conta01->saque(18);
    $conta01->exibirSaldo();
    echo $conta01->getCpf();
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}