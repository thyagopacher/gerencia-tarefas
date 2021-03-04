<!DOCTYPE html>
<html>
    <head>
        <?include("includes/header.php")?>
        <link rel="stylesheet" href="<?=$site?>/visao/recursos/css/default/menuLateral.css">
        <script language="JavaScript" type="text/javascript" src="<?=$site?>/visao/recursos/javascript/menuLateral.js"></script>      
        <title>Contato com o site</title>
    </head>
    <body onload="HoraAtual();">
        <div id="conteudo">  
            <h4>Contato com o site</h4>
            <?
                if($_COOKIE["login"] != ""){
                    $menu = "includes/menuLateralAdmin.php";
                }else{
                    $menu = "includes/menuLateralPrincipal.php";
                }
                include($menu);
            ?>
            <form action="../controle/email/enviar.php" method="post">
                <fieldset>
                    <p>
                        <label>Nome</label>
                        <input type="text" id="nome" name="nome" size="50" maxlength="50" required/>                        
                    </p>
                    <p>
                        <label>E-mail:</label>
                        <input type="text" id="email" name="email" size="50" maxlength="50" required placeholder="aaa@aaa.com.br"/>                        
                    </p>
                    <p>
                        <label>Para:</label>
                        <select name="para">
                            <option>thyago@megacia.com.br</option>
                            <option>diego@megacia.com.br</option>
                            <option>geraldo@megacia.com.br</option>
                            <option>contato@megacia.com.br</option>
                        </select>
                    </p>
                    <p>
                        <label>Mensagem:</label><br>
                        <textarea id="mensagem" name="mensagem" cols="70" rows="10" placeholder="Digite aqui sua mensagem" required></textarea>                        
                    </p>
                    <p>
                        <input type="hidden" name="submited" value="true" />
                        <input type="reset" name="limpar" value="Limpar" title="Limpar campos"/>
                        <input type="submit" name="submit" value="Enviar" />
                    </p>
                </fieldset>  
            </form>
        </div>
        <?include("includes/footer.php")?>
    </body>
</html>


