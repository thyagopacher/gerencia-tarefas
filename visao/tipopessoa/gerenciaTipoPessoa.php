<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <? include("../includes/header.php") ?>
        <? include("../includes/scriptsUsuario.php") ?>
        <title>Gerencia TipoPessoa</title>
    </head>
    <body onload="HoraAtual();">
        <div id="conteudo">

            <h4>Gerencia TipoPessoa</h4>
            <?
            include("../includes/menuSuperiorAdmin.php");
            if ($_COOKIE["login"] == NULL || $_COOKIE["login"] == "") {
                echo("<script>location.href='/gerenciatarefa'</script>");
            }
            ?>

            <?
            $codigo = $_REQUEST["codigo"];
            $nome = $_GET["nome"];
            if (($codigo != NULL && $codigo != "") || ($nome != NULL && $nome != "")) {
                require_once "../../controle/tipopessoa/detalhesTipoPessoa.php";
            } else {
                $dados = NULL;
            }
            ?>

            <form action="../../controle/tipopessoa/gerenciaTipoPessoa.php" name="fgerenciaTipoPessoa" method="post">
                <fieldset>
                    <input type="hidden" name="codigo" value="<?= $dados[codigo] ?>"/>
                    <p>
                        <label>Nome:</label>
                        <input type="text" name="nome" value="<?= $dados[nome] ?>" size="50" maxlength="50" required
                               title="Nome do tipopessoa para a empresa">
                    </p>

                    <p>
                        <input type="submit" name="submit" value="Inserir"/>
                        <? if ($codigo != NULL && $codigo != "") { ?>
                            <input type="submit" name="submit" value="Atualizar"/>
                            <input type="submit" name="submit" value="Excluir"/>
                        <? } else { ?>
                            <input type="reset" name="Limpar" value="Limpar" title="Limpar campos"/> 
                        <? } ?>
                    </p>
                </fieldset>
            </form>
        </div>
        <? include("../includes/footer.php") ?>
    </body>
</html>
