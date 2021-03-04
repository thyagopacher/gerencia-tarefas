<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <?include("../includes/header.php")?>
         <script type="text/javascript" src="../recursos/javascript/tiny_mce/tiny_mce.js"></script>
         <script src="../recursos/javascript/tiny_mce/editor.js" type="text/javascript"></script>
        <title>Gerencia Reunião</title>
    </head>
    <body onload="HoraAtual();">
        <div id="conteudo">
            
            <h4>Gerencia Reunião</h4>
            <?
                include("../includes/menuSuperiorAdmin.php");
                if($_COOKIE["login"] == NULL || $_COOKIE["login"] == ""){
                    echo("<script>location.href='/gerenciatarefa'</script>");
                }
                $codigo    = $_REQUEST["codigo"];
                if(($codigo != NULL && $codigo != "")){
                    require_once "../../controle/reuniao/detalhesReuniao.php";
                }else{
                     $dados = NULL;
                }
                require_once "../../controle/reuniao/procuraReuniao.php";     
            ?>
            
            <form action="../../controle/reuniao/gerenciaReuniao.php" name="fgerencia" method="post">
                <fieldset>
                    <input type="hidden" name="codigo" value="<?=$dados[codigo]?>"/>
                    <p>
                        <label>Assunto:</label>
                        <input type="text" name="assunto" value="<?=$dados[assunto]?>" size="50" maxlength="50" required
                         title="Assunto da reunião">
                    </p>

                    <p>
                        <label>Data:</label>
                        <input type="date" name="data" value="<?=$dados[data]?>" 
                        required title="Data para o compromisso estipulado">
                    </p>
                    
                    <p>
                        <label>Hora:</label>
                        <input type="time" name="hora" value="<?=$dados[hora]?>" 
                        required title="Hora para o compromisso estipulado">
                    </p>                    

                    <p>
                        <label>Descrição:</label>
                        <textarea name="descricao" placeholder="O que ocorreu na reunião?"></textarea>
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
