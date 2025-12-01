<?php
    require_once 'Notificacao.php';

    class NotificacaoEmail extends Notificacao 
    {
        public function enviar(): void 
        {
            echo "Enviando e-mail para {$this->destinatario} com a mensagem: '{$this->mensagem}'<br>";
        }
    }
?>