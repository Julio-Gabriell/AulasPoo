<?php
    require_once 'Notificacao.php';

    class NotificacaoSMS extends Notificacao 
    {
        public function enviar(): void 
        {
            echo "Enviando SMS para {$this->destinatario} com a mensagem: '{$this->mensagem}'<br>";
        }
    }
?>