<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <?include("../includes/header.php")?>
        <script src="<?=$site?>/visao/recursos/javascript/nicEdit.js" type="text/javascript"></script>
        <script type="text/javascript">
            bkLib.onDomLoaded(function() {new nicEditor({fullPanel : true}).panelInstance('area2');});
        </script>          
        <title>Gerencia Usuário</title>
    </head>
    <body onload="HoraAtual();">
        <div id="conteudo">
            
            <h4>Gerencia Site</h4>
            <?include("../includes/menuLateralAdmin.php")?>
            
            <?
                $codigo    = $_REQUEST["codigo"];
                if($codigo != NULL && $codigo != ""){
                    require_once "../../controle/site/detalhesSite.php";
                }
            ?>
            
            <form action="../../controle/site/gerenciaSite.php" name="fgerenciaSite" method="post">
                <fieldset>
                    <input type="hidden" name="codigo" value="<?=$dados[codigo]?>"/>
                    <p>
                        <label>Categoria:</label>
                        <select name="categoria">
                            <option>Informática</option>
                            <option>Engenharia</option>
                            <option>Vendas</option>
                            <option>Compras</option>
                        </select>
                    </p>
                    
                    <p>
                        <label>Nome:</label>
                        <input type="text" name="nome" value="<?=$dados[nome]?>" size="50" maxlength="50" required/>
                    </p>
                    
                    <p>
                        <label>Descrição:</label>
                        <textarea name="descricao" id="area2" cols="70" rows="20" style="" required placeholder="Preencha o texto aqui"><?=$dados[descricao]?></textarea>
                    </p>

                    <p>
                        <input type="submit" name="submit" value="Inserir"/>
                        <?if($codigo != NULL && $codigo != ""){?>
                            <input type="submit" name="submit" value="Atualizar"/>
                            <input type="submit" name="submit" value="Excluir"/>
                        <?}?>
                    </p>
                </fieldset>
            </form>
        </div>
        <?include("../includes/footer.php")?>
    </body>
</html>
