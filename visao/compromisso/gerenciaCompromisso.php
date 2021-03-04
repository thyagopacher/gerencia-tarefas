<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <?include("../includes/header.php")?>
        <title>Gerencia Compromisso</title>
    </head>
    <body onload="HoraAtual();">
        <div id="conteudo">
            
            <h4>Gerencia Compromisso</h4>
            <?
                try{
                    include("../includes/menuSuperiorAdmin.php");
                    if($_COOKIE["login"] == NULL || $_COOKIE["login"] == ""){
                        echo("<script>location.href='/gerenciatarefa'</script>");
                    }
                    $codigo    = $_REQUEST["codigo"];
                    $nome      = $_GET["nome"];
                    if(($codigo != NULL && $codigo != "") || ($nome != NULL && $nome != "")){
                        require_once "../../controle/compromisso/detalhesCompromisso.php";
                    }else{
                         $dados = NULL;
                    }
                    require_once "../../controle/pessoa/procuraPessoaPTipo.php?tipo=Meus funcionários";     
                    require_once "../../controle/pessoa/procuraPessoaPTipo.php?tipo=Fisica";   
                }catch(Exception $ex){
                     echo("Erro causado por: $ex");
                }
            ?>
            
            <form action="../../controle/compromisso/gerenciaCompromisso.php" name="fgerenciaCompromisso" method="post">
                <fieldset>
                    <input type="hidden" name="codigo" value="<?=$dados[codigo]?>"/>
                    <p>
                        <label>Nome:</label>
                        <input type="text" name="nome" value="<?=$dados[nome]?>" size="50" maxlength="50" required
                         title="Nome do compromisso">
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
                        <label>Cliente:</label>
                        <input type="text" name="cliente" value="<?=$dados[cliente]?>" 
                        size="50" maxlength="50" required
                        title="Cliente para o compromisso estipulado">
                    </p>                     
                    
                    <p>
                        <label>Responsável:</label>
                        <select name="codpessoa" title="Reponsável para o compromisso estipulado">
                        <?while($dados = mysql_fetch_array($dados_pessoa)){?>
                             <option value="<?=$dados[codigo]?>"><?=$dados[nome]?></option>
                        <?}?>
                        </select>
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
