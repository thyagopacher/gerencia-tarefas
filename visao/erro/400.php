<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <?include("../includes/header.php")?>
        <title>Erro 400 no sistema</title>
    </head>
    <body onload="HoraAtual();">
        <div id="conteudo">
             <h1>Erro HTTP 400 Bad request (Solicitação Imprópria)</h1>
             <?include("../includes/menuSuperiorAdmin.php")?>  
            O servidor da rede (executando o website) considera que o fluxo de dados enviado 
            pelo cliente (ex: seu navegador ou nosso robô CheckUpDown) estava 'mal-formado', 
            isto é, não respeitou o protocolo HTTP completamente. Portanto, o servidor da rede 
            não podia compreender a solicitação e processá-la.   
        </div>
        <?include("../includes/footer.php")?>
    </body>
</html>
