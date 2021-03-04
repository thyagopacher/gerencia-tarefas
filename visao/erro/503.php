<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <?include("../includes/header.php")?>
        <title>Erro 503 no sistema</title>
    </head>
    <body onload="HoraAtual();">
        <div id="conteudo">
             <h1>HTTP Erro 503 Service unavailable (Serviço indisponível)</h1>
             <?include("../includes/menuSuperiorAdmin.php")?>  
            O servidor Web está efetivamente 'fechado para reparo'. 
            Ainda está funcionando o mínimo, pois pode pelo menos responder com um código de status 503, 
            mas o serviço completo é impossível, ou seja, o website está simplesmente indisponível. 
            Existem inúmeros motivos para isto, mas geralmente é devido a alguma intervenção humana dos operadores da máquina do servidor Web. 
            Pode esperar, que alguém deve estar trabalhando no problema, e o serviço normal vai voltar rapidamente.
            Entre em contato com os operadores do sistema do website (ou seja, o seu provedor) para determinar o motivo do serviço não estar funcionando. 
            Eles estão numa posição muito melhor para explicar e ajudar você com este tipo de erro do que nós.
        </div>
        <?include("../includes/footer.php")?>
    </body>
</html>
