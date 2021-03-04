<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <?include("../includes/header.php")?>
        <?include("../includes/scriptsUsuario.php")?>
        <title>Gerencia Conta</title>
    </head>
    <body onload="HoraAtual();">
        <div id="conteudo">
            
            <h4>Gerencia Conta</h4>
            
            <?include_once ("../includes/menuSuperiorAdmin.php")?>
            <?
                if($_COOKIE["login"] == NULL || $_COOKIE["login"] == ""){
                    echo("<script>location.href='/gerenciatarefa'</script>");
                }
            ?>
            
            <?
                $codigo    = $_REQUEST["codigo"];
                if(($codigo != NULL && $codigo != "")){
                    include_once  "../../controle/contas/detalhesConta.php";
                }else{
                     $dados = NULL;
                }
            ?>
            
            <form action="../../controle/contas/gerenciaConta.php" name="fgerencia" method="post">
                <fieldset>
                    <input type="hidden" name="codigo" value="<?=$dados[codigo]?>"/>
                    <p>
                         <label>Tipo Conta:</label>
                         <input type="text" name="tipoconta" value="<?=$dados[tipoconta]?>"/>
                    </p>
                    <p>
                        <label>Valor:</label>
                        <input type="text" name="valor" value="<?=$dados[valor]?>" size="10" maxlength="10" required/>
                    </p>

                    <p>
                        <label>Vencimento:</label>
                        <input type="date" name="vencimento">
                    </p>
                  
                    <p>
                        <input type="submit" name="submit" value="Inserir"/>
                        <?if($codigo != NULL && $codigo != ""){?>
                            <input type="submit" name="submit" value="Atualizar"/>
                            <input type="submit" name="submit" value="Excluir"/>
                        <?}else{?>
                            <input type="reset" name="Limpar" value="Limpar" title="Limpar campos"/> 
                        <?}?>
                    </p>
                </fieldset>
            </form>
        </div>
        <?include("../includes/footer.php")?>
    </body>
</html>
