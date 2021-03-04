<?php
	$submited   = $_REQUEST["submited"];
        $site       = "http://www.obadescontos.com.br/gerenciatarefa";
//pegar variaveis e enviar email para o dono da empresa
	if ($submited != NULL && $submited == "true"){
		try{
                        $para       = $_POST['para'];
                        $nome       = $_POST['nome'];
                        $email      = $_POST['email'];
                        $mensagem   = $_POST['mensagem'];

                        $conteudo = "Nome: $nome <br>E-mail: $email<br>Mensagem: $mensagem";
                        $assunto = "Contato do site";

			require('config_email.php');
			SendMail($assunto, $nome, $email, $site, $para, $conteudo);
			echo("<script language= 'JavaScript'>alert('Mensagem enviada com sucesso');</script>");
			echo("<script language= 'JavaScript'>location.href='../../visao/contato.php';</script>");
		}catch(Exception $ex){
			echo("<script language= 'JavaScript'>alert('Erro causado por:'".$ex.");</script>");
			echo("<script language= 'JavaScript'>location.href='../../visao/contato.php';</script>");                        
		}
	}

?>