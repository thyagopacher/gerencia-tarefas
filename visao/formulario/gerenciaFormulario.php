<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <?include("../includes/header.php")?>
        <?include("../includes/scriptsUsuario.php")?>
        <title>Cria formulário</title>
    </head>
    <body onload="HoraAtual();">
        <div id="conteudo">
            
            <h4>Cria formulário</h4>
            
            <?include_once ("../includes/menuSuperiorAdmin.php")?>
            <?
                if($_COOKIE["login"] == NULL || $_COOKIE["login"] == ""){
                    echo("<script>location.href='/gerenciatarefa'</script>");
                }
            ?>
            
            <?
                $codigo    = $_REQUEST["codigo"];
                $login     = $_GET["login"];
                $senha     = $_GET["senha"];
                if(($codigo != NULL && $codigo != "") || (($login != NULL && $login != "")  && ($senha != NULL && $senha != ""))){
                    include_once  "../../controle/formulario/detalhesFormulario.php";
                }else{
                     $dados = NULL;
                }
            ?>
            
            <form action="../../controle/formulario/gerenciaFormulario.php" name="fgerenciaUsuario" method="post">
                <fieldset>
                    <input type="hidden" name="codigo" value="<?=$dados[codigo]?>"/>
                    
                    <p>
                        <label>Nome:</label>
                        <input type="text" name="nome" value="<?=$dados[nome]?>" size="50" maxlength="50" required/>
                    </p>

                    <p>
                        <label>Ação</label>
                        <input type="text" name="acao" maxlength="50" value="<?=$dados[acao]?>" required>
                    </p>
                    
                    <p>
                        <label>Método:</label>
                        <input type="text" name="metodo" size="50" maxlength="50" value="<?=$dados[metodo]?>" required/>
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
