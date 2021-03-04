<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <?include("../includes/header.php")?>
        <script type="text/javascript" src="<?=$site?>/visao/recursos/javascript/tiny_mce/jquery.tinymce.js"></script>
        <script type="text/javascript" src="<?=$site?>/visao/recursos/javascript/tiny_mce/editor.js"></script>        
        <title>Gerencia Categoria de sites</title>
    </head>
    <body onload="HoraAtual();">
        <div id="conteudo">
            
            <h4>Gerencia Categoria de sites</h4>
            <?include("../includes/menuLateralAdmin.php")?>
            
            <?
                $codigo    = $_REQUEST["codigo"];
                $nome      = $_GET["nome"];
                if(($codigo != NULL && $codigo != "") || ($nome != NULL && $nome != "")){
                    require_once "../../controle/catsite/detalhesCatSite.php";
                }
            ?>
            
            <form action="../../controle/catsite/gerenciaCatSite.php" name="fgerenciaCatSite" method="post">
                <fieldset>
                    <input type="hidden" name="codigo" value="<?=$dados[codigo]?>"/>
                    <p>
                        <label>Nome:</label>
                        <input type="text" name="nome" value="<?=$dados[nome]?>" size="50" maxlength="50" required/>
                    </p>
                    <p>
                        <label>Descrição:</label>
                        <textarea  class="tinymce" name="descricao" cols="70" rows="20" style="" required placeholder="Preencha o texto aqui"><?=$dados[descricao]?></textarea>
                    </p>
                    
                    <p>
                        
                        <input type="submit" name="submit" value="Inserir"/>
                        <?if($codigo != NULL && $codigo != ""){?>
                            <input type="submit" name="submit" value="Atualizar"/>
                            <input type="submit" name="submit" value="Excluir"/>
                        <?}else{?>
                            <input type="reset" name="reset" value="Limpar" title="Limpar campos preenchidos"/>
                        <?}?>
                    </p>
                </fieldset>
            </form>
        </div>
        <?include("../includes/footer.php")?>
    </body>
</html>
