<?php

$myemail = 'contato@ricardorapozo.com';

$name    = $_POST['name'] ?? '';
$email   = $_POST['email'] ?? '';
$subject = $_POST['subject'] ?? '';
$message = $_POST['message'] ?? '';

if(empty($name) || empty($email) || empty($message)){
    die("Preencha todos os campos.");
}

$headers  = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

$email_body = "
Nome: $name
Email: $email
Assunto: $subject

Mensagem:
$message
";

if(mail($myemail, $subject, $email_body, $headers)){
    echo "Mensagem enviada com sucesso.";
}else{
    echo "Erro ao enviar.";
}

?>