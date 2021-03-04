<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <?include("../includes/header.php")?>
        <title>Erro 500 no sistema</title>
    </head>
    <body onload="HoraAtual();">
        <div id="conteudo">
             <h1>Erro HTTP 500 Internal server error (Erro Interno de Servidor)</h1>
             <?include("../includes/menuSuperiorAdmin.php")?>  
            O servidor de rede (que executa o Web site) encontrou uma condição 
            inesperada que o impediu de cumprir o pedido pelo cliente (ex: seu 
            navegador de rede ou nosso robô CheckUpDown) para acesso à URL solicitada.
            Este é um erro “catch-all” (pega todos) gerado pelo servidor de rede. 
            Basicamente, algo saiu errado, mas o servidor não pode ser mais específico 
            sobre a condição de erro em sua resposta ao cliente. Além disso, para 
            o erro 500 notificado de volta ao cliente, o servidor de rede deveria 
            gerar algum tipo de registro de erro interno que fornecesse outras 
            informações sobre o que saiu errado. Cabe aos operadores do site do servidor 
            de rede localizarem e analisarem estes registros. 
        </div>
        <?include("../includes/footer.php")?>
    </body>
</html>
