<?php
    class Notificacao {
        protected $destinatario;
        protected $mensagem;

        public function __construct($destinatario, $mensagem) 
        {
            $this->setDestinatario($destinatario);
            $this->setMensagem($mensagem);
        }

        public function setDestinatario($destinatario)
        {
            if (!empty($destinatario)) {
                $this->destinatario = $destinatario;
            } else {
                echo "Destinatario esta vazio";
            }
        }

        public function setMensagem($mensagem)
        {
            if (!empty($mensagem)) {
                $this->destinatario = $mensagem;
            } else {
                echo "Mensagem esta vazia";
            }
        }

        public function enviar(): void 
        {
            echo "Enviando notificação para {$this->destinatario} com a mensagem: '{$this->mensagem}'<br>";
        }
    }
?>