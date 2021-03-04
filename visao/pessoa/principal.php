<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <?include("../includes/header.php")?>
        <title>Página principal do gerenciamento de sites</title>
    </head>
    <body onload="HoraAtual();">
        <div id="conteudo">
            <h4 draggable="true">Página principal do gerenciamento<script>escreveLogin();</script></h4>
            <?include("../includes/menuSuperiorAdmin.php")?>
            <?
                if($_COOKIE["login"] == NULL || $_COOKIE["login"] == ""){
                    echo("<script>location.href='/gerenciatarefa'</script>");
                }
            ?>
            
            <div id="iconesPrincipal">
                <a href="<?=$site?>/visao/pessoa/gerenciaUsuario.php" title="Gerenciamento de usuários">
                    <img src="<?=$site?>/visao/recursos/imagens/funcionario.jpg" alt="icone funcionário"/>
                </a>
                <a href="<?=$site?>/visao/cargo/gerenciaCargo.php" title="Gerenciamento de cargos">
                    <img src="<?=$site?>/visao/recursos/imagens/cargo.jpg" alt="icone cargo"/>
                </a>
                <a href="<?=$site?>/visao/pagina/gerenciaPagina.php" title="Gerenciamento de páginas">
                    <img src="<?=$site?>/visao/recursos/imagens/paginas.jpg" alt="icone páginas"/>
                </a>   
                <a href="<?=$site?>/visao/site/gerenciaSite.php" title="Gerenciamento de site">
                    <img src="<?=$site?>/visao/recursos/imagens/www.jpg" alt="icone site"/>
                </a>  
                <a href="<?=$site?>/visao/contato.php" title="Contato com o site">
                    <img src="<?=$site?>/visao/recursos/imagens/contato.jpg" alt="icone contato"/>
                </a>
                <a href="http://www.megacia.com.br/chat/message_box.php?theme=&l=Atendimento&x=1&deptid=2" title="Atendimento online">
                    <img src="<?=$site?>/visao/recursos/imagens/atendimentoonline.jpg" alt="icone atendimento online"/>
                </a>                
            </div>
            
            <div id="visitantes">
                <script>visitantes();</script>
            </div>            
        </div>
        <?include("../includes/footer.php")?>
    </body>
</html>
