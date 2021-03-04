<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <?include("../includes/header.php")?>
        <title>Funcionalidades para Empresa:</title>
    </head>
    <body onload="HoraAtual();">
        <div id="conteudo">
             <h4>Funcionalidades para Empresa:</h4>
            <?include("../includes/menuSuperiorAdmin.php")?>
            <?
                if($_COOKIE["login"] == NULL || $_COOKIE["login"] == ""){
                    echo("<script>location.href='/gerenciatarefa'</script>");
                }
            ?>
          
             <ul>
                  <?  include '../includes/links_empresa.php';?>
             </ul>
          
        </div>
        <?include("../includes/footer.php")?>
    </body>
</html>
