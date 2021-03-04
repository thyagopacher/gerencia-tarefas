<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <?include("../includes/header.php")?> 
        <?include("../includes/scriptsUsuario.php")?>         
        <script type="text/javascript" src="<?=$site?>/visao/recursos/javascript/tiny_mce/jquery.tinymce.js"></script>
        <script type="text/javascript" src="<?=$site?>/visao/recursos/javascript/tiny_mce/editor.js"></script>
        <title>Gerencia Usuário</title>
    </head>
    <body onload="HoraAtual();">
        <div id="conteudo"> 
            <h4>Gerencia Página</h4>
            <?include("../includes/menuLateralAdmin.php")?>
            <?
                $codigo    = $_REQUEST["codigo"];
                if($codigo != NULL && $codigo != ""){
                    require_once "../../controle/pagina/detalhesPagina.php";
                }
            ?>
            <form action="../../controle/pagina/gerenciaPagina.php" name="fgerenciaUsuario" method="post">
                <fieldset>
                    <input type="hidden" name="codigo" value="<?=$dados[codigo]?>"/>
                    <p>
                        <label>Site:<?=$dados[site]->nome?></label>
                        <input type="text" name="site" value="<?=$dados[site]->nome?>" size="50" maxlength="50" placeholder="http://www.exemplo.com.br"/>
                    </p>                    
                    <p>
                        <label>Titulo:</label>
                        <input type="text" name="titulo" size="50" maxlength="50" value="<?=$dados[titulo]?>"/>
                    </p>         
                    <p>
                        <label>Palavra-chave:</label>
                        <input type="text" name="palavrachave" size="50" maxlength="50" value="<?=$dados[palavrachave]?>" title="Separe por virgulas"/>
                    </p>                     
                    <p>
                        <label>Conteúdo:</label>
                        <textarea name="conteudo"  class="tinymce" cols="50" rows="20" required placeholder="Preencha o texto aqui"><?=$dados[conteudo]?></textarea>
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
