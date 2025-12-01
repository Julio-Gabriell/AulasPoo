<?php 

    class Cliente
    {
        private string $nome;
        private string $email;
        private string $cpf;

        public function __construct(string $nome, string $email, string $cpf)
        {
            $this->setNome($nome);
            $this->setEmail($email);
            $this->setCpf($cpf);
        }

        public function setNome(string $nome)
        {
            $this->nome = $nome;
        }

        public function setEmail(string $email)
        {
            $this->email = strtolower($email);
        }

        public function setCpf(string $cpf)
        {
            if (!$this->validaCpf($cpf)) {
            throw new InvalidArgumentException("CPF Inválido");
        } 

        $this->cpf = $cpf;
        }

        public function validaCpf($cpf)
        {
            if (preg_match('/\D/', $cpf)) {
                return false;
            }

            if (strlen($cpf) != 11) {
                return false;
            } 

            return true;
        }

        public function getNome()
        {
            return $this->nome;
        }
        public function getEmail()
        {
            return $this->email;
        }
        public function getCpf()
        { 
            return $this->cpf;
        }

        public function alteralEmail($novoEmail)
        {
            $this->email = strtolower($novoEmail);
        }
    }

    try {
        $cliente01 = new Cliente("Julio Gabriel", "paespintoj@gmail.com", "48784065850");
        $cliente02 = new Cliente("Vinicius Ferreira", "IMPERADORdaLuzceo@gmail.com", "53497693042");

        echo $cliente01->getEmail() . "<br>";
        echo $cliente02->getEmail() . "<br>";

        $cliente02->alteralEmail("viniciusferreiraCEO@gmail.com");

        echo $cliente02->getEmail() . "<br>";
    } catch (InvalidArgumentException $e) {
        echo $e->getMessage();
    }
