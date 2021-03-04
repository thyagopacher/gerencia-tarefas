<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <?php include("../includes/header.php") ?>
        <link rel="stylesheet" href="<?=$site?>/visao/recursos/css/default/menuLateral.css">
        <title>Procura de Reuniões</title>
    </head>
    <body onload="HoraAtual();">
        <div id="conteudo">
            <h4>Procura de Reuniões</h4>
            <?include("../includes/menuSuperiorAdmin.php")?>
            <?
                if($_COOKIE["login"] == NULL || $_COOKIE["login"] == ""){
                    echo("<script>location.href='/gerenciatarefa'</script>");
                }
            ?>
            <form action="" name="fprocura" method="post">
                <fieldset>
                    <p>
                        <label>Data:</label>
                        <input type="date" name="data" size="50" maxlength="50" 
                        placeholder="Digite data da reunião para pesquisar"/>
                    </p>
                    <p>
                        <input type="hidden" name="submited" value="true"/>
                        <input type="submit" name="submit" value="Procura exata"/>
                        <input type="submit" name="submit" value="Procura parcial"/>
                    </p>
                </fieldset>
            </form>
            
            <div id="resultado">
                <h4>Resultado obtido na pesquisa:</h4>
                <? 
                    $submited = $_REQUEST["submited"];
                    if($submited != NULL && $submited == "true"){
                        require_once "../../controle/reuniao/procuraReuniao.php";
                    }
                ?>        
            </div>
        </div>
         <?include("../includes/footer.php")?>
    </body>
</html>
