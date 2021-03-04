<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <?include("../includes/header.php")?>
        <title>Gerenciamento de Contas:</title>
    </head>
    <body onload="HoraAtual();">
        <div id="conteudo">
            <h4>Gerenciamento de Contas:</h4>
            <?include("../includes/menuSuperiorAdmin.php")?>
            <?
                if($_COOKIE["login"] == NULL || $_COOKIE["login"] == ""){
                    echo("<script>location.href='/gerenciatarefa'</script>");
                }
            ?>
            
            <ul>
                 <?include("../includes/links_contas.php")?>
            </ul>  
        </div>
         
        </div>
        <?include("../includes/footer.php")?>
    </body>
</html>
