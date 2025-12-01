<?php
    require_once 'Notificacao.php';

    class NotificacaoPush extends Notificacao 
    {
        public function enviar(): void 
        {
            echo "Enviando push notification para {$this->destinatario} com a mensagem: '{$this->mensagem}'<br>";
        }
    }
?>