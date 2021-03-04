<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <?php include("../includes/header.php") ?>
        <link rel="stylesheet" href="<?=$site?>/visao/recursos/css/default/menuLateral.css">
        <title>Procura de usuários</title>
    </head>
    <body onload="HoraAtual();">
        <div id="conteudo">
            <h4>Procura de tipopessoas</h4>
            <?
                include("../includes/menuSuperiorAdmin.php");
                if($_COOKIE["login"] == NULL || $_COOKIE["login"] == ""){
                    echo("<script>location.href='/gerenciatarefa'</script>");
                }            
            ?>
            <form action="" name="fprocuraTipoPessoa" method="post">
                <fieldset>
                    <p>
                        <label>Nome:</label>
                        <input type="text" name="nome" size="50" maxlength="50" placeholder="Digite o nome aqui para pesquisar"/>
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
                        require_once "../../controle/tipopessoa/procuraTipoPessoa.php";
                    }
                ?>        
            </div>
        </div>
         <?include("../includes/footer.php")?>
    </body>
</html>
