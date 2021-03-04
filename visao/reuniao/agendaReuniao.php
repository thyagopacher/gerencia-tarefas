<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <?include("../includes/header.php")?>
        <title>Agenda Reunião</title>
    </head>
    <body onload="HoraAtual();">
        <div id="conteudo">
            
            <h4>Agenda Reunião</h4>
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
            
            <form action="../../controle/reuniao/agendaReuniao.php" name="fgerencia" method="post">
                <fieldset>
                    <input type="hidden" name="codigo" value="<?=$dados[codigo]?>"/>

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
                         <label>Cliente:</label>
                         <input type="text" name="cliente" value="<?=$dados[cliente]?>" required 
                         title="Cliente para a reunião"/>
                    </p>
                    
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
