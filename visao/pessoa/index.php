<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <?include("../includes/header.php")?>
        <title>Gerenciamento de Pessoas:</title>
    </head>
    <body onload="HoraAtual();">
        <div id="conteudo">
            <h4>Gerenciamento de Pessoas:</h4>
            <?include("../includes/menuSuperiorAdmin.php")?>
            <?
                if($_COOKIE["login"] == NULL || $_COOKIE["login"] == ""){
                    echo("<script>location.href='/gerenciatarefa'</script>");
                }
            ?>
            
            <ul>
                 <?include("../includes/links_pessoa.php")?>
            </ul>  
        </div>
         
        </div>
        <?include("../includes/footer.php")?>
    </body>
</html>
