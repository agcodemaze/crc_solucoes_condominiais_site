<?php
require realpath(__DIR__ . '/phpMailer/src/PHPMailer.php');
require realpath(__DIR__ . '/phpMailer/src/SMTP.php');
require realpath(__DIR__ . '/phpMailer/src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = trim($_POST['nome'] ?? '');
    $emailCli = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
    $telefone = preg_replace('/[^\d\- \(\)\+]/', '', $_POST['telefone'] ?? '');
    $assunto = trim($_POST['assunto'] ?? '');
    $mensagem = trim($_POST['mensagem'] ?? '');

    if (!$emailCli || empty($nome) || empty($assunto) || empty($mensagem)) {
        echo "Dados inválidos.";
        exit;
    }


    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = getenv('SMTP_HOST');
        $mail->SMTPAuth   = true;
        $mail->Username   = getenv('SMTP_USER');
        $mail->Password   = getenv('SMTP_PASS');

        // desativa criptografia
        $mail->SMTPSecure = false;  
        $mail->SMTPAutoTLS = false; // impede que o PHPMailer tente TLS automaticamente

        $mail->Port       = getenv('SMTP_PORT');
        $mail->Timeout    = 20;
        $mail->SMTPDebug  = 0;
        $mail->Debugoutput = 'error_log';

        $mail->setFrom(getenv('SMTP_USER'), 'Contato CRC Soluções Condominiais');
        $mail->addAddress(getenv('SMTP_USER'));
        $mail->addReplyTo($emailCli, $nome);

        $mail->isHTML(false);
        $mail->CharSet = 'UTF-8';
        $mail->Subject = "ATENÇÃO: Contato pelo site da CRC Soluções Condominiais";
        $mail->Body = "Nome: $nome\nE-mail: $emailCli\nTelefone: $telefone\nAssunto: $assunto\nMensagem: $mensagem\n";

        $mail->send();
        echo "Mensagem enviada com sucesso!";

    } catch (Exception $e) {
        error_log("Erro ao enviar email: " . $mail->ErrorInfo);
        echo "Falha ao enviar o e-mail.";
    }
}
?>
