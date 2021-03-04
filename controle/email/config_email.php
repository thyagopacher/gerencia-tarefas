<?php 
function SendMail($assunto,$nome,$email,$destino_nome,$mail_destino,$mensagem){
require_once('class.phpmailer.php');


$mail= new PHPMailer();

$mail->IsSMTP(); // habilita envio smtp
//alterar só essa parte
$mail->SMTPAuth = true; // ativa autenticaçao
$mail->Host = 'mail.megacia.com.br';//servidor smtp (mail.seudominio.com)
$mail->Port = '587';// porta do servidor

$mail->Username = 'thyago@megacia.com.br';//seu email
$mail->Password = 'pr2012';//senha
//até aki
$mail->From = $email;
$mail->FromName = utf8_decode($nome);

$mail->IsHTML(true);// email html

$mail->Subject = utf8_decode ($assunto);//assunto
$mail->Body =utf8_decode ($mensagem);//mensagem
$mail->AddAddress($mail_destino,utf8_decode ($destino_nome));// email e o nome do destino

if(!$mail->Send()){
echo "Erro ao enviar email";	
}else{
	$_SESSION['enviado'] =  "Enviado com sucesso";
	}
}
?>