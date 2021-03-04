<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <?include("../includes/header.php")?>
        <title>Erro no sistema</title>
    </head>
    <body onload="HoraAtual();">
        <div id="conteudo">
             <?include("../includes/menuSuperiorAdmin.php")?>  
            <?php
                $resultado = $_REQUEST["resultado"];
                if($resultado != NULL && $resultado != ""){
                    echo($resultado);
                }
            ?>
        </div>
        <?include("../includes/footer.php")?>
    </body>
</html>
